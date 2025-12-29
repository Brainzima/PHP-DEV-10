<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="city" placeholder="Enter City name">
        <input type="password" name="pass" placeholder="Enter pass">
        <input type="submit" name="submit">
    </form>
    <h1><?php echo isset($_POST['city']) ? $_POST['city'] : 'Enter City'; ?></h1>
</body>
</html>