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
    if(!($row_dashbord_Security["designation"] == 'Admin'))
    {
        echo '
        <script>
            window.location = "dashbord.php"
        </script>
    
    ';
    }
?>





<div class="container" >
   <div class="card card-register mx-auto mt-5">
     <div class="card-header">Update OT Charges (Per 15 Minitues)</div>
       <div class="card-body" style=" overflow:auto;">

        <?php
            $sql_charges_common = "SELECT * from charges where id = 3";
            $qry_charges_common = mysqli_query($con,$sql_charges_common);
            if($row_charges_common = mysqli_fetch_array($qry_charges_common)){
        ?>

    
    <form action="" method="POST">  
            <div class="form-row">
                
                <div class="col-md-6">
                    <div class="form-label-group">
                        <input type="number" name="staff_charge"  style="margin-top:2px" id="staff_charge" class="form-control" placeholder="staff_charge" required="" value="<?php echo $row_charges_common["staff_charge"]; ?>">
                        <label for="staff_charge">Staff Charge</label>              
                    </div>
                </div>  

                                 
                <div class="col-md-6"> 
                    <div class="form-label-group">
                        <input type="number" name="employee_charge"   style="margin-top:2px" id="employee_charge" class="form-control" placeholder="employee_charge" required=""  value="<?php echo $row_charges_common["employee_charge"] ?>">
                        <label for="employee_charge">Employee Charge</label>               
                     </div>
                </div>  

                <div class="col-md-6"> 
                    <div class="form-label-group">
                        <input type="number" name="boiler"   style="margin-top:2px;margin-bottom:5px" id="boiler" class="form-control" placeholder="boiler" required=""  value="<?php echo $row_charges_common["boiler"] ?>">
                        <label for="boiler">Boiler Charge</label>               
                     </div>
                </div>

                
                <div class="col-md-6"> 
                    <div class="form-label-group">
                        <input type="number" name="sew"   style="margin-top:2px;margin-bottom:5px" id="sew" class="form-control" placeholder="boiler" required=""  value="<?php echo $row_charges_common["sew_charge"] ?>">
                        <label for="sew">A Sewing Machine Charge</label>               
                     </div>
                </div>

            </div>

        

            <center>
                    <button class="btn btn-primary" name="updatecharges">Update OT Charges</button> 
            </center>
</form>
        </div>   
      </div>     
    </div>

             
 
    <div class="container" >
        <div class="card card-register mx-auto mt-5">
            <div class="card-header">Update Utility Charges (Per 15 Minitues)</div>
                <div class="card-body" style=" overflow:auto;">

          
    <form action="#sticky-footer" method="POST"> 
                <div class="input-group mb-3" style="margin-top:5px">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">Select Time</label>
                                </div>
                             

               

                    <select class="custom-select" id="working_time" name="working_time"  required="" onchange="myFunction()">
                            <option selected>Choose...</option> 

                        <?php
                            $sql_charges_time = "SELECT * FROM charges";
                            $qry_charges_time = mysqli_query($con,$sql_charges_time);
                            while($row_charges_time = mysqli_fetch_array($qry_charges_time)){                                   
                        ?>
                                               
                                <option value="<?php echo $row_charges_time["id"];?>"><?php echo $row_charges_time["start"];?> - <?php echo $row_charges_time["end"];?></option>
                              
                        <?php
                            }
                        ?>                                                      
                </select>
                <button class="btn btn-secondary" name="search_charge_time">Search</button> 
                </div>

                

           

    </form>     

                  
    


          <?php
            } //$sql_charges_common
          ?>

          <?php
            if(isset($_POST["search_charge_time"])){
                $working_time = $_POST["working_time"];

                $sql_select_working_time = "SELECT * FROM charges WHERE id = $working_time";
                $qry_select_working_time = mysqli_query($con,$sql_select_working_time);
                $row_select_working_time = @mysqli_fetch_array($qry_select_working_time);
                if($row_select_working_time["id"] == 1 || $row_select_working_time["id"] == 2 || $row_select_working_time["id"] == 3){
          ?>

         <div class="form-group">              
                    <div class="form-label-group">
                        <input type="text" name="slected_time" disabled value="<?php echo $row_select_working_time["start"]?> - <?php echo $row_select_working_time["end"]?>" style="margin-top:2px" id="slected_time" class="form-control" placeholder="VSM" required="">
                        <label for="slected_time">Time</label>              
                    </div>
            </div>

            
<form action="" method="POST">  
              <div class="form-row">
                <div class="col-md-6">
                    <div class="form-label-group">
                        <input type="number" name="compreasure" value="<?php echo $row_select_working_time["compreasure"]?>" style="margin-top:2px" id="compreasure" class="form-control" placeholder="VSM" required="">
                        <label for="compreasure">Compreasure</label>              
                    </div>
                </div> 
            
       

                         
                <div class="col-md-6"> 
                    <div class="form-label-group">
                        <input type="number"  name="mini_compreasure" value="<?php echo $row_select_working_time["minicompreasure"];?>"   style="margin-top:2px" id="mini_compreasure" class="form-control" placeholder="Model" required="">
                        <label for="mini_compreasure">Mini Compreasure</label>               
                     </div>
                </div>  

            </div>
            


            <div class="form-row">

                <div class="col-md-6">
                    <div class="form-label-group">
                        <input type="number" name="mini_boiler" value="<?php echo $row_select_working_time["miniboiler"]?>"  style="margin-top:2px" id="mini_boiler" class="form-control" placeholder="mini_boiler" required="">
                        <label for="mini_boiler">Mini Boiler</label>              
                    </div>
                </div>  
                      
                <div class="col-md-6"> 
                    <div class="form-label-group">
                        <input type="number" name="ac"  value="<?php echo $row_select_working_time["ac"]?>"   style="margin-top:2px" id="ac" class="form-control" placeholder="AC Charge" required="">
                        <label for="ac">AC</label>               
                     </div>
                </div>  

            </div>
           

            <br>
       
            <center>   
                    <input type="hidden" name="hidden_charge_id" value="<?php echo $row_select_working_time["id"]?>">
                    <button class="btn btn-info" name="updateutility">Update Utility Charges</button> 
            </center>
</form>




            <?php
            }
            else if(!($row_select_working_time["id"] == 1) || !($row_select_working_time["id"] == 2) || !($row_select_working_time["id"] == 3)){
                echo '
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Not Found!</strong> You should have to attach valid time range into above dropdown.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
                
                ';
            }

        }
      
            ?>

          

      
            




