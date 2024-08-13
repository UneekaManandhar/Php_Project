<?php
$name = "localhost";
$uname = "root";
$password = "";
$db_name = "test_db";

$conn = mysqli_connect($name, $uname, $password, $website);

if(!conn){
    echo "connection failed";
}
?>