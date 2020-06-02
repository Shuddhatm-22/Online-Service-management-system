<?php
define('TITLE','Add New Product');
define ('PAGE','assets');
include('../dbconnection.php');
include('includes/header.php');

session_start();

if(isset($_SESSION['is_adminlogin'])){

    $aEmail=$_SESSION['aEmail'];

}
else{

    echo "<script>location.href='admin_login.php'</script>";
}


if(isset($_REQUEST['psubmit'])){

    if($_REQUEST['pname']=="" || $_REQUEST['pdop']=="" || $_REQUEST['pava']=="" || $_REQUEST['ptotal']=="" || $_REQUEST['poriginalprice']=="" || $_REQUEST['psellingprice']==""){

        $msg='<div class="alert alert-warning col-sm-6 ml-5 mt-2">All Fields are required</div';
    }
    else{

        $pname=$_REQUEST['pname'];
        $pdop=$_REQUEST['pdop'];
        $pava=$_REQUEST['pava'];
        $ptotal=$_REQUEST['ptotal'];
        $psellingprice=$_REQUEST['psellingprice'];
        $poriginalprice=$_REQUEST['poriginalprice'];

        $sql="INSERT INTO assets_tb (pname,pdop,pava,ptotal,poriginalprice,psellingprice) VALUES ('$pname','$pdop','$pava','$ptotal','$poriginalprice','$psellingprice')";

        if($conn->query($sql)==TRUE){

            $msg='<div class="alert alert-success col-sm-6 ml-5 mt-2">Added Successfully</div';


        }
        else{

            $msg='<div class="alert alert-warning col-sm-6 ml-5 mt-2">Unable To Add</div';
        }
    }
}


?>

<!-- Start 2nd col -->
<div class="col-sm-6 mt-5 mx-3 jumbotron">
    <h3 class="text-center">Add New Product</h3>
    <form action="" method="POST">

        <div class="form-group">
            <label for="pname">Product Name</label>
            <input type="text" class="form-control" name="pname" id="pname">
        </div>

        <div class="form-group">
            <label for="pdop">Date Of Purchase</label>
            <input type="date" class="form-control" name="pdop" id="pdop">
        </div>


        <div class="form-group">
            <label for="pava">Available</label>
            <input type="text" class="form-control" name="pava" id="pava" onkeypress="isInputNumber(event)">
        </div>

        <div class="form-group">
            <label for="ptotal">Total</label>
            <input type="text" class="form-control" name="ptotal" id="ptotal" onkeypress="isInputNumber(event)">
        </div>


        <div class="form-group">
            <label for="poriginalprice">Original Price Each</label>
            <input type="text" class="form-control" name="poriginalprice" id="poriginalprice" onkeypress="isInputNumber(event)">
        </div>


        <div class="form-group">
            <label for="psellingprice">Selling Price Each</label>
            <input type="text" class="form-control" name="psellingprice" id="psellingprice" onkeypress="isInputNumber(event)">
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-danger" id="psubmit" name="psubmit">Submit</button>
            <a href="assets.php" class="btn btn-secondary ml-3">Close</a>
        </div>
        
        <?php if(isset($msg)) echo $msg;  ?>

    </form>
</div>
<!-- End 2nd col -->

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
