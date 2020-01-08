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

<!-- 
        	start -->
<?php
  include('dash_head.php');
?>

<?php
  include('chart_cal.php');
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

                        <td style="width:250px;"></td>


                    <td style="float:right">
                    <input style="margin-top:0px;" type="text" class="form-control" disabled value="Filter" style="width:100px;" name="btnfilter"> 
                    </td>
                  </tr>
                </table>

            
                 
                 
                
             
 
            

            </td>



            <td>
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



        </div>



        </li>
      
      </ol>





            <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-chart-area"></i>
              Total OT Cost with Departmentvice</div>
            <div class="card-body" style="background:#98DCD5">
             
            <table style="width:100%">

<tr>
  <td style="width:10%">
      <table>
          <tr><img src="images/user-mail.png" alt="" style="border:solid 2px;border-radius:50%; width:50%;height:60%;"> </tr>
          <tr> <h4 style="font-size:12px; font-weigth:bold">Factory Engineering</h4> </tr>
        
      </table>
  </td>

      <td style="width:90%">
      <div class="progress">
     
          <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" aria-valuenow="75" aria-valuemin="0"
           aria-valuemax="100" style="width:<?php echo $factory_engineering_avg?>%"><strong style="color:black"><?php echo number_format($factory_engineering_avg,2)?>%</strong> </div>
      </div>       
  </td>
</tr>


  <tr>
  <td style="width:10%">
      <table>
          <tr><img src="images/user-mail.png" alt="" style="border:solid 2px;border-radius:50%; width:50%;height:60%;"></tr>
          <tr> <h4 style="font-size:12px; font-weigth:bold">Production Engineering</h4> </tr>
      </table>
  </td>

      <td style="width:90%">
      <div class="progress">
          <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" aria-valuenow="75" aria-valuemin="0"
           aria-valuemax="100" style="width:<?php echo $production_engineering_avg?>%"><strong style="color:black"><?php echo number_format($production_engineering_avg,2)?>%</strong> </div>
      </div>       
  </td>
</tr>


  <tr>
  <td style="width:10%">
      <table>
          <tr><img src="images/user-mail.png" alt="" style="border:solid 2px;border-radius:50%; width:50%;height:60%;"></tr>
          <tr> <h4 style="font-size:12px; font-weigth:bold">Autonomation</h4> </tr>
      </table>
  </td>

      <td style="width:90%">
      <div class="progress">
          <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" aria-valuenow="75" aria-valuemin="0"
           aria-valuemax="100" style="width:<?php echo $autonomation_avg?>%"><strong style="color:black"><?php echo number_format($autonomation_avg,2)?>%</strong> </div>
      </div>       
  </td>
</tr>


  <tr>
  <td style="width:10%">
      <table>
          <tr><img src="images/user-mail.png" alt="" style="border:solid 2px;border-radius:50%; width:50%;height:60%;"></tr>
          <tr> <h4 style="font-size:12px; font-weigth:bold">MOS</h4> </tr>
      </table>
  </td>

      <td style="width:90%">
      <div class="progress">
          <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" aria-valuenow="75" aria-valuemin="0"
           aria-valuemax="100" style="width:<?php echo $mos_avg?>%"><strong style="color:black"><?php echo number_format($mos_avg,2)?>%</strong> </div>
      </div>       
  </td>
</tr>



  <tr>
  <td style="width:10%">
      <table>
          <tr><img src="images/user-mail.png" alt="" style="border:solid 2px;border-radius:50%; width:50%;height:60%;"></tr>
          <tr> <h4 style="font-size:12px; font-weigth:bold">Quality</h4> </tr>
      </table>
  </td>

      <td style="width:90%">
      <div class="progress">
          <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" aria-valuenow="75" aria-valuemin="0"
           aria-valuemax="100" style="width:<?php echo $quality_avg?>%"><strong style="color:black"><?php echo number_format($quality_avg,2)?>%</strong> </div>
      </div>       
  </td>
</tr>



  <tr>
  <td style="width:10%">
      <table>
          <tr><img src="images/user-mail.png" alt="" style="border:solid 2px;border-radius:50%; width:50%;height:60%;"></tr>
          <tr> <h4 style="font-size:12px; font-weigth:bold">RM</h4> </tr>
      </table>
  </td>

      <td style="width:90%">
      <div class="progress">
          <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" aria-valuenow="75" aria-valuemin="0"
           aria-valuemax="100" style="width:<?php echo $rm_avg?>%"><strong style="color:black"><?php echo number_format($rm_avg,2)?>%</strong> </div>
      </div>       
  </td>
