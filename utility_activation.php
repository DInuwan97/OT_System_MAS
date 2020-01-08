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
            <i class="fas fa-drafting-compass"></i>
             Utility Activation</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr style="background:lightblue;">
     
                      <th>Department</th>
                      <th>Module</th>
                      <th>Req:Date</th>
                      <th>Req:Time</th>
                      <th>Employees</th>
                      <th>Utilities</th>
                      <th>Status</th>                
              
                    </tr>
                  </thead>
                 
                  <tbody>


<?php
  include('connection.php');

  $sql_all_aproved_reports = "SELECT * from stakeholders st,confirm_frame cf,request_frame rf,cost cs where rf.frame_by = st.username AND cf.ot_final_status = 'Accept' and
  cf.transport_status = 'Accept' AND cf.manager_status = 'Accept' AND st.username = rf.frame_by AND cf.utility_activation = 'Pending' and cf.frame_no = rf.frame_no AND rf.frame_no = cs.frame_no order by rf.req_date,rf.start_time";

  $qry_all_aproved_reports = mysqli_query($con, $sql_all_aproved_reports);

  $qry_all_aproved_reports = mysqli_query($con,$sql_all_aproved_reports);
  while($row_all_aproved_reports = mysqli_fetch_array($qry_all_aproved_reports)){

?>

                    <tr style="font-weight:bold;">
                    
                                      
                      <td><?php echo $row_all_aproved_reports["department"];?></td>
                      <td><?php echo $row_all_aproved_reports["model_num"];?></td>
                      <td><?php echo $row_all_aproved_reports["req_date"];?></td>
                      <td><?php echo $row_all_aproved_reports["start_time"];?> - <?php echo $row_all_aproved_reports["end_time"];?></td>
                      <td><?php echo $row_all_aproved_reports["staff_members"] + $row_all_aproved_reports["worker_members"];?></td>
                      <td><?php echo $row_all_aproved_reports["utility"];?></td>
                      <td>

                  <form action="" method="POST">
                        <button class="btn btn-warning btn-sm" name="btnverify"><strong>Verify</strong></button>
                        <input type="hidden" value="<?php echo $row_all_aproved_reports["frame_no"];?>" name="activation_utility_id">
                  </form>  

                      </td>
              
                    </tr>

<?php

  }
?>

<?php
  if(isset($_POST["btnverify"])){
    $activation_utility_id = $_POST["activation_utility_id"];

      $sql_update_utility_activation = "UPDATE confirm_frame SET utility_activation = 'Verify' WHERE frame_no = '".$_POST["activation_utility_id"]."'";

      if(mysqli_query($con,$sql_update_utility_activation)){
        echo '<meta http-equiv="refresh" content="0">';
      }

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