<?php
	session_start();?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
	.form input{margin-left: 1200px;
	margin-bottom:15px;
		padding: 5px;
	width: 240px;
	background: #EEDD81;}
	
	.text a{text-decoration: none;
		background: #F2E4B3; 
		width:100px;
		color:red;}
	.text a:hover{background:#F42F4E;
	color:black; }	
	</style>
<body>
	<?php include("header.php"); ?>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<i class="fa fa-shopping-cart" aria-hidden="true" style="font-size: 48px; color: #2FDD91;"> Cart</i>
	
	<div class="table-responsive">
	<table class="table table-bordered">
		<tr><th>Item</th>
			<th>Price</th>
			<th>Quantity</th>
			<th>Total</th>
			<th>Action</th></tr>
		<?php if(!empty($_SESSION['shopping_cart'])){
	
		$Total=0;
		foreach($_SESSION['shopping_cart'] as $keys => $values){?>
		
		<tr><td><?php echo $values['item_name'];?></td>
		<td>LKR <?php echo $values['item_price'];?></td>
		<td><input type="number"  name="quantity" min="1" max="10" value='<?php echo $values['item_quantity'];?>'></td>
		<td>LKR <?php echo number_format($values['item_quantity']*$values['item_price']);?></td>
		<td><div class="text"><a href="Cart.php?action=delete&hidden_name=<?php echo $values['item_name'];?>">Remove</div></a></td>
		</tr>
		
		<?php $Total=$Total+($values['item_quantity']*$values['item_price']);}}?>
		
		<tr>
		<td colspan="3" align="right" > Total</td>
		<td align="right">LKR <?php echo number_format($Total,2)?></td>
		</tr>
		</table>
	</div>
	
	<form class="form" action="Cart.php" method="post">
		<input  type="submit" name="update" value="Update cart"><br />
		<input type="submit" name="make_order" value="Make Order">
	</form>
	
		<?php
		if(isset($_GET['action'])){
			if($_GET['action']=="delete")
			{
				foreach ($_SESSION['shopping_cart'] as  $values)
				{if($values['item_name']==$_GET['hidden_name']){
				unset($_SESSION['shopping_cart'][$keys]);
		echo'<script>alert("item removed")</script>';
				echo'<script>window.location="cart.php"</script>';	
		}}}}?>
	
		<?php
	$con= mysqli_connect ('localhost', 'root','');
mysqli_select_db($con,'onlineshopping_database') or die("cannot connect");
	
	if ($Total==0){echo'<script>alert("No item in the cart")</script>';
				  	echo'<script>window.location="Home.php"</script>';	}?>
	<?php 
	if(isset($_POST['make_order'])){if($_SESSION['user']=="")
	{	echo'<script>alert("please Login to the webpage beofre make order")</script>';
	echo'<script>window.location="Login.php"</script>';}
							else	{
	$query="select Order_No from billing_details ORDER BY Order_NO DESC limit 1";
	$result= mysqli_query($con,$query);
	$row= mysqli_fetch_array($result);
								
	$lastid=$row['Order_No'];
	if($lastid==""){
		$billNo="Bill0001";
	}else
	{	$billNo=substr($lastid,7);
		 $billNo=intval($billNo);
		 $billNo="Bill000".($billNo+1);}
	if(!empty($_SESSION['shopping_cart'])){
	foreach($_SESSION['shopping_cart'] as $keys => $values){
	 $name= $values['item_name'];
	$quantity= $values['item_quantity'];
			$register1="insert into order_details (Order_No,item_name,quantity)
	values('$billNo','$name','$quantity')";
		$res=mysqli_query($con,$register1);
		echo $billNo;

			if($res==1){
					unset($_SESSION['shopping_cart']);
		$_SESSION['total']=$Total;
			$_SESSION['Order']=$billNo;				
		echo'<script>window.location="Delivery_details.php"</script>';
				
			}}}}}?>
	

</body>
</html>