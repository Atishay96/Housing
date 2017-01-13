<?php
$host = 'localhost';
$user = 'root';
$password = '';

$conn_error = 'Could not connect to the database';
$db = 'user_reg';

$mysqlcon = mysql_connect($host,$user,$password);

if(!$mysqlcon||!mysql_select_db($db))
{
	echo die($conn_error);
}
else
//echo 'Connected';
	
?>