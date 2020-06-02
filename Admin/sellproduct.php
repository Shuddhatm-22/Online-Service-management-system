<?php
define('TITLE','Sell Product');
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

    if($_REQUEST['pname']=="" || $_REQUEST['cname']=="" || $_REQUEST['cadd']=="" ||  $_REQUEST['pquantity']==""  || $_REQUEST['totalcost']=="" || $_REQUEST['psellingprice']=="" || $_REQUEST['inputDate']==""){

            $msg='<div class="alert alert-warning col-sm-6 ml-5 mt-2">All Fields are required</div';
        }
         else{

    $pid=$_REQUEST['pid'];
    $pava=$_REQUEST['pava']-$_REQUEST['pquantity'];


    $cname=$_REQUEST['cname'];
    $cadd=$_REQUEST['cadd'];
    $cpname=$_REQUEST['pname'];
    $cpeach=$_REQUEST['psellingprice'];
    $cpquantity=$_REQUEST['pquantity'];
    $cpdate=$_REQUEST['inputDate'];
    $cptotal=$_REQUEST['totalcost'];

    $sql="INSERT INTO customer_tb(custname,custadd,cpname,cpquantity,cpeach,cptotal,cpdate ) VALUES('$cname','$cadd','$cpname','$cpquantity','$cpeach','$cptotal','$cpdate')";

    if($conn->query($sql)==TRUE){

        $genid=mysqli_insert_id($conn);
        session_start();

        $_SESSION['myid']=$genid;
        echo "<script>location.href='productsellsuccess.php'</script>";
    }


    $sqlup="UPDATE assets_tb SET pava='$pava' WHERE pid='$pid'";

    $conn->query($sqlup);


}


}

?>


<?php

    if(isset($_REQUEST['sell'])){

        

    $sql="SELECT * FROM assets_tb WHERE pid={$_REQUEST['id']}";

    $result=$conn->query($sql);

    $row=$result->fetch_assoc();

     if($row['pava']==0){

        
        
      
        echo "<script>location.href='assets.php'</script>";
          
        }


    }

    
    ?>



<!-- Start 2nd col -->
<div class="col-sm-6 mt-5 mx-3 jumbotron">
    <h3 class="text-center">Customer Bill</h3>
    <form action="" method="POST">

        <div class="form-group">
            <label for="pid">Product ID</label>
            <input type="text" class="form-control" name="pid" id="pid" value="<?php  if(isset($row['pid'])) echo $row['pid']; ?>" readonly>
        </div>

        <div class="form-group">
            <label for="cname">Customer Name</label>
            <input type="text" class="form-control" id="cname" name="cname">
        </div>


        <div class="form-group">
            <label for="cadd">Customer Address</label>
            <input type="text" class="form-control" id="cadd" name="cadd">
        </div>


        <div class="form-group">
            <label for="pname">Product Name</label>
            <input type="text" class="form-control" name="pname" id="pname" value="<?php  if(isset($row['pname'])) echo $row['pname']; ?>"   >
        </div>

        <div class="form-group">
            <label for="pava">Available</label>
            <input type="text" class="form-control" name="pava" id="pava" onkeypress="isInputNumber(event)" value="<?php  if(isset($row['pava'])) echo $row['pava']; ?>" readonly>
        </div>

        <div class="form-group">
            <label for="pquantity">Quantity</label>
            <input type="text" class="form-control" id="pquantity" name="pquantity" onkeypress="isInputNumber(event)">
        </div>


        <div class="form-group">
            <label for="psellingprice">Price Each</label>
            <input type="text" class="form-control" name="psellingprice" id="psellingprice" onkeypress="isInputNumber(event)" value="<?php  if(isset($row['psellingprice'])) echo $row['psellingprice']; ?>">
        </div>

        <div class="form-group">
            <label for="totalcost">Total Price</label>
            <input type="text" class="form-control" id="totalcost" name="totalcost" onkeypress="isInputNumber(event)">
        </div>


        <div class="form-group">
            <label for="inputDate">Date</label>
            <input type="date" class="form-control" id="inputDate" name="inputDate" onkeypress="isInputNumber(event)">
        </div>

        

        <div class="text-center">
            <button type="submit" class="btn btn-danger" id="psubmit" name="psubmit">Submit</button>
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
