	<?php session_start();?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<style>		
body{  margin: 0;
        padding: 0;
	background-color:#F2E08A;
		}  
h4{
  color:#000000;
  text-align:center;
	font-size: 20px;
}

.form fieldset { 
        width:400px;
        height:	370px;	
		border-style:outset;
		margin-left:550px;
        padding:50px;
        color:black;  
        font-size: 18px;  
        font-style: bold;
		background-repeat:no-repeat;
		background-color: rgba(0,0,0,0.1);
	margin-bottom: 30px;} 
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

<body> 
	<?php include("header.php"); ?>
	<h4>Admin Login </h4>
<div class="form">
       <form method="POST" action="Admin_log.php">

	  <fieldset>
		  
	  <label>Email:  </label>
        <input type="text" name= "Email" Id= "Email" size="15" maxlength="30" placeholder="Enter Email"><br>
      
	   
       <label>Password:  </label>
        <input type="password" name= "password" id= "password"size="15" maxlength="30" placeholder="Enter Password"/><br>
      <input type="hidden" name="Utype" value="Admin">
	  
       <input type="submit" name="Login" id="Login" value="Login"><br />
	
	  <a href="" >Forgotten password? </a><br />
	     
	
		</fieldset>
	</form>
	</div>
	<?php include("Login_phpcode.php"); ?>

</body>
</html>