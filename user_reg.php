<?php

include('dbconnection.php');

if(isset($_REQUEST['rsignup'])){

    //Checking for empty fields

    if(($_REQUEST['rname']=="") || ($_REQUEST['remail']=="") || ($_REQUEST['rPassword']=="")){

        $regmsg= '<div class="alert alert-warning mt-2" role="alert" >All Fields are Required</div>';
    }
    else{

        //checking email already registred
        $sql="SELECT r_email FROM requesterlogin_db WHERE r_email='".$_REQUEST['remail']."'";

        $result=$conn->query($sql);

        if($result->num_rows==1){

            $regmsg= '<div class="alert alert-warning mt-2" role="alert" >Email ID Already Registered</div>';
        }
        else{

            //assigning user values to variables
                $rname= $_REQUEST['rname'];
                $remail=$_REQUEST['remail'];
                $rPassword=$_REQUEST['rPassword'];

                $sql="INSERT INTO requesterlogin_db(r_name,r_email,r_password) VALUES
                ('$rname','$remail','$rPassword')";

                if($conn->query($sql)==TRUE){

                    $regmsg ='<div class="alert alert-success mt-2" role="alert" >Account Successfully Created</div>';
                }
                else{
                    $regmsg ='<div class="alert alert-danger mt-2" role="alert" >Unable To create Account</div>';
                }
            }

        }
}

?>





    <div class="container pt-5">
      <h2 class="text-center">Create An Account</h2>
      <div class="row mt-4 mb-4">
        <div class="col-md-6 offset-md-3">
          <form action="" method="POST" class="shadow-lg p-4">
            <div class="form-group">
              <i class="fas fa-user"></i
              ><label for="name" class="font-weight-bold pl-2">Name</label>
              <input
                type="text"
                class="form-control"
                placeholder="Name"
                name="rname"
              />
            </div>
            <div class="form-group">
              <i class="fas fa-user"></i
              ><label for="email" class="font-weight-bold pl-2">Email</label>
              <input
                type="email"
                class="form-control"
                placeholder="email"
                name="remail"
              />
              <small class="form-text"
                >We'll never share your email with anyone else</small
              >
            </div>
            <div class="form-group">
              <i class="fas fa-key"></i
              ><label for="pass" class="font-weight-bold pl-2"
                >New Password</label
              >
              <input
                type="password"
                class="form-control"
                placeholder="Password"
                name="rPassword"
              />
            </div>
            <button
              type="submit"
              class="btn btn-danger mt-5 btn-block shadow-sm font-weight-bold"
              name="rsignup"
              onclick="location.href='#registration'"
            >
              Sign Up
            </button>
            <em style="font-size: 10px;"
              >Note- By clicking Sign Up, you agree to our Terms, Data Policy
              and Cookie Policy</em
            >
            <br>
            <?php if(isset($regmsg))echo $regmsg; ?>
          </form>
        </div>
      </div>
    </div>

  