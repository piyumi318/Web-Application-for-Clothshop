<?php
$con= mysqli_connect ('localhost', 'root','');//connect with web server
mysqli_select_db($con,'onlineshopping_database') or die("cannot connect");//connect with database

if (isset($_POST['Login'])){//if login button is clicked
	$mail=$_POST['Email'];//get email
	$password=$_POST['password'];//get password
	$pword=md5($password);//encrypt password
	$utype=$_POST['Utype'];//get user type
	
	if($mail==""||$password==""){//check whether password or mail or the both are empty
	echo'<script>alert("Enter both username and password")</script>';}//if they are empty display alert
	else{//if all data are entered
	$sql= "select * from user_details where Email ='".$mail."' AND Password= '".$pword."'AND User_type='".$utype."' limit 1";//check whether
		//email and password are valid 
	$result = mysqli_query($con,$sql);
	
	if(mysqli_num_rows($result )==1 && $utype=='user'){// if there is result mean entered data are validated check accoring to user
		while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){	$_SESSION['user']=$row['Email'];}//create session
			echo'<script>alert("you have succesfully login")</script>';//dispaly alert
			echo'<script>window.location="Profile.php"</script>';}//go linked website
		elseif(mysqli_num_rows($result)==1&& $utype=='Admin'){// if there is result mean entered data are validated check accoring to user
		while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){	$_SESSION['Admin']=$row['Email'];}//create session
			echo'<script>alert("you have succesfully login")</script>';//display sucess alert
		echo'<script>window.location="Dashboard.php"</script>';//go linked website
		}
		else{echo'<script>alert("incorrect username or password")</script>';//display error alert
		}}
}
?>