</tr>



  <tr>
  <td style="width:10%">
      <table>
          <tr><img src="images/user-mail.png" alt="" style="border:solid 2px;border-radius:50%; width:50%;height:60%;"></tr>
          <tr> <h4 style="font-size:12px; font-weigth:bold">FG</h4> </tr>
      </table>
  </td>

      <td style="width:90%">
      <div class="progress">
          <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" aria-valuenow="75" aria-valuemin="0"
           aria-valuemax="100" style="width:<?php echo $fg_avg?>%"><strong style="color:black"><?php echo number_format($fg_avg,2)?>%</strong> </div>
      </div>       
  </td>
</tr>



  <tr>
  <td style="width:10%">
      <table>
          <tr><img src="images/user-mail.png" alt="" style="border:solid 2px;border-radius:50%; width:50%;height:60%;"></tr>
          <tr> <h4 style="font-size:12px; font-weigth:bold">Technical</h4> </tr>
      </table>
  </td>

      <td style="width:90%">
      <div class="progress">
          <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" aria-valuenow="75" aria-valuemin="0"
           aria-valuemax="100" style="width:<?php echo $technical_avg?>%"><strong style="color:black"><?php echo number_format($technical_avg,2)?>%</strong> </div>
      </div>       
  </td>
</tr>



  <tr>
  <td style="width:10%">
      <table>
          <tr><img src="images/user-mail.png" alt="" style="border:solid 2px;border-radius:50%; width:50%;height:60%;"></tr>
          <tr> <h4 style="font-size:12px; font-weigth:bold">Cutting</h4> </tr>
      </table>
  </td>

      <td style="width:90%">
      <div class="progress">
          <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" aria-valuenow="75" aria-valuemin="0"
           aria-valuemax="100" style="width:<?php echo $cutting_avg?>%"><strong style="color:black"><?php echo number_format($cutting_avg,2)?>%</strong> </div>
      </div>       
  </td>
</tr>



  <tr>
  <td style="width:10%">
      <table>
          <tr><img src="images/user-mail.png" alt="" style="border:solid 2px;border-radius:50%; width:50%;height:60%;"></tr>
          <tr> <h4 style="font-size:12px; font-weigth:bold">HR</h4> </tr>
      </table>
  </td>

      <td style="width:90%">
      <div class="progress">
          <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" aria-valuenow="75" aria-valuemin="0"
           aria-valuemax="100" style="width:<?php echo $hr_avg?>%"><strong style="color:black"><?php echo number_format($hr_avg,2)?>%</strong> </div>
      </div>       
  </td>
</tr>







<tr>
  <td style="width:10%">
      <table>
          <tr><img src="images/user-mail.png" alt="" style="border:solid 2px;border-radius:50%; width:50%;height:60%;"></tr>
          <tr> <h4 style="font-size:12px; font-weigth:bold">Operation</h4> </tr>
      </table>
  </td>

      <td style="width:90%">
      <div class="progress">
          <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" aria-valuenow="75" aria-valuemin="0"
           aria-valuemax="100" style="width:<?php echo $operation_avg?>%"><strong style="color:black"><?php echo number_format($operation_avg,2)?>%</strong> </div>
      </div>       
  </td>
</tr>



<tr>
  <td style="width:10%">
      <table>
          <tr><img src="images/user-mail.png" alt="" style="border:solid 2px;border-radius:50%; width:50%;height:60%;"></tr>
          <tr> <h4 style="font-size:12px; font-weigth:bold">Production VSM 01</h4> </tr>
      </table>
  </td>

      <td style="width:90%">
      <div class="progress">
          <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" aria-valuenow="75" aria-valuemin="0"
           aria-valuemax="100" style="width:<?php echo $prod_vsm1_avg?>%"><strong style="color:black"><?php echo number_format($prod_vsm1_avg,2)?>%</strong> </div>
      </div>       
  </td>
</tr>


  <tr>
  <td style="width:10%">
      <table>
          <tr><img src="images/user-mail.png" alt="" style="border:solid 2px;border-radius:50%; width:50%;height:60%;"></tr>
          <tr> <h4 style="font-size:12px; font-weigth:bold">Production VSM 02</h4> </tr>
      </table>
  </td>

      <td style="width:90%">
      <div class="progress">
          <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" aria-valuenow="75" aria-valuemin="0"
           aria-valuemax="100" style="width:<?php echo $prod_vsm2_avg?>%"><strong style="color:black"><?php echo number_format($prod_vsm2_avg,2)?>%</strong> </div>
      </div>       
  </td>
</tr>


  <tr>
  <td style="width:10%">
      <table>
          <tr><img src="images/user-mail.png" alt="" style="border:solid 2px;border-radius:50%; width:50%;height:60%;"></tr>
          <tr> <h4 style="font-size:12px; font-weigth:bold">Production VSM 03</h4> </tr>
      </table>
  </td>

      <td style="width:90%">
      <div class="progress">
          <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" aria-valuenow="75" aria-valuemin="0"
           aria-valuemax="100" style="width:<?php echo $prod_vsm3_avg?>%"><strong style="color:black"><?php echo number_format($prod_vsm3_avg,2)?>%</strong> </div>
      </div>       
  </td>
