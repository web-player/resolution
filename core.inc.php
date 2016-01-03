<?php
	// core of the system
	
	//echo "Core connected";
	//include_once 'dbms/dbms_imp.php';

	@session_start();
	$current_file=$_SERVER['SCRIPT_NAME'];
	$http_referer=@$_SERVER['HTTP_REFERER'];
	$debug=1;

	$uid=$_SESSION['id'];


	if ($debug==0) 
	{
		ini_set('display_errors','0');
	}

	if ($debug==1) 
	{
		echo "\$uid=$uid</br>";
		include '/debug.php';
	}
	//echo "$current_file \n";
	//echo "$http_referer\n";
	//echo "$connection\n";
	//echo "Core ended\n";
?>