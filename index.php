<?php
require 'inc.connection.php';
require 'inc.server.php';
require 'background.htm';
if (loggedin())
{
	echo 'You\'re logged in, ';
	echo getuserfield('username').'<br/>';
	echo '<a href="logout.php" alt="Error">'.'Log Out'.'</a><br/>';
	include 'home.php';
}
else
{
	include 'login.php';

	echo '<a href="register.php" alt="Error">'.'<br/>'.'<br/>'.'<center>'.'<img src ="register.png" width="50px" title="Register" alt="Register"/>'.'</center>'.'</a>';
}

?>
