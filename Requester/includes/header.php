<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Bootstrap css -->
    <link rel="stylesheet" href="../CSS/bootstrap.min.css" />

    <!-- Font awesome css -->
    <link rel="stylesheet" href="../CSS/all.min.css" />

    <!-- Custom css -->
    <link rel="stylesheet" href="../CSS/custom.css" />

    <title><?php echo TITLE ?></title>
  </head>
  <body>
    <!-- Top navbar -->

    <nav
      class="navbar navbar-dark fixed-top bg-danger flex-md-nowrap p-0 shadow"
    >
      <a href="Requesterprofile.php" class="navbar-brand col-sm-3 col-md-2 mr-0"
        >OSMS</a
      >
    </nav>

    <!-- Start container -->
    <div class="container-fluid " style="margin-top: 40px;">
      <div class="row">
        <!-- start row -->

        <nav class="col-sm-2 bg-light sidebar py-5 d-print-none">
          <!-- Side Bar 1st col-->
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link <?php if(PAGE=='Requesterprofile'){ echo 'active';} ?>" href="Requesterprofile.php" 
                  ><i class="fas fa-user"></i> Profile</a
                >
              </li>
              <li class="nav-item">
                <a href="submit_request.php" class="nav-link <?php if(PAGE=='submit_request'){ echo 'active';} ?>"
                  ><i class="fab fa-accessible-icon"></i> Submit Request</a
                >
              </li>

              <li class="nav-item">
                <a href="check_status.php" class="nav-link <?php if(PAGE=='check_status'){ echo 'active';} ?>"
                  ><i class="fas fa-battery-full"></i> Service Status</a
                >
              </li>

              <li class="nav-item">
                <a href="change_pass.php" class="nav-link <?php if(PAGE=='change_password'){ echo 'active';} ?>"
                  ><i class="fas fa-key"></i> Change Password</a
                >
              </li>

              <li class="nav-item">
                <a href="../logout.php" class="nav-link"
                  ><i class="fas fa-sign-out-alt"></i> Logout</a
                >
              </li>
            </ul>
          </div>
        </nav>
        <!-- End Side bar 1st col -->

        
     