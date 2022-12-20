<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "fn189";

$conn = mysqli_connect($server,$username,$password,$dbname);

if(!$conn){
    die("Failed to connect to the database" . mysqli_connect_error());
}else{
    return $conn;
}

?>


