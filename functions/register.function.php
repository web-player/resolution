<?php
//register.function.php

function register()
{
	$fname="Firstname";
	$sname="Surname";
	$username="Username";
	$emailid="Email id";
	include 'core.inc.php';
	if (islogin()==0) 
	{
		if (isset($_POST['firstname']) && isset($_POST['surname']) && isset($_POST['password']) && isset($_POST['password_again']) && isset($_POST['emailid']) )
		{

			$fname=$_POST['firstname'];
			$sname=$_POST['surname'];
			$passw=$_POST['password'];
			$passw_again=$_POST['password_again'];
			$emailid=$_POST['emailid'];
			$acess=0;
			if (!empty($fname) && !empty($sname) && !empty($passw) && !empty($passw_again) && !empty($emailid)) 
			{
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
						
					include '/functions/read_db.function.php';
							
					$email_exist=read_db('$emailid','email','user');

					if ($email_exist) 
					{
						$add_acess=1;
					} 
					else
					{
						$add_acess=0;
					}
					
					//writing data to database
					
					if ($add_acess==1) 
					{
						include '/dbms/dbms_imp.php';

						$insert_query="INSERT INTO `user` (`uid`, `fname`, `lname`, `email`, `password`) 
										VALUES ('','$fname1','$sname1','$emailid','$passw')";
						// add to database				
						$mysql_query_run=$connection->query($insert_query);	
						if(!$mysql_query_run)
						{
							// error occurs
							echo "<br>Error writing data".@mysqli_error($connection);
						}
						else
						{
							echo "Thank You for joining us</br></br> To Continue Please <a href=\"login.php\">login</a>.</br></br>";
							//sucess in adding the data. 
						}

						//die(); //to kill rest of page
					}
					elseif ($add_acess==0)
					{
						include '/forums/register.forum.php';
					}
					else
					{
						echo "<br>Some internal problem has occurred please report it.<br/>
						you found reporting under contact us page<br>Thanks for your corporation.";
					}	
				}
				else
				{
					include '/forums/register.forum.php';
				}
			} 
			else 
			{
				echo "Some error has occur.<br/> Please check the Information provided by you.<br/>
					Might be you have left out something<br/>";
				include '/forums/register.forum.php';
			}
		} 
		else 
		{
			echo "All fields are necessary <br/><br/>";
			include '/forums/register.forum.php';
		}	
	} 
	else if (islogin()==1)
	{
		echo "<br/> You'r already registered and loggedin";
	}
	
}
?>