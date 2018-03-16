<?php
    $host="localhost";
    $user="root";
    $password="";
    $db="news";
    $mysqli = new mysqli($host,$user,$password,$db);
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL:";
        }
?>
