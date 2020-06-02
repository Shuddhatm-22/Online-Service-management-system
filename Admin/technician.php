<?php
define('TITLE','Technician');
define ('PAGE','technician');
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

<!-- start 2nd col -->
<div class="col-sm-9 col-md-10 mt-5 text-center">

<p class="bg-dark text-white p-2">List Of Technicians</p>

    <?php

        $sql="SELECT * FROM technician_tb";
        $result=$conn->query($sql);

        if($result->num_rows>0){

            echo '<table class="table">';
                echo '<thead>';
                    echo '<tr>';
                        echo '<th scope="col">Emp Id</th>';
                        echo '<th scope="col">Name</th>';
                        echo '<th scope="col">City</th>';
                        echo '<th scope="col">Mobile</th>';
                        echo '<th scope="col">Email</th>';
                        echo '<th scope="col">Action</th>';
                    echo '</tr>';
                echo '</thead>';

                echo '<tbody';

                    while($row=$result->fetch_assoc()){

                        echo '<tr>';
                            echo '<td>'.$row['emp_id'].'</td>';
                            echo '<td>'.$row['emp_name'].'</td>';
                            echo '<td>'.$row['emp_city'].'</td>';
                            echo '<td>'.$row['emp_mobile'].'</td>';
                            echo '<td>'.$row['emp_email'].'</td>';


                            echo '<td>';
                                echo '<form action="editemp.php" method="post" class="d-inline">';
                                    echo '<input type="hidden" name="id" value='.$row["emp_id"].'><button type="submit" class="btn btn-info mr-3" name="edit" value="edit"><i class="fas fa-pen"></i></button>';
                                echo '</form>';

                                echo '<form action="" method="post" class="d-inline">';
                                    echo '<input type="hidden" name="id" value='.$row["emp_id"].'><button type="submit" class="btn btn-secondary mr-3" name="delete" value="delete"><i class="fas fa-trash"></i></button>';
                                echo '</form>';
                            
                            echo '</td>';
                        echo '</tr>';


                    }


                echo '</tbody';


            echo '</table>';
        }
        else{

            echo '0 Result';
        }




    ?>



</div><!-- end 2nd col -->

<?php

if(isset($_REQUEST['delete'])){

$sql="DELETE FROM technician_tb WHERE emp_id={$_REQUEST['id']}";

if($conn->query($sql)){

    echo '<meta http-equiv="refresh" content="0;URL=?closed"/>';
}
else{

    echo "Unable to delete";
}
}

?>






</div>
      <!-- End row -->

      <div class="float-right"><a href="insertemp.php" class="btn btn-danger"><i class="fas fa-plus fa-2x"></i></a></div>


    </div>
    <!-- End container -->

    <!-- javascript -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/all.min.js"></script>
  </body>
</html>


