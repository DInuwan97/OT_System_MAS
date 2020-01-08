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

          <!-- Breadcrumbs-->
          <!-- <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.html">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Blank Page</li>
          </ol>  -->

<?php
    //include('ot-reject-list.php');
    $id=$_GET['id'];
?>

<?php
    include('connection.php');

    $sql_check_update_frame = "SELECT * from confirm_frame cf,request_frame rf WHERE cf.frame_no = $id AND cf.frame_no = rf.frame_no  AND cf.ot_final_status = 'Return' 
    AND cf.transport_status = 'Pending' AND cf.manager_status = 'Pending' and rf.frame_by = '".@$_SESSION["uname"]."'";
    $qry_check_update_frame = mysqli_query($con,$sql_check_update_frame);
    if($row_check_update_frame  = mysqli_fetch_array($qry_check_update_frame))
    {
   

    }
    else{
        echo '
        <script>
            window.location = "ot-rejections.php"
        </script>
    
    ';
    }
?>





<div class="container" >
   <div class="card card-register mx-auto mt-5">
     <div class="card-header">Update Frame</div>
       <div class="card-body" style=" overflow:auto;">

        <?php
            $sql_update_frame = "SELECT * from request_frame where frame_no = $id";
            $qry_update_frame = mysqli_query($con,$sql_update_frame);
            if($row_update_frame = mysqli_fetch_array($qry_update_frame)){
        ?>

            
              

            <div class="form-row">
                
                <div class="col-md-6">
                    <div class="form-label-group">
                        <input type="number" name="vsm_no" disabled   style="margin-top:2px" id="vsm_no" class="form-control" placeholder="VSM" required="" value="<?php echo $row_update_frame["vsm_num"] ?>">
                        <label for="vsm_no">VSM Number</label>              
                    </div>
                </div>  

                


                        
                <div class="col-md-6"> 
                    <div class="form-label-group">
                        <input type="number" name="model_no"   style="margin-top:2px" id="model_no" class="form-control" placeholder="Model" required="" disabled value="<?php echo $row_update_frame["model_num"] ?>">
                        <label for="model_no">Model Number</label>               
                     </div>
                </div>  

            </div>


            
            <div class="form-row">
                
                <div class="col-md-6">
                    <div class="form-label-group">
                        <input type="text" name="req_date" value="<?php echo $row_update_frame["req_date"]?>" disabled style="margin-top:2px" id="req_date" class="form-control" placeholder="VSM" required="">
                        <label for="req_date">Required Date</label>              
                    </div>
                </div>  

                


                        
                <div class="col-md-6"> 
                    <div class="form-label-group">
                        <input type="text" disabled name="req_time" value="<?php echo $row_update_frame["start_time"]?> - <?php echo $row_update_frame["end_time"] ?>"   style="margin-top:2px" id="req_time" class="form-control" placeholder="Model" required="">
                        <label for="req_time">Required Time</label>               
                     </div>
                </div>  

            </div>



    <?php
            }
    ?>




<form action="" method="POST">

            <div class="form-row">

                <div class="col-md-6">
                    <div class="form-label-group">
                        <input type="number" name="no_of_staff" disabled value="<?php echo $row_update_frame["staff_members"]?>"  style="margin-top:2px" id="no_of_staff" class="form-control" placeholder="Number of Employees" required="">
                        <label for="no_of_staff">Number of Staff</label>              
                    </div>
                </div>  

                


                        
                <div class="col-md-6"> 
                    <div class="form-label-group">
                        <input type="number" name="no_of_workers"  disabled value="<?php echo $row_update_frame["worker_members"]?>"   style="margin-top:2px" id="no_of_workers" class="form-control" placeholder="Number of Employees" required="">
                        <label for="no_of_workers">Number of Workers</label>               
                     </div>
                </div>  

            </div>

    

          
            

</form>



