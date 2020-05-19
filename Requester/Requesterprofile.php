<?php
define('TITLE' ,"Requester Profile");
define('PAGE' ,"Requesterprofile");
include('includes/header.php');
include("../dbconnection.php");

session_start();

if($_SESSION['is_login']){

    $rEmail=$_SESSION['rEmail'];

}else{

    echo "<script> location.href='Requester_login.php' </script>";
}

$sql="SELECT r_name,r_email FROM requesterlogin_db WHERE r_email= '$rEmail' ";

$result=$conn->query($sql);

if($result->num_rows==1){

    $row=$result->fetch_assoc();
    $rName=$row['r_name'];
    

}

if(isset($_REQUEST['update'])){

    if($_REQUEST['rName']==""){

        $passmsg= '<div class="alert alert-warning col-sm-6 ml-3 mt-2 role="alert"> Fill All Fields</div>';
        
    }
    else{

        $rName=$_REQUEST['rName'];

        $sql="UPDATE requesterlogin_db SET r_name= '$rName' WHERE r_email='$rEmail'";

        if($conn->query($sql)==TRUE){

            $passmsg='<div class="alert alert-success col-sm-6 ml-3 mt-2 role="alert"> Updated Successfully</div>';
        }
        else{

            $passmsg='<div class="alert alert-danger col-sm-6 ml-3 mt-2 role="alert"> Unable to update</div>';
        }
    }
}





?>








        <!-- start Profile area 2nd column -->
        <div class="col-sm-6 mt-5 ">
          <form action="" method="POST" class="mx-5" >
            <div class="form-group">
              <label for="rEmail">Email</label
              ><input
                class="form-control"
                type="email"
                name="rEmail"
                id="rEmail"
                value="<?php echo $rEmail ?>"
                readonly
              />
            </div>

            <div class="form-group">
              <label for="rName">Name</label
              ><input
                class="form-control"
                type="text"
                name="rName"
                id="rName"
                value="<?php echo $rName ?>"
              />
            </div>
            <button type="submit" class="btn btn-danger" name="update">Update</button>
            <?php if(isset($passmsg)) echo $passmsg; ?>
          </form>
        </div>
        <!-- end Profile area 2nd column -->
      <?php

    include('includes/footer.php');
?>
