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
      <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
      <div class="input-group-append">
        <button class="btn btn-primary" type="button">
          <i class="fas fa-search"></i>
        </button>
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
        ?>

          <span class="badge badge-danger"><?php echo $row_user_designation["ot_check_notification"];?></span>

        <?php
             }
        ?>


      </a>
      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">

      <?php      
          $sql_header_username = "SELECT*FROM stakeholders WHERE username = '".@$_SESSION["uname"]."'"; 
          $qry_header_username = mysqli_query($con,$sql_header_username);      
          if($row_header_username = mysqli_fetch_array($qry_header_username) && $row_header_username["designation"] == 'OT Checker')
        {
          echo '<a class="dropdown-item" href="ot-checker-summary.php">Check Requested OT</a>';
        }
      ?>
 
        <a class="dropdown-item" href="#">Another action</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">Something else here</a>
      </div>
    </li>
    <li class="nav-item dropdown no-arrow mx-1">
      <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-envelope fa-fw"></i>
        <span class="badge badge-danger">7</span>
      </a>
      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">Something else here</a>
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
        <a class="dropdown-item" href="#">Settings</a>
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
 





