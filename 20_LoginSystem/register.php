<?php
include 'dbconnect.php';
$msg='';
if(isset($_POST['register'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $query = "INSERT INTO users_tbl (user_name, user_email, user_mobile, user_password) VALUES('$name','$email', '$mobile', '$password')";
    $result = mysqli_query($conn, $query);
    if($result){
        $msg = '<div class="alert alert-success">Registered Successfully! <a href="login.php" class="btn btn-info btn-sm">Please Login</a></div>';
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Registration Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>

    <div class="container bg-light p-5 mt-4">

        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        User Registration Form
                    </div>
                    <div class="card-body">
                        <?php echo $msg; ?>
                        <form action="" method="post">
                            <div class="row mb-3">
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Name" name="name">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <input type="email" class="form-control" placeholder="Email Address" name="email">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <input type="tel" class="form-control" placeholder="Mobile" name="mobile">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <input type="password" class="form-control" placeholder="Password" name="password">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <input type="submit" class="btn btn-primary" value="Register" name="register">
                                </div>
                            </div>
                        </form>

                    </div>
                    <div class="card-footer">
                        Already have Account? <a href="login.php" class="btn btn-primary btn-sm">Login Now</a>
                    </div>
                </div>
            </div>
        </div>

    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>