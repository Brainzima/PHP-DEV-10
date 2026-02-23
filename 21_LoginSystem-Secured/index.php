<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header("Location: login.php");
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Welcome Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    
  <div class="container bg-light p-5 mt-4">

  <div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                User Dashboard
            </div>
            <div class="card-body">
                <h1 class="card-title">Welcome <?php echo $_SESSION['user_name'] ?>,</h1>
                <hr>
                <img src="https://img.freepik.com/free-vector/stylish-welcome-lettering-banner-join-with-joy-happiness_1017-57675.jpg" alt="">
            </div>
            <div class="card-footer">
                <a href="logout.php" class="btn btn-secondary">Logout</a>
            </div>
        </div>
    </div>
  </div>

  </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>