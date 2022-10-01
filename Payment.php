
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Payment.html</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
	form{width:430px;
	height:540px;
	border: inset;
	margin-left:420px;
	padding:40px;
	margin-bottom: 40px;}
	label {font-size:18px;
	margin:30px;
	}
	#cnum,#exdate,#cv,#hname{width:180px;
	height: 30px;
	margin:10px;
	display:list-item;
	margin-left: 130px;
	}
	#pay{height: 30px;
	width:240px;
	color:white;
		background: #7D4818;
	margin-left: 100px;}
	</style>
<body>
	
<form action="Payment.php" method="post">
	<h3>Make Online Payment</h3>
		<label>Card Type</label><br />
		<p>
	  <label>
	    <input type="radio" name="Type" value="Visa" id="visa" checked>
	   <i class="fa fa-cc-visa" aria-hidden="true"></i>Visa</label><br>
	  <label>
	    <input type="radio" name="Type" value="Masters" id="Masters">
	   <i class="fa fa-cc-mastercard" aria-hidden="true"></i>Masters</label><br>
  </p>
<label>Card Number:</label>
	<input type="tel" inputmode="numeric" id="cnum" name="Card_No" pattern="[0-9\s]{13,19}" 
		   autocomplete="cc-number" maxlength="16" placeholder="xxxx xxxx xxxx xxxx"><br />
	
	<label>Expiration Date:</label>
  <input type="text" placeholder="mm/yyyy"/ name="exdate" id="exdate"><br />
 <label>CV code:</label>
  <input type="text" name="Code"  placeholder="***" id="cv" /><br />
	<label>Card Holder Name:</label>
  <input type="text" name="ChName" id="hname" /> <br />
	<input type="submit" name="pay" value="Comfirm Payment" id="pay">
	</form>

</body>
</html>
<?php
if(isset($_POST['pay'])){
	$type= $_POST['Type'];
	$Cnum=$_POST['Card_No'];
	$exdate=$_POST['exdate'];
	$cv=$_POST['Code'];
	$chname=$_POST["ChName"];
	if($type==""||$Cnum==""||$exdate==""||$cv==""||$chname=="")
	{echo'<script>alert("Enter all fields")</script>';}
	else{
		
		
		 session_start();
		$code=$_SESSION['Order'];
		$con= mysqli_connect ('localhost', 'root','');//connect with web server
mysqli_select_db($con,'onlineshopping_database') or die("cannot connect");//
		define("paid", "paid");
		
		$register1="update billing_details set pay_status='".paid."' where Order_No='".$code."'";
	$value= mysqli_query($con,$register1);
		echo'<script>alert("payment is sucessful")</script>';
		//payment_status
	}
}
?>