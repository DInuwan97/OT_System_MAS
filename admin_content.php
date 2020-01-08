
<?php
  $id=$_GET['id'];
?>

<?php
if(!($row_dashbord_Security["designation"] == 'Admin' || $row_dashbord_Security["designation"] == 'Manager')){
       
        echo'
        <script>
         window.location = "index.php"
        </script>
          ';
}
?>

<?php
      include('connection.php');
      $sql_final_ot_security = "SELECT * from confirm_frame cf,cost cs WHERE cf.frame_no = $id 
      AND cf.frame_no = cs.frame_no AND cf.transport_status = 'Accept' AND cf.ot_final_status =  'Accept' AND  
      cs.manager_status = 'Pending' AND cf.manager_status = 'Pending'";

      $qry_final_ot_security = mysqli_query($con,$sql_final_ot_security);
      if($row_final_ot_security = mysqli_fetch_array($qry_final_ot_security)){



      }else{
        echo '
          
      <script>
         window.location = "index.php"
      </script>

        ';
      }

?>



<center><h1>OT Final Approval</h1></center>

<?php
include('connection.php');
  if(isset($_POST["btn_confirm"])){
      $sql_manager_confirm = "UPDATE cost SET manager_status = 'Accept' WHERE frame_no = $id";
      if(mysqli_query($con,$sql_manager_confirm)){

        $sql_manager_confirm2 = "UPDATE confirm_frame SET manager_status = 'Accept' WHERE frame_no = $id";
        if(mysqli_query($con,$sql_manager_confirm2)){
          echo '
          </br>
          <div class="alert alert-success alert-dismissible fade show" role="alert">
           <strong> Successfully Approved! </strong>
           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
          </div>

     <meta http-equiv="refresh" content="2">
          ';
        }else{
          echo 'error';
        }
      }
  }
?>



<?php

  if(isset($_POST["btnreject"])){
      $sql_manager_confirm = "UPDATE cost SET manager_status = 'Reject' WHERE frame_no = $id";
      if(mysqli_query($con,$sql_manager_confirm)){

        $sql_manager_confirm2 = "UPDATE confirm_frame SET manager_status = 'Reject' WHERE frame_no = $id";
        if(mysqli_query($con,$sql_manager_confirm2)){
          echo '
          </br>
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>  Rejected the Request! </strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
          </div>

          
     <meta http-equiv="refresh" content="2">
          ';
        }else{
          echo 'error';
        }
      }
  }
?>


