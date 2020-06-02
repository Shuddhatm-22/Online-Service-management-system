<?php
define('TITLE','Requester');
define ('PAGE','requester');
include('../dbconnection.php');
include('includes/header.php');

session_start();

if(isset($_SESSION['is_adminlogin'])){

    $aEmail=$_SESSION['aEmail'];

}
else{

    echo "<script>location.href='admin_login.php'</script>";
}

if(isset($_REQUEST['reqsubmit'])){

    if($_REQUEST['r_name']=="" || $_REQUEST['r_email']=="" || $_REQUEST['r_pass']==""){

        $msg='<div class="alert alert-warning col-sm-6 ml-5 mt-2">All Fields are required</div';
    }
    else{

        $rname=$_REQUEST['r_name'];
        $remail=$_REQUEST['r_email'];
        $rpass=$_REQUEST['r_pass'];

        $sql="INSERT INTO requesterlogin_db (r_name,r_email,r_password) VALUES ('$rname','$remail','$rpass')";

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
    <h3 class="text0center">Add New Requester</h3>
    <form action="" method="POST">
        <div class="form-group">
            <label for="r_name">Name</label>
            <input type="text" name="r_name" id="r_name" class="form-control">
        </div>

        <div class="form-group">
            <label for="r_email">Email</label>
            <input type="email" name="r_email" id="r_email" class="form-control">
        </div>

        <div class="form-group">
            <label for="r_pass">Password</label>
            <input type="password" name="r_pass" id="r_pass" class="form-control">
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-danger" id="reqsubmit" name="reqsubmit">Submit</button>

            <a href="requester.php" class="btn btn-secondary"> Close</a>


        </div>

        <?php if(isset($msg)) echo $msg; ?>


    </form>
</div>

<?php
include('includes/footer.php');
?>
