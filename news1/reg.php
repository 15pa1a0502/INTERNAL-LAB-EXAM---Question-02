<?php
require "con.php";

$name=$_POST["name"];
$mob=$_POST["mn"];
$city=$_POST["city"];
$email=$_POST["email"];
$password=$_POST["password"];

$sql="INSERT INTO info (id,name,mob,city,email,password) VALUES('NULL','$name','$mob','$city','$email','$password')";
$result= $mysqli->query($sql) or die("ERor in loading");
echo "Sucessfully registered";
?>
<h1>Click here to <a href="login.php">LOGIN</a></h1>

