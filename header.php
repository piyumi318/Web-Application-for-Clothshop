<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
<style>
header ul {
	 list-style-type:none;}	
.nBar ul li{
	width:180;
	margin:60px;
	margin-left: 70px;
	display: inline-flex;
	text-align:center;
	font-size: 18px;}
		
header ul li a{
	text-decoration:none;
	color:black;
	}
.nBar ul li a:hover{
		background-color: black;
	color: white;
	}
.sub_menu{display:none;}
.nBar ul li:hover .sub_menu{
			display:block;
			position:absolute;
			background:#A7A4A4;
			margin-top:15px;
			margin-left:-15px;}
</style>
</head>

<body>
	<header>
<div class="nBar">
<h1>Elegant Wardrobe</h1>
<ul>
<li><i class="fa fa-home" aria-hidden="true" ></i><a href="home.php">Home</a></li>
<li><i class="fa fa-clone" aria-hidden="true" ></i><a href="#">Women</a>
	<div class="sub_menu">
	<ul>
		<li><a href="women_cloth.php">Women's Cloth</a></li>
		<li><a href="women_footware.php">Women's Footware</a></li>
		<li><a href="women_access.php">Women's Accessories</a></li>
	</ul>
	</div>
	</li>
	
	<li><i class="fa fa-clone" aria-hidden="true" ></i><a href="#">Men</a>
	<div class="sub_menu">
	<ul>
		<li><a href="men_cloth.php">Men's Cloth</a></li>
		<li><a href="men_footware.php">Men's Footware</a></li>
		<li><a href="men_access.php">Men's Accessories</a></li>
	</ul>
	</div>
	</li>
		<li><i class="fa fa-clone" aria-hidden="true" ></i><a href="#">Kids</a>
	<div class="sub_menu">
	<ul><li><a href="kids_cloth.php">Kid's Cloth</a></li>
		<li><a href="kids_footware.php">Kid's Footware</a></li>
		<li><a href="kids_access.php">Kid's Accessories</a></li>
	</ul>
	</div>
</li>

<li><i class="fa fa-phone-square" aria-hidden="true" ></i><a href="Contact_us.php">Contact us</a></li>
<li><i class="fa fa-shopping-cart" aria-hidden="true" style="font-size: 25px;"></i><a href="Cart.php">Cart</a></li>
<li><i class="fa fa-user-circle-o" aria-hidden="true" style="font-size: 25px;"></i><a href="Profile.php">Login</a></li>
</ul>
</div>
</header>
	 
	  <hr size="30">
           
</body>
</html>
