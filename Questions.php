<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Customer Quetions</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
</head>

<body>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<?php include("back_to_dash.php")//connect header of dashboard?>
	<div class="form">
	<div class="table-responsive">
		<table class="table table-bordered">
			<h1>Customers' Questions</h1>
		<tr><th>Name</th>
			<th>Email</th>
			<th>Question</th></tr>
			<?php
			
$con= mysqli_connect ('localhost', 'root','');
mysqli_select_db($con,'onlineshopping_database') or die("cannot connect");
	$query="select * from contact_us";
	$res= mysqli_query($con,$query);
	while($row=mysqli_fetch_array($res)){
		?>
			<tr><td><?php echo $row['Name']?></td>
			<td><?php echo $row['Email']?></td>
			<td><?php echo $row['Message']?></td></tr><?php	}?></table>
	</div>
</body>
</html>