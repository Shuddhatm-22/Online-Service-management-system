<?php
define('TITLE','Update Product');
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

?>

<?php

    if(isset($_REQUEST['edit'])){

    $sql="SELECT * FROM assets_tb WHERE pid={$_REQUEST['id']}";

    $result=$conn->query($sql);

    $row=$result->fetch_assoc();
    }

    if(isset($_REQUEST['pupdate'])){

        if($_REQUEST['pname']=="" || $_REQUEST['pdop']=="" || $_REQUEST['pava']=="" || $_REQUEST['ptotal']=="" || $_REQUEST['poriginalprice']=="" || $_REQUEST['psellingprice']==""){

            $msg='<div class="alert alert-warning col-sm-6 ml-5 mt-2">All Fields are required</div';
        }
        else{

            $pid=$_REQUEST['pid'];
            $pname=$_REQUEST['pname'];
            $pdop=$_REQUEST['pdop'];
            $pava=$_REQUEST['pava'];
            $ptotal=$_REQUEST['ptotal'];
            $psellingprice=$_REQUEST['psellingprice'];
            $poriginalprice=$_REQUEST['poriginalprice'];

        $sql="UPDATE assets_tb SET  pname='$pname',pdop='$pdop',pava='$pava',ptotal='$ptotal',poriginalprice='$poriginalprice' ,psellingprice='$psellingprice'WHERE pid='$pid' ";

        if($conn->query($sql)==TRUE){

             $msg='<div class="alert alert-success col-sm-6 ml-5 mt-2">Updated successfully</div';
        }
        else{

             $msg='<div class="alert alert-danger col-sm-6 ml-5 mt-2">Unable to Update</div';
        }


        }
    }

    ?>


    
<!-- Start 2nd col -->
<div class="col-sm-6 mt-5 mx-3 jumbotron">
    <h3 class="text-center">Update Product Details</h3>
    <form action="" method="POST">

        <div class="form-group">
            <label for="pid">Product ID</label>
            <input type="text" class="form-control" name="pid" id="pid" value="<?php  if(isset($row['pid'])) echo $row['pid']; ?>" readonly>
        </div>


        <div class="form-group">
            <label for="pname">Product Name</label>
            <input type="text" class="form-control" name="pname" id="pname" value="<?php  if(isset($row['pname'])) echo $row['pname']; ?>"  >
        </div>

        <div class="form-group">
            <label for="pdop">Date Of Purchase</label>
            <input type="date" class="form-control" name="pdop" id="pdop" value="<?php  if(isset($row['pdop'])) echo $row['pdop']; ?>" >
        </div>


        <div class="form-group">
            <label for="pava">Available</label>
            <input type="text" class="form-control" name="pava" id="pava" onkeypress="isInputNumber(event)" value="<?php  if(isset($row['pava'])) echo $row['pava']; ?>" >
        </div>

        <div class="form-group">
            <label for="ptotal">Total</label>
            <input type="text" class="form-control" name="ptotal" id="ptotal" onkeypress="isInputNumber(event)" value="<?php  if(isset($row['ptotal'])) echo $row['ptotal']; ?>" >
        </div>


        <div class="form-group">
            <label for="poriginalprice">Original Price Each</label>
            <input type="text" class="form-control" name="poriginalprice" id="poriginalprice" onkeypress="isInputNumber(event)" value="<?php  if(isset($row['poriginalprice'])) echo $row['poriginalprice']; ?>" >
        </div>


        <div class="form-group">
            <label for="psellingprice">Selling Price Each</label>
            <input type="text" class="form-control" name="psellingprice" id="psellingprice" onkeypress="isInputNumber(event)" value="<?php  if(isset($row['psellingprice'])) echo $row['psellingprice']; ?>">
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-danger" id="pupdate" name="pupdate">Submit</button>
            <a href="assets.php" class="btn btn-secondary ml-3">Close</a>
        </div>
        
        <?php if(isset($msg)) echo $msg;  ?>

    </form>
</div>
<!-- End 2nd col -->

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