<form action="" method ="POST">

  
     <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
              
                    <div class="form-label-group">
                        <input type="number" name="epf_no" id="epf_no" style="margin-top:5px" class="form-control" placeholder="EPF No:" required="">
                        <label for="epf_no">EPF No:</label>
                    </div>
                                 
                    <div class="form-label-group">
                        <input type="text" name="emp_name" style="margin-top:5px"  id="emp_name" class="form-control" placeholder="Employee Name" required="">
                        <label for="emp_name">Employee Name</label>
                    </div>
                </div>


                <div class="col-md-6">

                      <div class="form-label-group">
                        <input type="text" name="start_location" style="margin-top:5px" id="start_location" class="form-control" placeholder="EPF No:" required="">
                        <label for="start_location">Start Location</label>
                    </div>
           
                    <div class="form-label-group">
                        <input type="text" name="end_location" style="margin-top:5px" id="end_location" class="form-control" placeholder="EPF No:" required="">
                        <label for="end_location">End Location</label>
                    </div>
             
                </div>
            </div>
           

                            <div class="input-group mb-3" style="margin-top:5px">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">Employee Type</label>
                                </div>
                                <select class="custom-select" name="emp_type"  id="inputGroupSelect01" required="">
                                    <option selected>Choose...</option>                
                                    <option value="Staff">Staff</option>
                                    <option value="Worker">Worker</option>                     
                               </select>
                            </div>

    <center><button class="btn btn-success" onclick="myFunction();" name="ademp" 
    style="border-radius:50px;">Update Employee <i class="fa fa-plus fa-1x" aria-hidden="true"></i></button></center>

</form>


<?php





if(isset($_POST["ademp"])){


//if($count1 < 1){

                  
            $epf_no = $_POST["epf_no"];
            $emp_name = $_POST["emp_name"];
            $start_location = $_POST["start_location"];
            $end_location = $_POST["end_location"];
            $emp_type = $_POST["emp_type"];

    
                $sql_check_emp_req_frame = "SELECT * FROM request_frame WHERE frame_no = $id";
                $qry_check_emp_req_frame = mysqli_query($con,$sql_check_emp_req_frame);
                //$row_check_emp_req_frame = mysqli_fetch_array( $qry_check_emp_req_frame);
               
                if($row_check_emp_req_frame = mysqli_fetch_array($qry_check_emp_req_frame)){


                        $sql_count_accept_staff = "SELECT COUNT(emp_no) as 'staff_accpet_emp' FROM emp_details WHERE (ot_status = 'Accept' OR ot_status = 'Pending') AND status = 'Staff' AND frame_no = $id";
                        $qry_count_accept_staff = mysqli_query($con,$sql_count_accept_staff);
                        $row_count_accept_staff = mysqli_fetch_array($qry_count_accept_staff);

                        $sql_count_accept_worker = "SELECT COUNT(emp_no) as 'worker_accpet_emp' FROM emp_details WHERE (ot_status = 'Accept' OR ot_status = 'Pending') AND status = 'Worker' AND frame_no = $id";
                        $qry_count_accept_worker = mysqli_query($con,$sql_count_accept_worker);
                        $row_count_accept_worker = mysqli_fetch_array($qry_count_accept_worker);

                        $sql_count_reject_emp = "SELECT COUNT(emp_no) as 'reject_emp' FROM emp_details WHERE ot_status = 'Reject' AND frame_no = $id";
                        $qry_count_reject_emp = mysqli_query($con,$sql_count_reject_emp);
                        $row_count_reject_emp = mysqli_fetch_array($qry_count_reject_emp);

                        //$sql_count_reject_worker = "SELECT COUNT(emp_no) FROM emp_details WHERE (ot_status = 'Reject' OR ot_status = 'Pending') AND status = 'Worker' AND frame_no = $id";
                       // $qry_count_reject_worker = mysqli_query($con,$sql_count_reject_worker);
                       // $row_count_reject_worker = mysqli_fetch_array($qry_count_reject_worker);

                      
                      // echo 'dinuwan';
         
                        if($row_check_emp_req_frame["staff_members"] > $row_count_accept_staff["staff_accpet_emp"] && $_POST["emp_type"] == 'Staff'){
                                            
                            $sql_update_emp_details = "INSERT INTO emp_details(frame_no,epf_no,name,status,start_location,end_location,ot_status)VALUES
                            ('$id','$epf_no','$emp_name','$emp_type','$start_location','$end_location','Pending')";

                        }
                        else{
                            echo '<meta http-equiv="refresh" content="0">';
                        }

                        if($row_check_emp_req_frame["worker_members"] > $row_count_accept_worker["worker_accpet_emp"] && $_POST["emp_type"] == 'Worker'){
              
                            $sql_update_emp_details = "INSERT INTO emp_details(frame_no,epf_no,name,status,start_location,end_location,ot_status)VALUES
                            ('$id','$epf_no','$emp_name','$emp_type','$start_location','$end_location','Pending')";
                            
                        }
                        else{
                            echo '<meta http-equiv="refresh" content="0">';
                        }

                       
                        //$sql_update_emp_details = 0;

                                if(@mysqli_query($con,$sql_update_emp_details))
                                {    
                    
                                }
                                else{
                                    die(mysqli_error($con));
                                    echo 'error';
                                }

                                // if(($row_count_reject_emp["reject_emp"] == 0) && 
                                // ($row_check_emp_req_frame["staff_members"] == $row_count_accept_staff["staff_accpet_emp"]) && 
                                // ($row_check_emp_req_frame["worker_members"] == $row_count_accept_worker["worker_accpet_emp"])){
        
                              
        
                                // }



                } //if $row_check_emp_req_frame

            //}
       
    } //btn event    
