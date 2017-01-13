<?php
require 'inc.connection.php';
require 'background.htm';
if(!$_SESSION['user_id'])
{
	header('Location: index.php');
}
else
{
if(isset($_POST['id'])&&isset($_POST['address'])&&isset($_POST['fname'])&&isset($_POST['lname'])&&isset($_POST['phone']))
{
	$id = $_POST['id'];
	$address = $_POST['address'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$phone = $_POST['phone'];
}
if(!empty($id)&&!empty($address)&&!empty($fname)&&!empty($lname)&&!empty($phone))
{
	$query = "INSERT INTO orders VALUES('$id','$address','$fname','$lname','$phone')";
	$query_run = mysql_query($query);
	if($query_run)
	{
		echo 'Order Placed';
	}
	else
		echo 'Error Occured.Try again later.';
}
else
	echo 'Please fill all the fields';
}
?>
<form action="order.php" method="POST">
	<br/>
	Item id: <input type="text" name ="id"><br/><br/><br/>
	Address: <textarea name="address" rows=5 cols=50></textarea><br/><br/><br/>
	first name: <input type="text" name="fname"><br/><br/><br/>
	last name: <input type="text" name="lname"><br/><br/><br/>
	Phone no: <input type="text" name= "phone"><br/><br/><br/>
	<input type="submit" value="Confirm">
</form>