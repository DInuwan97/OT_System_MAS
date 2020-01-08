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

        <?php
  include('dash_head.php');
?>

          <!-- Breadcrumbs-->
          <!-- <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.html">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Blank Page</li>
          </ol>  -->

<?php

?>


<?php
    include('admin_content.php');
?>

          
        </div> <!-- /.container-fluid -->


        </div>
       <!-- content-wrapper -->

   </div> 
   <!-- wrapper -->


<?php
    include('common/footer.php');
?>
