<?php include "header.php";

include "dbconnect.php";

$ref = $_GET['id'];
$query = "SELECT * FROM users_tbl WHERE id=$ref";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($result);

//edit form php code:
$msg='';
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];
    $status = $_POST['status'];
    $job = $_POST['job'];
    $qualification = $_POST['qualification'];

    $query = "UPDATE `users_tbl` SET `name`='$name',`email`='$email',`mobile`='$mobile',`address`='$address',`qualification`='$qualification',`job_pf`='$job',`status`='$status' WHERE id=$ref";

    $result = mysqli_query($conn, $query);
    if($result){
        $msg = "<div class='alert alert-success'>Data Updated Successfully!</div>";
    }else{
        $msg = "<div class='alert alert-danger'>Failed to Update!</div>";
    }
}

?>
<h1 class="text-center">Edit Form</h1>
<form action="" method="post" class="p-5">
    <?php echo $msg; ?>
    <div class="row mb-2">
        <div class="col">
            <input type="text" name="name" class="form-control" placeholder="Full Name" value="<?php echo $data['name'] ?>">
        </div>
    </div>
    <div class="row mb-2">
        <div class="col-md-6">
            <input type="email" name="email" class="form-control" placeholder="Email Address" value="<?php echo $data['email'] ?>">
        </div>
        <div class="col-md-6">
            <input type="tel" name="mobile" class="form-control" placeholder="Mobile" value="<?php echo $data['mobile'] ?>">
        </div>
    </div>
    <div class="row mb-2">
        <div class="col">
            <textarea name="address" id="" placeholder="Full Address" class="form-control" rows="5"><?php echo $data['address'] ?></textarea>
        </div>
    </div>
    <div class="row mb-2">
        <div class="col-md-4">
            <input type="text" name="qualification" class="form-control" placeholder="Qualification" value="<?php echo $data['qualification'] ?>">
        </div>
        <div class="col-md-4">
            <input type="text" name="job" class="form-control" placeholder="Job Preference ex: Developer" value="<?php echo $data['job_pf'] ?>">
        </div>
        <div class="col-md-4">
            <select name="status" id="" class="form-select">
                <option value="Pending" <?php echo $data['status']=='Pending'? 'selected':''; ?>>Pending</option>
                <option value="Active" <?php echo $data['status']=='Active'? 'selected':''; ?>>Active</option>
                <option value="Inactive" <?php echo $data['status']=='Inactive'? 'selected':''; ?>>Inactive</option>
                <option value="Blocked" <?php echo $data['status']=='Blocked'? 'selected':''; ?>>Blocked</option>
            </select>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col text-center">
            <input type="submit" name="submit" value="Submit the Form to Update" class="btn btn-primary">
        </div>
    </div>
</form>


<?php include "footer.php"; ?>