<?php 
  include('connection.php');
  
  $sql_user_designation = "SELECT COUNT(rf.frame_no) as 'ot_check_notification' FROM request_frame rf,confirm_frame cf 
  WHERE rf.frame_no = cf.frame_no AND cf.ot_final_status = 'Pending' AND cf.transport_status = 'Pending'";


 // $sql = "SELECT COUNT(rf.frame_no) FROM request_frame rf,employee_Details ed WHERE rf.frame_no = ed.frame_no AND "

  $qry_user_designation = mysqli_query($con,$sql_user_designation);
  $row_user_designation = mysqli_fetch_array($qry_user_designation);


  $sql_header_username = "SELECT*FROM stakeholders WHERE username = '".@$_SESSION["uname"]."'"; 
  $qry_header_username = mysqli_query($con,$sql_header_username);
  $row_header_username = mysqli_fetch_array($qry_header_username);

 
  if(@$_SESSION["uname"] == NULL){
    echo '
       <script>
         window.location = "login.php"
       </script>
       ';

       if(!($row_header_username["designation"] == 'Manager' || $row_header_username["designation"] == 'OT Checker' ||
       $row_header_username["designation"] == 'Transport Checker' || $row_header_username["designation"] == 'Department Leader')){
        echo '
         <script>
           window.location = "login.php"
         </script>
         ';
       }
  }


 ?>



<body id="page-top">