<?php
    if(isset($_POST["updatecharges"])){

        $staff_charge = $_POST["staff_charge"];
        $employee_charge = $_POST["employee_charge"];
        $boiler = $_POST["boiler"];
        $sew = $_POST["sew"];

    
                    $sql1 = "UPDATE charges SET staff_charge = '{$staff_charge}' , employee_charge = '{$employee_charge}' , boiler = '{$boiler}' , sew_charge = '{$sew}'    
                             WHERE id =  1";

                    $sql2 = "UPDATE charges SET staff_charge = '{$staff_charge}' , employee_charge = '{$employee_charge}' , boiler = '{$boiler}' , sew_charge = '{$sew}'   
                             WHERE id =  2";

                    $sql3 = "UPDATE charges SET staff_charge = '{$staff_charge}' , employee_charge = '{$employee_charge}' , boiler = '{$boiler}' , sew_charge = '{$sew}'   
                    WHERE id =  3";


                    if(mysqli_query($con,$sql1)){

                        if(mysqli_query($con,$sql2)){

                            if(mysqli_query($con,$sql3)){                          
                               echo '<meta http-equiv="refresh" content="0">';
                            }

                        }

                    }
                    
  
      

    }


?>

<?php
    if(isset($_POST["updateutility"])){

        $mini_boiler = $_POST["mini_boiler"];
        $mini_compreasure = $_POST["mini_compreasure"];
        $compreasure = $_POST["compreasure"];
        $ac = $_POST["ac"];
        $hidden_charge_id = $_POST["hidden_charge_id"];

    $sql4 = "UPDATE charges SET miniboiler = '{$mini_boiler}',minicompreasure = '{$mini_compreasure}',
             compreasure = '{$compreasure}',ac = '{$ac}' WHERE id = '{$hidden_charge_id}'";

    //$qry4 = mysqli_query($con,$sql4);
    if(mysqli_query($con,$sql4)){
        echo '<meta http-equiv="refresh" content="0">';
    }


    }
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
