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


            <!-- contennt here ----------------------------------------------------------------------------------------- -->

        
       <div class="container" > 
      <div class="card card-register mx-auto mt-5" >
        <div class="card-header">OT Workers Request Form</div>
        <div class="card-body" style="overflow:auto;">









<form action="" method="POST"><!-- select frame -->

                                <div class="input-group">
                                    <select class="custom-select" id="inputGroupSelect04" name="search_frame">
                                        <option selected>Choose...</option>

                                        
                                    <?php                                        
                                        include('connection.php');
                                        $sql_choose_frame = "SELECT * FROM request_frame WHERE frame_by = '".$_SESSION["uname"]."'";                                   
                                        $qry_choose_frame = mysqli_query($con,$sql_choose_frame);
                                        while($row_choose_frame = mysqli_fetch_array($qry_choose_frame))
                                        {                                                                                
                                    ?>

                                         <option value="<?php echo $row_choose_frame["frame_no"];?>"> On <b style="color:red;"><?php echo $row_choose_frame["req_date"];?></b>  @ 
                                         <b><?php echo $row_choose_frame["start_time"];?> - <?php echo $row_choose_frame["end_time"];?></b> 
                                         </option>

                                    <?php
                                        }
                                    ?>
                             
                                    </select>
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" name="btnsearch" >Search</button>
                                    </div>
                                    </div>

</form> <!-- select frame -->





<?php

    include('connection.php');
    if(isset($_POST["btnsearch"]))
    {
?>

<?php
        $search_frame = $_POST["search_frame"];

        $sql_search = "SELECT * FROM request_frame WHERE frame_no = '{$search_frame}' AND frame_by = '".$_SESSION["uname"]."'";


        $qry_search = mysqli_query($con,$sql_search);
        if($row_search = mysqli_fetch_array($qry_search))
        {

?>


              <table class="timetable"  style="width:100%; border-radius:3px; font-weight:bold;">
                <tbody>

                    <tr>
                        <td>Required Date </td>
                        <td><?php echo $row_search["req_date"]; ?></td>
                        <td>OT Time Period</td>
                        <td>
                           <?php echo $row_search["start_time"]; ?> - <?php echo $row_search["end_time"]; ?>            
                        </td>  
                                     
                    </tr> 

                    <tr>
                        <td>VSM Number</td>
                        <td><?php echo $row_search["vsm_num"]; ?></td>  
                        <td>Model Number</td>
                        <td><?php echo $row_search["model_num"]; ?></td>               
                    </tr>

                    <tr>
                        <td>No: of Staff</td>
                        <td><?php echo $row_search["staff_members"]; ?></td>  
                        <td>No: of Workers</td>
                        <td><?php echo $row_search["worker_members"]; ?></td>  
                    </tr> 
                 
             
                </tbody>
              </table>



 

<?php
        }
?>
 
 <form action="" method="POST">
      <!-- employee adding form -->


        <!-- ----------------hideen frame number here---------------- -->
        <td><input type="text" name="frame_no_hide" value="<?php echo $row_search["frame_no"];?>"></td>  
        <!-- ----------------hideen frame number here---------------- -->  

<?php
    }
    
 ?>

 




     
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

    <center><button class="btn btn-warning" onclick="myFunction();" name="ademp" 
    style="border-radius:50px;">Add Employee <i class="fa fa-plus fa-1x" aria-hidden="true"></i></button></center>

</form>
<!-- employee adding form -->



    </div>
                 

                
                 
            




        </div>
      </div>
    
</div>



<center>

<div style="width:90%;" id="added-workers">
       <div class="card-header" >List of Added Workers</div>
       <div class="card-body" >
            <div id="auto"> 

            
                                  




<table class="table table-dark" id="workers-list" style="margin-top:none;">
<tbody>


           <?php
                       include('connection.php');

                       $frame_no_hide = $_POST["frame_no_hide"];
                
                       $sql_show_list = "SELECT rf.frame_no as 'frame_no',rf.frame_by,rf.req_date as 'req_date',rf.start_time as 'start_time',
                       rf.end_time as 'end_time',ed.status as 'status',ed.epf_no as 'epf_no',ed.name as 'name',
                       ed.start_location as 'start_location',ed.end_location as 'end_location' ,ed.frame_no
                       FROM request_frame rf,emp_details ed WHERE rf.frame_no = ed.frame_no  AND ed.frame_no = '{$frame_no_hide}'
                       AND rf.frame_by = '".$_SESSION["uname"]."'";

                       $qry_show_list=mysqli_query($con,$sql_show_list);

                       while($row_show_list=mysqli_fetch_array($qry_show_list))
                       {
            ?>

           <tr id="tbl_list">

               <td><?php echo $row_show_list["epf_no"];?></td>
               <td><?php echo $row_show_list["name"];?></td>
               <td><?php echo $row_show_list["status"];?></td>
               <td><?php echo $row_show_list["req_date"];?></td>
               <td><?php echo $row_show_list["start_time"];?> - <?php echo $row_show_list["end_time"];?> </td>
               <td><?php echo $row_show_list["start_location"];?> - <?php echo $row_show_list["end_location"];?> </td>
                            
               <td>
           
                     <button class="btn btn-danger" style="border-radius:50px;" name="btndelete"><i class="fa fa-trash" aria-hidden="true"></i></button>
                       <!-- <button class="btn btn-primary" style="border-radius:50px;"  ><i class="fa fa-pen" aria-hidden="true"></i></button> -->
               <input type="hidden" name="hidden_work_no" value="<?php echo $row_show_list["emp_no"];?>">     

</form>  


               </td>
           </tr>

           
           <?php
               }
           ?>
            
</tbody>
</table>  
                                       
                   </div>

   


       </div>                    
     </div>     
   </div>
</center>



 </body>

</html>

<?php
  include('connection.php');
  if(isset($_POST["btndelete"]))
     {

      $sql_worker_delete = "DELETE  FROM emp_details WHERE emp_no = '".$_POST["hidden_work_no"]."'";
      if(mysqli_query($con,$sql_worker_delete))
      {
         echo'success';
      }
      else{
          echo 'erro';
      }

   }

?>


<?php
    if(isset($_POST["ademp"]))
    {
        $epf_no = $_POST["epf_no"];
        $emp_name = $_POST["emp_name"];
        $start_location = $_POST["start_location"];
        $end_location = $_POST["end_location"];
        $emp_type = $_POST["emp_type"];
        $frame_no_hide = $_POST["frame_no_hide"];

        $sql_emp_details = "INSERT INTO emp_details(frame_no,epf_no,name,status,start_location,end_location)VALUES
        (' $frame_no_hide','$epf_no','$emp_name','$emp_type','$start_location','$end_location')";

        if(mysqli_query($con,$sql_emp_details)){
            echo '
            <div class="alert alert-success" role="alert">
                Employee added!
            </div>
            ';              
        }
        else{
            die(mysqli_error($con));
            echo 'error';
        }

    }
?>
    














































      <!-- contennt here ------------------------------------------------------------------------------------------------------->

          
        </div> <!-- /.container-fluid -->


        </div>
       <!-- content-wrapper -->

   </div> 
   <!-- wrapper -->


<?php
    include('common/footer.php');
?>
