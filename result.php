<?php
include 'background.htm';
include 'inc.connection.php';
require 'inc.server.php';

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
<title>result</title>
<style>
	h1
	{
		color: #1ab2ff;
		font-family: Comic Sans MS;
	}
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

h1 {position:absolute; left:132px; top:0px; display:inline-block; z-index:100;}
	.social-icons {overflow:hidden; text-align:right; padding:17px 162px 13px 0 }
	.social-icons span {display:inline-block; font-size:24px; line-height:28px; color:#fff; margin:-1px 20px 0 0; letter-spacing:-1px;}
	.social-icons a {display:inline-block; width:23px; height:23px; float:right;}
	.icon-1 {background:url(../images/icon-1.png) 0 0 no-repeat;}
	.icon-2 {background:url(../images/icon-2.png) 0 0 no-repeat; margin-left:7px;}
	.icon-3 {background:url(../images/icon-3.png) 0 0 no-repeat; margin-left:7px;}
	.social-icons a:hover {background-color:#1e93f4;}

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
	<center>
	<form action="" method="GET">
	<input type="text" name="search" placeholder="Buy, Rent or Sell...">
	</form>
	</center>
	</div>
	</section>
	<br/><br/>
<?php
@$search = $_COOKIE[$s];
if(isset($_GET['search'])&&!empty($_GET['search']))
{
	$search = $_GET['search'];
}
	$query = "SELECT * FROM property WHERE owner LIKE '%".$search."%' OR name LIKE '%".$search."%' OR address LIKE '%".$search."%' OR price LIKE'%".$search."%'";
	if($query_run = mysql_query($query))
	{
		while($query_row = mysql_fetch_assoc($query_run))
			{
				$owner = $query_row['owner'];
				echo $owner.'<br/>';
				echo $name = $query_row['name'].'<br/>';
				echo $address = $query_row['address'].'<br/>';
				echo 'Rs '.$price = $query_row['Price'].'<br/>';
				echo $contact = $query_row['contact'].'<br/>'.'<br/>';
			}
	}

else
{
?>
	<script type="text/javascript">
	alert('Enter Something');
	</script><?php
}
?>

	<div name="right"><a href="order.php">Want to sell your place?</a></div>
	<footer>
        <p>&copy 2016 Monkey House</p>
    </footer>
</body>
</html>