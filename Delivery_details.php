<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Delivery_Details</title>
</head>
<style>
	body{align-content: center;
	background:#8DEDBE}
	label {font-size:18px;}
	label h4{text-align: center;}
	.form{
	width:430px;
	height:630px;
	border: inset;
	margin-left:420px;
	padding:40px;
	margin-bottom: 40px;}
	#First,#Last,#Mobile
	{width:180px;
	height: 30px;
	margin:10px;}
	#adress{width:380px;
	height: 50px;
	margin:10px;}
	#Comfirmbtn
	{width:180px;
	height: 30px;
	margin:20px;
	background: #000000;
	color:white;}
	#reset{
	width:120px;
	height: 30px;
	margin:20px;
	background: #F55F73}</style>
<body>
	
	<div class="form">
		<?php session_start();?>
		<?php if(isset($_SESSION['total']))//get total of cart page using session
 ?>
			<h2>Total:<?php echo $_SESSION['total']?>.00</h2>
			<h4>No.<?php echo $_SESSION['Order']?></h4>
	<form action="Delivery_details.php" method="post">
	<label><h4>Delivery Details</h4></label> <br />
	<label>Name</label><br />
	<input type="text" name="First_name" id="First" placeholder="Enter Fist Name"/>
	<input type="text" name="Last_name" id="Last" placeholder="Enter last Name"/><br />
	<label>Mobie Number<label><br />
	<input type="text" name="Mobile_number" id="Mobile" placeholder="Enter Mobile number"/><br />
<label>Delivery Address</label><br />
  <textarea name="address" id="address" cols="30" rows="5" placeholder="Enter Address" type="Addresss" size="60"></textarea><br/>
	<label>Payment method</label><br />
	
	<p>
	  <label>
	    <input type="radio" name="RadioGroup1" value="Cash On Delivery" id="RadioGroup1_0" checked>
	   Cash On Delivery</label>
	  <br>
	  <label>
	    <input type="radio" name="RadioGroup1" value="Online Payment" id="RadioGroup1_1">
	    Online Payment</label>
	  <br>
  </p>
	<input type="submit" name="add"  id="Comfirmbtn" value="Comfirm Order"><br />
			<input type="reset" id="reset" value="Reset">
</form>
	</div>
	<?php
	$con= mysqli_connect ('localhost', 'root','');//connect with web server
mysqli_select_db($con,'onlineshopping_database') or die("cannot connect");//connect with database
	if (isset($_POST['add']) ){
	$fname=$_POST['First_name'];
	$lname=$_POST['Last_name'];
	$mobile=$_POST['Mobile_number'];
	$address=$_POST['address'];
	$pay=$_POST['RadioGroup1'];
		$pays="null";
		$orderID=	 $_SESSION['Order'];
	if($fname==""||$lname==""||$mobile==""||$address==""||$pay=="")//if one of data is not entered
	{echo '<script>alert("Enter all fields")</script>';}//dispaly error
			
	else{
	$register1="insert into billing_details (First_name,Last_name, Mobile,Address,Pay_method,pay_status,Order_No)
	values('$fname','$lname','$mobile','$address','$pay','','$orderID')";//enter data databese
		$res=mysqli_query($con,$register1);//excecute query
		if($res==1){//result is ture
			if($pay=="Online Payment"){//check whether the payment method and dispay out put accoding to it
			echo'<script>window.location="Payment.php"</script>';}
				else{
					echo'<script>alert("You have successfully made order")</script>';
				echo'<script>window.location="home.php"</script>';}}}}?>
	
</body>
</html>
