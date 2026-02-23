<?php
session_start();
if(isset($_SESSION['user_id'])){
    header("Location: index.php");
}
include 'dbconnect.php';
$msg='';
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $emailQry = "SELECT * FROM users_tbl WHERE user_email = '$email'";
    $emailResult = mysqli_query($conn,$emailQry);
    if(mysqli_num_rows($emailResult) > 0){
        $data = mysqli_fetch_assoc($emailResult);

        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";
        // echo $data['user_password'];

        if(password_verify($password, $data['user_password'])){
            // echo "Password Matched";
            session_start();
            $_SESSION['user_id'] = $data['user_id'];
            $_SESSION['user_name'] = $data['user_name'];
            header("Location: index.php");
        }else{
            $msg = '<div class="alert alert-danger">Password is incorrect.</div>';
        }
        

    }else{
        $msg = '<div class="alert alert-danger">Email is not registed. Please Register First.</div>';
    }

}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>

    <div class="container bg-light p-5 mt-4">

        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        User Login Form
                    </div>
                    <div class="card-body">
                        <?php echo $msg; ?>
                        <form action="" method="post">
                            <div class="row mb-3">
                                <div class="col">
                                    <input type="email" class="form-control" placeholder="Email Address" name="email">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <input type="password" class="form-control" placeholder="Password" name="password">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <input type="submit" class="btn btn-primary" value="Login" name="login">
                                </div>
                            </div>
                        </form>

                    </div>
                    <div class="card-footer">
                        Don't have Account? <a href="register.php" class="btn btn-primary btn-sm">Register Now</a>
                    </div>
                </div>
            </div>
        </div>

    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>