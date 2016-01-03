<?php
$mysql_host="127.0.0.1";	//default localhost
$mysql_username="root";		//default user
$mysql_password="root";		//default password if not set empty.
$mysql_db="res";			//default database -> change it to point to tables
$connection=mysqli_connect($mysql_host,$mysql_username,$mysql_password);
if(!$connection)
{
	echo "unable to connect to server";
	die();
}

$mysql_charset=mysqli_set_charset($connection,'utf8');
if(!$mysql_charset)
{
	echo "unable to set database connection encoding";
	die();
}

$mysql_sdb=mysqli_select_db($connection,$mysql_db);
if(!$mysql_sdb)
{
	echo "unable to locate database".mysqli_error($link);
	die();

}

?>
