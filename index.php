<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Bootstrap css -->

    <link rel="stylesheet" href="CSS/bootstrap.min.css" />

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="CSS/all.min.css" />

    <!-- Google Font -->
    <link
      href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap"
      rel="stylesheet"
    />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="CSS/custom.css" />

    <title>OSMS</title>
  </head>
  <body>

    <!-- Start Navigation Bar -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-danger pl-5 fixed-top justify-content-left">
      <a href="index.php" class="navbar-brand">OSMS</a>
      <span class="navbar-text ">Customer's Happiness is Our Aim</span>
      <button
        type="button"
        class="navbar-toggler"
        data-toggle="collapse"
        data-target="#myMenu"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse-navbar-collapse" id="myMenu">
        <ul class="navbar-nav pl-5 custom-nav">
          <li class="nav-item">
            <a href="index.php" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="#Services" class="nav-link">Services</a>
          </li>
          <li class="nav-item">
            <a href="#registration" class="nav-link">Registration</a>
          </li>
          <li class="nav-item"><a href="#" class="nav-link">Login</a></li>
          <li class="nav-item">
            <a href="#Contact" class="nav-link">Contact Us</a>
          </li>
        </ul>
      </div>
    </nav>
    <!-- End Navigation -->

    <!-- Start Header Jumbotron -->
    <header
      class="jumbotron back-image"
      style="background-image: url(images/Banner1.jpeg);"
    >
      <div class="myclass head">
        <h1 class="text-uppercase text-danger font-weight-bold">
          Welcome to OSMS
        </h1>
        <p class="font-italic">Customer's Happiness is Our Aim</p>
        <a href="#" class="btn btn-success mr-4">Login</a>
        <a href="#registration" class="btn btn-danger mr-4">Sign Up</a>
      </div>
    </header>
    <!-- End Header Jumbotron -->

    <!-- Start Intro Section -->
    <div class="container">
      <div class="jumbotron">
        <h3 class="text-center">OSMS Introduction</h3>
        <p>
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquid quas
          consequatur, non praesentium eaque doloremque iusto. A excepturi animi
          minus dolore voluptas? Aliquid odio amet non architecto sit sequi
          asperiores alias ut a quod maiores quas est, placeat ab impedit illum
          at, voluptatum ex reiciendis, dolore corrupti iste tempore. Maxime
          accusamus nulla hic cupiditate incidunt! Architecto rem blanditiis
          commodi.
        </p>
        <div id="Services"></div>
      </div>
    </div>
    <!-- End Intro Section Container -->

    <!-- Start Services Section -->
    <div class="container text-center border-bottom">
      <h2>Our Services</h2>
      <div class="row mt-4">
        <div class="col-sm-4 mb-4">
          <a href="#"><i class="fas fa-tv fa-8x text-success"></i></a>
          <h4 class="mt-4">Electronic Appliances</h4>
        </div>
        <div class="col-sm-4 mb-4">
          <a href="#"><i class="fas fa-sliders-h fa-8x text-primary"></i></a>
          <h4 class="mt-4">Preventive Maintenance</h4>
        </div>
        <div class="col-sm-4 mb-4">
          <a href="#"><i class="fas fa-cogs fa-8x text-info"></i></a>
          <h4 class="mt-4">Fault Repair</h4>
        </div>
      </div>
      <div id="registration"></div>
    </div>
    <!-- End Services Section -->

    <!-- Start Registration Form -->

    <?php include('user_reg.php') ?>

    <!-- End Registration Form -->

    <!-- Start Happy customer -->

    <div class="jumbotron bg-danger">
      <div class="container">
        <h2 class="text-center text-white mb-5">Happy Customers</h2>
        <div class="row">
          <div class="col-lg-3 col-sm-6">
            <div class="card shadow-lg mb-2">
              <div class="card-body text-center">
                <img
                  src="images/avatar1.jpg"
                  class="img-fluid"
                  style="border-radius: 100px;"
                  alt="avt1"
                />
                <h4 class="card-title mt-3">Jane Smith</h4>
                <p class="card-text">
                  Lorem ipsum dolor sit, amet consectetur adipisicing elit. At,
                  possimus officia. Nisi minus eos ut vero perspiciatis unde
                  omnis sint?
                </p>
              </div>
            </div>
          </div>
          <!-- End 1st col -->
          <!-- start 2nd col -->
          <div class="col-lg-3 col-sm-6">
            <div class="card shadow-lg mb-2">
              <div class="card-body text-center">
                <img
                  src="images/avatar8.jpg"
                  class="img-fluid"
                  style="border-radius: 100px;"
                  alt="avt1"
                />
                <h4 class="card-title mt-3">Hannah Abott</h4>
                <p class="card-text">
                  Lorem ipsum dolor sit, amet consectetur adipisicing elit. At,
                  possimus officia. Nisi minus eos ut vero perspiciatis unde
                  omnis sint?
                </p>
              </div>
            </div>
          </div>
          <!-- End 2nd col -->
          <!-- start 3rd col -->
          <div class="col-lg-3 col-sm-6">
            <div class="card shadow-lg mb-2">
              <div class="card-body text-center">
                <img
                  src="images/avatar9.jpg"
                  class="img-fluid"
                  style="border-radius: 100px;"
                  alt="avt1"
                />
                <h4 class="card-title mt-3">Xin Yan</h4>
                <p class="card-text">
                  Lorem ipsum dolor sit, amet consectetur adipisicing elit. At,
                  possimus officia. Nisi minus eos ut vero perspiciatis unde
                  omnis sint?
                </p>
              </div>
            </div>
          </div>
          <!-- End 3rd col -->
          <!-- start 4th col -->
          <div class="col-lg-3 col-sm-6">
            <div class="card shadow-lg mb-2">
              <div class="card-body text-center">
                <img
                  src="images/avatar4.jpg"
                  class="img-fluid"
                  style="border-radius: 100px;"
                  alt="avt1"
                />
                <h4 class="card-title mt-3">Bill Carter</h4>
                <p class="card-text">
                  Lorem ipsum dolor sit, amet consectetur adipisicing elit. At,
                  possimus officia. Nisi minus eos ut vero perspiciatis unde
                  omnis sint?
                </p>
              </div>
            </div>
          </div>
          <!-- end 4th col -->
        </div>
        <div id="Contact"></div>
      </div>
    </div>
    <!-- End Happy customers -->

    <!-- Start contact us -->
    <div class="container">
      <h2 class="mb-4">Contact Us</h2>
      <div class="row">
        <!-- Start1st col -->
        <?php  include('contact_form.php')?>
        <!-- end 1st col -->

        <!-- Start2nd col -->
        <div class="col-md-4 text-center">
          <strong>HeadQuarter:</strong><br />OSMS pvt Ltd,<br />
          Vasant Vihar, Indore-652030 <br />
          Phone: +00000000 <br />
          <a href="#" target="_blank">www.osms.com</a>
          <br /><br />
          <strong>Bangalore Branch:</strong><br />OSMS pvt Ltd,<br />
          New Villy, Bangalore-264623 <br />
          Phone: +0006560000 <br />
          <a href="#" target="_blank">www.osms.com</a>
          <br /><br />
        </div>
        <!-- End 2nd column -->
      </div>
    </div>
    <!--End Contact us -->

    <!-- start footer -->
    <footer class="container-fluid bg-dark mt-5 text-white">
      <div class="container">
        <div class="row py-3">
          <div class="col-md-6">
            <!-- start 1st col -->
            <span class="pr-2">Follow us</span>
            <a href="#" target="_blank" class="pr-2 fi-color">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" target="_blank" class="pr-2 fi-color">
              <i class="fab fa-youtube"></i>
            </a>
            <a href="#" target="_blank" class="pr-2 fi-color">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" target="_blank" class="pr-2 fi-color">
              <i class="fab fa-instagram-square"></i>
            </a>
          </div>
          <!-- end 1st col -->

          <!-- start 2nd col -->
          <div class="col-md-6 text-right">
            <small>Designed By Sid &copy; 2019</small>
            <small class="ml-2"><a href="#">Admin Login</a></small>
          </div>
        </div>
      </div>
    </footer>

    <!-- Javascript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/all.min.js"></script>
  </body>
</html>