?>

<?php

if(isset($_POST["final_updt"])){

    $sql_count_final_staff = "SELECT COUNT(emp_no) as 'staff_final_emp' FROM emp_details WHERE (ot_status = 'Accept' OR ot_status = 'Pending') AND status = 'Staff' AND frame_no = $id";
    $qry_count_final_staff = mysqli_query($con,$sql_count_final_staff);
    $row_count_final_staff = mysqli_fetch_array($qry_count_final_staff);

    $sql_count_final_worker = "SELECT COUNT(emp_no) as 'worker_final_emp' FROM emp_details WHERE (ot_status = 'Accept' OR ot_status = 'Pending') AND status = 'Worker' AND frame_no = $id";
    $qry_count_final_worker = mysqli_query($con,$sql_count_final_worker);
    $row_count_final_worker = mysqli_fetch_array($qry_count_final_worker);

    if($row_count_final_staff["staff_final_emp"] >= 0 && $row_count_final_worker["worker_final_emp"] >= 0){

        $sql_final_send = "SELECT staff_members,worker_members FROM request_frame rf WHERE
                           staff_members = '".$row_count_final_staff["staff_final_emp"]."' AND
                           worker_members = '".$row_count_final_worker["worker_final_emp"]."'";

        $qry_final_send = mysqli_query($con,$sql_final_send);
        $row_final_send = mysqli_fetch_array($qry_final_send);

            if($row_final_send >= 0){


                $sql_update_confirm_frame = "UPDATE confirm_frame  SET ot_final_status='Pending'    
                WHERE frame_no= $id";
    
                if(mysqli_query($con,$sql_update_confirm_frame)){
                    echo '<meta http-equiv="refresh" content="0">';
                }                                   
                else{
                    echo 'Confirm Frame did not updated successfully!';
                }

            }  
                
            }


    }//final_updt

?>





