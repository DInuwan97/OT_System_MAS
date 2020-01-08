

<?php
if(($row_dashbord_Security["designation"] == 'Manager') || ($row_dashbord_Security["designation"] == 'Transport Checker') || ($row_dashbord_Security["designation"] == 'Department Leader')){
       
        echo'
        <script>
         window.location = "index.php"
        </script>
          ';
}
?>


<center><h1>OT Checking List</h1></center>

<div class="table-hover table-dark table-responsive">

  <!--Table-->
  <table class="table">

    <!--Table head-->
    <thead>
      <tr>
        
        <th class="th-sm">Required Date</th>
        <th class="th-sm">Required Time Period</th>
        <th class="th-sm">Department</th>
        <th class="th-sm">Model <br> Number</th>
        <th class="th-sm"><center>Staff <br> Members</center></th>
        <th class="th-sm"><center>Worker <br> Members</center></th>
        <th class="th-sm">Request by</th>
        <th class="th-sm">Take an Action</th>
      </tr>
    </thead>
    <!--Table head-->

    <!--Table body-->
    <tbody>

   

    <?php
    include('connection.php');
    $sql_ot_frame_check = "SELECT * FROM request_frame rf,confirm_frame cf,stakeholders st
                           WHERE rf.frame_by = st.username AND rf.frame_no = cf.frame_no AND  (cf.ot_final_status = 'Pending' OR  cf.ot_final_status = 'Processing') AND cf.transport_status = 'Pending'";

    $qry_ot_frame_check = mysqli_query($con,$sql_ot_frame_check);
    while($row_ot_frame_check = mysqli_fetch_array($qry_ot_frame_check))
    {
    ?>
        <?php
            
            $sql_frame_request = " SELECT * FROM request_frame  WHERE worker_members = (SELECT COUNT(emp_no) FROM 
            emp_details WHERE  frame_no = '".$row_ot_frame_check["frame_no"]."' AND status = 'Worker') AND
            staff_members =(SELECT COUNT(emp_no) FROM emp_details WHERE  frame_no = '".$row_ot_frame_check["frame_no"]."' 
            AND status = 'Staff') AND frame_no = '".$row_ot_frame_check["frame_no"]."'";


           




            $qry_frame_request = mysqli_query($con,$sql_frame_request);
            if($row_frame_rquest = mysqli_fetch_array( $qry_frame_request))
            {
             

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

        <td><span style="font-size:16px;color:#1A71CA;font-weight:bold;"><?php echo $row_ot_frame_check["department"];?></span></td>
        <td><span style="font-size:16px;color:#07A0F7;font-weight:bold;"><?php echo $row_ot_frame_check["model_num"];?></span></td>
        
        
        <td style="font-size:20px;">
            <center>
                <span style="border-radius:40px;" class="badge badge-warning"><?php echo $row_ot_frame_check["staff_members"];?></span>
            </center>
        </td>

        <td style="font-size:20px;">
            <center>
                <span style="border-radius:80px;" class="badge badge-danger"><?php echo $row_ot_frame_check["worker_members"];?></span>
            </center>
        </td>

        <td><?php echo $row_ot_frame_check["frame_by"];?> <br> <?php echo $row_ot_frame_check["added_date"];?></td>
        <td>
        <center>
            <h4><a href="employee_ot_details.php?id=<?php echo $row_ot_frame_check["frame_no"];?>"><span class="badge badge-success"> View</span></a></h4>
        </center>

        </td>      
      </tr>


      <?php
            }
      ?>

        
    <?php
        }
    ?>





    </tbody>
    <!--Table body-->

  </table>
  <!--Table-->

</div>

