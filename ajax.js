function exercise1()
{
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function()
		{
			if(this.readyState == 4 && this.status == 200)
			{
				document.getElementById("exercises").innerHTML = this.responseText;
			}
		};
	xhttp.open("GET", "exercise1.php", true);
	xhttp.send();
}

function exercise2()
{
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function()
		{
			if(this.readyState == 4 && this.status == 200)
			{
				document.getElementById("exercises").innerHTML = this.responseText;
			}
		};
	xhttp.open("GET", "exercise2.php", true);
	xhttp.send();
}

function exercise3()
{
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function()
		{
			if(this.readyState == 4 && this.status == 200)
			{
				document.getElementById("exercises").innerHTML = this.responseText;
			}
		};
	xhttp.open("GET", "exercise3.php", true);
	xhttp.send();
}

function exercise4()
{
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function()
		{
			if(this.readyState == 4 && this.status == 200)
			{
				document.getElementById("exercises").innerHTML = this.responseText;
			}
		};
	xhttp.open("GET", "exercise4.php", true);
	xhttp.send();
}

function exercise5()
{
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function()
		{
			if(this.readyState == 4 && this.status == 200)
			{
				document.getElementById("exercises").innerHTML = this.responseText;
			}
		};
	xhttp.open("GET", "exercise5.php", true);
	xhttp.send();
}

function zodiacSign()
{
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function()
		{
			if(this.readyState == 4 && this.status == 200)
			{
				document.getElementById("changeZodiac").innerHTML = this.responseText;
			}
		};
	xhttp.open("GET", "zodiac_sign.php", true);
	xhttp.send();
}

function supermarket()
{
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function()
		{
			if(this.readyState == 4 && this.status == 200)
			{
				document.getElementById("changePage").innerHTML = this.responseText;
			}
		};
	xhttp.open("GET", "supermarket.php", true);
	xhttp.send();
}