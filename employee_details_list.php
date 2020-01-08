
<?php
if(($row_dashbord_Security["designation"] == 'Manager') || ($row_dashbord_Security["designation"] == 'Transport Checker') || ($row_dashbord_Security["designation"] == 'Department Leader')){
       
        echo'
        <script>
         window.location = "index.php"
        </script>
          ';
}
?>


<?php
 $id=$_GET['id'];
?>


<?php
  include('connection.php');
    $sql_security_confirm_frame = "SELECT * FROM confirm_frame WHERE frame_no = '{$id}'";
    $qry_security_confirm_frame = mysqli_query($con,$sql_security_confirm_frame);

    if($row_security_confirm_frame = mysqli_fetch_array($qry_security_confirm_frame))
    {
      if($row_security_confirm_frame["ot_final_status"] == 'Accept' || $row_security_confirm_frame["ot_final_status"] == 'Return' )
      {
       
        echo '
        <script>
          window.location = "ot-checker-summary.php"
        </script>       
        ';

      }
      $sql_frame_request = "SELECT * FROM request_frame  WHERE worker_members = (SELECT COUNT(emp_no) FROM 
      emp_details WHERE  frame_no = '{$id}' AND status = 'Worker') AND
      staff_members =(SELECT COUNT(emp_no) FROM emp_details WHERE  frame_no = '{$id}' 
      AND status = 'Staff') AND frame_no = '{$id}'";

      $qry_frame_request = mysqli_query($con,$sql_frame_request);
      if($row_frame_rquest = mysqli_fetch_array($qry_frame_request))
      {
   
   

      }else{
        echo '
        <script>
          window.location = "ot-checker-summary.php"
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
                                              rf.frame_no as 'request_no',rf.start_time,rf.end_time,rf.req_date,ed.frame_no as 'emp_frame_no',st.department,
                                              ed.epf_no,ed.status,ed.name FROM request_frame rf,emp_details ed,confirm_frame cf,stakeholders st WHERE 
                                              rf.frame_no = $id AND rf.frame_no =ed.frame_no AND ed.frame_no = $id AND cf.frame_no = $id AND 
                                              cf.transport_status = 'Pending' and st.username = rf.frame_by";

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

                          <tr>
                            <td></td>
                            <td>
                            <blink><button class="btn btn-warning btn-lg" style="border-radius:5px"><?php echo $row_employee_ot_details["ot_hours"]; ?> Hour Period</button></blink>
                            </td>
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

<center>

    <div class="table-hover table-dark table-responsive" id="tbl2" style="width:80%;background:#0B5345;">

      <!--Table-->
      <table class="table">

        <!--Table head-->
        <thead style="background:#212F3D">
          <tr>
            <th>EPF : Number</th>
            <th>Employee Name</th>
            <th>Employee Category</th>
            <th>OT Time Period</th>
            <th>Manage OT Actions</th>
          </tr>
        </thead>
        <!--Table head-->

        <!--Table body-->
        <tbody>
            <?php
                include('connection.php');
                $sql_employee_ot_details = "SELECT rf.frame_no as 'request_no',rf.start_time,rf.end_time,rf.req_date,ed.frame_no as 'emp_frame_no',
                ed.epf_no,ed.status,ed.name,ed.ot_status,ed.emp_no FROM request_frame rf,emp_details ed,confirm_frame cf WHERE 
                                             rf.frame_no = $id AND ed.frame_no = $id AND cf.frame_no = $id AND 
                                            cf.transport_status = 'Pending'AND (ed.ot_status = 'Pending' OR ed.ot_status = 'Accept' OR ed.ot_status = 'Reject')";

                $qry_employee_ot_details = mysqli_query($con,$sql_employee_ot_details);
                while($row_employee_ot_details = mysqli_fetch_array( $qry_employee_ot_details))
                {
            ?>

          <tr>
            <td class="th-sm"><?php echo $row_employee_ot_details["epf_no"];?></td>
            <td class="th-sm"><?php echo $row_employee_ot_details["name"];?></td>
            <td class="th-sm"><?php echo $row_employee_ot_details["status"];?></td>
            <td class="th-sm"><?php echo $row_employee_ot_details["start_time"];?> - <?php echo $row_employee_ot_details["end_time"];?></td>

            <td class="th-sm">

            <form action="#tbl2" method="POST">

                <input type="hidden" value="<?php echo $row_employee_ot_details["emp_no"];?>" name="emp_num"> 
                <button class="btn btn-success btn-sm" name="btnaccept" style="border:none;"><i class="fa fa-check-circle"></i> Accept </button>
                <button  class="btn btn-danger btn-sm"  name="btnreject"   style="border:none;"><i class="fa fa-times-circle" aria-hidden="true"></i> Decline </button>

           

                  <?php
                      if($row_employee_ot_details["ot_status"] == 'Accept')
                      {
                  ?>
                        <i class="fa fa-circle" style="color:green"aria-hidden="true"></i>

                  <?php
                      }
                      elseif($row_employee_ot_details["ot_status"] == 'Reject'){
                  ?>
                     <i class="fa fa-circle" style="color:red"aria-hidden="true"></i>
                  <?php
                      }     
                  ?>
             </form>


               
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
  <form action="" method="POST">
    <button name="btnfoward-transport" class="btn btn-primary btn-lg btn-block" style="width:60%">FOWARD TO TRANSPORT MANAGER</button>
  </form>

            <BR>

  <form action="" method="POST">
    <button name="btnreturn" class="btn btn-danger btn-lg btn-block" style="width:60%">RETURN REQUEST</button>
  </form>


</center>


<?php

  //include('connetion.php');
  if(isset($_POST["btnaccept"])){


    $sql_input_emp_avalibility = "UPDATE emp_details SET ot_status='Accept' WHERE emp_no =  '".$_POST["emp_num"]."'";
    $sql_input_emp_avalibility1 = "UPDATE confirm_frame SET ot_final_status='Processing' WHERE frame_no =  '{$id}'";

      if(mysqli_query($con,$sql_input_emp_avalibility)){
        echo '<meta http-equiv="refresh" content="0">';
      }
     
      if(mysqli_query($con,$sql_input_emp_avalibility1)){
        echo '<meta http-equiv="refresh" content="0">';
      }
  }

  if(isset($_POST["btnreject"])){


    $sql_input_emp_avalibility = "UPDATE emp_details SET ot_status='Reject' WHERE emp_no =  '".$_POST["emp_num"]."'";
    $sql_input_emp_avalibility1 = "UPDATE confirm_frame SET ot_final_status='Processing' WHERE frame_no =  '{$id}'";

      if(mysqli_query($con,$sql_input_emp_avalibility)){
          echo '<meta http-equiv="refresh" content="0">';
      }

      
      if(mysqli_query($con,$sql_input_emp_avalibility1)){
        echo '<meta http-equiv="refresh" content="0">';
      }
  }
    

?>

<?php

  if(isset($_POST["btnfoward-transport"])){
    
    $sql_check_ot_frame_no = "SELECT COUNT(frame_no) as 'count_emp_no' FROM emp_details WHERE frame_no = $id AND ot_status = 'Accept'";
    $qry_check_ot_frame_no = mysqli_query($con,$sql_check_ot_frame_no);

    $sql_check_ot_frame_req = "SELECT * FROM request_frame WHERE frame_no = $id";
    $qry_check_ot_frame_req = mysqli_query($con,$sql_check_ot_frame_req);


    if($row_check_ot_frame_req = mysqli_fetch_array($qry_check_ot_frame_req)){
      if($row_check_ot_frame_no = mysqli_fetch_array($qry_check_ot_frame_no)){
    
      if($row_check_ot_frame_no["count_emp_no"] == ($row_check_ot_frame_req["staff_members"] + $row_check_ot_frame_req["worker_members"]) ){

          $sql_update_ot_final = "UPDATE confirm_frame SET ot_final_status = 'Accept' , ot_by = '".@$_SESSION["uname"]."', ot_forward_time = NOW() WHERE frame_no = $id";
          if(mysqli_query($con,$sql_update_ot_final)){
      
          }

          $sql_emp_cost = "SELECT * FROM charges WHERE id = 3";
          $qry_emp_cost = mysqli_query($con,$sql_emp_cost);
          if($row_emp_cost = mysqli_fetch_array($qry_emp_cost)){

            $final_emp_cost_staff = $row_emp_cost["staff_charge"] * ($row_check_ot_frame_req["ot_hours"] *4)* $row_check_ot_frame_req["staff_members"];
            $final_emp_cost_worker = $row_emp_cost["employee_charge"] * ($row_check_ot_frame_req["ot_hours"] *4) * $row_check_ot_frame_req["worker_members"];
            $sew_cost =  $row_emp_cost["sew_charge"] * $row_check_ot_frame_req["vsm_num"];

          $sql_update_ot_emp_cost = "UPDATE cost SET emp_cost = '{$final_emp_cost_staff}' + '{$final_emp_cost_worker}' , sew_cost = '{$sew_cost}' 
          WHERE frame_no = $id";

          if(mysqli_query($con,$sql_update_ot_emp_cost)){
            echo '
            </br>
            <div class="alert alert-success">
              <strong>Successfully send to the Transport Manager</strong> 
            </div>

           <meta http-equiv="refresh" content="2">
             ';
          }

        }


     }

      else{
    

        echo '
        <center>
        <div class="alert alert-danger">
        <strong>Something is going Wrong! <br> Unable to send.</strong>
     
      </div>
      </center> 

      <meta http-equiv="refresh" content="2">
        ';
        
          

      }

      
    }
  }
}


?>

<?php
    if(isset($_POST["btnreturn"])){
   $sql_check_ot_frame_no_return = "SELECT COUNT(frame_no) as 'count_emp' FROM emp_details WHERE frame_no = $id AND ot_status = 'Reject'";
   $qry_check_ot_frame_no_return = mysqli_query($con,$sql_check_ot_frame_no_return);

   if($row_check_ot_frame_no_return = mysqli_fetch_array($qry_check_ot_frame_no_return)){
     if($row_check_ot_frame_no_return["count_emp"] >= 1){

      $sql_return = "UPDATE confirm_frame SET ot_final_status = 'Return' WHERE frame_no = $id";
      if(mysqli_query($con,$sql_return)){
          echo '
          <center>
          <div class="alert alert-warning">
          <strong>Successfully Return the Request!</strong> 
        </div>
        </center>
          ';
      }


     }else{
       echo '
       <center>
       <div class="alert alert-danger">
       <strong>Something is going Wrong! <br> Unable to send.</strong>
    
     </div>
     </center> 
       ';
     }
   }

  }
?>




<?php
    $sql_charges = "SELECT * FROM charges WHERE id = 1";
    $qry_charges = mysqli_query($con,$sql_charges);

   
    if($row_charges = mysqli_fetch_array($qry_charges))
    {

      $sql_ot_hours = "SELECT ot_hours FROM request_frame WHERE frame_no = '{$id}'";
      $qry_ot_hours = mysqli_query($con,$sql_ot_hours);
      if($row_ot_hours = mysqli_fetch_array( $qry_ot_hours))
      {

      $sql_emp_cost_staff = "SELECT COUNT(emp_no) as 'staff_members' FROM emp_details WHERE frame_no = '{$id}' AND status = 'staff'";
      $qry_emp_cost_staff = mysqli_query($con,$sql_emp_cost_staff);

        if($row_emp_cost_staff = mysqli_fetch_array($qry_emp_cost_staff))
        {
          $final_emp_cost_staff = $row_ot_hours["ot_hours"] *  $row_emp_cost_staff["staff_members"] * $row_charges["staff_charge"];
          //echo $final_emp_cost_staff;
      
        }

      $sql_emp_cost_worker = "SELECT COUNT(emp_no) as 'worker_members' FROM emp_details WHERE frame_no = '{$id}' AND status = 'worker'";
      $qry_emp_cost_worker = mysqli_query($con,$sql_emp_cost_worker);

        if($row_emp_cost_worker = mysqli_fetch_array($qry_emp_cost_worker))
        {
          echo '<br>' ;
          $final_emp_cost_worker= $row_ot_hours["ot_hours"] *  $row_emp_cost_worker["worker_members"] * $row_charges["employee_charge"];
         // echo $final_emp_cost_worker;
        }
      
    } 

}

?>
