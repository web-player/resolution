<?php
// function to read a single entry from database
	
	/*
		$from_col=from which column the data has to be readed
		$key=Key against row has to bew readed
		$key_col=column of key to matach	
		$table=table 
		
		it return false if no record found or some error occurs
			error if debug is active
	*/

	function read_db_single($from_col,$key,$key_col,$table)
	{
		include '/dbms/dbms_imp.php';

		$check_query="SELECT '$from_col' FROM '$table' WHERE `$key_col`='$key'";
		$query_run=$connection->query($check_query);
		if ($query_run) 
		{
			$rows=$query_run->fetch_array();
			return $rows[0];
		}
		else if (!$query_run && $debug)
		{
			return mysqli_error();
		}
		else
		{
			return false;
		}
	}
?>