<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Contact Us</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<style>
		.content{border:inset;   }
		
		.content,.form {display:inline-flex;
		margin:50px;}
		label{
			margin-left:20px;
			font-size: 20px;
			
			font-family: Baskerville, "Palatino Linotype", Palatino, "Century Schoolbook L", "Times New Roman", "serif";
		}
		.content ul li{margin-left:85px;
		font-size: 20px;
		margin-bottom: 10px;
		font-family: Baskerville, "Palatino Linotype", Palatino, "Century Schoolbook L", "Times New Roman", "serif";}
		.form{
			   background: linear-gradient(to bottom left, #000000 0%, #ffffff 100%);
}
		.form ul li{
			margin:40px;
			margin-left: 150px;
			list-style: none;
		}.form h3{
			
			margin-left: 180px;
			font-size: 30px;
		color:white;}
		li a{text-decoration: none;
		color:black;}
		</style>
	 
</head>

<body>
<?php include("header.php"); ?>
	<h1>Contact us</h1>
<div class="content">
	<ul>
	<label>Hot Lines</label>
	<li>077-12345678</li>
	<li>077=1-12345678</li>
	<li>011-12345678</li>
	<label>Address</label>
	<li>323/a, galle road, Colombo.</li>
	<label>Emails</label>
	<li>elegant wardrobe@gmail.com</li>
	<label>social media</label>
	<li><i class="fa fa-facebook" aria-hidden="true"  style="color:#1249B0"></i><a href="https://www.facebook.com/">Facebook</a></li>
	<li><i class="fa fa-instagram" aria-hidden="true" style="color:#A74607"></i><a href="https://www.instagram.com/?hl=en">Instagram<a></li>
	<li><i class="fa fa-whatsapp" aria-hidden="true" style="color: #28CB26"></i><a href="https://www.whatsapp.com/">Whatsapp</a></li>

	</ul></div>
<div class="form">
	<form name="inquery_form" action="Contact_us.php" method="post">
	<ul>
	  
	  <h3>Make Inquiery</h3>
	<li><input type="text" name="Name" placeholder="Enter Name"  size="35"></li>
	<li><input type="email" name="Email" placeholder="Enter Email" size="35"></li>
	<li><textarea name="Message" cols="50" rows="10" placeholder="Enter Message" type="message" size="60"></textarea></li>
<li><input type="submit" Name="Submit" value="submit" ></li>
	</ul>
	</form>
	</div>
	<?php
$con= mysqli_connect ('localhost', 'root','');
mysqli_select_db($con,'onlineshopping_database') or die("cannot connect");
if(isset($_POST['Submit'])){
	$name= $_POST['Name'];
	$email=$_POST['Email'];
	$msg=$_POST['Message'];
	if($name==""||$email==""||$msg=="")
	{echo'<script>alert("Enter all fields")</script>';}
	else{
		$insert="insert into contact_us (Name,Email, Message)
		values('$name','$email','$msg')";
		 mysqli_query($con,$insert);
		echo'<script>alert("You have sucessfully made inquery")</script>';
	}
}
?><?php include("footer.php"); ?>
</body>
</html>
