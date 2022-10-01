<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
$con= mysqli_connect ('localhost', 'root','');
mysqli_select_db($con,'onlineshopping_database') or die("cannot connect");//connect to web server
	 
if(isset($_POST['searchbtn'])){
	$search= $_POST['search'];
	$category=$_POST['category'];
	if ($search==""){echo '<script>alert("enter item name for search item")</script>';
					echo'<script>window.location="home.php"</script>';}
	else{
	if($category=="cloth"){
	$query="select * from cloth where PName= '".$search."'";
	$res= mysqli_query($con,$query);
	if(mysqli_num_rows($res)>0){
	while($row=mysqli_fetch_array($res)){?>
	<div class="product">
	<div class="container" style="width:300px;">
	<div class="row text-center py-3">
	<div class="col-md-10">
	<div class="card shadow" style="padding: 20px; " >
			<img src="./images/<?php echo $row['Image'];?>" width:"200px"; height="200">
			<h4><?php echo $row['PName'];?></h4>
			<h4>Rs:<?php echo $row['Price'];?></h4>

		<?php }}
		else{echo '<script>alert("there is not item as in cloth category")</script>';
		echo'<script>window.location="home.php"</script>';}}
		
elseif ($category=="footwear"){
	$query="select * from footware where F_name= '".$search."'";
	$res= mysqli_query($con,$query);
	if(mysqli_num_rows($res)>0){
	while($row=mysqli_fetch_array($res)){?>
	<div class="product">
	<div class="container" style="width:300px;">
	<div class="row text-center py-3">
	<div class="col-md-10">
	<div class="card shadow" style="padding: 20px; " >
			<img src="./Footware/<?php echo $row['Image'];?>" width:"200px"; height="200">
			<h4><?php echo $row['F_name'];?></h4>
			<h4>Rs:<?php echo $row['Price'];?></h4>

		<?php }}else{echo '<script>alert("there is not item as in footwear category")</script>';
		echo'<script>window.location="home.php"</script>';}}
elseif ($category=="accessories"){
	$query="select * from accessories where AName= '".$search."'";
	$res= mysqli_query($con,$query);
	if(mysqli_num_rows($res)>0){
	while($row=mysqli_fetch_array($res)){?>
	<div class="product">
	<div class="container" style="width:300px;">
	<div class="row text-center py-3">
	<div class="col-md-10">
	<div class="card shadow" style="padding: 20px; " >
			<img src="./Accessories/<?php echo $row['Image'];?>" width:"200px"; height="200">
			<h4><?php echo $row['AName'];?></h4>
			<h4>Rs:<?php echo $row['Price'];?></h4>

		<?php }}
	else{
		echo '<script>alert("there is not item as this in accessories category")</script>';
		echo'<script>window.location="home.php"</script>';}}}}?>

		</div>
	
	</div>
	</div>
	</div>
	</div>
	
	