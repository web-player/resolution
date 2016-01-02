<form action="<?php echo $current_file;?>" method="post" >
<fieldset>
<legend>Sign up form</legend>

	<fieldset>
		<legend>First name:</legend>
		<input type="text" value="<?php echo "$fname"?>" name="firstname" size="30" maxlength="20">
	</fieldset>

	<fieldset>
		<legend>Last name:</legend>
		<input type="text" value="<?php echo "$sname"?>" name="surname" size="30" maxlength="20">
	</fieldset>

	<fieldset>
		<legend>Email id:</legend>
		<input type="email" name="emailid" value="<?php echo "$emailid"?>" size="30">
	</fieldset>

	<fieldset>
		<legend>Define Password:</legend>
		<input type="password" name="password" value="password" size="32">
	</fieldset>

	<fieldset>
		<legend>Repeat Password:</legend>
		<input type="password" name="password_again" value="shit password" size="32">
	</fieldset>

	<fieldset>
		<legend></legend>
		<input type="submit" name="register" value="Register" size="10">
	</fieldset>

</fieldset>
</form>

