<?php session_start();

$con= mysqli_connect ('localhost', 'root','');
mysqli_select_db($con,'onlineshopping_database') or die("cannot connect");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
	<link rel="stylesheet" href="manage_item.css">
</head>
	
<body>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<?php include("back_to_dash.php")?><br/>
	<h4>Manage cloth items</h4><br/>
	<div class="form">
		<form action="cloth.php" method="post" enctype="multipart/form-data">
	 <label>Product Code:</label>
			<input type="text" name="PCode" placeholder="Enter Product Code"  size="50"><br />
	  <label>Product Name:</label>
			<input type="text" name="PName" placeholder="Enter Product Name"  size="50"><br />
	<label>Product Price</label>
			<input type="text" name="Price" placeholder="Enter price" ><br />
	<label>Product Image</label>
			<input type="file" name="image" id="image"><br />
	<label >Select a Category:</label>

				<select name="category" id="category">
				  <option value="Women">Women</option>
				  <option value="Men">Men</option>
				  <option value="Kids">Kids</option>
				</select><br />
			
			<div class='btn'><input  type="submit" name="add" value="Add" >
			<input  type="submit" name="update" value="Update" ></div>
			
		</form></div><br/>
		<div class="table-responsive">
	<table class="table table-bordered">
	
		<tr><th>Code</th>
			<th>Name</th>
			<th>Price</th>
			<th>Image</th>
			<th>Category</th>
			
			<th>Delete</th></tr>
		<?php
		
	$query="select * from cloth";
	$res= mysqli_query($con,$query);
	while($row=mysqli_fetch_array($res)){
	?>
			<tr><td><?php echo $row['Pcode']?></td>
				<td><?php echo $row['PName']?></td>
			<td><?php echo $row['Price']?></td>
			<td><img src="./images/<?php echo $row['Image']?>" width="140px" height="140px"></td>
			<td><?php echo $row['Category']?></td>
			<td><a href="cloth.php?deleteid=<?php  echo $row['Pcode'];?>">Remove</a></td>
				
			</tr><?php		}?>
		</table>
	</div>
<?php
if (isset($_POST['add']) && isset($_FILES['image'])){
	$code=$_POST['PCode'];
	$name=$_POST['PName'];
	$price=$_POST['Price'];
	$cat=$_POST['category'];
	$img=$_FILES['image']['name'];
	$traget="images/".basename($_FILES['image']['name']);
	
	if($code==""||$name==""||$price==""||$cat==""||$img=="")
	{echo'<script>alert("Enter all fields")</script>';}
	
	else{
	$sql= "select * from cloth where Pcode ='".$code."' limit 1";
	$sql1= "select * from cloth where PName ='".$name."' limit 1";
	$res3 = mysqli_query($con,$sql);
	$res1 = mysqli_query($con,$sql1);
		
		if(mysqli_num_rows($res3)==1){// check whether the code is already exsisted
			echo'<script>alert("this Product code is already used")</script>';}
		else if(mysqli_num_rows($res1)==1){// check whether the product name is already exsisted
			echo'<script>alert("this Product Name is already added")</script>';}
	else{
		$register="insert into cloth (Pcode,PName, Price,Image,Category)
		values('$code','$name','$price','$img','$cat')";
		 mysqli_query($con,$register);
		 echo $cat,$code,$price,$cat,$img;
		echo '<script>alert("data inserted")</script>';
		echo'<script>window.location="cloth.php"</script>';
		
if(move_uploaded_file($_FILES['image']['tmp_name'],$traget)){
	 echo '<script>alert("image inserted")</script>';
}}}}
	?>
	<?php
		if(isset($_GET['deleteid'])){
			 $id=$_GET['deleteid'];
			//echo $id;
			$sql2="delete from cloth where Pcode='".$id."'";
			$result=mysqli_query($con,$sql2);
			if ($result==1) {
				
				echo'<script>alert("Item Deleted")</script>';
				echo'<script>window.location="cloth.php"</script>';
			}else{die(mysqli_error($con));}
			
		}
	?>
	<?php
	if (isset($_POST['update']) ){
	$code1=$_POST['PCode'];
	
	$price1=$_POST['Price'];
	$cat1=$_POST['category'];
	$img1=$_FILES['image']['name'];
	$traget="images/".basename($_FILES['image']['name']);
	
	if($price1==""||$cat1==""||$img1=="")
	{echo'<script>alert("Enter price category and image")</script>';}
		else{
	
	$sql= "select * from cloth where Pcode ='".$code1."' limit 1";
	$res3 = mysqli_query($con,$sql);
	 if(mysqli_num_rows($res3)==1){
	$register1="update cloth set Price='".$price1."', Image='".$img1."', category='".$cat1."' where Pcode='".$code1."'";
	$value= mysqli_query($con,$register1);
		 if($value>0){
		echo '<script>alert("data are updated")</script>';
		echo'<script>window.location="cloth.php"</script>';
		
if(move_uploaded_file($_FILES['image']['tmp_name'],$traget)){
	 echo '<script>alert("image inserted")</script>';
}
}}
else{echo'<script>alert("there is no product with the code")</script>';}}}
	?>
	
</body>
</html>
