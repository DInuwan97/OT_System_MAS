<?php
    include('common/imports.php');
?>

<?php
    include('common/header.php');
?>

 
    <div id="wrapper">

     <?php
        include('common/menu.php');
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
    if(!($row_dashbord_Security["designation"] == 'Admin'))
    {
        echo '
        <script>
            window.location = "dashbord.php"
        </script>
    
    ';
    }
?>

   <div class="row" >
            <div class="col-lg-8" style="margin-left:17%;">
              <div class="card mb-3">
                <div class="card-header">
                  <i class="fas fa-chart-bar"></i>
                  Bar Chart Preview</div>
                <div class="card-body">
                  <canvas id="myBarChart" width="100%" height="50"></canvas>
                </div>
                <div class="card-footer small text-muted"></div>
              </div>
            </div>





<div class="container">
   <div class="card card-register mx-auto mt-5">
     <div class="card-header">Bar Chart Axix Values</div>
       <div class="card-body" style=" overflow:auto;">

<form action="" method="POST">

        <?php
            $sql_bar_chart = "SELECT * from charts where id = 1";
            $qry_bar_chart = mysqli_query($con,$sql_bar_chart);
            if($row_bar_chart = mysqli_fetch_array($qry_bar_chart)){
        ?>

    

            <div class="form-row">
                
                <div class="col-md-6">
                    <div class="form-label-group">
                        <input type="number" name="min_limit"  style="margin-top:2px" id="min_limit" class="form-control" placeholder="staff_charge" required="" value="<?php echo $row_bar_chart["min_limit"]; ?>">
                        <label for="min_limit">Min Value</label>              
                    </div>
                </div>  

                                 
                <div class="col-md-6"> 
                    <div class="form-label-group">
                        <input type="number" name="max_limit"   style="margin-top:2px" id="max_limit" class="form-control" placeholder="employee_charge" required=""  value="<?php echo $row_bar_chart["max_limit"] ?>">
                        <label for="max_limit">Max Value</label>               
                     </div>
                </div>  

                <div class="col-md-6"> 
                    <div class="form-label-group">
                        <input type="number" name="max_thicks_limit"   style="margin-top:2px;margin-bottom:5px" id="max_thicks_limit" class="form-control" placeholder="boiler" required=""  value="<?php echo $row_bar_chart["maxtickslimit"] ?>">
                        <label for="max_thicks_limit">Max Thicks Limit</label>               
                     </div>
                </div>

            </div>
            <?php
            }
            ?>

        

            <center>
                    <button class="btn btn-warning" name="btn_update_bar_chart">Update Bar Chart Axix Values</button> 
            </center>

</form>


        </div>   
      </div>     
    </div>

<?php
    if(isset($_POST["btn_update_bar_chart"])){

        $min_limit = $_POST["min_limit"];
        $max_limit = $_POST["max_limit"];
        $max_thicks_limit = $_POST["max_thicks_limit"];

    $sql_update_bar_chart = "UPDATE charts SET min_limit = '{$min_limit}' , max_limit = '{$max_limit}' , 
                             maxtickslimit = '{$max_thicks_limit}' WHERE id = 1";

        if(mysqli_query($con,$sql_update_bar_chart)){
            echo '<meta http-equiv="refresh" content="0">';
        }
    }

?>


       

             
 


          
        </div> <!-- /.container-fluid -->


        </div>
       <!-- content-wrapper -->

   </div> 
   <!-- wrapper -->

<?php
    include('common/footer.php');
?>

    <!-- Bootstrap core JavaScript-->
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>


    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->

    <?php include('js/demo/chart-bar-demo.1 - Copy.php'); ?>
    <?php include('js/demo/chart-pie-demo.php'); ?>