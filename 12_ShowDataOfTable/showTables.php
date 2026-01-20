<?php
include 'dbconnect.php';

// query syntax
// mysqli_query(dbconnection, query);

// $query = "SHOW TABLES";
// mysqli_query($conn, $query);

$query = "SHOW TABLES";
$result = mysqli_query($conn, $query);
if($result){
    echo '<p>Success</p>';
}else{
    echo '<p>Error</p>';
}

// print_r() is used to show the array data of any variable 

// print_r($result);

echo '<pre>';
print_r($result);
echo '</pre>';

// mysqli_num_rows() is used to return the number of rows of any variable 
$nums = mysqli_num_rows($result);
echo '<pre>';
print_r($nums);
echo '</pre>';

// mysqli_fetch_all() is used to return the array
$fall = mysqli_fetch_all($result);
echo '<pre>';
print_r($fall);
echo '</pre>';

echo $fall[0][0]."<br>";
echo $fall[1][0]."<br>";
echo $fall[2][0]."<br>";
?>