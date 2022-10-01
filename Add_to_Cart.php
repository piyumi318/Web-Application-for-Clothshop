<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
	if(isset($_POST['add_to_cart'])){
		if(isset($_SESSION['shopping_cart'])){
			$item_array_name=array_column($_SESSION['shopping_cart'], "item_name");
			if(!in_array($_POST['hidden_name'],$item_array_name))
			{
				$count=count($_SESSION['shopping_cart']);
			$item_array=array(
		'item_name' =>$_POST['hidden_name'],
		'item_price' =>$_POST['hidden_price'],
		'item_quantity' =>$_POST['quantity'])
				;
			 
			 $_SESSION['shopping_cart'][$count]=$item_array;
			echo '<script>alert("item is added to the cart")</script>';}
			else
			{echo '<script>alert("item already added")</script>';}}
		
		else{
		$item_array=array(
		'item_name' =>$_POST['hidden_name'],
		'item_price' =>$_POST['hidden_price'],
		'item_quantity' =>$_POST['quantity']);
			 $_SESSION['shopping_cart'][0]=$item_array;}
	}?>
	<?php include("footer.php"); ?>
</body>
</html>