<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

  <a class="navbar-brand mr-1" href="index.html">Factory OT System</a>

  <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
    <i class="fas fa-bars"></i>
  </button>

  <!-- Navbar Search -->
  <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
    <div class="input-group">
     
      <div class="input-group-append">
    
      </div>
    </div>
  </form>

  <!-- Navbar -->
  <ul class="navbar-nav ml-auto ml-md-0">
    <li class="nav-item dropdown no-arrow mx-1">
      <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-bell fa-fw"></i>

        <?php
             if($row_header_username["designation"] == 'OT Checker')
             {

              include('connection.php');
              $counter = 0;

              $sql_ot_frame_check = "SELECT * FROM request_frame rf,confirm_frame cf
              WHERE rf.frame_no = cf.frame_no AND (cf.ot_final_status = 'Pending' OR  cf.ot_final_status = 'Processing')  AND cf.transport_status = 'Pending'";

              $qry_ot_frame_check = mysqli_query($con,$sql_ot_frame_check);
              while($row_ot_frame_check = mysqli_fetch_array($qry_ot_frame_check))
              {

                $sql_frame_ot_notification = "SELECT *FROM request_frame  WHERE worker_members = (SELECT COUNT(frame_no) FROM emp_details WHERE  
                frame_no = '".$row_ot_frame_check["frame_no"]."' AND status = 'Worker') AND
                staff_members =(SELECT COUNT(frame_no) FROM emp_details WHERE  frame_no = '".$row_ot_frame_check["frame_no"]."' AND status = 'Staff') 
                and frame_no = '".$row_ot_frame_check["frame_no"]."' ";

                $qry_frame_ot_notification = mysqli_query($con, $sql_frame_ot_notification);
                  if($row_frame_ot_notification = mysqli_fetch_array( $qry_frame_ot_notification))
                  {              
                    $counter = $counter + 1;
                  }

                  
              }

        ?>

          <span class="badge badge-danger"><?php echo $counter;?></span>

        <?php            
             }elseif($row_header_username["designation"] == 'Manager'){   
               
              $counter_reject_notification = 0;
               
              $sql_ot_frame_check = "SELECT * FROM request_frame rf,confirm_frame cf
              WHERE rf.frame_no = cf.frame_no AND cf.ot_final_status = 'Pending' AND cf.transport_status = 'Pending'";

              $qry_ot_frame_check = mysqli_query($con,$sql_ot_frame_check);
              while($row_ot_frame_check = mysqli_fetch_array($qry_ot_frame_check))
              {
                
               $sql_reject_notification = "SELECT COUNT(ed.frame_no) as 'emp_frame_no' FROM emp_details ed,request_frame rf WHERE ed.ot_status = 'Reject' AND 
               ed.frame_no = rf.frame_no AND ed.frame_no = '".$row_ot_frame_check["frame_no"]."' AND rf.frame_by = '".$_SESSION["uname"]."'" ; 
                                      
               $qry_reject_notification = mysqli_query($con,$sql_reject_notification);

               if($row_reject_notification =  mysqli_fetch_array($qry_reject_notification))
               {
                $counter_reject_notification++;
               }
          ?>

                  <span class="badge badge-danger"><?php echo $counter_reject_notification;?></span> 


          <?php       
           
                
               
              }
            }


        ?>

                   

      


      </a>
      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">

      <?php      
           include('connection.php');
          $sql_header_username = "SELECT*FROM stakeholders WHERE username = '".@$_SESSION["uname"]."'"; 
          $qry_header_username = mysqli_query($con,$sql_header_username);      
            if($row_header_username = mysqli_fetch_array($qry_header_username))
            {
              if($row_header_username["designation"] == 'OT Checker')
              {
       ?>
               <a class="dropdown-item" href="ot-checker-summary.php">Check Requested OT<span class="badge badge-danger" style="margin-left:10px;border-radius:20px"><?php echo $counter;?></span></a> 
       <?php        
              }
            
            elseif($row_header_username["designation"] == 'Transport Checker')
            {
              $sql_ot_frame_check_transport = "SELECT count(rf.frame_no) as 'transport' FROM request_frame rf,confirm_frame cf
              WHERE rf.frame_no = cf.frame_no AND  cf.ot_final_status = 'Accept' AND cf.transport_status = 'Pending'";

              $qry_ot_frame_check_transport = mysqli_query($con,$sql_ot_frame_check_transport);
              if($row_ot_frame_check_transport = mysqli_fetch_array($qry_ot_frame_check_transport))
              {
                        
      ?>
                  <a class="dropdown-item" href="transport-summary.php">Requested OT Transport<span class="badge badge-danger" style="margin-left:10px;border-radius:20px"><?php echo $row_ot_frame_check_transport["transport"];?></span></a>
      <?php
            }
          }
          }
      ?>


      
    
      

      <?php
          $sql_report = "SELECT count(cf.frame_no) as 'print_counter' from confirm_frame cf,request_frame rf WHERE cf.ot_final_status = 'Accept' AND 	cf.transport_status = 'Accept' AND cf.manager_status = 'Pending'
           AND rf.frame_no = cf.frame_no AND rf.frame_by = '".@$_SESSION["uname"]."'";
          $qry_report = mysqli_query($con,$sql_report);
          if($row_report = mysqli_fetch_array($qry_report)){
      ?>

          
               <a class="dropdown-item" style="display-inline" href="final_report.php">Print Approved Reports
                 <?php
                    if($row_report["print_counter"] > 0){
                 ?>
                 <span class="badge badge-danger" style="margin-left:10px;border-radius:20px"><?php echo $row_report["print_counter"];?></span>
                 <?php
                    }
                 ?>
                 </a> 

      <?php
          }
      ?>
 
 <div class="dropdown-divider" style="width:150px;"></div>
        <a class="dropdown-item" href="ot-rejections.php">Working Hour Rejections</a>
       
      </div>
    </li>





  <?php
      
  $sql_header_username = "SELECT*FROM stakeholders WHERE username = '".@$_SESSION["uname"]."'"; 
  $qry_header_username = mysqli_query($con,$sql_header_username);

  


      if($row_header_username = mysqli_fetch_array($qry_header_username))
      { 
  ?>

    <li class="nav-item dropdown no-arrow">
      <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <label for="user_dropdown" style="color:white;cursor:pointer"><?php echo $row_header_username["fname"];?> <?php echo $row_header_username["lname"];?></label> <i class="fas fa-user-circle fa-fw"></i>
      </a>
      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown" id="user_dropdown">
        <a class="dropdown-item" href="factory_settings.php">Settings</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
      </div>
    </li>
    
<?php
  }else{
      echo'erroror';

  }
?>

  </ul>

</nav>
 