<center>

    <?php
        include('connection.php');

        $sql_admin_approval = "SELECT * FROM request_frame rf,confirm_frame cf,stakeholders st WHERE rf.frame_no = cf.frame_no  AND cf.ot_final_status = 'Accept' 
        AND cf.transport_status = 'Accept' AND st.username = rf.frame_by AND cf.frame_no = '{$id}'";

        $qry_admin_approval = mysqli_query($con,$sql_admin_approval);

        if($row_admin_approval = mysqli_fetch_array($qry_admin_approval))
        {
          
        $sql_stakeholder_details = "SELECT * FROM stakeholders WHERE username = '".$row_admin_approval["frame_by"]."'";
        $qry_stakeholder_details = mysqli_query($con,$sql_stakeholder_details);

        if($row_stakeholder_details = mysqli_fetch_array($qry_stakeholder_details))
        {
    ?>


          <table class="table table-unbordered" style="width:90%;font-weight:bold" border=2>

  <tbody>
    <tr>     <!-- table table-unbordered row -->
      
      <td style="width:400px;">   <!-- table table-unbordered row1 col1 -->
        <table border="2">

          <tr>

            <td>
              Request by :
            </td>

            <td>
              <?php echo $row_stakeholder_details["fname"];?> <?php echo $row_stakeholder_details["lname"];?>  <br>
              <?php echo $row_admin_approval["added_date"];?>
            </td>

          </tr>

          <tr>
            <td>
              <img src="images/user-mail.png" alt="" style="border:solid 3px;border-radius:60px;">
            </td>

            <td>
            <?php echo $row_stakeholder_details["email"];?><br>
            <?php echo $row_stakeholder_details["mobile"];?> <br>
            <?php echo $row_stakeholder_details["designation"];?>
            </td>
          </tr>

        </table>
      
      </td>  <!-- table table-unbordered row1 col1 -->



      <td style="width:380px">  <!-- table table-unbordered row1 col2 -->
        <div class="reason" style="width:350px;height:150px;border:solid 1px;margin-top:10px;">
              <center><h1 style="font-weight: bold">Reason</h1></center>
              <?php
                $sql_ot_reason = "SELECT * FROM ot_reason WHERE frame_no = $id";
                $qry_ot_reason = mysqli_query($con,$sql_ot_reason);
                if($row_ot_reason = mysqli_fetch_array($qry_ot_reason)){
              ?>
              <?php
                if($row_ot_reason["reason"] == '100'){
              ?>
                <h2 style="font-size:20px;font-weight:normal;margin-left:10px;">
                  Plan OT
                </h2>
              <?php   
                }else if($row_ot_reason["reason"] == '101'){
              ?>
                <h2 style="font-size:12px;font-weight:normal;margin-left:10px;">
                  Service capacity issues
                </h2>
              <?php   
                }else if($row_ot_reason["reason"] == '102'){
              ?>
                <h2 style="font-size:12px;font-weight:normal;margin-left:10px;">
                  Unplan style
                </h2>
              <?php   
                }else if($row_ot_reason["reason"] == '103'){
              ?>
                <h2 style="font-size:12px;font-weight:normal;margin-left:10px;">
                  QCO failures
                </h2>
              <?php   
                }else if($row_ot_reason["reason"] == '104'){
              ?>
                <h2 style="font-size:12px;font-weight:normal;margin-left:10px;">
                  Due to Machine BD
                </h2>

              <?php   
                }else if($row_ot_reason["reason"] == '105'){
              ?>
                <h2 style="font-size:12px;font-weight:normal;margin-left:10px;">
                  Production behind
                </h2>
              <?php   
                }else if($row_ot_reason["reason"] == '106'){
              ?>
                <h2 style="font-size:12px;font-weight:normal;margin-left:10px;">
                  Due to Material delay
                </h2>
              <?php   
                }else if($row_ot_reason["reason"] == '107'){
              ?>
                <h2 style="font-size:12px;font-weight:normal;margin-left:10px;">
                  High absenteeism
                </h2>
              <?php   
                }else if($row_ot_reason["reason"] == '108'){
              ?>
                <h2 style="font-size:12px;font-weight:normal;margin-left:10px;">
                  Approval delay
                </h2>
              <?php   
                }else if($row_ot_reason["reason"] == '109'){
              ?>
                <h2 style="font-size:12px;font-weight:normal;margin-left:10px;">
                  Power off
                </h2>
              <?php   
                }else if($row_ot_reason["reason"] == '110'){
              ?>
                <h2 style="font-size:12px;font-weight:normal;margin-left:10px;">
                  Machine presetting
                </h2>
              <?php   
                }else if($row_ot_reason["reason"] == '111'){
              ?>
                <h2 style="font-size:12px;font-weight:normal;margin-left:10px;">
                  Operation training
                </h2>
              <?php   
                }else if($row_ot_reason["reason"] == '112'){
              ?>
                <h2 style="font-size:12px;font-weight:normal;margin-left:10px;">
                  Focus training
                </h2>
              <?php   
                }else if($row_ot_reason["reason"] == '113'){
              ?>
               <h2 style="font-size:12px;font-weight:normal;margin-left:10px;">
                 TL/GL training
                </h2>
              <?php   
                }else if($row_ot_reason["reason"] == '114'){
              ?>
                <h2 style="font-size:12px;font-weight:normal;margin-left:10px;">
                  Size set
                </h2>
              <?php   
                }else if($row_ot_reason["reason"] == '115'){
              ?>
                <h2 style="font-size:12px;font-weight:normal;margin-left:10px;">
                  Final Inspection
                </h2>
              <?php   
                }else if($row_ot_reason["reason"] == '116'){
              ?>
               <h2 style="font-size:12px;font-weight:normal;margin-left:10px;">
                  Material Quality issues
                </h2>
              <?php   
                }else if($row_ot_reason["reason"] == '117'){
              ?>
                <h2 style="font-size:12px;font-weight:normal;margin-left:10px;">
                  New team members training 
                </h2>
               <?php   
                }else if($row_ot_reason["reason"] == '118'){
              ?>
                <h2 style="font-size:12px;font-weight:normal;margin-left:10px;">
                  Construction
                </h2>
              <?php   
                }else if($row_ot_reason["reason"] == '119'){
              ?>
                <h2 style="font-size:12px;font-weight:normal;margin-left:10px;">
                  Machine service
                </h2>
              <?php   
                }else if($row_ot_reason["reason"] == '120'){
              ?>
                <h2 style="font-size:12px;font-weight:normal;margin-left:10px;">
                  Special Reasons
                </h2>
              <?php   
                }else{
              ?>
                <h2 style="font-size:12px;font-weight:normal;margin-left:10px;">
                  <?php echo $row_ot_reason["reason"]?>
                </h2>
              <?php
                }
              }
              ?>
        </div>
      </td>  <!-- table table-unbordered row1 col2 -->


      <td>   <!-- table table-unbordered row1 col3 -->
        <table>
          <tr>
            <td>Require Date </td>
            <td><span class="badge badge-light" style="font-size:16px;"><?php echo $row_admin_approval["req_date"]; ?></span></td>         
          </tr>

          <tr>
            <td>Time Period</td>
            <td><span class="badge badge-light" style="font-size:16px;"><?php echo $row_admin_approval["start_time"]; ?> - <?php echo $row_admin_approval["end_time"]; ?></span></td>
          </tr>

       

        <tr>
               <td>No:of Sewing Machines</td>            
               <td><?php echo $row_admin_approval["vsm_num"];  ?></td>         
          </tr>

             <tr>
              <td>Utilies</td>            
               <td><?php echo $row_admin_approval["utility"]?></td>         
          </tr>

     
        
        </table>
      </td> <!-- table table-unbordered row1 col3 -->


    </tr>    <!-- table table-unbordered row1  -->


    <tr>  <!-- table table-unbordered row2  -->

      
      <td>  <!-- table table-unbordered col2 row2  -->
        <table>

            <tr>
              <td>Department </td>
              <td><?php echo $row_admin_approval["department"]; ?></td>
            </tr>

            <tr>
              <td>Moduel Number </td>
              <td><?php echo $row_admin_approval["model_num"]; ?></td>
            </tr>

            <tr>
              <td>Number of Staff</td>
              <td><?php echo $row_admin_approval["staff_members"]; ?></td>
            </tr>

            <tr>
              <td>Number of Workers</td>
              <td><?php echo $row_admin_approval["worker_members"]; ?></td>
            </tr>

     

                <?php
                  $sql_frame_by_details_ot = "SELECT st.fname,st.lname,cf.ot_forward_time FROM stakeholders st,confirm_frame cf 
                  WHERE cf.ot_by = st.username AND cf.frame_no = $id";

                  $qry_frame_by_details_ot = mysqli_query($con, $sql_frame_by_details_ot);
                  
                  if($row_frame_by_details_ot = mysqli_fetch_array($qry_frame_by_details_ot)){

                ?>


            <tr>
            
            <td>OT </td>
            <td>

                <?php echo $row_frame_by_details_ot["fname"];?>  <?php echo $row_frame_by_details_ot["lname"];?> <br>
                <?php echo $row_frame_by_details_ot["ot_forward_time"];?>


            </td>
            </tr>
  

                <?php
                  
                  $sql_frame_by_details_tra = "SELECT st.fname,st.lname,cf.tra_forward_time FROM stakeholders st,confirm_frame cf 
                  WHERE  cf.transport_by = st.username  AND cf.frame_no = $id";

                  $qry_frame_by_details_tra = mysqli_query($con,$sql_frame_by_details_tra);
                  
                  if($row_frame_by_details_tra = mysqli_fetch_array($qry_frame_by_details_tra)){

                ?>

            
                    <tr>
                      
                    <td>Transport</td>
                    <td>
                          <?php echo $row_frame_by_details_tra["fname"];?>  <?php echo $row_frame_by_details_tra["lname"];?> <br>
                          <?php echo $row_frame_by_details_tra["tra_forward_time"];?>
                    </td>
                    </tr>


                    

                <?php
                  }
                }
                ?>





        </table>
      </td>   <!-- table table-unbordered col2 row2  -->

      <td>
     
      <center>
        <table style="margin-top:25px;">

          <?php
            $sql_cost_details = "SELECT * FROM cost WHERE frame_no = '{$id}'";
            $qry_cost_details = mysqli_query($con,$sql_cost_details);

            if($row_cost_details = mysqli_fetch_array($qry_cost_details)){
            
          ?>

          
          <tr>
            <td>Sewing Machine Cost</td>
            <td>Rs : <?php echo $row_cost_details["sew_cost"];?></td>
          </tr>

                
          <tr>
            <td>Utility Cost</td>
            <td>Rs : <?php echo $row_cost_details["utility_cost"];?></td>
          </tr>

          <tr>
            <td>Employee Cost</td>
            <td>Rs : <?php echo $row_cost_details["emp_cost"];?></td>
          </tr>

          <tr>
            <td>Transport Cost</td>
            <td>Rs : <?php echo $row_cost_details["transport_cost"];?></td>
          </tr>



            <h1><span class="badge badge-warning"  style="margin-top:45px;">
            Total Cost Rs : <?php  echo number_format($row_cost_details["utility_cost"] + $row_cost_details["emp_cost"] +  $row_cost_details["transport_cost"] + $row_cost_details["sew_cost"],2);?>
            </span></h1>

          <?php
            }
          ?>

        </table>
        
        </center>
      </td>

        <td>
        
      <center>
            <table>
              <tr>

              <form action="" method="POST">
                <td border=0 style="border:none;"><button name="btn_confirm" class="btn btn-primary btn-lg btn-block" style="width:250px;margin-top:40px;border:none;">Confirm Request</button></td>
              </form>

              </tr>

              <tr>

              <form action="" method="POST">
                <td><button class="btn btn-danger btn-lg btn-block" name="btnreject">Reject Request</button></td>
                </form>
                  
              </tr>
            </table>


        <?php
            }
          }
        ?>
        
      </center>    
        
        </td>

    

      

    </tr>  <!-- table table-unbordered row2  -->


  </tbody>


          </table>
</center>

