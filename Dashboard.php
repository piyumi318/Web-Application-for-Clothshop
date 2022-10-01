<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Dashboard</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<style>
body{background:#EFF1C1;}
header{
	border-width: 10px;
	background: #F4A44C}
	
header ul {
	margin:40px;
	list-style-type:none;}
	
.nBar ul li{
	width:200px;
	height: 100px;
	margin:40px;
	padding:20px;
	font-size: 25px;
	text-align: center;
	background: #EEB35B;
	border: outset;
	display: inline-grid;}
	
.nBar ul li a{
	text-decoration:none;
	color:black;}
	
.nBar ul li a:hover{
		background-color:#A96A0D;}
	header i{margin-left: 900px;
	
	}
	header a{text-decoration: none;
	color: black;}
	header h1{display:inline-flex;}
</style>
</head>

<body>
	<header>

<h1>Elegant Wardrobe Dashboard</h1>
		<i class="fa fa-user-circle-o" aria-hidden="true" style="font-size: 25px;"><a href="admin_profile.php">Profile</a></i>
	</header>
	
<div class="nBar">
	<ul>
		<li><a href="cloth.php">Manage Cloth Items</a></li>
		<li><a href="Footware.php">Manage Footware Items</a></li>
		<li><a href="Accessories.php">Manage Acessories Items</a></li>
		<li><a href="subscribers.php">Subscribers</a></li>
		<li><a href="order_Details.php">Order Details</a></li>
		<li><a href="Questions.php">Customers' Questions</a></li>
		<li><a href="home.php">Website</a></li>
		<li><a href="AdminReg.php">Register New Admin</a></li>
	</ul>
	</div>
	
</body>
</html>