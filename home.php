
	<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Homepage</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
	<style>
		.product{display:inline-block}</style>
</head>

<body>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<?php include("header.php"); ?>
<form action="search.php" method="post">
	<label >Select a Category:</label>

				<select name="category" id="category">
				  <option value="cloth">Cloth</option>
				  <option value="footwear">Footwear</option>
				  <option value="accessories">Accessories</option>
				</select>
      <input type="text" placeholder="Search.." name="search" width:400px; height:30px;>
      <button type="submit" name="searchbtn">Search</button>
    </form>
	<h3>Women's Collection</h3>
	<?php
	
	session_start();
define("Women", "Women");
	$con= mysqli_connect ('localhost', 'root','');
mysqli_select_db($con,'onlineshopping_database') or die("cannot connect");
	$query="select * from cloth where Category= '".Women."'";
	$res= mysqli_query($con,$query);
	if(mysqli_num_rows($res)>0){
	while($row=mysqli_fetch_array($res))
	{?>
	<div class="product">
	<div class="container" style="width:300px;">
	<div class="row text-center py-3">
	<div class="col-md-10">
	
	
		<div class="card shadow" style="padding: 20px; " >
			
			<img src="./images/<?php echo $row['Image'];?>" width:"200px"; height="200">
			<h4><?php echo $row['PName'];?></h4>
			<h4>Rs:<?php echo $row['Price'];?></h4>

		

		</div>
	
	</div>
	</div>
	</div>
	</div>
	<?php }}?>
	<h3>Men's Collection</h3>
	<?php
	
	
define("Men", "Men");
	$con= mysqli_connect ('localhost', 'root','');
mysqli_select_db($con,'onlineshopping_database') or die("cannot connect");
	$query="select * from cloth where Category= '".Men."'";
	$res= mysqli_query($con,$query);
	if(mysqli_num_rows($res)>0){
	while($row=mysqli_fetch_array($res))
	{?>
	<div class="product">
	<div class="container" style="width:300px;">
	<div class="row text-center py-3">
	<div class="col-md-10">
	
	<form method="post" action=product.php>
		<div class="card shadow" style="padding: 20px; " >
			
			<img src="./images/<?php echo $row['Image'];?>" width:"200px"; height="200">
			<h4><?php echo $row['PName'];?></h4>
			<h4>Rs:<?php echo $row['Price'];?></h4>

		

		</div>
	</form>
	</div>
	</div>
	</div>
	</div>
	<?php }}?>
	<h3>Kids' Collection</h3>
	<?php
	
	
define("Kids", "Kids");
	$con= mysqli_connect ('localhost', 'root','');
mysqli_select_db($con,'onlineshopping_database') or die("cannot connect");
	$query="select * from cloth where Category= '".Kids."'";
	$res= mysqli_query($con,$query);
	if(mysqli_num_rows($res)>0){
	while($row=mysqli_fetch_array($res))
	{?>
	<div class="product">
	<div class="container" style="width:300px;">
	<div class="row text-center py-3">
	<div class="col-md-10">
	
	<form method="post" action=product.php>
		<div class="card shadow" style="padding: 20px; " >
			
			<img src="./images/<?php echo $row['Image'];?>" width:"200px"; height="200">
			<h4><?php echo $row['PName'];?></h4>
			<h4>Rs:<?php echo $row['Price'];?></h4>

		

		</div>
	</form>
	</div>
	</div>
	</div>
	</div>
	<?php }}?>
<?php include("footer.php"); ?>
</body>
</html>