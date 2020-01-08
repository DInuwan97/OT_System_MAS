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
  include('dash_head.php');
?>



<br>

    <ol class="breadcrumb">

        <li class="breadcrumb-item">
        
          <div class="form-row">

            <form action="" method="POST">

            <table>
              <tr>

                <td>

                    <table>
                        <tr>
                          <td>   
                            
                            
            <div class="form-group">
                <div class="input-group date" id="datetimepicker4" data-target-input="nearest">
          
                            <div class="input-group-append" style="cursor:pointer" data-target="#datetimepicker4" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>  

                              <input type="text" placeholder="Required Date"  
                              style="width:200px; cursor:pointer;display:inline" name="txtday1" class="form-control" 
                              required=""  id="date1">                        
                 </div>
            </div>

                </td>
                  <td>

             <div class="form-group">
                <div class="input-group date" id="datetimepicker5" data-target-input="nearest">

                          <div class="input-group-append" style="cursor:pointer" data-target="#datetimepicker5" data-toggle="datetimepicker">
                              <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                          </div>

        
                          <input type="text" placeholder="Required Date"  
                          style="width:200px; cursor:pointer;" name="txtday2" class="form-control" 
                          required=""  id="date2"> 

                  </div>
             </div>


                          </td>


                        </tr>

                    </table>

                <td>


                    <table>
                      <tr>
                        <td style="float:right">
                        <input style="margin-top:0px;" type="submit" class="btn btn-warning" value="Filter" name="btnfilter"> 
                        </td>
                      </tr>
                    </table>
     
                

                </td>



                <td>
</form>
 
<form action="" method="POST">      
                <table style="float:right" border="0" style="margin-left:100px;">
                  <tr>
                    <td style="width:200px;"></td>
                
                    <td><input type="text" class="form-control" name="searchuname" placeholder="Search bfrom Username" required=""></td>
                    <td>  <button class="btn btn-success" name="btnsubmit"><i class="fas fa-search"></i></button></td>
                  </tr>
                </table>
</form>               
                
                </td>



              </tr>
            </table>

         <?php
                if(isset($_POST["btnfilter"])){
                    include('connection.php');

                    $date1 = $_POST["txtday1"];
                    $date2 = $_POST["txtday2"];


                    include('chart_cal_date.php');

                    
                }

        ?>




   

       


              



                 
                      <!-- <input type="submit" class="btn btn-warning" value="Filter">         
                     -->
   









            </div>



            </li>
          
          </ol>

          <!-- Area Chart Example-->
          <!-- <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-chart-area"></i>
              Area Chart Example</div>
            <div class="card-body">
              <canvas id="myAreaChart" width="100%" height="30"></canvas>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div> -->


                
            <div class="row">
            <div class="col-lg-8">
              <div class="card mb-3">
                <div class="card-header">
                  <i class="fas fa-chart-bar"></i>
                  OT cost Summary</div>
                <div class="card-body">
                  <canvas id="myBarChart" width="100%" height="50"></canvas>
                </div>
                <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
              </div>
            </div>

             <div class="col-lg-4">
              <div class="card mb-3">
                <div class="card-header">
                  <i class="fas fa-chart-pie"></i>
                 Ot Cost Summary(Personvice)</div>
                <div class="card-body">
                  <canvas id="myPieChart" width="100%" height="100"></canvas>
                </div>
                <div class="card-footer small text-muted">Updated</div>
              </div>
            </div> 

          </div>



     <?php
            include('ot_reason_content.php');
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
    <!-- <script src="vendor/jquery/jquery.min.js"></script> -->


    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->

    <?php include('js/demo/chart-bar-demo.1 - Copy.php'); ?>
    <?php include('js/demo/chart-pie-demo.php'); ?>
    <?php include('js/demo/chart-area-demo.php'); ?>



<?php
  include('connection.php');
  $sql_current_user = "SELECT * FROM stakeholders where username = '".@$_SESSION["uname"]."'";
  $qry_current_user = mysqli_query($con,$sql_current_user);
  if($row_current_user = mysqli_fetch_array($qry_current_user)){

    if(($row_current_user["mobile"] == $row_current_user["password"]) && ($row_current_user["mobile"] == $row_current_user["cpassword"])){
?>

<script type="text/javascript">
    $(window).on('load',function(){
        $('#ResetModal').modal('show');
    });
</script>

<div class="modal fade" id="ResetModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i style="color:#E2B225;"class="fas fa-exclamation-triangle fa-2x"></i> <h2 style="color:#DC551C "> Warning</h2></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Your Account has been reset very recently.
        <strong>Please change your password!</strong> </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" href="factory_settings.php"><a href="factory_settings.php" style="text-decoration:none;color:black"><strong>Change Passowrd</strong></a></button>
        <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Skip</button>
      </div>
    </div>
  </div>
</div>

<?php
  }
}

?>

