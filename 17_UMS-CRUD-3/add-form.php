<?php include "header.php";

include "dbconnect.php";

//add form php code:
$msg='';
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];
    $status = $_POST['status'];
    $job = $_POST['job'];
    $qualification = $_POST['qualification'];

    $query = "INSERT INTO `users_tbl`(`name`, `email`, `mobile`, `address`, `qualification`, `job_pf`, `status`) VALUES ('$name', '$email', '$mobile', '$address', '$qualification', '$job', '$status')";

    $result = mysqli_query($conn, $query);
    if($result){
        $msg = "<div class='alert alert-success'>Data Added Successfully!</div>";
    }else{
        $msg = "<div class='alert alert-danger'>Failed to add!</div>";
    }
}

?>
<h1 class="text-center">Add New Form</h1>
<form action="" method="post" class="p-5">
    <?php echo $msg; ?>
    <div class="row mb-2">
        <div class="col">
            <input type="text" name="name" class="form-control" placeholder="Full Name">
        </div>
    </div>
    <div class="row mb-2">
        <div class="col-md-6">
            <input type="email" name="email" class="form-control" placeholder="Email Address">
        </div>
        <div class="col-md-6">
            <input type="tel" name="mobile" class="form-control" placeholder="Mobile">
        </div>
    </div>
    <div class="row mb-2">
        <div class="col">
            <textarea name="address" id="" placeholder="Full Address" class="form-control" rows="5"></textarea>
        </div>
    </div>
    <div class="row mb-2">
        <div class="col-md-4">
            <input type="text" name="qualification" class="form-control" placeholder="Qualification">
        </div>
        <div class="col-md-4">
            <input type="text" name="job" class="form-control" placeholder="Job Preference ex: Developer">
        </div>
        <div class="col-md-4">
            <select name="status" id="" class="form-select">
                <option value="Pending" selected disabled>Select Status</option>
                <option value="Active">Active</option>
                <option value="Inactive">Inactive</option>
                <option value="Blocked">Blocked</option>
                <option value="Pending">Pending</option>
            </select>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col text-center">
            <input type="submit" name="submit" value="Submit the Form" class="btn btn-primary">
        </div>
    </div>
</form>


<?php include "footer.php"; ?>