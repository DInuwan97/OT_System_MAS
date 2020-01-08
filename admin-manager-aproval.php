<?php
    include('common/imports.php');
?>

<?php
include('connection.php');
    $sql_security = "SELECT * from stakeholders WHERE username = '".@$_SESSION["appuname"]."' AND (designation = 'Admin' OR designation = 'Manager')
    AND confirmation = 'Accept'";

    $qry_security = mysqli_query($con, $sql_security);
    if(!($row_security = mysqli_fetch_array($qry_security)) || @$_SESSION["appuname"] == NULL){
        echo '
        <script>
            window.location = "applogin.php"
        </script>
        ';
    }
?>

<body style="background:lightblue">
    


    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> 

 
    <div id="wrapper">

   


 <div id="content-wrapper" style="background:lightblue">

    <!-- /.container-fluid -->

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <!-- <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.html">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Blank Page</li>
          </ol>  -->





<!-- Button trigger modal -->


<?php
    include('connection.php');
        $sql_user = "SELECT * from stakeholders WHERE username = '".@$_SESSION["appuname"]."'";
        $qry_user = mysqli_query($con,$sql_user);
        if($row_user = mysqli_fetch_array($qry_user)){

?>

  <div class="container">

<center>

<button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#exampleModalCenter">
 Hello <?php echo $row_user["fname"];?> <?php echo $row_user["lname"];?> | Logout
</button>

</center>

<?php
}
?>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Logout</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       Are you sure that do you want to log out?
      </div>
      <div class="modal-footer">

     <a class="btn btn-primary" href="applogout.php">Yes</a>
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
    </div>

      </div>
    </div>
  </div>

</div>








  <div class="container">


   <div class="card card-register mx-auto mt-5">
     <div class="card-header">Search Frame</div>
       <div class="card-body" style=" overflow:auto;">

  
    
  <form action="" method="POST"> 
        
                
    
                    <div class="form-label-group">
                        <input type="number" name="frame_num"  style="margin-top:2px" id="frame_num" class="form-control" placeholder="staff_charge" required="" value="">
                        <label for="frame_num">Enter the Frame Number</label>              
                    </div>
                      
<br>

            <center>
                    <button class="btn btn-primary btn-lg" name="searchframe">Search</button> 
            </center>
