
<center> <h1>OT Rejected Requests</h1></center>
<div class="table-hover table-light table-responsive">

  <!--Table-->
  <table class="table">


    <!--Table head-->
    <thead>
      <tr>
        
        <th class="th-sm">Required Date</th>
        <th class="th-sm">Required Time Period</th>
        <th class="th-sm">VSM <br> Number</th>
        <th class="th-sm">Model <br> Number</th>
        <th class="th-sm"><center>Staff <br> Members</center></th>
        <th class="th-sm"><center>Worker <br> Members</center></th>
                <?php
                    include('connection.php');
                    $sql_admin = "SELECT * FROM stakeholders WHERE username = '".@$_SESSION["uname"]."' AND designation = 'Admin'";
                    $qry_admin = mysqli_query($con,$sql_admin);
                    if($row_admin = mysqli_fetch_array($qry_admin)){
                ?>
                         <th class="th-sm">Frame By</th>
                <?php
                    }
                ?>
        <th class="th-sm">Take an Action</th>
      </tr>
    </thead>
    <!--Table head-->

    <!--Table body-->
    <tbody>

   

    <?php
    include('connection.php');

    if($row_admin["designation" == 'Admin']){

        $sql_ot_frame_check = "SELECT * FROM request_frame rf,confirm_frame cf
        WHERE rf.frame_no = cf.frame_no AND cf.ot_final_status = 'Return' AND cf.transport_status = 'Pending'";

        $qry_ot_frame_check = mysqli_query($con,$sql_ot_frame_check);
    }
    else{

    $sql_ot_frame_check = "SELECT * FROM request_frame rf,confirm_frame cf
                           WHERE rf.frame_no = cf.frame_no AND cf.ot_final_status = 'Return' AND cf.transport_status = 'Pending' AND rf.frame_by = '".@$_SESSION["uname"]."'";

    $qry_ot_frame_check = mysqli_query($con,$sql_ot_frame_check);
    }

    while($row_ot_frame_check = mysqli_fetch_array($qry_ot_frame_check))
    {
    ?>
        <?php
            
            $sql_frame_request = "SELECT * FROM request_frame  WHERE worker_members = (SELECT COUNT(frame_no) FROM 
            emp_details WHERE  frame_no = '".$row_ot_frame_check["frame_no"]."' AND status = 'Worker') AND
            staff_members =(SELECT COUNT(frame_no) FROM emp_details WHERE  frame_no = '".$row_ot_frame_check["frame_no"]."' 
            AND status = 'Staff')";

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

        <td><span style="font-size:16px;color:#1A71CA;font-weight:bold;"><?php echo $row_ot_frame_check["vsm_num"];?></span></td>
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

 

                <td><span style="font-size:16px;color:#1A71CA;font-weight:bold;"><?php echo $row_ot_frame_check["frame_by"];?></span></td>

        

       
        <td>
        <center>
        <a href="update_employees.php?id=<?php echo $row_ot_frame_check["frame_no"];?>"><span style="font-size:12px" class="badge badge-info">Edit Employees</span></a>
         <a href="update_frame.php?id=<?php echo $row_ot_frame_check["frame_no"];?>"><span style="font-size:12px"class="badge badge-success">Edit Frame</span></a>
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

