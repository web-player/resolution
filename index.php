<?php

include_once 'core.inc.php';
include_once 'functions/islogin.function.php';

	if ($debug && $islogin_check) 
	{
		$islogin=islogin();
		echo "islogin() = $islogin </br>";
	}


if (islogin()) 
{
	//echo "sucess";
	include 'profile.php';
} 
else 
{
	include 'home.php';
}

?>
