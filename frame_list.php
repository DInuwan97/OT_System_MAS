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

<!-- 
        	start -->

				 <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Your OT Requested Frames</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                     
                      <th>Required Date</th>
                      <th>Required Time</th>
                      <th>Department</th>
                      <th>Module Number</th>
                      <th>Staff</th>
                      <th>Workers</th>
                      <th>Manage</th>
                    </tr>
                  </thead>
                 
                  <tbody>


<?php
  include('connection.php');

  $sql_frame_list = "SELECT * from request_frame rf,confirm_frame cf,stakeholders st WHERE rf.frame_no = cf.frame_no 
  AND cf.ot_final_status = 'Pending' AND  rf.frame_by = st.username and cf.transport_status = 'Pending' AND cf.manager_status = 'Pending' AND rf.frame_by = '".@$_SESSION["uname"]."'";

  $qry_frame_list = mysqli_query($con,$sql_frame_list);
  while($row_frame_list = mysqli_fetch_array($qry_frame_list)){

?>

                    <tr>
                   
                      <td><?php echo $row_frame_list["req_date"];?></td>
                      <td><?php echo $row_frame_list["start_time"];?> - <?php echo $row_frame_list["end_time"];?></td>
                      <td><?php echo $row_frame_list["department"];?></td>
                      <td><?php echo $row_frame_list["model_num"];?></td>
                      <td><?php echo $row_frame_list["staff_members"];?></td>
                      <td style="width:5%"><?php echo $row_frame_list["worker_members"];?></td>
                      <td style="width:12%;">
                        <h5><a href="add_employees_staff.php?id=<?php echo  $row_frame_list["frame_no"];?>" class="badge badge-warning">Staff</a>
                        <a href="add_employees_worker.php?id=<?php echo  $row_frame_list["frame_no"];?>" class="badge badge-info">Workers</a>
                        </h5>
                      </td>
                    </tr>

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