<?php require 'Connections/Connections.php'?> 
<?php 
if(isset($_POST['Register']))
{
	session_start();
	$FName = $_POST['First_Name'];
	$LName = $_POST['Last_Name'];
	$Email = $_POST['Email'];
	$PW = $_POST['Password'];
	
	$StorePassword = password_hash($PW, PASSWORD_BCRYPT,array('cost' => 10));
	//10 is the strength of the encryption. The higher the number, the longer it will take
	
	$sql = $Con->query("INSERT INTO user (FirstName, LastName, Email, Password) Values('{$FName}','{$LName}','{$Email}','{$StorePassword}')");
	header('Location: Login.php');
}
?> 
<!-- Connecting Form to database and saving data  -->
<!-- Connecting to style sheets  -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registration_Site</title>

<link href="Registration_CSS/Master.css" rel="stylesheet" type="text/css" />
<link href="Registration_CSS/Menu.css" rel="stylesheet" type="text/css" /> 


</head>

<body>

<div class="Container">
<!-- Header menu bar with buttons -->

	<div class="Header">
    	<img src="Registration_Images/companylogo.png" alt="Company Logo" width="151" height="100">
    </div>
    <div class="Menu">
    <ul>
    	<li><a class="active" href"Registration.php">Register</a></li>
   		<li><a href="Login.php">Login</a></li>
  	  </ul>
    </div>
    <div class="LeftBody"></div>
   
   
   <!-- Register Form with submit button -->
    
    <div class="RightBody">
    <form id="RegisterForm" name="RegisterForm" method="post" action="">
    
    <div class="FormElement">
    	<input name="First_Name" type="text" required="required" class="TFeild" id="First_Name" placeholder="First Name" />    
    </div><br />
     <div class="FormElement">
    	<input name="Last_Name" type="text" required="required" class="TFeild" id="Last_Name" placeholder="Last Name" />    
    </div><br />
    <div class="FormElement">
    	<input name="Email" type="email" required="required" class="TFeild" id="Email" placeholder="Email" />    
    </div><br />
   <div class="FormElement">
    	<input name="Password" type="password" required="required" class="TFeild" id="Password" placeholder="Password" />    
    </div><br />
     <div class="FormElement">
    	<input name="Register" type="submit" class="button" value="Register" />    
    </div>
    </form>
    </div>
    
    <div class="Footer"></div>
    </div>
    

</body>
</html>