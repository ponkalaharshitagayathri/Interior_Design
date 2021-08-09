<?php
// Include config file
require_once "config.php";


mysqli_select_db($link,"inside_interior");
$sql="INSERT INTO sign_up (first_name,last_name,email,number,project_type,address,city,zipcode)
VALUES ('$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[number]','$_POST[projecttype]','$_POST[address]','$_POST[city]','$_POST[zip]');";
if(!mysqli_query($link,$sql)){
  die('Error:'.mysqli_error($link));
}
mysqli_close($link);
?>
<!doctype html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial=1">
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/inside_style.css">
<ul class="nav" style="left: 40%;">
 <li><a href="index.html" style="color: #b10a12;">HOME</a></li>
</ul>
<div class="header">
  <h1> Successfuly filled up with Crenditials </h1>
</div>
</head>
</html>
