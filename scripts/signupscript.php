<?php

	include_once '/functions/passwordcheck.function.php';

	$acess=passwordcheck($passw,$passw_again);

	if ($debug && $register_check) 
	{
		echo $fname.'.<br/>'.$sname.'.<br/>'.$passw.'<br/>'.$emailid.'.<br/>';
	}
	
	if ($acess) 
	{
		//neutralizing the data 
		$fname1=htmlentities($fname);
		$sname1=htmlentities($sname);
		$emailid1=$emailid;
		$add_acess=0;
	
		//checking for email id already exist or not 
		
		include 'read_db.function.php';
		
		$email_exist=read_db('$emailid','email','user')

		//writing data to database
		if ($add_acess==1) 
		{
			include 'addnewuser.php';
			//die(); //to kill rest of page
		}
		elseif ($add_acess==0)
		{
			include 'signupform.php';
		}
		else
		{
			echo "<br>Some internal problem has occurred please report it.<br/>
			you found reporting under contact us page<br>Thanks for your corporation.";
		}	
	}
	else
	{
		include 'signupform.php';
	}
?>