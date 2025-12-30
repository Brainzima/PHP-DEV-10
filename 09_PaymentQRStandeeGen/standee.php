<?php
if(isset($_POST['generate'])){
    $bname = $_POST['bname']; 
    $upi = $_POST['upi'];
    $amt = $_POST['amt'] ?? 0;
    $upilink = $amt==0 ? "upi://pay?pa=".$upi : "upi://pay?pa=".$upi."%26am=".$amt;
    // $upilink = "upi://pay?pa=".$upi."%26am=100";
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Generator Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>


    <div class="container bg-light mt-5 p-5">
        <h1 class="text-center">Standee QR Generated</h1>

        <div class="text-center d-flex justify-content-center">
            <div class="card col-4">
                <div class="card-body">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f2/Google_Pay_Logo.svg/1024px-Google_Pay_Logo.svg.png" alt="" width="200">
                    <h3 class="card-title"><?php echo $bname; ?></h3>
                    <img src="https://quickchart.io/qr?size=300&margin=0&text=<?php echo $upilink; ?>" alt="">
                    <h5>UPI ID: <?php echo $upi; ?></h5>
                </div>
            </div>
        </div>

        <a href="generator.php" class="btn btn-secondary">Generate Another</a>

    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>

<?php
}else{
    header("Location: generator.php");
}
?>