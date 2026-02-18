<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'login-system';
$conn = mysqli_connect($host, $user, $password, $dbname);
if(!$conn){
    echo "Failed to connectDB";
}
?>