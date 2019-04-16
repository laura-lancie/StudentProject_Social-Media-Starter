<?php require 'Connections/Connections.php'?> 
<?php session_start();
if(isset($_SESSION['UserID']))
{}
else
{header('Location: Login.php');}?>
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
        <li><a class="active" href"Account.php">Account</a></li>
         <li><a href="update.php">Update</a></li>
        <li><a href="logout.php">Logout</a></li>
  	  </ul>
    </div>
    <div class="LeftBody"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="card">
   <img src="<?php echo $_SESSION['Img'];?>" alt="placeholder" style="width:50%">
  <h1><?php echo $_SESSION['FirstName'];?><?php echo $_SESSION['LastName'];?></h1>
  <p class="title">Example Info</p>
  <p>Example info</p>
  <a href="#"><i class="fa fa-dribbble"></i></a> 
  <a href="#"><i class="fa fa-twitter"></i></a> 
  <a href="#"><i class="fa fa-linkedin"></i></a> 
  <a href="#"><i class="fa fa-facebook"></i></a> 
  <p><button>Contact</button></p>
</div>
    </div>
    
    <div class="RightBody"> 
   
   <div class="container">
  <img src="Registration_Images/placeholder.png" alt="Avatar"> <p><?php echo $_SESSION['FirstName'];?><?php echo $_SESSION['LastName'];?></p>
  <p><?php echo $_SESSION['Post'];?></p>
  <span class="time-right"><?php echo $_SESSION['TimeStamp'];?></span>
</div>
   </div>
   
    <div class="Footer"></div>
    </div>
    

</body>
</html>