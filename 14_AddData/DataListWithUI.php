<?php
include 'dbconnect.php';
$query = "SELECT * FROM employees_tbl";
$result = mysqli_query($conn, $query);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data From Table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5 p-5 bg-light">
        <h1 class="text-center">Employee Data</h1>
        <hr>
        <div class="row mt-4">
        <?php 
            while($data = mysqli_fetch_assoc($result)){
        ?>
            <div class="col-md-4 mb-3">
                <div class="card text-center bg-info-subtle">
                    <div class="card-body">
                        <h3 class="card-title"><?php echo $data['name'] ?></h3>
                        <p class="card-text">
                        <?php echo $data['email'] ?> <br>
                        <?php echo $data['mobile'] ?><br>
                        <span class="badge bg-info"><?php echo $data['role'] ?></span> <br>
                        <?php echo $data['address'] ?></p>
                    </div>
                </div>
            </div>
            <?php  } ?>
        </div>
    </div>
  </body>
</html>