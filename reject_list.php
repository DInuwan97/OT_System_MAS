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
          

      <?php
            if(!($row_dashbord_Security["designation"] == 'Admin' || $row_dashbord_Security["designation"] == 'Manager')){ 
      ?>




				 <div class="card mb-3">
            <div class="card-header">
            <i class="fas fa-times-circle fa-2x" style="color:red"></i>
              <strong style="color:maroon">General Manager's OT Rejections</strong> </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Delete</th>
                      <th>Required Date</th>
                      <th>Required Time</th>
                      <th>Department</th>
                      <th>Total Cost</th>
                      <th>Module Number</th>
                      <th>Staff</th>
                      <th>Workers</th>
         
                    </tr>
                  </thead>
                 
                  <tbody>


<?php
  include('connection.php');

  $sql_frame_list = "SELECT * from request_frame rf,confirm_frame cf,stakeholders st,cost cs WHERE rf.frame_no = cf.frame_no 
  AND cf.ot_final_status = 'Accept' AND cs.frame_no = rf.frame_no and rf.frame_by = st.username and cf.transport_status = 'Accept' AND 
  cf.manager_status = 'Reject' AND rf.frame_by = '".@$_SESSION["uname"]."'";

  $qry_frame_list = mysqli_query($con,$sql_frame_list);
  while($row_frame_list = mysqli_fetch_array($qry_frame_list)){

?>

                    <tr>
                      <td>
                      <form action="" method="POST">
                       <button class="btn btn-danger btn-sm" name="btndelete" style="border-radius:50px;" ><i class="far fa-trash-alt"></i></button> <input type="hidden"  name="hidden_work_no" value="<?php echo $row_frame_list["frame_no"]?>" >
                      </form>
                      </td>
                      <td><?php echo $row_frame_list["req_date"];?></td>
                      <td><?php echo $row_frame_list["start_time"];?> - <?php echo $row_frame_list["end_time"];?></td>
                      <td><?php echo $row_frame_list["department"];?></td>
                      <td><?php  echo number_format($row_frame_list["utility_cost"] +$row_frame_list["emp_cost"] +  $row_frame_list["transport_cost"],2);?></td>
          
                      <td><?php echo $row_frame_list["model_num"];?></td>
                      <td><?php echo $row_frame_list["staff_members"];?></td>
                      <td><?php echo $row_frame_list["worker_members"];?></td>
      
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


<?php
            }elseif(($row_dashbord_Security["designation"] == 'Admin' || $row_dashbord_Security["designation"] == 'Manager')){
?>






				 <div class="card mb-3">
            <div class="card-header">
            <i class="fas fa-times-circle fa-2x" style="color:red"></i>
              <strong style="color:maroon">General Manager's OT Rejections</strong> </div>
            <div class="card-body">

                    <?php
                        include('connection.php');
                          if(isset($_POST["btnre_arrange"])){

                            $hidden_work_no = $_POST["hidden_work_no"];

                              $sql_manager_confirm = "UPDATE cost SET manager_status = 'Accept' WHERE frame_no = $hidden_work_no";
                              if(mysqli_query($con,$sql_manager_confirm)){

                                $sql_manager_confirm2 = "UPDATE confirm_frame SET manager_status = 'Accept' WHERE frame_no = $hidden_work_no";
                                if(mysqli_query($con,$sql_manager_confirm2)){
                                  echo '
                                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>Successfully Approved!</strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                  </div>
                                  ';
                                }else{
                                  echo 'error';
                                }
                              }
                          }
                    ?>


                    <?php
                        include('connection.php');
                          if(isset($_POST["btndelete"])){

                            $hidden_work_no = $_POST["hidden_work_no"];

                            //DELETE FROM emp_details WHERE emp_no = '".$_POST["hidden_work_no"]."'

                              $sql_delete_rejection = "DELETE  from 
                              request_frame rf,confirm_frame cf,cost cs,request_frame_resources rfr,ot_reason otr
                              WHERE rf.frame_no = cs.frame_no and cs.frame_no = cf.frame_no and cf.frame_no = rfr.frame_no and rfr.frame_no = otr.frame_no
                               and rf.frame_no = 6";

                              if(mysqli_query($con,$sql_delete_rejection)){
                                echo '
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                  <strong>Successfully Deleted!</strong>
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                ';


                                }else{
                                  echo 'error';
                                }
                              }
                          
                    ?>










              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Delete</th>
                      <th>Required Date</th>
                      <th>Required Time</th>
                      <th>Department</th>
                      <th>Fram By</th>
                      <th>Total Cost</th>
                      <th>Module Number</th>
                      <th>Staff</th>
                      <th>Workers</th>
                      
                      <th>Give Approve</th>
         
                    </tr>
                  </thead>
                 
                  <tbody>


<?php
  include('connection.php');

  $sql_frame_list = "SELECT * from request_frame rf,confirm_frame cf,stakeholders st,cost cs WHERE rf.frame_no = cf.frame_no 
  AND cf.ot_final_status = 'Accept' AND cs.frame_no = rf.frame_no and rf.frame_by = st.username and cf.transport_status = 'Accept' AND 
  cf.manager_status = 'Reject'";

  $qry_frame_list = mysqli_query($con,$sql_frame_list);
  while($row_frame_list = mysqli_fetch_array($qry_frame_list)){

?>

                    <tr>
                      <td>
                      <form action="" method="POST">
                        <button class="btn btn-danger btn-sm" name="btndelete" style="border-radius:50px;" ><i class="far fa-trash-alt"></i></button> <input type="hidden"  name="hidden_work_no" value="<?php echo $row_frame_list["frame_no"]?>" >

                      </form>
                      </td>
                      <td><?php echo $row_frame_list["req_date"];?></td>
                      <td><?php echo $row_frame_list["start_time"];?> - <?php echo $row_frame_list["end_time"];?></td>
                      <td><?php echo $row_frame_list["department"];?></td>
                      <td><?php echo $row_frame_list["fname"];?> <?php echo $row_frame_list["lname"];?></td>
                      <td><?php  echo number_format($row_frame_list["utility_cost"] +$row_frame_list["emp_cost"] +  $row_frame_list["transport_cost"],2);?></td>
          
                      <td><?php echo $row_frame_list["model_num"];?></td>
                      <td><?php echo $row_frame_list["staff_members"];?></td>
                      <td><?php echo $row_frame_list["worker_members"];?></td>

                       
                      
                        <td>
                      <form action="" method="POST">
                       <button class="btn btn-success btn-sm" name="btnre_arrange" >Approve</button> <input type="hidden"  name="hidden_work_no" value="<?php echo $row_frame_list["frame_no"]?>" >
                      </form>

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














<?php
            }

?>


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