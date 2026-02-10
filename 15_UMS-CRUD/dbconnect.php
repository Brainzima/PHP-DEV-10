<?php
$host='localhost';
$user='root';
$password='';
$dbname='ums_crud';
$conn = mysqli_connect($host,$user,$password,$dbname);
// if($conn){
//     echo "Db Connected";
// }else{
//     echo "Failed to connect.";
// }

if(!$conn){
    echo "Failed to connect.";
}
?>