</tr>


  <tr>
  <td style="width:10%">
      <table>
          <tr><img src="images/user-mail.png" alt="" style="border:solid 2px;border-radius:50%; width:50%;height:60%;"></tr>
          <tr> <h4 style="font-size:12px; font-weigth:bold">Production VSM 04</h4> </tr>
      </table>
  </td>

      <td style="width:90%">
      <div class="progress">
          <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" aria-valuenow="75" aria-valuemin="0"
           aria-valuemax="100" style="width:<?php echo $prod_vsm4_avg?>%"><strong style="color:black"><?php echo number_format($prod_vsm4_avg,2)?>%</strong> </div>
      </div>       
  </td>
</tr>


    <tr>
  <td style="width:10%">
      <table>
          <tr><img src="images/user-mail.png" alt="" style="border:solid 2px;border-radius:50%; width:50%;height:60%;"></tr>
          <tr> <h4 style="font-size:12px; font-weigth:bold">Pre-Sweing</h4> </tr>
      </table>
  </td>

      <td style="width:90%">
      <div class="progress">
          <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" aria-valuenow="75" aria-valuemin="0"
           aria-valuemax="100" style="width:<?php echo $pre_sewing_avg?>%"><strong style="color:black"><?php echo number_format($pre_sewing_avg,2)?>%</strong> </div>
      </div>       
  </td>
</tr>


    <tr>
  <td style="width:10%">
      <table>
          <tr><img src="images/user-mail.png" alt="" style="border:solid 2px;border-radius:50%; width:50%;height:60%;"></tr>
          <tr> <h4 style="font-size:12px; font-weigth:bold">Emblishment</h4> </tr>
      </table>
  </td>

      <td style="width:90%">
      <div class="progress">
          <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" aria-valuenow="75" aria-valuemin="0"
           aria-valuemax="100" style="width:<?php echo $emblishment_avg?>%"><strong style="color:black"><?php echo number_format($emblishment_avg,2)?>%</strong> </div>
      </div>       
  </td>
</tr>


    <tr>
  <td style="width:10%">
      <table>
          <tr><img src="images/user-mail.png" alt="" style="border:solid 2px;border-radius:50%; width:50%;height:60%;"></tr>
          <tr> <h4 style="font-size:12px; font-weigth:bold">IE</h4> </tr>
      </table>
  </td>

      <td style="width:90%">
      <div class="progress">
          <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" aria-valuenow="75" aria-valuemin="0"
           aria-valuemax="100" style="width:<?php echo $ie_avg?>%"><strong style="color:black"><?php echo number_format($ie_avg,2)?>%</strong> </div>
      </div>       
  </td>
</tr>




</table>







            </div>
            <div class="card-footer small text-muted">Updated</div>
          </div>








                    <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              System Stakeholders</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="background:dark">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Position</th>
                      <th>Email</th>
                      <th>Department</th>
                      <th>Reset</th>
                      
                    </tr>
                  </thead>
  
                  <tbody>

                    <?php
                    include('connection.php');
                        $sql_users = "SELECT * FROM stakeholders WHERE confirmation = 'Accept' AND 
                        (designation = 'Manager' OR designation = 'OT Checker' OR designation = 'Transport Checker')";

                        $qry_users = mysqli_query($con,$sql_users);
                        while($row_users = mysqli_fetch_array($qry_users)){

                    ?>

                    <tr>
                      <td><strong><?php echo $row_users["fname"];?> <?php echo $row_users["lname"];?></strong></td>
                      <td><strong><?php echo $row_users["designation"];?></strong></td>
                      <td><strong> <a href="mailto: <?php echo $row_users["email"];?>"> <?php echo $row_users["email"];?></a></strong></td>
                      <td><strong><?php echo $row_users["designation"];?></strong></td>
                      <td>
                        <strong>
                          <!-- <button class="btn btn-primary btn-sm">Reset Factory Settings</button> -->
                          <?php echo $row_users["mobile"];?>

                        </strong>
                      </td>     

                    </tr>

            

                    <?php
                        }
                    ?>
                    


                  </tbody>
                </table>
              </div>
            </div>
            <div class="card-footer small text-muted">Updated</div>
          </div>










        <!-- 	end -->


          
        </div> <!-- /.container-fluid -->


        </div>
       <!-- content-wrapper -->

   </div> 
   <!-- wrapper -->


<?php
    include('common/footer.php');
?>


    <!-- Bootstrap core JavaScript-->


    <!-- Core plugin JavaScript-->

    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>


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


















  
        <?php include('js/demo/chart-area-demo.php'); ?>