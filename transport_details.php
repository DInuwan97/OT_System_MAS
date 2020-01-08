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
  $sql_dashbord_Security = "SELECT * FROM stakeholders WHERE username='".@$_SESSION["uname"]."' AND confirmation = 'Accept'";
  $qry_dashbord_Security = mysqli_query($con,$sql_dashbord_Security);
  if($row_dashbord_Security = mysqli_fetch_array($qry_dashbord_Security)){
    if($row_dashbord_Security["designation"] == "Admin"){
?>

        <?php
            include('dash_head.php');
        ?>


<?php
    }
  }
?>

<?php
    include('transport_details_list.php');
?>

          
        </div> <!-- /.container-fluid -->


        </div>
       <!-- content-wrapper -->

   </div> 
   <!-- wrapper -->


<?php
    include('common/footer.php');
?>
