<?php if(count($errors) > 1): ?>
	<div class="error">
		<?php foreach ($errors as $error): ?>
			<p><?php echo $error; ?></p>
		<?php endforeach ?>
	</div>
<?php endif ?>