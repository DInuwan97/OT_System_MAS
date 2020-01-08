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

         <?php
if(!($row_dashbord_Security["designation"] == 'Admin')){
       
        echo'
        <script>
         window.location = "index.php"
        </script>
          ';
}
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
            <i class="fas fa-users"></i>
              <b>Registered Users</b>

              <form action="" method="POST">
                <button class="btn btn-warning" name="btn_find_username" style="float:right;cursor:pointer"><i class="fas fa-search"></i></button>
                <input type="text" name="find_username" class="form-control" style="width:10%;float:right;margin-right:2px;">
              </form>

        </div>
              <?php
                  include('connection.php');

                  if(isset($_POST["btn_find_username"])){

                    $find_username =$_POST["find_username"]; 
                    $sql_find_reg_users = "SELECT * FROM stakeholders WHERE username = '{$find_username}'";
                    $qry_find_reg_users = mysqli_fetch_array($con,$sql_find_reg_users);
                    

                    if($row_find_reg_users = mysqli_fetch_array($qry_find_reg_users)){

                  
              ?>











              <?php
                    }
                  }
              ?>
                

              
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
           
                      <th></th>
                      <th>Full Name</th>
                      <th>Email</th>
                      <th>Mobile</th>
                      <th>Department</th>
                      <th>Designation</th>              
                      <th>Username</th>   
                      <th></th>             
              
                    </tr>
                  </thead>
                 
                  <tbody>



<?php
  include('connection.php');

  $sql_user_req = "SELECT * from stakeholders where confirmation = 'Pending'";
  $qry_user_req  = mysqli_query($con, $sql_user_req);


  while($row_user_req = mysqli_fetch_array($qry_user_req)){

?>

                    <tr style="font-weight:bold;font-style:italic">
    <form action="" method="POST">
                      <td>
        
                       <button class="btn btn-success btn-sm" name="btnaccept" style=""><i class="far fa-check-circle"></i> <b>Accept</b></button> <input type="hidden"  name="stake_ho_no" value="<?php echo $row_forgot_pwd["stake_ho_no"]?>" >
                      
                  
                      </td>
                      <td><?php echo $row_user_req["fname"];?>  <?php echo $row_user_req["lname"];?></td>
                      <td><?php echo $row_user_req["email"];?></td>
                      <td><?php echo $row_user_req["mobile"];?></td>
                      <td>
                      
                      <div class="input-group mb-3" style="margin-top:5px">
                       
                                <select class="custom-select" name="department"  id="inputGroupSelect01" required="">
                                    <option selected><?php echo $row_user_req["department"];?></option>
                                    <option value="Factory Engineering">Factory Engineering</option>  
                                    <option value="Production Engineering">Production Engineering</option>      
                                    <option value="Autonomation">Autonomation</option> 
                                    <option value="MOS">MOS</option>  
                                    <option value="RM">RM</option>  
                                    <option value="Quality">Quality</option>                
                                    <option value="FG">FG</option>  
                                    <option value="Technical">Technical</option>                
                                    <option value="Cutting">Cutting</option>
                                    <option value="HR">HR</option>                    
                                    <option value="Operation">Operation</option>    
                                    <option value="Production VSM 01">Production VSM 01</option>                
                                    <option value="Production VSM 02">Production VSM 02</option>
                                    <option value="Production VSM 03">Production VSM 03</option>  
                                    <option value="Production VSM 04">Production VSM 04</option>   
                                    <option value="Pre-Sewing">Pre-Sewing</option>                 
                                    <option value="Emblishment">Emblishment</option>                                   
                                    <option value="IE">IE</option>                
                               </select>

                       </div>
                      
                      </td>



                      <td>

                      <div class="input-group mb-3" style="margin-top:5px">
                         
                                <select class="custom-select" name="designation"  id="inputGroupSelect02" required="">
                                    <option selected><?php echo $row_user_req["designation"];?></option>
                                    <option value="Department Leader">Department Leader</option>                
                                    <option value="OT Checker">OT Checker</option>
                                    <option value="Manager">Manager</option>  
                                    <option value="Transport Checker">Transport Checker</option>                 
                               </select>
                      </div>
                                         
                      </td>
                
                      
                      <td><?php echo $row_user_req["username"];?></td>

                      <td>
                        <input type="hidden" value="<?php echo $row_user_req["stake_ho_no"];?>" name="stakeholder_id">
                        <button class="btn btn-danger btn-sm" name="btnreject" style="" ><i class="far fa-times-circle"></i> <b>Reject</b></button> 
                      </td>
</form>   
                    </tr>




                    
 
                   
<?php

  }
?>

<?php
                    include('connection.php');
                      if(isset($_POST["btnaccept"])){

                        $stakeholder_id = $_POST["stakeholder_id"];
                        $designation = $_POST["designation"];
                        $department = $_POST["department"];


                      $sql_accpet_user_request = "UPDATE stakeholders SET confirmation = 'Accept', designation = '".$_POST["designation"]."',
                      department = '".$_POST["department"]."' WHERE stake_ho_no = '".$_POST["stakeholder_id"]."'";
                        if(mysqli_query($con,$sql_accpet_user_request)){
                           
                         echo '
                    
                         <meta http-equiv="refresh" content="0">
                          ';
                        }else{
                          echo 'shddjjjjjjjjjjjj';
                        }
                  
                      }

                      if(isset($_POST["btnreject"])){

                        $stakeholder_id = $_POST["stakeholder_id"];
                        $sql_reject_user_request = "DELETE FROM stakeholders WHERE stake_ho_no = '".$_POST["stakeholder_id"]."'";

                        if(mysqli_query($con,$sql_reject_user_request)){
                           
                          echo '
                          <meta http-equiv="refresh" content="0">
                           
                           ';
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