<br>

            
            <table class="table table-sm table-dark" style="width:100%">

            <?php
                $sql_reject_epmloyee = "SELECT * FROM emp_details ed,request_frame rf WHERE ed.frame_no = $id AND (ed.ot_status = 'Reject' OR ed.ot_status = 'Pending') AND rf.frame_no = ed.frame_no";
                $qry_reject_epmloyee = mysqli_query($con,$sql_reject_epmloyee);
                while($row_reject_epmloyee = mysqli_fetch_array($qry_reject_epmloyee))
                {
            ?>

                    <tr>
                        <td><?php echo $row_reject_epmloyee["epf_no"]?></td>
                        <td><?php echo $row_reject_epmloyee["name"]?></td>
                        <td><?php echo $row_reject_epmloyee["start_location"]?> - <?php echo $row_reject_epmloyee["end_location"]?></td>
                        <td><?php echo $row_reject_epmloyee["status"]?></td>
                        <td><?php echo $row_reject_epmloyee["ot_status"]?></td>

                    <form action="" method="POST">
                        <td><button class="btn btn-danger btn-sm" name="btndelete" style="border-radius:50px;" ><i class="far fa-trash-alt"></i></button> <input type="hidden"  name="hidden_work_no" value="<?php echo $row_reject_epmloyee["emp_no"]?>" ></td>
                    </form>

                    </tr>

            <?php
                }
            ?>

            <?php
                include('connection.php');
                if(isset($_POST["btndelete"]))
                    {
                        $sql_check_emp_req_frame = "SELECT * FROM request_frame WHERE frame_no = $id";
                        $qry_check_emp_req_frame = mysqli_query($con,$sql_check_emp_req_frame);
                        //$row_check_emp_req_frame = mysqli_fetch_array( $qry_check_emp_req_frame);
                       
                         if($row_check_emp_req_frame = mysqli_fetch_array($qry_check_emp_req_frame)){
        
        
                                $sql_count_accept_staff = "SELECT COUNT(emp_no) as 'staff_accpet_emp' FROM emp_details WHERE (ot_status = 'Accept' OR ot_status = 'Pending') AND status = 'Staff' AND frame_no = $id";
                                $qry_count_accept_staff = mysqli_query($con,$sql_count_accept_staff);
                                $row_count_accept_staff = mysqli_fetch_array($qry_count_accept_staff);
        
                                $sql_count_accept_worker = "SELECT COUNT(emp_no) as 'worker_accpet_emp' FROM emp_details WHERE (ot_status = 'Accept' OR ot_status = 'Pending') AND status = 'Worker' AND frame_no = $id";
                                $qry_count_accept_worker = mysqli_query($con,$sql_count_accept_worker);
                                $row_count_accept_worker = mysqli_fetch_array($qry_count_accept_worker);
        
                                $sql_count_reject_emp = "SELECT COUNT(emp_no) as 'reject_emp' FROM emp_details WHERE ot_status = 'Reject' AND frame_no = $id";
                                $qry_count_reject_emp = mysqli_query($con,$sql_count_reject_emp);
                                $row_count_reject_emp = mysqli_fetch_array($qry_count_reject_emp);

                    $sql_worker_delete = "DELETE FROM emp_details WHERE emp_no = '".$_POST["hidden_work_no"]."'";
                    if(mysqli_query($con,$sql_worker_delete))
                    {
                        if(($row_count_reject_emp["reject_emp"] == 0) && 
                        ($row_check_emp_req_frame["staff_members"] == $row_count_accept_staff["staff_accpet_emp"]) && 
                        ($row_check_emp_req_frame["worker_members"] == $row_count_accept_worker["worker_accpet_emp"])){

                    

                        }
                        echo '<meta http-equiv="refresh" content="0">';
                    }

                    else{
                        echo 'erro';
                    }

                }
            }

            ?>

            </table>

                <center>

                <?php
                    $sql3 = "SELECT COUNT(emp_no) as 'no_of_rejections' FROM emp_details WHERE frame_no = $id AND ot_status = 'Reject'";
                    $qry3 = mysqli_query($con,$sql3);
                    $row3 = mysqli_fetch_array($qry3);

                    $sql6 = "SELECT * FROM request_frame WHERE frame_no = $id";
                    $qry6 = mysqli_query($con,$sql6);
                    $row6 = mysqli_fetch_array($qry6);

                    $sql4 = "SELECT COUNT(emp_no) as 'staff_accpet_emp' FROM emp_details 
                            WHERE (ot_status = 'Accept' OR ot_status = 'Pending') AND status = 'Staff' AND frame_no = $id";
                    $qry4 = mysqli_query($con,$sql4);
                    $row4 = mysqli_fetch_array($qry4);

                    $sql5 = "SELECT COUNT(emp_no) as 'worker_accpet_emp' FROM emp_details 
                             WHERE (ot_status = 'Accept' OR ot_status = 'Pending') AND status = 'Worker' AND frame_no = $id";
                    $qry5 = mysqli_query($con,$sql5);
                    $row5 = mysqli_fetch_array($qry5);

                    if($row3["no_of_rejections"] == 0 && ($row6["staff_members"] == $row4["staff_accpet_emp"]) && ($row6["worker_members"] == $row5["worker_accpet_emp"])){
                ?>
                     <form action="" method="POST">
                        <button class="btn btn-primary btn-lg" name="final_updt">
                            Update Details
                        </button>
                     </form>
                <?php
                    }
                ?>

                </center>

            </div>   

      </div>     
    </div>     
</div>

<br>



          
        </div> <!-- /.container-fluid -->


        </div>
       <!-- content-wrapper -->

   </div> 
   <!-- wrapper -->


<?php
    include('common/footer.php');
?>