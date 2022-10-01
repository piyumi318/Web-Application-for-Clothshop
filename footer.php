
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
<style>
 footer{
		background-color:#bbbbaa;
		padding:20px;
		margin:50px;
		font-family:Georgia, serif;
		font-size:15px;}
.flist{
		display:inline-flex;}
		
.fbar {width:280px;}
		
.fbar h4{
	text-transform:capitalize;
	text-align:center;
	width:150px;
	font-size:20px;}
		
.fbar ul li{
	margin:15px;
	font-size:16px;}
		
.fbar ul li a{
	text-decoration:none;
	color:black;}
		
.fbar ul li a:hover{
	padding-left:15px;}
		
.submit:hover{
	background-color:#796869;
}
.footb {
	font-size: 17px;
	text-align:center;
	padding-bottom:12px;
	}
 </style>
</head>

<body>
<footer>
<div class="flist">
	<div class="fbar">
	<h4>Categories</h4>
<ul>
    <li><i class="fa fa-bars" aria-hidden="true"style="color:#3A7A12"></i><a href="#">Women's ware</a></li>
    <li><i class="fa fa-bars" aria-hidden="true"style="color:#3A7A12"></i><a href="#"> Men's ware</a></li>
    <li><i class="fa fa-bars" aria-hidden="true"style="color:#3A7A12"></i><a href="#">Kids's ware</a></li>
</ul></div>
	
	<div class="fbar">
	<h4>Contact Us</h4>
<ul>
    <li><i class="fa fa-map-marker" aria-hidden="true" style="color:#CD5E05"></i>Address: 203/5,fort road,Colombo.</li>
    <li><i class="fa fa-phone" aria-hidden="true" style="color:#39ADB1"></i>Telephone:+940112365125</li>
    <li><i class="fa fa-mobile" aria-hidden="true" style="color:#241F46"></i>Mobile:0779682361</li>
</ul></div>
	
	<div class="fbar">
	<h4>social media</h4>
<ul>
	<li><i class="fa fa-facebook" aria-hidden="true"  style="color:#1249B0"></i><a href="https://www.facebook.com/">Facebook</a></li>
	<li><i class="fa fa-instagram" aria-hidden="true" style="color:#A74607"></i><a href="https://www.instagram.com/?hl=en">Instagram<a></li>
	<li><i class="fa fa-whatsapp" aria-hidden="true" style="color: #28CB26"></i><a href="https://www.whatsapp.com/">Whatsapp</a></li>
</ul></div>
		
	<div class="fbar">
	<h4>subscribe</h4>
	<form action="footer.php" method="POST">
		<i class="fa fa-envelope" aria-hidden="true">
			<input type="Email" name="Email" placeholder="Enter your email"></i>
			<input class="submit" type="submit" name="subscribe" value="subscribe">
	</form>
</div>
</div>
<div class="footb">
<h6> |copyright reserved!!<br/> 
	
Created By Piyumi Rajapaksha</h6>
</div>
</footer>
<?php
$con= mysqli_connect ('localhost', 'root','');//connect to server
mysqli_select_db($con,'onlineshopping_database');// connect to database
		
if(isset($_POST['subscribe'])){//check Subscribe button is selected
	$Email= $_POST['Email'];//get value of Email
	
	if($Email==""){// check is email empty
			echo '<script> alert( "please enter your email to subscribe" )</script>';//dispaly alert message
		}else// if not empty
	{
$sql= "select * from subscribers where Email ='$Email'";// check whether the email is already in the database
$result = mysqli_query($con,$sql);
$num = mysqli_num_rows($result);
		
if ($num>0 ){// if it is in the database alredy
	    	echo '<script> alert( "you have alredy subscribed our page" )</script>';}//dispaly alert message
else{//if it is not database
	 	$register="insert into subscribers( Email)values('$Email')";//insert data into database
		 mysqli_query($con,$register);
		 echo '<script>alert("you have subscribed successfully")</script>';//dispaly alert message
		}}}
?>
</body>
</html>