<?php session_start();?>
<!doctype html>

<html lang="en">
    <head>
        <title> Login</title>
     
			 
<style>	
	
h4{
  color:#000000;
  text-align:center;
	font-size: 20px;}
.form fieldset { 
        width:400px;
        height:	400px;	
		border-style:outset;
		margin-left:550px;
        padding:50px;
        color:black;  
        font-size: 18px;  
        font-style: bold;
		background-repeat:no-repeat;
		background-color: rgba(0,0,0,0.1);} 
form label{
	text-align:left;	
		display:flex;	
	color:black;
		}
			
#Email, #password{
	margin:25px;
	text-align:center;
	margin-left:50px;
	width:300px;
	height:40px;
	display:flex;
	text-align:center;	
}	
  #Login{
	text-align:center;
	color: white;
	width:300px;
	height:40px;
	margin:20px;
	  margin-left: 50px;
	background: linear-gradient(to top right, #00ccff 12%, #ff66ff 91%);
}	

fieldset  a{
	text-align:left;
	font-size:18px;
	font-style: italic;
	text-decoration: none;
	color:#060606;
	
}	
	
fieldset a:hover{
	color:red;
	padding-left:10px;
}
		</style>
    </head>
	
    <body>
		<?php include("header.php"); ?>
	<h4>User Login </h4>
<div class="form">
       <form method="POST" action="Login.php">

	  <fieldset>
	  <label>Email:  </label>
        <input type="text" name= "Email" id= "Email" size="15" maxlength="30" placeholder="Enter Email"><br>
       <label>Password:  </label>
        <input type="password" name= "password"  id= "password" size="15" maxlength="30" placeholder="Enter Password"/><br>
     	 <input type="hidden" name="Utype" value="user">
	  
       <input type="submit" name="Login" id="Login"  value="Login"><br />
	
	  <a href="" >Forgotten password? </a><br />
	      <a href="User_Reg.php" >Register</a><br />
		  <a href="Admin_log.php" >Admin Login</a>
	 
		</fieldset>
	</form></div>
	<?php include("footer.php"); ?>
<?php include("Login_phpcode.php"); ?>
	<?php if (isset($_POST['Login_admin'])){//if admin login is click
	echo'<script>window.location="Admin_log.php"</script>';}//show admnlogin page
		?>

</body>

</html>
