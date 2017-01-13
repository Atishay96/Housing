<?php
require 'inc.server.php';
require 'inc.connection.php';
require 'background.htm';

if(!loggedin())
{
	if(isset($_POST['username'])&&isset($_POST['password'])&&isset($_POST['pass_again'])&&isset($_POST['firstname'])&&isset($_POST['lastname']))
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
		$pass_again = $_POST['pass_again'];
		$pass_hash = md5($password);
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
	}
	if(!empty($username)&&!empty($password)&&!empty($pass_again)&&!empty($firstname)&&!empty($lastname))
	{
		if($password!=$pass_again)
			{
					echo 'Passwords do not match';
			}	
			else
			{
				$query = "SELECT name FROM users WHERE name = '$username'";
				$query_run = mysql_query($query);

				if(mysql_num_rows($query_run)==1)
				{
					echo 'The username '.$username.' already exists.';
				}
				else
				{
					$query = "INSERT INTO users VALUES ('','".$username."','".$pass_hash."','".$firstname."','".$lastname."')";
					if($query_run = mysql_query($query))
					{
						header('Location: index.php');
					}
					else
						echo 'Some error occured';
				}

			}
	}

?>
<style>
div
	{
		border-style: dashed;
		width: 400px;
		font-family: Comic Sans MS;
		font-size: 20px;
	}
	input[type=submit] 
	{
	    padding:5px 15px; 
	    background:#ccc; 
	    border:0 none;
	    cursor:pointer;
	    -webkit-border-radius: 5px;
	    border-radius: 5px; 
	}
</style>
<br/><br/><br/>
<center><div><br/>
<form action="register.php" method="POST">
Username:<br/>
<input type="text" name="username" maxlength="30" value="<?php if(isset($username)){ echo $username ;}?>"><br/><br/>
Password:<br/>
<input type="password" name="password"><br/><br/>
Password again:<br/><input type="password" maxlength="40" name="pass_again"><br/><br/>
FirstName:<br/>
<input type="text" name="firstname" maxlength="30" value="<?php if(isset($firstname)){ echo $firstname;}?>" ><br/><br/>
LastName:<br/>
<input type="text" name="lastname" maxlength="30" value="<?php if(isset($lastname)){ echo $lastname; }?>"><br/><br/>
<input type="submit" value="Register"><br/><br/>
</form></center></div>
<br/>
<a href="index.php" alt="Error">'.'<br/>'.'<br/>'.'<center>'.'<img src ="login1.jpg" width="50px" title="Login" alt="Login"/>'.'</center>'.'</a>
<?php
}
else if(loggedin())
{
	echo 'You\'re already logged in.';
}
?>