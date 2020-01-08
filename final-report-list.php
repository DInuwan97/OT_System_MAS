

<div class="table-hover table-dark table-responsive">

  <!--Table-->
  <table class="table">

    <!--Table head-->
    <thead>
      <tr>
        
        <th class="th-sm">Required Date</th>
        <th class="th-sm">Required Time Period</th>
        <th class="th-sm">Staff <br> Members</th>
        <th class="th-sm">Worker <br> Members</th>
        <th class="th-sm">Module <br> Number</th>
        <th class="th-sm">Take an Action</th>
      </tr>
    </thead>
    <!--Table head-->

    <!--Table body-->
    <tbody>

   

    <?php
    include('connection.php');
    $sql_ot_frame_check = "SELECT * FROM request_frame rf,confirm_frame cf,cost cs
                           WHERE rf.frame_by = '".@$_SESSION["uname"]."' AND rf.frame_no = cf.frame_no AND cf.frame_no = cs.frame_no AND  cf.ot_final_status = 'Accept' AND cf.transport_status = 'Accept'
                           AND cf.manager_status = 'Pending' AND cs.manager_status = 'Pending'";

    $qry_ot_frame_check = mysqli_query($con,$sql_ot_frame_check);
    while($row_ot_frame_check = mysqli_fetch_array($qry_ot_frame_check))
    {
    ?>
        <?php
     

            //$sql_check_employee = "SELECT COUNT(frame_no) FROM emp_details WHERE  frame_no = '".$row_ot_frame_check["frame_no"]."'
            //AND status = 'Worker'";


        ?>



    
      <tr class="" style="height:35px;">
        <td>           
            <span style="font-size:16px;" class="badge badge-light"><?php echo $row_ot_frame_check["req_date"];?></span>           
        </td>

        <td>
            <span style="font-size:16px;" class="badge badge-light"><?php echo $row_ot_frame_check["start_time"];?> - <?php echo $row_ot_frame_check["end_time"];?></span>
        </td>

        <td><span style="font-size:16px;color:#1A71CA;font-weight:bold;"><?php echo $row_ot_frame_check["staff_members"];?></span></td>
        <td><span style="font-size:16px;color:#07A0F7;font-weight:bold;"><?php echo $row_ot_frame_check["worker_members"];?></span></td>
        <td><span style="font-size:16px;color:#07A0F7;font-weight:bold;"><?php echo $row_ot_frame_check["model_num"];?></span></td>

     

 
        <td>
        <center>
            <h4><a href="createpdf.php?id=<?php echo $row_ot_frame_check["frame_no"];?>"><span class="badge badge-warning">Generate Report</span></a></h4>
        </center>

        </td>      
      </tr>


      <?php
            
      ?>

        
    <?php
        }
    ?>





    </tbody>
    <!--Table body-->

  </table>
  <!--Table-->

</div>

