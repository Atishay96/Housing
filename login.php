<?php
	require 'inc.connection.php';
	if(isset($_POST['name'])&&isset($_POST['password']))
	{
		$user = $_POST['name'];
		$pass = $_POST['password'];
		$pass_md5 = md5($pass);
		if(!empty($user)&&!empty($pass))
		{
			$query = "SELECT id FROM users WHERE username='$user' AND password = '$pass_md5'";
			$query_run = mysql_query($query);
			if ($query_run)
			{
				$query_num_rows = mysql_num_rows($query_run);
				if($query_num_rows==0)
				{
					?> 
					<script type = "text/javascript">
					<!--
						alert('Username and Password do not match.');
					-->
					</script>
					<?php
				}
				else if($query_num_rows==1)
				{
					$user_id =mysql_result($query_run, 0,'id');
					$_SESSION['user_id'] = $user_id;
					header('Location: index.php');
				}
			}			
		}
		else
		{	
		?> 
		<script type = "text/javascript">
		<!--
			alert('Enter Username & Password');
		-->
		</script>
		<?php
		}
	}
?>
<style>
	div
	{
		border-style: dashed;
		width: 400px;
	}
	p{
		font-family: Comic Sans MS;
		font-size: 18px;
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
<form action = "index.php" method = "POST">
<center><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<div><p>Enter Username and password<br/><br/>
	Username:<input type="text" name = "name"><br/><br/>
	Password: <input type="password" name = "password"><br/>
	<br/><input type = "submit" value = "Submit"></p> 
	
	</center>
	</div>
</form>