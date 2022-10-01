<!doctype html>

<html lang="en">
    <head>
        <title>Admin Registration</title>
   <link rel="stylesheet" href="registration.css">
		
		<script src="registraionjs.js"></script>
		
    </head>
 <body>
	 <?php include("back_to_dash.php")//connect header of dashboard?>
<h1> Admin Registration</h1>
	 
<div class = "form">
	 
      <form method= "POST" action="AdminReg.php" Name="Registration_form" onSubmit="return validation()">
		  
	  <h3>Your personal Details</h3>
		  
        <label>First Name:</label>
            <input type="text" name= "First_name"  placeholder="Enter Fist Name" size="40"/><br />
      	<label>Last Name:</label>
            <input type="text" name= "Last_name" placeholder="Enter Last Name" size="40" /><br />
      	<label> Date of Birth:</label>
            <input type="date" name="B_day" size="25" ><br />
       <label> Gender:</label><br />
	  <p>
       <label>
         <input type="radio" name="RadioGroup1" value="Male" id="RadioGroup1_0" checked>
         Male</label>
       
       <label>
         <input type="radio" name="RadioGroup1" value="Female" id="RadioGroup1_1">
         Female</label>
       <br />
    </p>

	    <label> Email:</label>
            <input type="email" name= "Email" placeholder="Enter Email"  size="40">
        <h3>Your Login Data</h3>
	 
      <label>password:</label>
        <input type="password" name= "Password" placeholder="Enter Password" size="30"><br />
	<label>Comfirm Password:</label>
        <input type="password" name="Comfirm_Password" size="30" placeholder="Enter Comfirm Password" />
		 <input type="hidden" name="Utype" value="Admin">
		<input type="submit" name="register" id="reg" value=" Register">
        <input type="reset" id="reset" value="Reset">

    </form>
	   </div>
    

    <?php include("Register.php")?>
</body>

</html>