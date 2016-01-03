<?php
//user.class.php

	/**
	* 	base user class
	*/
	class user 
	{
		private $id='0';
		public $fname='user fname';
		public $lname='user lname';
		public $email='user email';

		public function read_user($uid)	//function find user in database and read it details
		{
				include '/dbms/dbms_imp.php';
				/*
				$sql_query="SELECT * FROM `user` where `id`='$uid'";
				
				$sql_result=$connection->query($sql_query);
				
				//$query_num_rows=$sql_result->num_rows;

				$rows=$sql_result->fetch_array();

				$id=$rows[0];
				*/
				$query="SELECT * FROM `user` WHERE `uid`='$uid'";

				$query_run=$connection->query($query);	

				if ($query_run)		//if queries run
				{
					$query_num_rows=$query_run->num_rows;

					if ($query_num_rows==0) 
					{
						echo "Something wrong";
					}
					else if ($query_num_rows==1) 
					{
						$rows=$query_run->fetch_array();
						
						$this->uid=$rows[0];
						$this->fname=$rows[1];
						$this->lname=$rows[2];
						$this->email=$rows[3];
						//echo "data added to object";
						//echo "$this->uid<br>$this->fname<br>$this->lname<br>$this->email";
					}
					else
					{
						echo "multiple entry";
					}
				}
				else
				{
					echo "Problem running \$query=$query<br>".mysql_error($connection);
				}

		}
	}

?>