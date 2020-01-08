<!-- Sidebar -->


<?php
  $sql_dashbord_Security = "SELECT * FROM stakeholders WHERE username='".@$_SESSION["uname"]."' AND confirmation = 'Accept'";
  $qry_dashbord_Security = mysqli_query($con,$sql_dashbord_Security);
  if($row_dashbord_Security = mysqli_fetch_array($qry_dashbord_Security)){
?>
<ul class="sidebar navbar-nav">
        <li class="nav-item">

         

          <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-home"></i>
            <span>Home</span>
          </a>

        

          <a class="nav-link" href="dashbord.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
      
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>OT Requstions</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">How to request an OT  <i class="fas fa-question-circle"></i> </h6>
          
            <a class="dropdown-item " href="add_ot_frame.php">Add OT Frame</a>
            <a class="dropdown-item" href="frame_list.php">Add Employee</a>
            <div class="dropdown-divider"></div>
          
           
          </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="reject_list.php">
            <i class="fas fa-eject"></i>
            <span> Rejected OT'S</span></a>
        </li>

      <?php
        if($row_dashbord_Security["designation"] == 'OT Checker' || $row_dashbord_Security["designation"] == 'Admin')
        {
      ?>   
        <li class="nav-item">
            <a class="nav-link" href="ot-checker-summary.php">
            <i class="fas fa-business-time"></i>
            <span >Verify Working Hours</span></a>
           </a>
        </li>

      <?php
        }
      ?>

      <?php
        if($row_dashbord_Security["designation"] == 'Transport Checker' || $row_dashbord_Security["designation"] == 'Admin')
        {
      ?>   
        <li class="nav-item">
            <a class="nav-link" href="transport-summary.php">
            <i class="fas fa-shuttle-van"></i>
            <span>Verify Transport Cost</span></a>
        </li>

      <?php
        }
      ?>




           <?php
        if($row_dashbord_Security["designation"] == 'Admin')
        {
      ?>   
        <li class="nav-item">
            <a class="nav-link" href="all_aproved_ot.php">
            <i class="fas fa-print"></i>
            <span>Pending OT'S</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="added_ot.php">
            <i class="fas fa-file-alt"></i>
            <span>Approved OT'S</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="utility_activation.php">
            <i class="fas fa-drafting-compass"></i>
            <span>Activate Utilities</span></a>
        </li>



        <li class="nav-item">
            <a class="nav-link" href="user_request.php">
            <i class="fas fa-user-plus"></i>
            <span>New Registrations</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="forgot_request.php">
            <i class="fas fa-question-circle"></i>
            <span>Forgotten Passwords</span></a>
        </li>



      <?php
        }
      ?>







      <?php
        if($row_dashbord_Security["designation"] == 'Admin')
        {
      ?>   

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-cogs"></i> 
            <span>Settings</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
               
            <a class="dropdown-item " href="change_charges.php">Change Chargers</a>
            <div class="dropdown-divider"></div>
            <h6 class="dropdown-header">Charts Configuration</h6>
            <a class="dropdown-item" href="barchart_values.php">Bar Graph Limits</a>
            <a class="dropdown-item" href="areachart_values.php">Line Graph Limits</a>
           
          </div>
        </li>

      <?php
        }

      ?>
        
      </ul>

      <?php
        }
      ?>