<?php
 $id=$_GET['id'];
?>


<?php
if(($row_dashbord_Security["designation"] == 'Manager') || ($row_dashbord_Security["designation"] == 'OT Checker') || ($row_dashbord_Security["designation"] == 'Department Leader')){
       
        echo'
        <script>
         window.location = "index.php"
        </script>
          ';
}
?>

<?php
   include('connection.php');
   $sql_security_confirm_frame = "SELECT * FROM confirm_frame WHERE frame_no = '{$id}'";
   $qry_security_confirm_frame = mysqli_query($con,$sql_security_confirm_frame);

   if($row_security_confirm_frame = mysqli_fetch_array($qry_security_confirm_frame)){
     if($row_security_confirm_frame["transport_status"] == 'Accept' || $row_security_confirm_frame["ot_final_status"] == 'Pending' || $row_security_confirm_frame["ot_final_status"] == 'Reject' || $row_security_confirm_frame["ot_final_status"] == 'Processing')
     {
       echo'
      <script>
       window.location = "transport-summary.php"
      </script>
        ';
     }
     
   }
   
?>



<center>
          <table class="table table-unbordered" style="width:85%;margin-left:40px;">
              <?php
                  include('connection.php');
                  $sql_employee_ot_details = "SELECT rf.ot_hours,rf.added_date, rf.frame_by,rf.staff_members,rf.worker_members,rf.vsm_num,rf.model_num,
                                              rf.frame_no as 'request_no',rf.start_time,rf.end_time,rf.req_date,ed.frame_no as 'emp_frame_no',
                                              ed.epf_no,ed.status,ed.name,st.department FROM request_frame rf,emp_details ed,confirm_frame cf,stakeholders st WHERE 
                                              st.username = rf.frame_by AND rf.frame_no = $id AND rf.frame_no =ed.frame_no AND ed.ot_status = 'Accept' AND ed.frame_no = $id AND cf.frame_no = $id AND 
                                              cf.transport_status = 'Pending' AND cf.ot_final_status = 'Accept'";

                  $qry_employee_ot_details = mysqli_query($con,$sql_employee_ot_details);
                  if($row_employee_ot_details = mysqli_fetch_array( $qry_employee_ot_details))
                  {
              ?>

                  <tr>
                      <td>

                            <table border=0 style="font-weight:bold;">
                              <tr>
                                <td>Department</td>
                                <td><?php echo $row_employee_ot_details["department"];?></td>
                              </tr>

                              <tr>
                                <td>Model Number</td>
                                <td><?php echo $row_employee_ot_details["model_num"];?></td>
                              </tr>

                              <tr>
                                <td>Number of Staff</td>
                                <td><?php echo $row_employee_ot_details["staff_members"];?></td>
                              </tr>

                              <tr>
                                <td>Number of Workers</td>
                                <td><?php echo $row_employee_ot_details["worker_members"];?></td>
                              </tr>

                            </table>
                      </td>

                      <td>
                        <table style="font-weight:bold">
                          <tr>
                            <td>Required Date</td>
                            <td><?php echo $row_employee_ot_details["req_date"];?></td>
                          </tr>

                          <tr>
                            <td>OT Time Period</td>
                            <td  style="color:red;"><?php echo $row_employee_ot_details["start_time"];?> - <?php echo $row_employee_ot_details["end_time"];?></td>
                          </tr>

                        </table>
                                    
                      </td>


                      <?php
                          $sql_ot_requester_details = "SELECT fname,lname,email,mobile,designation FROM stakeholders WHERE 
                          username = '".$row_employee_ot_details["frame_by"]."'";

                          $qry_ot_requester_details = mysqli_query($con,$sql_ot_requester_details);
                          if($row_ot_requester_details = mysqli_fetch_array($qry_ot_requester_details))
                          {
                      ?>

                    
                      <td>
                      <table style="font-weight:bold">
                            <tr>
                              <td> Request by :</td>
                              <td>
                                <?php echo $row_ot_requester_details["fname"];?>  <?php echo $row_ot_requester_details["lname"];?> <br>
                                <?php echo $row_employee_ot_details["added_date"];?>
                              </td>
                            </tr>

                            <tr>         
                              <td><img src="images/user-mail.png" alt="" style="border:solid 3px #3498DB; background:#3498DB ;border-radius:60px;"></td>
                              <td>
                                <?php echo $row_ot_requester_details["email"];?> <br>
                                <?php echo $row_ot_requester_details["mobile"];?> <br>
                                <?php echo $row_ot_requester_details["designation"];?>
                              </td>
                            </tr> 

                      </table>
                      </td>

                      <?php
                          }
                      ?>          
                  </tr>

              <?php
              }
              ?>
          </table>
