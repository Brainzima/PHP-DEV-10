<?php include "header.php";

include "dbconnect.php";
$msg='';
// delete button integration
if (isset($_GET['delete'])) {
    $ref = $_GET['delete'];
    $query = "DELETE FROM users_tbl WHERE id=$ref";
    $result = mysqli_query($conn, $query);
    if ($result) {
        $msg = '<div class="alert alert-success">Data Deleted!</div>';
    } else {
        $msg = '<div class="alert alert-danger">Failed Deleted!</div>';
    }
}
?>

<div class="row mt-3">
<?php echo $msg; ?>

    <?php
    $query = "SELECT * FROM users_tbl";
    $result = mysqli_query($conn, $query);
    while ($data = mysqli_fetch_assoc($result)) {
    ?>

        <div class="col-md-3 mb-3">

            <div class="card shadow-sm border-0 h-100 bg-dark-subtle">
                <div class="card-body p-3">
                    <!-- Avatar & Name Row -->
                    <div class="d-flex align-items-center mb-2">
                        <div class="rounded-circle">
                            <img class="rounded-circle me-2" src="https://bifindr.com/placeholder/50" alt="">
                        </div>
                        <div>
                            <h6 class="mb-0 fw-bold text-dark"><?php echo $data['name'] ?></h6>
                            <?php
                            //this code is for the style based on status
                            $sClass = '';
                            switch ($data['status']) {
                                case 'Active':
                                    $sClass = 'bg-success';
                                    break;
                                case 'Inactive':
                                    $sClass = 'bg-secondary';
                                    break;
                                case 'Blocked':
                                    $sClass = 'bg-danger';
                                    break;
                                case 'Pending':
                                    $sClass = 'bg-info';
                                    break;
                            }
                            ?>
                            <span class="badge <?php echo $sClass ?> badge-sm"><?php echo $data['status'] ?></span>
                        </div>
                    </div>

                    <!-- Contact Info -->
                    <div class="mb-2">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-envelope text-muted me-2 fs-6"></i>
                            <span class="fw-medium small"><?php echo $data['email'] ?></span>
                        </div>
                    </div>

                    <!-- Mobile & Location -->
                    <div class="mb-2">
                        <div class="d-flex align-items-start small">
                            <i class="fas fa-phone text-muted me-2 mt-1"></i>
                            <span class="fw-medium"><?php echo $data['mobile'] ?></span>
                        </div>
                    </div>

                    <!-- Quick Info Row -->
                    <div class="row g-2 mb-2 small">
                        <div class="col-6">
                            <small class="text-muted d-block mb-1"><i class="fas fa-graduation-cap me-1"></i>Qualification</small>
                            <span class="badge text-bg-light px-2 py-1"><?php echo $data['qualification'] ?></span>
                        </div>
                        <div class="col-6">
                            <small class="text-muted d-block mb-1"><i class="fas fa-briefcase me-1"></i>Preference</small>
                            <span class="badge text-bg-light px-2 py-1"><?php echo $data['job_pf'] ?></span>
                        </div>
                    </div>

                    <!-- Footer with ID & Actions -->
                    <div class="d-flex justify-content-between align-items-center mt-2 pt-2 border-top">
                        <small class="text-muted">#<?php echo $data['id'] ?></small>
                        <div>
                            <a onclick="return confirm('Are you sure to delete this data?')" href="?delete=<?php echo $data['id'] ?>" class="btn btn-sm btn-outline-danger me-1">
                                <i class="fas fa-trash"></i>
                            </a>
                            <a onclick="return confirm('Are you sure to edit this data?')" href="edit-form.php?id=<?php echo $data['id'] ?>" class="btn btn-sm btn-outline-primary me-1">
                                <i class="fas fa-edit"></i>
                                </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    <?php } ?>

</div>


<?php include "footer.php"; ?>