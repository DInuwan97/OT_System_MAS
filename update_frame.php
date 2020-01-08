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
    $sql_check_update_frame = "SELECT * from confirm_frame WHERE frame_no = $id AND ot_final_status = 'Return' AND transport_status = 'Pending' AND manager_status = 'Pending'";
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
                        <input type="number" name="no_of_staff" value="<?php echo $row_update_frame["staff_members"]?>"  style="margin-top:2px" id="no_of_staff" class="form-control" placeholder="Number of Employees" required="">
                        <label for="no_of_staff">Number of Staff</label>              
                    </div>
                </div>  

                


                        
                <div class="col-md-6"> 
                    <div class="form-label-group">
                        <input type="number" name="no_of_workers"  value="<?php echo $row_update_frame["worker_members"]?>"   style="margin-top:2px" id="no_of_workers" class="form-control" placeholder="Number of Employees" required="">
                        <label for="no_of_workers">Number of Workers</label>               
                     </div>
                </div>  

            </div>

            <br>

            <center>
            <button class="btn btn-primary" name="updateframe">Update Frame</button>
            </center>
            

</form>


<?php
    if(isset($_POST["updateframe"])){

        $staff_members = $_POST["no_of_staff"];
        $worker_members = $_POST["no_of_workers"];
        
    // $sql_update_confirm_frame = "UPDATE confirm_frame  SET ot_final_status='Pending'    
    // WHERE frame_no= $id";

       // $worker_count = 0;

        // $sql_frame_request_worker = "SELECT * FROM 
        // emp_details WHERE  frame_no = '{$id}' AND status = 'Worker'";

        // $qry_frame_request_worker = mysqli_query($con,$sql_frame_request_worker);
        // while($row_frame_request_worker = mysqli_fetch_array($qry_frame_request_worker)){
        //     $worker_count++;
        // }
        
        // $sql_frame_request_staff = "SELECT * FROM emp_details WHERE  frame_no = '{$id}' 
        // AND status = 'Staff')";

        // $qry_frame_request_staff = mysqli_query($con,$sql_frame_request_staff);
        // while($row_frame_request_staff = mysqli_fetch_array($qry_frame_request_staff)){
        //     $staff_count++;
        // }

        //if($worker_count == $worker_members &&  $staff_count == $staff_count)
        //{
     


                //if(mysqli_query($con,$sql_update_confirm_frame)){

                

                    $sql_update_request_frame = "UPDATE request_frame  SET staff_members = '{$staff_members}' , worker_members = '{$worker_members}'    
                    WHERE frame_no =  '{$id}'";

                    if(mysqli_query($con,$sql_update_request_frame)){
                        echo '<meta http-equiv="refresh" content="0">';
                    }
                    
                //}
        //}
      

    }


    // , rf.staff_members = '".$_POST["no_of_staff"]."' , rf.worker_members = ".$_POST["no_of_workers"]."'

?>






       </div>   
      </div>     
    </div>     
</div>

          
        </div> <!-- /.container-fluid -->


        </div>
       <!-- content-wrapper -->

   </div> 
   <!-- wrapper -->


<?php
    include('common/footer.php');
?>
