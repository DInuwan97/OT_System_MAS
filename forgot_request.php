<?php
    include('common/imports.php');
?>

<?php
    include('common/header.php');
?>

 
    <div id="wrapper">

     <?php
        include('common/menu.php')
     ?>




 <div id="content-wrapper" style="background:lightblue">

    <!-- /.container-fluid -->

        <div class="container-fluid">

<?php
  include('dash_head.php');
?>
     <?php
if(!($row_dashbord_Security["designation"] == 'Admin')){
       
        echo'
        <script>
         window.location = "index.php"
        </script>
          ';
}
?>




<!-- 
        	start -->

				 <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Reset Forgot Passwords</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>CALL</th>
                      <th>Full Name</th>
                      <th>Email</th>
                      <th>Mobile</th>
                      <th>Designation</th>
                      <th>Department</th>
                      <th>Username</th>                
              
                    </tr>
                  </thead>
                 
                  <tbody>


<?php
  include('connection.php');

  $sql_forgot_pwd = "SELECT * from stakeholders where confirmation = 'Forgot'";
  $qry_forgot_pwd = mysqli_query($con, $sql_forgot_pwd);

  $qry_forgot_pwd = mysqli_query($con,$sql_forgot_pwd);
  while($row_forgot_pwd = mysqli_fetch_array($qry_forgot_pwd)){

?>

                    <tr style="font-weight:bold;font-style:italic">
                      <td>
                      <form action="" method="POST">
                       <button class="btn btn-warning btn-sm" name="btnreset" style="border-radius:50px;" ><i class="fas fa-street-view"></i> RESET</button> <input type="hidden"  name="stakeholder_id" value="<?php echo $row_forgot_pwd["stake_ho_no"]?>" >
                      </form>
                      </td>
                      <td><?php echo $row_forgot_pwd["fname"];?>  <?php echo $row_forgot_pwd["lname"];?></td>
                      <td><?php echo $row_forgot_pwd["email"];?></td>
                      <td><?php echo $row_forgot_pwd["mobile"];?></td>
                      <td><?php echo $row_forgot_pwd["designation"];?></td>
                      <td><?php echo $row_forgot_pwd["designation"];?></td>
                      <td><?php echo $row_forgot_pwd["username"];?></td>
              
                    </tr>

                    <?php
                      if(isset($_POST["btnreset"])){

                        $stakeholder_id = $_POST["stakeholder_id"];

                      $sql_reset = "UPDATE stakeholders SET password = '".$row_forgot_pwd["mobile"]."', cpassword = '".$row_forgot_pwd["mobile"]."' , confirmation = 'Accept' WHERE stake_ho_no = '".$_POST["stakeholder_id"]."'";
                        if(mysqli_query($con,$sql_reset)){
                           
                          echo '
                          <script>
                          window.location = "dashbord.php"
                        </script>
                          
                          ';
                        }
                  


                      }
                    ?>

<?php

  }
?>
                   
                   

                  </tbody>
                </table>
              </div>
            </div>
            <div class="card-footer small text-muted"></div>
          </div>





        <!-- 	end -->


          
        </div> <!-- /.container-fluid -->


        </div>
       <!-- content-wrapper -->

   </div> 
   <!-- wrapper -->


<?php
    include('common/footer.php');
?>


    <!-- Bootstrap core JavaScript-->


    <!-- Core plugin JavaScript-->

    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>
  
        <?php include('js/demo/chart-area-demo.php'); ?>