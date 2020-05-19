<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
      <a href="dashboard.php" class="navbar-brand col-sm-3 col-md-2 mr-0"
        >OSMS</a
      >
    </nav>

    <!-- Start container -->
    <div class="container-fluid" style="margin-top: 40px;">
      <div class="row">
        <!-- start row -->

        <nav class="col-sm-2 bg-light sidebar py-5">
          <!-- Side Bar 1st col-->
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link <?php if(PAGE=='dashboard'){ echo 'active';} ?>" href="dashboard.php" 
                  ><i class="fas fa-tachometer-alt"></i>Dashboard</a
                >
              </li>
              <li class="nav-item">
                <a href="work.php" class="nav-link <?php if(PAGE=='work'){ echo 'active';} ?>"
                  ><i class="fab fa-accessible-icon"></i>Work Order</a
                >
              </li>

              <li class="nav-item">
                <a href="requests.php" class="nav-link <?php if(PAGE=='requests'){ echo 'active';} ?>"
                  ><i class="fas fa-align center"></i>Requests</a
                >
              </li>

              
              <li class="nav-item">
                <a href="assets.php" class="nav-link <?php if(PAGE=='assets'){ echo 'active';} ?>"
                  ><i class="fas fa-align center"></i>Assets</a
                >
              </li>


              <li class="nav-item">
                <a href="technician.php" class="nav-link <?php if(PAGE=='technician'){ echo 'active';} ?>"
                  ><i class="fas fa-align center"></i>Technician</a
                >
              </li>

              <li class="nav-item">
                <a href="requester.php" class="nav-link <?php if(PAGE=='requester'){ echo 'active';} ?>"
                  ><i class="fas fa-users"></i>Requester</a
                >
              </li>

              <li class="nav-item">
                <a href="sell_report.php" class="nav-link <?php if(PAGE=='sell_report'){ echo 'active';} ?>"
                  ><i class="fas fa-table"></i>Sell Report</a
                >
              </li>

              <li class="nav-item">
                <a href="work_report.php" class="nav-link <?php if(PAGE=='work_report'){ echo 'active';} ?>"
                  ><i class="fas fa-table"></i>Work Report</a
                >
              </li>

              <li class="nav-item">
                <a href="change_pass.php" class="nav-link <?php if(PAGE=='change_password'){ echo 'active';} ?>"
                  ><i class="fas fa-key"></i>Change Password</a
                >
              </li>

              <li class="nav-item">
                <a href="../logout.php" class="nav-link"
                  ><i class="fas fa-sign-out-alt"></i>Logout</a
                >
              </li>
            </ul>
          </div>
        </nav>
        <!-- End Side bar 1st col -->