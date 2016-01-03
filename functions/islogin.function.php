<?php
// islogin function
function islogin()
{
	include 'core.inc.php';
	if ($debug && $islogin_check) 
	{
		echo "user id is $uid </br>";
	}

	if (isset($uid)) 
	{
		return 1;
	}
	else
	{
		return 0;
	}
}
?>