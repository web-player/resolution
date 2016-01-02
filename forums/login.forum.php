<?php
// login.forum.php
?>

	<form  action="<?php echo $current_file; ?>" method="POST" enctype="" target="" >
	<fieldset>
		<legend>Log in form</legend>
		<fieldset>
			<legend>Email id :</legend>
			<input type="email" name="emailid" value="<?php echo $emailid; ?>" size="15">
		</fieldset>
		<fieldset>
			<legend>Password :</legend>
			<input type="password" name="password" value="password " size="15">
		</fieldset>
		<br/>
			<input type="submit" name="log in" value="log in" size="5">
	</fieldset>
	</form>
