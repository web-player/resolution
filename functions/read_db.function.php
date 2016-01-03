<?php
// function to check wether given key exist in database or not
	
	/*
		$key=Key against row has to bew readed
		$key_col=column of key to matach	
		$table=table
	*/

	function read_db($key,$key_col,$table)
	{
		include '/dbms/dbms_imp.php';
		include 'core.inc.php';

		$check_query="SELECT * FROM '$table' WHERE `$key_col`='$key'";
		$query_run=$connection->query($check_query);
		if ($query_run) 
		{
			$query_num_rows=$query_run->num_rows;
			
			if ($num_rows==1) 
			{
				return true;
			}
			else
			{
				return false;
			}
		}
		else if (!$query_run && $debug)
		{
			return mysqli_error($connection);
		}
		else
		{
			return false;
		}
	}
?>