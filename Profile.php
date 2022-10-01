
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="profCss.css">
</head>

<body>
	<?php include("header.php"); ?>
	<?php session_start();?>
	<h4><i class="fa fa-smile-o" aria-hidden="true">Logged In</i></h4>
			
		<div class="card shadow" style="padding: 20px; ">
			<h3>welcome </h3>
			<img src="./images/profile.png" >
			
			
			<?php if(!isset($_SESSION['user'])){echo'<script>window.location="login.php"</script>';} ?>
			<h3><?php echo $_SESSION['user']?></h3>
			<form action="Profile.php" method="post">
				<input type="submit" value="Log out" name="log_out"></form>
			<?php
			if (isset($_POST['log_out'])){
				unset($_SESSION['user']);
				echo '<script>alert("you have successfully logout")</script>';
				echo'<script>window.location="home.php"</script>';//go linked website
		

			}?></div>
</body>
	
</html>