<?php
define('TITLE','Update Technician');
define ('PAGE','technician');
include('../dbconnection.php');
include('includes/header.php');

session_start();

if(isset($_SESSION['is_adminlogin'])){

    $aEmail=$_SESSION['aEmail'];

}
else{

    echo "<script>location.href='admin_login.php'</script>";
}

?>

<!-- Start 2nd col -->
<div class="col-sm-6 mt-5 mx-3 jumbotron">
    <h3 class="text-center">Update Technician Details</h3>

    <?php

    if(isset($_REQUEST['edit'])){

    $sql="SELECT * FROM technician_tb WHERE emp_id={$_REQUEST['id']}";

    $result=$conn->query($sql);

    $row=$result->fetch_assoc();
    }

    if(isset($_REQUEST['empupdate'])){

        if($_REQUEST['emp_name']=="" || $_REQUEST['emp_city']=="" || $_REQUEST['emp_mobile']=="" || $_REQUEST['emp_email']==""){

            $msg='<div class="alert alert-warning col-sm-6 ml-5 mt-2">All Fields are required</div';
        }
        else{

            $empid=$_REQUEST['emp_id'];
            $empname=$_REQUEST['emp_name'];
            $empcity=$_REQUEST['emp_city'];
            $empmobile=$_REQUEST['emp_mobile'];
            $empemail=$_REQUEST['emp_email'];

        $sql="UPDATE technician_tb SET  emp_name='$empname',emp_city='$empcity',emp_mobile='$empmobile',emp_email='$empemail' WHERE emp_id='$empid'";

        if($conn->query($sql)==TRUE){

             $msg='<div class="alert alert-success col-sm-6 ml-5 mt-2">Updated successfully</div';
        }
        else{

             $msg='<div class="alert alert-danger col-sm-6 ml-5 mt-2">Unable to Update</div';
        }


        }
    }

    ?>

    <form action="" method="POST">
        <div class="form-group">
            <label for="emp_id">Emp ID</label>
            <input type="text" name="emp_id" id="emp_id" class="form-control" value="<?php if(isset($row['emp_id'])) echo $row['emp_id']; ?>" readonly>
        </div>


        <div class="form-group">
            <label for="emp_name">Name</label>
            <input type="text" name="emp_name" id="emp_name" class="form-control" value="<?php if(isset($row['emp_name'])) echo $row['emp_name']; ?>">
        </div>


        <div class="form-group">
            <label for="emp_city">City</label>
            <input type="text" name="emp_city" id="emp_city" class="form-control" value="<?php if(isset($row['emp_city'])) echo $row['emp_city']; ?>">
        </div>


        <div class="form-group">
            <label for="emp_mobile">Mobile</label>
            <input type="text" name="emp_mobile" id="emp_mobile" class="form-control" value="<?php if(isset($row['emp_mobile'])) echo $row['emp_mobile']; ?>" onleypress="isInputNumber(event)">
        </div>


        <div class="form-group">
            <label for="emp_email">Email</label>
            <input type="email" name="emp_email" id="emp_email" class="form-control" value="<?php if(isset($row['emp_email'])) echo $row['emp_email']; ?>">
        </div>
        
        <div class="text-center">
            <button type="submit" class="btn btn-danger" id="empupdate" name="empupdate">Update</button>

            <a href="requester.php" class="btn btn-secondary">Close</a>
        </div>

        <?php  if(isset($msg)) echo $msg; ?>



    </form>
    
</div><!-- end 2nd col -->

<script>
    function isInputNumber(evt){
        var ch=String.fromCharCode(evt.which);
        if(!(/[0-9]/.test(ch))){
            evt.preventDefault();
        }
    }
</script>


<?php
include('includes/footer.php');
?>
