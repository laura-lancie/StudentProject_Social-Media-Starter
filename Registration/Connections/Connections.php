<?php
$Con = mysqli_connect("localhost","root","","RegistrationData");



$Select_db = mysqli_select_db($Con, 'RegistrationData');
$query = mysqli_query($Con, "Select * FROM user");

$num_rows = mysqli_num_rows($query);




?>