</form>




        </div>   
      </div>     
    </div>


    </div>  

             
 
  

  <div class="container">

		<?php
                  				include('connection.php');
                  				if(isset($_POST["searchframe"])){

                  					$frame_num = $_POST["frame_num"];

                                      $sql_check_frame_request = "SELECT * FROM cost cs,confirm_frame cf,request_frame rf,stakeholders st WHERE rf.frame_no = $frame_num
                                      AND rf.frame_no = cf.frame_no AND cf.frame_no = cs.frame_no and cf.manager_status = 'Pending' AND cs.manager_status = 'Pending'
                                      and cf.ot_final_status = 'Accept' AND cf.transport_status = 'Accept' AND st.username = rf.frame_by";
                  					$qry_check_frame_request  = mysqli_query($con,$sql_check_frame_request);
                  					if($row_check_frame_request = mysqli_fetch_array($qry_check_frame_request)){
            ?>





        <div class="card card-register mx-auto mt-5">
            <div class="card-header">OT Frame Details</div>
                <div class="card-body" style=" overflow:auto;">

                
                                            




           

            <div class="form-group">              
                    <div class="form-label-group">
                        <input type="text" name="typed_frame_no" disabled value="<?php echo $frame_num ?>" style="margin-top:2px" id="typed_frame_no" class="form-control" placeholder="VSM" required="">
                        <label for="typed_frame_no">Selected Frame Number</label>              
                    </div>
            </div>

            
            <div class="form-row">

                <div class="col-md-6">
                    <div class="form-label-group">
                        <input type="text" name="department" disabled value="<?php echo $row_check_frame_request["department"];?> - <?php echo $row_check_frame_request["fname"];?> <?php echo $row_check_frame_request["lname"];?> " style="margin-top:2px" id="department" class="form-control" placeholder="VSM" required="">
                        <label for="department">Department & Frame By</label>              
                    </div>
                </div> 
            
       

                         
                <div class="col-md-6"> 
                    <div class="form-label-group">
                        <input type="text"  name="model" value="<?php echo $row_check_frame_request["model_num"];?>"  disabled style="margin-top:2px" id="model" class="form-control" placeholder="Model" required="">
                        <label for="model">Module Number</label>               
                     </div>
                </div>  

            </div>

            <div class="form-row">

                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input type="text" name="req_date" disabled value="<?php echo $row_check_frame_request["req_date"];?>" style="margin-top:2px" id="req_date" class="form-control" placeholder="VSM" required="">
                                <label for="req_date">Required Date</label>              
                            </div>
                        </div> 



                                
                        <div class="col-md-6"> 
                            <div class="form-label-group">
                                <input type="text"  name="req_time" disabled value="<?php echo $row_check_frame_request["start_time"];?> - <?php echo $row_check_frame_request["end_time"];?>"   style="margin-top:2px" id="req_time" class="form-control" placeholder="Model" required="">
                                <label for="req_time">Reqired Time</label>               
                            </div>
                        </div>  

            </div>
            


            <div class="form-row">

                <div class="col-md-6">
                    <div class="form-label-group">
                        <input type="text" name="staff_num" value="<?php echo $row_check_frame_request["staff_members"];?>" disabled  style="margin-top:2px" id="staff_num" class="form-control" placeholder="mini_boiler" required="">
                        <label for="staff_num">Number Of Staff</label>              
                    </div>
                </div>  
                      
                <div class="col-md-6"> 
                    <div class="form-label-group">
                        <input type="text" name="workers"  value="<?php echo $row_check_frame_request["worker_members"];?>"  disabled  style="margin-top:2px" id="workers" class="form-control" placeholder="AC Charge" required="">
                        <label for="workers">Number Of Workers</label>               
                     </div>
                </div>  

            </div>


            <div class="form-row">

                <div class="col-md-6">
                    <div class="form-label-group">
                        <input type="text" name="utilities" value="<?php echo $row_check_frame_request["utility"];?>" disabled  style="margin-top:2px" id="utilities" class="form-control" placeholder="VSM" required="">
                        <label for="utilities">Utilities</label>              
                    </div>
                </div> 



                        
                <div class="col-md-6"> 
                    <div class="form-label-group">
                        <input type="text"  name="sew_num" value="<?php echo $row_check_frame_request["sew_cost"];?>"  disabled  style="margin-top:2px" id="sew_num" class="form-control" placeholder="Model" required="">
                        <label for="sew_num">Sewing Machines Charge</label>               
                    </div>
                </div>  

            </div>

        <div class="form-row">

            <div class="col-md-6">
                <div class="form-label-group">
                    <input type="text" name="utility_charge" value="<?php echo number_format($row_check_frame_request["utility_cost"],2);?>" disabled  style="margin-top:2px" id="utility_charge" class="form-control" placeholder="VSM" required="">
                    <label for="utility_charge">Utility Charge</label>              
                </div>
            </div> 



                    
            <div class="col-md-6"> 
                <div class="form-label-group">
                    <input type="text"  name="emp_charge" value="<?php echo number_format($row_check_frame_request["emp_cost"],2);?>" disabled   style="margin-top:2px" id="emp_charge" class="form-control" placeholder="Model" required="">
                    <label for="emp_charge">Employee Charge</label>               
                </div>
            </div>  

        </div>

        
        <div class="form-row">

            <div class="col-md-6">
                <div class="form-label-group">
                    <input type="text" name="transport_charge" value="<?php echo number_format($row_check_frame_request["transport_cost"],2);?>" disabled  style="margin-top:2px" id="transport_charge" class="form-control" placeholder="VSM" required="">
                    <label for="transport_charge">Transport Charge</label>              
                </div>
            </div> 



                    
            <div class="col-md-6"> 
                <div class="form-label-group">
                    <input type="text"  name="total_cost" value="<?php echo number_format($row_check_frame_request["transport_cost"] + $row_check_frame_request["emp_cost"] + $row_check_frame_request["utility_cost"] + $row_check_frame_request["sew_cost"],2);?>" disabled   style="margin-top:2px" id="total_cost" class="form-control" placeholder="Model" required="">
                    <label for="total_cost">Total Cost</label>               
                </div>
            </div>  

        </div>
           

            <br>
       
              
                <form action="" method="POST">
                <center> 
                    <input type="hidden" name="hidden_charge_id" value="<?php echo $row_check_frame_request["frame_no"];?>">
                    <button class="btn btn-info" name="btn_confirm" style="width:40%">Accept</button> 
                    
                    <button class="btn btn-danger" name="btnreject" style="width:40%;margin-top:1px;">Reject</button> 
                </center>
                </form>
            



       </div>   
      </div>     
    </div> 

    <?php
}
                                  }
?>

<?php
include('connection.php');
  if(isset($_POST["btn_confirm"])){

    $hidden_charge_id = $_POST["hidden_charge_id"];

      $sql_manager_confirm = "UPDATE cost SET manager_status = 'Accept' WHERE frame_no = $hidden_charge_id";
      if(mysqli_query($con,$sql_manager_confirm)){

        $sql_manager_confirm2 = "UPDATE confirm_frame SET manager_status = 'Accept' WHERE frame_no = $hidden_charge_id";
        if(mysqli_query($con,$sql_manager_confirm2)){
          echo '
          </br>
          <div class="alert alert-success alert-dismissible fade show" role="alert">
           <strong> Successfully Approved! </strong>
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

  if(isset($_POST["btnreject"])){

    $hidden_charge_id = $_POST["hidden_charge_id"];

      $sql_manager_confirm = "UPDATE cost SET manager_status = 'Reject' WHERE frame_no = $hidden_charge_id";
      if(mysqli_query($con,$sql_manager_confirm)){

        $sql_manager_confirm2 = "UPDATE confirm_frame SET manager_status = 'Reject' WHERE frame_no = $hidden_charge_id";
        if(mysqli_query($con,$sql_manager_confirm2)){
          echo '
          </br>
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>  Rejected the Request! </strong>
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
        
</div>



     
        </div> <!-- /.container-fluid -->


        </div>
       <!-- content-wrapper -->

   </div> 
   <!-- wrapper -->



</body>