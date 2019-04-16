<?php require 'Connections/Connections.php'?> 
<?php
if(isset($_POST['LogIn']))
{
	$EM = $_POST['Email'];
	$PW = $_POST['Password'];
	//Email and Password must match the names of the rows in the form.
	$result = $Con->query("select * from user where Email='$EM'");
	$row = $result->fetch_array(MYSQLI_BOTH);
	//This is pulling both numbers and strings from the DB.
	
	if(password_verify($PW, $row['Password']))
	{
	session_start();
	$_SESSION["UserID"] = $row["UserID"];
	//Here we are pulling the info from the specific row in the DB.
	header("Location:Account.php");
}
else
{
	session_start();
	$_SESSION["LogInFail"] = "Yes"; } 
}
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
    	<li><a href="Registration.php">Register</a></li>
        <li><a class="active" href"Login.php">Login</a></li>
  	  </ul>
    </div>
    <div class="LeftBody"></div>
    
     <div class="RightBody">
     <form method="post" action="">
     <?php if (isset($_SESSION["LogInFail"])){?>
           <div class="FormElement"> 
           Login failed! Please try again.
           </div>
       <?php } ?>  
    <form action="" method="post">
    <div class="FormElement">
    	<input name="Email" type="email" required="required" class="TFeild" id="Email" placeholder="Email" />    
    </div><br />
   <div class="FormElement">
    	<input name="Password" type="password" required="required" class="TFeild" id="Password" placeholder="Password" />    
    </div><br />
     <div class="FormElement">
    	<input name="LogIn" type="submit" class="button" value="Login" />    
    </div>
    </form>
    </div>
    <div class="Footer"></div>
    

</body>
</html>