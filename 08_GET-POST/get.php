<?php
// $name = $_GET['name'];
// echo $name;

// handle error of undefined using isset()
$name = isset($_GET['name']) ? $_GET['name'] : '';
// echo $name;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello <?php echo $name == '' ? 'Aliens' : $name; ?>.</h1>

    <h1>Hello <?php echo isset($_GET['name']) ? $_GET['name'] : 'Aliens'; ?>.</h1>


    <form action="" method="get">
        <input type="text" name="city" placeholder="Enter City name">
        <input type="password" name="pass" placeholder="Enter pass">
        <input type="submit" name="submit">
    </form>
    <h1><?php echo isset($_GET['city']) ? $_GET['city'] : 'Enter City'; ?></h1>
</body>
</html>