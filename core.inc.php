<?php
	// core of the system
	
	//echo "Core connected";
	include_once 'dbms/dbms_imp.php';

	
	$current_file=$_SERVER['SCRIPT_NAME'];
	$http_referer=@$_SERVER['HTTP_REFERER'];
	$debug=1;

	if ($debug) 
	{
		include_once 'debug.php';
	}
	//echo "$current_file \n";
	//echo "$http_referer\n";
	//echo "$connection\n";
	//echo "Core ended\n";
?>