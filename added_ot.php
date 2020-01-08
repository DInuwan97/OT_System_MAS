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


<!-- 
        	start -->

				 				 <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
             Approved List</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr style="background:lightblue;">
                    
                      <th>Frame No:</th>
                      <th>Department</th>
                      <th>Module</th>
                      <th>Req:Date</th>
                      <th>Req:Time</th>
                      <th>Total Cost (Rs)</th>
                      <th>Frame by</th>
                      <th>Preview</th>                
              
                    </tr>
                  </thead>
                 
                  <tbody>


<?php
  include('connection.php');

  $sql_all_aproved_reports = "SELECT * from confirm_frame cf,request_frame rf,cost cs,stakeholders st where rf.frame_by = st.username AND cf.ot_final_status = 'Accept' and
  cf.transport_status = 'Accept' AND cf.manager_status = 'Accept' and cf.frame_no = rf.frame_no AND rf.frame_no = cs.frame_no order by rf.req_date,rf.start_time";

  $qry_all_aproved_reports = mysqli_query($con, $sql_all_aproved_reports);

  $qry_all_aproved_reports = mysqli_query($con,$sql_all_aproved_reports);
  while($row_all_aproved_reports = mysqli_fetch_array($qry_all_aproved_reports)){

?>

                    <tr style="font-weight:bold;">
                    
                      <td><?php echo $row_all_aproved_reports["frame_no"];?></td>                     
                      <td><?php echo $row_all_aproved_reports["department"];?></td>
                      <td><?php echo $row_all_aproved_reports["model_num"];?></td>
                      <td><?php echo $row_all_aproved_reports["req_date"];?></td>
                      <td><?php echo $row_all_aproved_reports["start_time"];?> - <?php echo $row_all_aproved_reports["end_time"];?></td>
                      <td>Rs : <?php echo number_format($row_all_aproved_reports["utility_cost"] + $row_all_aproved_reports["transport_cost"] + $row_all_aproved_reports["emp_cost"] + $row_all_aproved_reports["sew_cost"],2);?></td>
                      <td><?php echo $row_all_aproved_reports["frame_by"];?></td>
                      <td><a href="createpdf_approved.php?id=<?php echo $row_all_aproved_reports["frame_no"];?>" class="badge badge-success">Preview</a></td>
              
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