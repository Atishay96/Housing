<?php
include 'inc.connection.php';
include 'inc.server.php'; 
if(!$_SESSION['user_id'])
{
	header('Location: index.php');
}
else
{
	echo 'You\'re logged in, ';
	echo getuserfield('username').'<br/>';
	echo '<a href="logout.php" alt="Error">'.'Log Out'.'</a><br/>';
}
?>
<html>
<head>
	<title>
		aboutus
	</title>
	<style>
	
	body
	{
		background-image: url("background.jpg");
		background-repeat: no-repeat;
		background-position: center;
		background-attachment: fixed;
	}
	//check it once
	header {width:100%; z-index:101;}
	header>div {width:1264px; margin:0 auto; position:relative;}


input[name="search"] 
	{
    width: 300px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 16px;
    font-size: 16px;
    background-color: white;
    background-image: url('searchicon.png');
    background-position: 10px 10px;
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}
.menu {
    list-style-type: none;
    margin: 0;
    padding: 0;
    text-align: left;
    background-image: url('navbar.png');
}
.menu li {
    display: inline;
    font-size: 20px;
    text-align: left;
}
p{
	font-size: 30px;
}
footer
{
	position: bottom;
	right: 0;
  	bottom: 0;
	left: 0;
	background-image: url('footer.jpg');
	text-align: center;
}

right
{
	text-align: right;
}

input[name="search"]:focus 
{
    width: 100%;
}
.new
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
</head>
<body>
<div class="main">



	<header>
		<a href="index.php"><img src="images/The_Monkey_House.jpg" alt="logo" width="100px"></a>
		<div class="social-icons">
			<span>Follow Us:</span>
			<a href="#" class="icon-3"></a>
			<a href="#" class="icon-2"></a>
			<a href="#" class="icon-1"></a>
		</div>							
		<nav>
			<ul class="menu">
			<li><a href ="buy.php">Buying</a></li>&nbsp;&nbsp;
			<li><a href ="rent.php">Renting</a></li>&nbsp;&nbsp;
			<li><a href ="account.php">Account</a></li>&nbsp;&nbsp;
			<li><a href ="aboutus.php">About Us</a></li>&nbsp;&nbsp;
			<li><a href ="contactus.php">Contact Us</a></li>&nbsp;&nbsp;
			</ul>
		</nav>
	</header>

	
</body>
</html>
<html>
<head>
<title>	
Contact Us
</title>
</head>
<body>
<form action = "index.php" method = "POST">
<center><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<div class="new"><p>Feel free to contact us<br/><br/>
	Name:<input type="name" name = "name"><br/><br/>
	Query: <textarea  name = "query" rows="5"></textarea><br/>
	<br/><input type = "submit" value = "Submit"></p> 
	
	</center>
	</div>
</form>
<footer>
        <p>&copy 2016 Monkey House</p>
 </footer>
</body>
</html>
<style>
		
</style>
