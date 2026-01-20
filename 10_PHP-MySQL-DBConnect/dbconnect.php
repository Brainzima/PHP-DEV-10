<?php

// connection syntax
// mysqli_connect(hostname, username, password, database);


// $host = 'localhost';
// $user = 'root';
// $password = '';
// $dbname = 'batch_six';

// mysqli_connect($host, $user, $password, $dbname);


// condition check for dbconnection
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'batch_six';

$conn = mysqli_connect($host, $user, $password, $dbname);

if($conn){
    echo 'DB Connected';
}

?>