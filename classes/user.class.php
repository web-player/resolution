<?php
//user.class.php

	/**
	* 	base user class
	*/
	class user 
	{
		$id;
		$fname;
		$lname;
		$email;

		function read_user($uid)	//function find user in database and read it details
		{
				$sql_query="SELECT * FROM `user` where `id`='$id'";
				$sql_result=$connection->query($sql_query);
				$rows=$sql_result->fetch_array();

				$id=$rows[0];
				$fname=$rows[1];
				$lname=$rows[2];
				$email=$rows[3];
		}
	}

?>