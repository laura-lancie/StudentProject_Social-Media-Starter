<?php require 'Connections/Connections.php'?> 
<?php
session_start();
unset($_SESSION["UserID"]);
session_destroy();
?>

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
	<div class="Header">
    	<img src="Registration_Images/companylogo.png" alt="Company Logo" width="151" height="100">
    </div>
    <div class="Menu">
    <ul>
    	<li><a href="Registration.php">Home</a></li>
    	<li><a href="Account.php">Account</a></li>
   		<li><a href="Login.php">Login</a></li>
  	  </ul>
    </div>
    <div class="LeftBody"></div>
    <div class="RightBody"> You are Logged out</div>
    <div class="Footer"></div>
    </div>
    

</body>
</html>