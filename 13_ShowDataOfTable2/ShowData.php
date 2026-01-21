<?php
include 'dbconnect.php';

$query = "SELECT * FROM employees_tbl";
$result = mysqli_query($conn, $query);
if($result){
    echo '<p>Success</p>';
}else{
    echo '<p>Error</p>';
}

$fall = mysqli_fetch_all($result);
echo '<pre>';
print_r($fall);
echo '</pre>';

?>