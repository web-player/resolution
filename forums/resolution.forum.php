<?php
	include '/core.inc.php';
?>
	<form action="<?php echo "$current_file";?>" method="post" >
		<fieldset>
			<input type="hidden" value="<?php echo rand(1000); ?>" name="uid" size="3" maxlength="20">
		<fieldset>
			<legend>Title:</legend>
			<input type="text" value="<?php echo "$title" ?>" name="title" size="70" maxlength="100">
		</fieldset>
		<fieldset>
			<legend>Text:</legend>
			<textarea value="<?php echo "$text" ?>" name="text" cols="50" rows="10"><?php echo "$text" ?></textarea>
		</fieldset>
			<br/>
			<input type="submit" name="Post" value="Post" size="7">
		</fieldset>
	</form>

