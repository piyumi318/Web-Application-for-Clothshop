
<?php
$con= mysqli_connect ('localhost', 'root','');
mysqli_select_db($con,'onlineshopping_database') or die("cannot connect");//connect to web server
	 
if(isset($_POST['register'])){
$Firstn= $_POST['First_name'];
$lastn= $_POST['Last_name'];
$birth= $_POST['B_day'];
$mail= $_POST['Email'];
$gender= $_POST['RadioGroup1'];
$pword= $_POST['Password'];
$Cpword=$_POST['Comfirm_Password'];
$utype=$_POST['Utype'];
$enpword=md5($pword);
$length=strlen($pword); //get password length
$spaces=str_word_count($pword);// get word count if it is one which mean there is no spaces.
	$sql= "select * from user_details where Email ='".$mail."' limit 1";
	$res = mysqli_query($con,$sql);
	
	if($Firstn==""|| $lastn==""|| $birth==""||$mail==""||$gender==""||$pword==""||$Cpword==""||$utype==""){// check whether all the fields are enterd
		//echo "enter all fields";//use for check whether is it work
		}
	else if($pword==$Cpword && $length>5 && $spaces==1){// check password is equal to cpassowrd and it is in correct formats.
		
		if(mysqli_num_rows($res)==1){// check whether the email is already exsisted
			echo'<script>alert("you have acount with this Email")</script>';}
		else{
		$register="insert into user_details(First_name, Last_name,B_day,Gender,Email,Password,User_type)
		values('$Firstn','$lastn','$birth','$gender','$mail','$enpword','$utype')";
		 mysqli_query($con,$register);
		echo'<script>alert("you have successfully Registered")</script>';
		if($utype==user){echo'<script>window.location="Login.php"</script>';}}}}
?>
