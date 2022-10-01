<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Men Footware</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
	<style>
		.product{display:inline-block}</style>
</head>

<body>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<?php include("header.php"); ?>
	<h3>Men's Footware</h3>
	<?php
	session_start();// strat the session
define("Men", "Men");// create constant
	$con= mysqli_connect ('localhost', 'root','');// connect with web server
mysqli_select_db($con,'onlineshopping_database') or die("cannot connect");// connect with database and check whether the connection is done
	$query="select * from  footware where Category= '".Men."' " ;//create query for select Footware item of men 
	$res= mysqli_query($con,$query);//excecute the query
	if(mysqli_num_rows($res)>0){//check whether the result is grater than 0
	while($row=mysqli_fetch_array($res))// get data from result
	{?>
	<div class="product">
	<div class="container" style="width:300px;">
	<div class="row text-center py-3">
	<div class="col-md-10">
	
	<form method="post" action=men_footware.php>
		<div class="card shadow" style="padding: 20px; " >
			
			<img src="./Footware/<?php echo $row['Image'];?>" width:"200px"; height="200">
			<h5><?php echo $row['F_name'];?></h5>
			<h4>Rs:<?php echo $row['Price'];?></h4>
			
  <input type="number" id="quantity" name="quantity" min="1" max="10" value="1" style="text-align: center">
		
			<input type="hidden" name="hidden_name" value="<?php echo $row['F_name'];?>">
			<input type="hidden" name="hidden_price" value="<?php echo $row['Price'];?>">
			<input type="submit" name="add_to_cart" value="Add to Cart">
		</div>
	</form>
	</div>
	</div>
	</div>
	</div>
	<?php }}?>
	<?php include("Add_to_Cart.php"); ?>
	</body>
	</html>