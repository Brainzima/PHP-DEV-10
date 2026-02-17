<?php
include 'header.php';
include 'dbconnect.php';
$msg ='';
// handle delete function
if(isset($_GET['delete']) && !empty($_GET['delete'])){
    $ref = $_GET['delete'];
    $query = "DELETE FROM tasks_tbl WHERE task_id=$ref";
    $result = mysqli_query($conn, $query);
    if($result){
        $msg = '<div class="alert alert-success">Data Deleted Successfully!</div>';
    }else{
        $msg = '<div class="alert alert-danger">Failed to Delete!</div>';
    }
}else if(isset($_GET['delete']) && empty($_GET['delete'])){
    $msg = '<div class="alert alert-danger">Click on valid Delete Btn! <a href="index.php">Cancel</a></div>';
}else{
    $msg='';
}


//handle status function
if(isset($_GET['status']) && isset($_GET['ref'])){
    $status = $_GET['status'];
    $ref = $_GET['ref'];
    $query = "UPDATE tasks_tbl SET task_status='$status' WHERE task_id=$ref";
    $result = mysqli_query($conn, $query);
    if($result){
        $msg = '<div class="alert alert-success">Status Updated Successfully!</div>';
    }else{
        $msg = '<div class="alert alert-danger">Failed to update status!</div>';
    }
}
?>
<div class="row mt-2">
    <div class="col-3 border rounded-5 p-3 text-center">
        <h3>Priority:</h3>
        <a href="?priority=all" class="btn btn-primary">All</a>
        <a href="?priority=high" class="btn btn-danger">High</a>
        <a href="?priority=medium" class="btn btn-info">Medium</a>
        <a href="?priority=low" class="btn btn-secondary">Low</a>
    </div>
</div>
<div class="row mt-3">
    <?php echo $msg; ?>
    <?php
    if(isset($_GET['priority']) && $_GET['priority'] != 'all'){
        $priority = $_GET['priority'];
        $query = "SELECT * FROM tasks_tbl WHERE task_priority = '$priority'";
    }else{
        $query = "SELECT * FROM tasks_tbl";
    }
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) > 0){
    while ($data = mysqli_fetch_assoc($result)) {
    ?>
        <div class="col-md-4 mb-2">
            <div class="card h-100 shadow-sm task-card" style="transition: transform 0.2s, box-shadow 0.2s;">
                <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                    <h6 class="mb-0"><i class="fas fa-tasks me-2"></i>Task #<?php echo $data['task_id'] ?></h6>
                    <span class="badge bg-light text-primary">
                        <?php
                        if ($data['task_status'] == 'Pending') {
                            echo   '<a href="?status=Progress&ref='.$data["task_id"].'" class="btn btn-sm btn-outline-info">Progress</a>';
                        } else if ($data['task_status'] == 'Progress') {
                            echo '<a href="?status=Completed&ref='.$data["task_id"].'" class="btn btn-sm btn-outline-success">Completed</a>';
                        } else {
                            echo '<i class="fa fa-check btn btn-outline-link-success"></i>';
                        }
                        ?>
                    </span>
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?php echo $data['task_title'] ?></h5>
                    <p class="card-text"><?php echo $data['task_description'] ?></p>
                    <ul class="list-unstyled mb-3">
                        <li class="d-flex justify-content-between">
                            <span class="text-muted"><i class="fas fa-flag me-1"></i>Priority:</span>
                            <?php
                            switch ($data['task_priority']) {
                                case 'low':
                                    $pClass = 'bg-secondary';
                                    break;
                                case 'medium':
                                    $pClass = 'bg-info';
                                    break;
                                case 'high':
                                    $pClass = 'bg-danger';
                                    break;
                            }
                            ?>
                            <span class="badge <?php echo $pClass ?>"><?php echo $data['task_priority'] ?></span>
                        </li>
                        <li class="d-flex justify-content-between">
                            <span class="text-muted"><i class="fas fa-calendar-check me-1"></i>Due:</span>
                            <span class="fw-bold"><?php echo date('d-m-Y', strtotime($data['task_due_date'])) ?></span>
                        </li>
                        <li class="d-flex justify-content-between">
                            <span class="text-muted"><i class="fas fa-info-circle me-1"></i>Status:</span>
                            <?php
                            switch ($data['task_status']) {
                                case 'Pending':
                                    $sClass = 'bg-warning';
                                    break;
                                case 'Progress':
                                    $sClass = 'bg-primary';
                                    break;
                                case 'Completed':
                                    $sClass = 'bg-success';
                                    break;
                            }
                            ?>
                            <span class="badge <?php echo $sClass ?>"><?php echo $data['task_status'] ?></span>
                        </li>
                    </ul>
                </div>
                <div class="card-footer bg-transparent">
                    <small class="text-muted">
                        <i class="fas fa-clock me-1"></i>Created: <?php echo date('d-m-Y g:i A', strtotime($data['created_at'])) ?> <br>
                        <?php
                        if ($data['updated_at']) {
                        ?>
                            <i class="fas fa-sync-alt me-1"></i>Last Updated: <?php echo date('d-m-Y g:i A', strtotime($data['updated_at'])) ?>
                        <?php
                        }
                        ?>
                    </small>
                    <div class="mt-2">
                        <a href="?delete=<?php echo $data['task_id'] ?>" class="btn btn-danger">
                            <i class="fa fa-trash"></i>
                        </a>
                        <a class="btn btn-primary">
                            <i class="fa fa-edit"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
    }else{
        ?>
        <div class="card bg-danger-subtle">
            <div class="card-body text-center ">
                <h1 class="card-title">No Data Found!.</h1>
            </div>
        </div>
        <?php
    }
    ?>
</div>

<?php
include 'footer.php';
?>


<!-- 
echo date("F j, Y, g:i a") . "\n";                 // March 10, 2001, 5:16 pm
echo date("m.d.y") . "\n";                         // 03.10.01
echo date("j, n, Y") . "\n";                       // 10, 3, 2001
echo date("Ymd") . "\n";                           // 20010310
echo date('h-i-s, j-m-y, it is w Day') . "\n";     // 05-16-18, 10-03-01, 1631 1618 6 Satpm01
echo date('\i\t \i\s \t\h\e jS \d\a\y.') . "\n";   // it is the 10th day.
echo date("D M j G:i:s T Y") . "\n";               // Sat Mar 10 17:16:18 MST 2001
echo date('H:m:s \m \i\s\ \m\o\n\t\h') . "\n";     // 17:03:18 m is month
echo date("H:i:s") . "\n";                         // 17:16:18
echo date("Y-m-d H:i:s") . "\n";                   // 2001-03-10 17:16:18 (the MySQL DATETIME format) 
-->