/*$(document).ready(function(e) {
	$("#profilePictureForm").on('submit', function(e) {
		e.preventDefault();
		$("#message").empty();

	$.ajax({
		url: "server.php", 		  // Url to which the request is send
		type: "POST",             // Type of request to be send, called as method
		data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
		contentType: false,       // The content type used when sending data to the server.
		cache: false,             // To unable request pages to be cached
		processData:false,        // To send DOMDocument or non processed data file it is set to false
		success: function(data){
			$("#message").addClass("alert alert-success");
			$("#message").html(data);
		}
	});
});

$(function() {
	$("#updated_image").change(function(event) {
		$("#message").empty();
		var file = this.files[0];
		var imagefile = file.type;
		var match= ["image/jpeg","image/png","image/jpg"];
		if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2])))
		{
			$('#userImage').attr('src','img/file.png');
			$("#message").html("<p id='error'>Please Select A valid Image File</p>"+"<h4>Note</h4>"+"<span id='error_message'>Only jpeg, jpg and png Images type allowed</span>");
			return false;
		}
		else
		{
			var reader = new FileReader();
			reader.onload = imageIsLoaded;
			reader.readAsDataURL(this.files[0]);
		}
	});
});

function imageIsLoaded(e) {
		$("#updated_image").css("color","green");
		$('#image_preview').css("display", "block");
		$('#userImage').attr('src', e.target.result);
		$('#userImage').attr('width', '350px');
		$('#userImage').attr('height', '350px');
	};
});*/
$(document).ready(function(){
	$imageCrop = $('#imageDemo').croppie({
    enableExif: true,
    viewport: {
      	width: 200,
      	height: 200,
      	type:'square' //circle
    },
    boundary:{
      	width: 300,
      	height: 300
    }
  });

  $('#updated_image').on('change', function(){
    var reader = new FileReader();
    reader.onload = function (event) {
      $imageCrop.croppie('bind', {
        url: event.target.result
      }).then(function(){
        console.log('jQuery bind complete');
      });
    }
    reader.readAsDataURL(this.files[0]);
    $('#cropImageModal').modal('show');
  });

  $('.crop_image').click(function(event){
    $imageCrop.croppie('result', {
      type: 'canvas',
      size: 'viewport'
    }).then(function(response){
      $.ajax({
        url:"uploadImage.php",
        type: "POST",
        data:{"image": response},
        success: function(data)
        {
          $('#cropImageModal').modal('hide');
          $('#userImage').html(data);
        },
      });
    })
  });
});