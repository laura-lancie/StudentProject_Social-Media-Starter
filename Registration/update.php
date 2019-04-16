<?php require 'Connections/Connections.php'?> 
<?php session_start();
if(isset($_SESSION['UserID']))
{}
else
{header('Location: Login.php');}?>
<?php
$User = $_SESSION["UserID"];
//We are determining the User logged in
$result = $Con->query("select * from user where UserID='$User'");
$row = $result->fetch_array(MYSQLI_BOTH);

$_SESSION['FirstName'] = $row ['FirstName'];
$_SESSION['LastName'] = $row ['LastName'];
$_SESSION['Email'] = $row ['Email'];
$_SESSION['PW'] = $row ['Password'];
$_SESSION['Post'] = $row ['Post'];
$_SESSION['TimeStamp'] = $row ['TimeStamp'];
$_SESSION['Img'] = $row ['Img'];
/*We are storing the information in session variables, which we can call on later*/
?>
<?php
if(isset($_POST['Update']))
{
	$UpdateFirstName = $_POST['First_Name'];
	$UpdateLastName = $_POST['Last_Name'];
	$UpdateEmail = $_POST['Email'];
	$UpdatePassword = $_POST['Password'];
	$UpdatePost = $_POST['Post'];
	$UpdateImg = $_POST['Img'];
	//The post is looking at the name of the form element 
	
	$sql = $Con->query("UPDATE user SET FirstName = '{$UpdateFirstName}', LastName = '{$UpdateLastName}', Email = '{$UpdateEmail}', Password = '{$UpdatePassword}', Post = '{$UpdatePost}', Img = '{$UpdateImg}' where UserID = $User");
	/*$User is being called from previous script when we checked who was logged in */
	header('Location:update.php');
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
        <li><a href="Account.php">Account</a></li>
         <li><a class="active" href"update.php">Update</a></li>
        <li><a href="logout.php">Logout</a></li>
  	  </ul>
    </div>
    
    <div class="LeftBody">ACCOUNT NUMBER:<br/>
   </br><?php echo $_SESSION['UserID'];?>
   </div>

    <div class="RightBody">
      <form id="UpdateForm" name="UpdateForm" method="post" action="">
     <div class="FormElement">
    	<input name="First_Name" type="text" class="TFeild" id="First_Name" value="<?php echo $_SESSION['FirstName'];?>" />
    </div><br />
       <div class="FormElement">
    	<input name="Last_Name" type="text" class="TFeild" id="Last_Name" value="<?php echo $_SESSION['LastName'];?>" />    
    </div><br />
    <div class="FormElement">
    	<input name="Email" type="email" class="TFeild" id="Email" value="<?php echo $_SESSION['Email'];?>" />    
    </div><br />
 <div class="FormElement">
    	<input name="Password" type="passwrod" class="TFeild" id="Password" value="<?php echo $_SESSION['PW'];?>" />    
    </div><br />
    <div class="FormElement">
    	<input name="Post" type="post" class="TFeild" id="Post" value="<?php echo $_SESSION['Post'];?>" />  
    </div><br />
     <div class="FormElement">
    	<input name="Img" type="img" class="TFeild" id="Img" value="<?php echo $_SESSION['Img'];?>" />  
    </div><br />
     <div class="FormElement">
    	<input name="Update" type="submit" class="button" value="Update" />    
    </div>
    </form>
    </div>
 

    <div class="Footer"></div>
    </div>

</div>
</body>
</html>