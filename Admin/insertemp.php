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

if(isset($_REQUEST['empsubmit'])){

    if($_REQUEST['emp_name']=="" || $_REQUEST['emp_email']=="" || $_REQUEST['emp_city']=="" || $_REQUEST['emp_mobile']==""){

        $msg='<div class="alert alert-warning col-sm-6 ml-5 mt-2">All Fields are required</div';
    }
    else{

        $empname=$_REQUEST['emp_name'];
        $empemail=$_REQUEST['emp_email'];
        $empcity=$_REQUEST['emp_city'];
        $empmobile=$_REQUEST['emp_mobile'];

        $sql="INSERT INTO technician_tb (emp_name,emp_city,emp_mobile,emp_email) VALUES ('$empname','$empcity','$empmobile','$empemail')";

        if($conn->query($sql)==TRUE){

            $msg='<div class="alert alert-success col-sm-6 ml-5 mt-2">Added Successfully</div';


        }
        else{

            $msg='<div class="alert alert-warning col-sm-6 ml-5 mt-2">Unable To Add</div';
        }
    }
}



?>

<!-- start col 2nd -->

<div class="col-sm-6 mt-5 mx-3 jumbotron">
    <h3 class="text0center">Add New Technician</h3>
    <form action="" method="POST">
        <div class="form-group">
            <label for="emp_name">Name</label>
            <input type="text" name="emp_name" id="emp_name" class="form-control">
        </div>


        <div class="form-group">
            <label for="emp_city">City</label>
            <input type="text" name="emp_city" id="emp_city" class="form-control">
        </div>


        <div class="form-group">
            <label for="emp_mobile">Mobile</label>
            <input type="text" name="emp_mobile" id="emp_mobile" class="form-control" onkeypress="isInputNumber(event)">
        </div>

        <div class="form-group">
            <label for="emp_email">Email</label>
            <input type="email" name="emp_email" id="emp_email" class="form-control">
        </div>

      
        <div class="text-center">
            <button type="submit" class="btn btn-danger" id="empsubmit" name="empsubmit">Submit</button>

            <a href="technician.php" class="btn btn-secondary"> Close</a>


        </div>

        <?php if(isset($msg)) echo $msg; ?>


    </form>
</div>

<!-- Only Number for Input Fields -->
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
