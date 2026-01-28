<?php
include 'dbconnect.php';
$msg='';
if(isset($_POST['addEmp'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $mobile = $_POST['mobile'];
    $role = $_POST['role'];
    $status = $_POST['status'];
    $empid = $_POST['empid'];
    $salary = $_POST['salary'];

    $qry = "INSERT INTO employees_tbl (emp_id, name, email, mobile, role, address, salary, status) VALUES($empid, '$name', '$email', '$mobile', '$role', '$address', '$salary', '$status')";
    $res = mysqli_query($conn, $qry);
    if($res){
        $msg = '<div class="alert alert-success" role="alert">
                    Employee Data Added Successfully! <a href="DataListWithUI.php" class="btn btn-secondary">View Data</a>
                </div>'; 
    }else{
        $msg = '<div class="alert alert-danger" role="alert">
                    Employee Data adding error!
                </div>'; 
    }

}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Data Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>

  <div class="container mt-5 p-5 bg-light">
    <h1 class="text-center">Add Employee Form</h1>
    <?php
        echo $msg;
    ?>
    <form action="" method="post">

    <div class="row mt-5">
        <div class="col-md-3">
            <input type="number" class="form-control" name="empid" placeholder="Emp ID" required>
        </div>
        <div class="col-md-3">
            <select name="role" class="form-select">
                <option selected disabled>Select Role</option>
                <option value="Developer">Developer</option>
                <option value="Designer">Designer</option>
                <option value="DevOps">DevOps</option>
                <option value="Security Eng">Security Eng</option>
                <option value="Manager">Manager</option>
                <option value="Assistant">Assistant</option>
                <option value="HR">HR</option>
                <option value="Peon">Peon</option>
                <option value="Other">Other</option>
            </select>
        </div>
        <div class="col-md-3">
            <input type="number" class="form-control" name="salary" placeholder="Salary" required>
        </div>
        <div class="col-md-3">
            <select name="status" class="form-select">
                <option selected disabled>Select Status</option>
                <option value="Active">Active</option>
                <option value="Inactive">Inactive</option>
                <option value="Pending">Pending</option>
            </select>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col">
            <input type="text" class="form-control" name="name" placeholder="Full Name" required>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-md-6">
            <input type="email" class="form-control" name="email" placeholder="Email Address" required>
        </div>
        <div class="col-md-6">
            <input type="tel" class="form-control" name="mobile" placeholder="Mobile" required>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col">
            <textarea type="text" class="form-control" name="address" placeholder="Full Address" rows="5" required></textarea>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col text-center">
            <input type="submit" value="Add Employee" class="btn btn-primary rounded-2" name="addEmp">
        </div>
    </div>


    </form>
  </div>





  </body>
</html>