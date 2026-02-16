<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'task_manager';
$conn = mysqli_connect($host, $user, $password, $dbname);
if(!$conn){
    echo "Failed to ConnectDB";
}