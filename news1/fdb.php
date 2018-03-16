<?php
require "con.php";
$feedback=$_POSTp["add"];
$sql="INSERT INTO fd(id,feedback) VALUES('NULL','$feedback')";
$result=mysqli->query($sql) or die("Error");
echo "thanks for your comment";
header('Location:home.php');
?>
