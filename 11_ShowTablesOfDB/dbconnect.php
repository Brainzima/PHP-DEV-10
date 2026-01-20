<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'batch_six';
$conn = mysqli_connect($host, $user, $password, $dbname);
if($conn){
    echo 'DB Connected!';
}