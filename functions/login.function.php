<?php
// login.function.php

function login()		//return the user id if sucessfull log in
{
	include '\core.inc.php';
	$debug=1;
	if ($debug && $core_function) 
	{
		echo "$current_file \n";
		echo "$http_referer \n";
	}
	
	$emailid='Email id';		//default value
	if (isset($_POST['emailid']) && isset($_POST['password'])) 
	{
		$emailid=$_POST['emailid'];
		$password=$_POST['password'];

		if ($debug && $login_system) 
		{
			echo "$emailid";
			echo "$password";
		}

		//$password=md5($passw);		//to encrypt password

		include_once 'dbms/dbms_imp.php';

		if (!empty($emailid) && !empty($password)) 
		{
			$query="SELECT `uid` FROM `user` WHERE `email`='$emailid' AND `password`='$password'";

			$query_run=$connection->query($query);	

			if ($query_run)		//if queries run
			{
				$query_num_rows=$query_run->num_rows;

				if ($query_num_rows==0) 
				{
					echo "Invalid Email id & Password combination";
				}
				else if ($query_num_rows==1) 
				{
					$rows=$query_run->fetch_array();
					$uid=$rows[0];
					$_SESSION['id']=$uid;
					$GLOBALS[$id]=$_SESSION['id'];
					header("location: index.php");
					return $uid;
				}
				else
				{
					echo "some problem has occure.\nPlease Report it to Admin \n(error code: 100)";
					
					if ($debug && $login_system) 
					{
						echo "Multiple entry of same user with different id";
					}
				}
			}
			else if (!$query_run && $debug && $login_system)	// if query not run only if debug is active
			{
				echo "Error fetching data from database. ".mysqli_error();
			}
		}
		else 	//nothing entered
		{
			echo "Please Enter Email id or Password";
		}
	}
	include '/forums/login.forum.php';
}
?>