<?php
include 'dbconnect.php';

$query = "SELECT * FROM employees_tbl";
$result = mysqli_query($conn, $query);
if ($result) {
    echo '<p>Success</p>';
} else {
    echo '<p>Error</p>';
}

while ($data = mysqli_fetch_assoc($result)) {
    echo $data['name']."<br>";
}