</center>


<form action="" method="POST">

<center>

<table>
    <tr>
        <td>

            <div class="col-auto">
              <label for="transport_cost"> <h2>Transport Cost</h2></label>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text">Rs</div>
                    </div>
                  <input type="text" class="form-control" id="transport_cost" name="transport_cost" placeholder="Transport Cost">
                </div>
            </div> 

        </td>

        <td>
        
        <div class="col-auto">
              <label for="confirm_transport_cost"> <h2>Confirm Transport Cost</h2></label>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text">Rs</div>
                    </div>
                  <input type="text" class="form-control" id="confirm_transport_cost" name="confirm_transport_cost" placeholder="Confirm Transport Cost">
                </div>
            </div> 

        


        
        </td>
    </tr>
</table>

</center>
  


<br>



<center>

    <div class="table-hover table-dark table-responsive" id="tbl2" style="width:80%;background:#0B5345;">

      <!--Table-->
      <table class="table">

        <!--Table head-->
        <thead style="background:#212F3D">
          <tr>
            <th>EPF : Number</th>
            <th>Name</th>
            <th>Category</th>
            <th>Start From</th>
            <th>Destination</th>
          </tr>
        </thead>
        <!--Table head-->

        <!--Table body-->
        <tbody>
            <?php
                include('connection.php');
                $sql_employee_ot_details = "SELECT rf.frame_no as 'request_no',rf.start_time,rf.end_time,rf.req_date,ed.frame_no as 'emp_frame_no',
                ed.epf_no,ed.start_location,ed.end_location,ed.status,ed.name,ed.ot_status,ed.emp_no FROM request_frame rf,emp_details ed,confirm_frame cf WHERE 
                                            rf.frame_no = $id AND ed.frame_no = $id AND cf.frame_no = $id AND 
                                            cf.transport_status = 'Pending'AND ed.ot_status = 'Accept' AND cf.ot_final_status = 'Accept'";

                $qry_employee_ot_details = mysqli_query($con,$sql_employee_ot_details);
                while($row_employee_ot_details = mysqli_fetch_array( $qry_employee_ot_details))
                {
            ?>

          <tr>
            <td class="th-sm"><?php echo $row_employee_ot_details["epf_no"];?></td>
            <td class="th-sm"><?php echo $row_employee_ot_details["name"];?></td>
            <td class="th-sm"><?php echo $row_employee_ot_details["status"];?></td>
            <td class="th-sm"><b><?php echo $row_employee_ot_details["start_location"];?> <br> <?php echo $row_employee_ot_details["start_time"];?></b></td>

            <td class="th-sm">
              <b>
                <?php echo $row_employee_ot_details["end_location"];?> <br> <?php echo $row_employee_ot_details["end_time"];?>
              </b>             
            </td>

          </tr>

          <?php
            }
          ?>

        </tbody>
        <!--Table body-->

      </table>

      <!--Table-->

    </div>

<br>

    <button name="add_transport_cost" class="btn btn-primary btn-lg btn-block" style="width:60%">ADD TRANSPORT COST</button>

</form>

</center>


<?php

  //include('connetion.php');
  if(isset($_POST["btnaccept"])){


    $sql_input_emp_avalibility = "UPDATE emp_details SET ot_status='Accept' WHERE emp_no =  '".$_POST["emp_num"]."'";

      if(mysqli_query($con,$sql_input_emp_avalibility)){
        echo '<meta http-equiv="refresh" content="0">';
      }
  }

  if(isset($_POST["btnreject"])){


    $sql_input_emp_avalibility = "UPDATE emp_details SET ot_status='Reject' WHERE emp_no =  '".$_POST["emp_num"]."'";

      if(mysqli_query($con,$sql_input_emp_avalibility)){
          echo '<meta http-equiv="refresh" content="0">';
      }
  }
    

?>



<?php
  if(isset($_POST["add_transport_cost"])){

    $transport_cost = $_POST["confirm_transport_cost"];

    $sql_update_transport_status = "UPDATE confirm_frame SET transport_status = 'Accept' , transport_by = '".@$_SESSION["uname"]."' , tra_forward_time = NOW()
                                  WHERE frame_no = '{$id}'";

      if(mysqli_query($con,$sql_update_transport_status)){
     
      }



      $sql_update_transport_cost = "UPDATE cost SET transport_cost = '{$transport_cost}' WHERE frame_no = '{$id}'";
      if(mysqli_query($con,$sql_update_transport_cost)){
        echo '
        <div class="alert alert-success">
        <strong>Successfully send to the Admin</strong> 
        </div>
        ';
    }


  }

?>
