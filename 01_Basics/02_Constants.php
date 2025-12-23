<?php
//declare the constants with define function
define("SITEURL","https://brainzima.com/");

// echo SITEURL;

const WEBSITENAME = "Brainzima Institute";

echo WEBSITENAME;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo WEBSITENAME ?></h1>
    <a href="<?php echo SITEURL ?>">Click Me</a>
</body>
</html>