<?php
// checks the conditions on the passwords

function passwordcheck($passw,$passw_again)
{
	$cond=0;	//check is fail by default
	
	include 'core.inc.php';

	if (strlen("$passw")<7) 	//check on password length 
	{	
		//if password is less than 8 characters.
		echo "<br/>Password too short.<br/>Please Enter a password having more than 8 characters";
		$cond=0;
	}
	
	if (strcmp($passw,$passw_again)==0)		//case sensitive comparision
	{	//if password match.
		
		if ($debug && $password_check) 
		{
			echo "<br/>Entered password match.";	//for testing only
			echo strlen("$passw");					//for testing only
		}
		
		$cond=1;
	}
	else
	{	//if password doesnot match.
		
		echo "<br/>Entered password doesnot match.";
		
		$cond=0;
	}
	// other conditions can be added on password

	//return the condition back
	if ($cond) 
	{
		return true;
	} 
	else 
	{
		return false;
	}
}
?>