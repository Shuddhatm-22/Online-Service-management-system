<?php
    define('TITLE' ,"Change Password");
    define('PAGE' ,"change_pass");
    include('includes/header.php');
    include('../dbconnection.php');

    session_start();

    if($_SESSION['is_login']){

        $rEmail=$_SESSION['rEmail'];

    }else{

        echo "<script> location.href='Requester_login.php' </script>";
    }

    if(isset($_REQUEST['passupdate'])){

        $rEmail=$_SESSION['rEmail'];

        if($_REQUEST['rPassword']==""){

            $passmsg='<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill All Fields</div>';
        }
        else{

            $rPass=$_REQUEST['rPassword'];
            $sql="UPDATE requesterlogin_db SET r_password='$rPass' WHERE r_email='$rEmail'";

            if($conn->query($sql)==TRUE){

                $passmsg='<div class="alert alert-success col-sm-6 ml-5 mt-2">Updated Successfully</div>';
                
            }
            else{

                $passmsg='<div class="alert alert-danger col-sm-6 ml-5 mt-2">Unable to update</div>';

            }
        }
    }
    
    
?>

<div class="col-sm-4 md-5"><!-- Start user change password from 2nd col -->
    <form action="" method="POST" class="mt-5 mx-5">
        <div class="form-group">
            <label for="inputEmail">Email</label>
            <input type="email" class="form-control" id="inputEmail"
            value="<?php  echo $rEmail;?>" readonly>

        </div>
        <div class="form-group">
            <label for="inputnewpassword">New Password</label>
            <input type="password" class="form-control" id="inputnewpassword" placeholder="New Password" name="rPassword">
        </div>
        <button type="submit" class="btn btn-danger mr-4 mt-4" name="passupdate">Update</button>
        <button type="reset" class="btn btn-secondary mt-4">Reset</button>
        <?php if(isset($passmsg)) echo $passmsg; ?>
    </form>


</div><!-- end user change password from 2nd col -->

<?php

    include('includes/footer.php');
?>
