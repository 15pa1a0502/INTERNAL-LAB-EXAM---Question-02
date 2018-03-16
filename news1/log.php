<?php
session_start();
include "con.php";
if(isset($_POST['sub']))
    $user=$_POST['uname'];
    $password=$_POST['psw'];
$sql="SELECT * FROM info WHERE email='$user' and password='$password'";
$result=$mysqli->query($sql) or die("Error occured ".$sql);
if($result->num_rows>0) {
    
    $_SESSION['uname']=$uname;
    header('Location:home.php');
    
}
else{
    echo "<p>INVALID Details</p>";
}
$mysqli->close();
?>  
