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



<div class="container">
   <div class="card card-register mx-auto mt-5">
     <div class="card-header">Change Passowrd</div>
       <div class="card-body" style=" overflow:auto;">



        <?php
            $sql_user_settings = "SELECT * from stakeholders where username = '".@$_SESSION["uname"]."'";
            $qry_user_settings = mysqli_query($con,$sql_user_settings);
            if($row_user_settings = mysqli_fetch_array($qry_user_settings)){

                $current_pword = $row_user_settings["password"];
        ?>

    

            <div class="form-row">
                
                <div class="col-md-6">
                    <div class="form-label-group">
                        <input type="text" name="full_name"  style="margin-top:2px" id="full_name" class="form-control" disabled placeholder="staff_charge" required="" value="<?php echo $row_user_settings["fname"]; ?>">
                        <label for="full_name">Full Name</label>              
                    </div>
                </div>  

                                 
                <div class="col-md-6"> 
                    <div class="form-label-group">
                        <input type="text" name="email"   style="margin-top:2px" id="email" class="form-control" disabled placeholder="employee_charge" required=""  value="<?php echo $row_user_settings["email"] ?>">
                        <label for="email">Email</label>               
                     </div>
                </div>  

                <div class="col-md-6"> 
                    <div class="form-label-group">
                        <input type="text" name="username"   style="margin-top:2px;margin-bottom:5px" id="username" class="form-control" disabled placeholder="boiler" required=""  value="<?php echo $row_user_settings["username"] ?>">
                        <label for="max_thicks_limit">Username</label>               
                     </div>
                </div>

                <div class="col-md-6"> 
                    <div class="form-label-group">
                        <input type="number" name="mobile"   style="margin-top:2px;margin-bottom:5px" id="mobile" class="form-control" disabled placeholder="boiler" required=""  value="<?php echo $row_user_settings["mobile"] ?>">
                        <label for="mobile">Mobile</label>               
                     </div>
                </div>

   </div>

                    <br>
                   

                    <?php                      
                        if(($row_user_settings["mobile"] == $row_user_settings["password"])){
                    ?>

                      




                
                                    <?php
                                    
                                    if(isset($_POST["btn_update_password"])){
                                            include('connection.php');
                                            
                                            $new_password = $_POST["new_password"];
                                            $confirm_new_password = $_POST["confirm_new_password"];
                            

                                        if($new_password == $confirm_new_password){


                                            $sql_change_password = "UPDATE stakeholders SET password = '{$new_password}' , cpassword = '{$confirm_new_password}'
                                                                WHERE username = '".@$_SESSION["uname"]."'";
                            
                                        
                            
                                            if(mysqli_query($con,$sql_change_password)){
                                                echo '
                                                <center>
                                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                <strong>Successfully Change the Password!</strong>
                                                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                 <span aria-hidden="true">&times;</span>
                                               </button
                                               </div>
                                                </center>

                                                
                                                ';
                                            }

                                        }else{
                                            echo '
                                            </br>
                                            <center>
                                            <div class="alert alert-warning role="alert" style="width:50%">
                                            <strong>Your passwords are not matching! </strong>
                                           </div>
                                            </center>
                                            </br>
                                            ';
                                        }



                                        }
                                    ?>



        <form action="" method="POST">
                        <div class="form-row">

                                    <div class="col-md-6"> 
                                        <div class="form-label-group">
                                            <input type="password" name="new_password"   style="margin-top:2px;margin-bottom:5px" id="new_passwords" class="form-control" placeholder="boiler" required=""  value="">
                                            <label for="new_passwords">New Passwords</label>               
                                        </div>
                                    </div>

                                    <div class="col-md-6"> 
                                        <div class="form-label-group">
                                            <input type="password" name="confirm_new_password"  style="margin-top:2px;margin-bottom:5px" id="confirm_new_passwords" class="form-control"  placeholder="boiler" required=""  value="">
                                            <label for="confirm_new_passwords">Confirm New Passwords</label>               
                                        </div>
                                    </div>
                        </div>

                        <br>

                        <center>
                                <button class="btn btn-success" name="btn_update_password"> <strong>Change Password</strong> </button> 
                        </center>

        </form>




                <?php
                      
                    }
                    else
                    {

                ?>

               


                                    <?php
                                    
                                    if(isset($_POST["btn_update_password"])){
                                            include('connection.php');

                                            $new_password = $_POST["new_password"];
                                            $confirm_new_password = $_POST["confirm_new_password"];
                                            $old_password = $_POST["old_password"];
                                         

                                   
                                    
                            
                                                if(($new_password == $confirm_new_password) && ($current_pword == $old_password)){

                                             

                                                    $sql_change_password = "UPDATE stakeholders SET password = '{$new_password}' , cpassword = '{$confirm_new_password}'
                                                                        WHERE username = '".@$_SESSION["uname"]."'";
                                    
                                                
                                    
                                                    if(mysqli_query($con,$sql_change_password)){

                                                        echo '
                                                        <center>
                                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                        <strong>Successfully Change the Password!</strong>
                                                         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                         <span aria-hidden="true">&times;</span>
                                                       </button
                                                       </div>
                                                        </center>

                                                        
                                                        ';
                                                    }
        

                                            } else{
                                                echo '
                                               
                                                <center>
                                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                <strong>Your Previos password is not correct or
                                                 Your new passwords are not matching! </strong>
                                                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                 <span aria-hidden="true">&times;</span>
                                               </button
                                               </div>
                                                </center>
                                                
                                                ';
                                            } 
                                       

                                        }
                                    ?>









                   
    <form action="" method="POST">

                                    <div class="form-group"> 
                                        <div class="form-label-group">
                                            <input type="password" name="old_password"  required="" style="margin-top:none;margin-bottom:none" id="old_passwords" class="form-control" placeholder="boiler" required=""  value="">
                                            <label for="old_passwords">Old Passwords</label>               
                                        </div>
                                    </div>


                            <div class="form-row">

                                    <div class="col-md-6"> 
                                        <div class="form-label-group">
                                            <input type="password" name="new_password" required="" style="margin-top:1px;margin-bottom:5px" id="new_passwords" class="form-control" placeholder="boiler" required=""  value="">
                                            <label for="new_passwords">New Passwords</label>               
                                        </div>
                                    </div>


                                    <div class="col-md-6"> 
                                        <div class="form-label-group">
                                            <input type="password" name="confirm_new_password" required="" style="margin-top:1px;margin-bottom:5px" id="confirm_new_passwords" class="form-control"  placeholder="boiler" required=""  value="">
                                            <label for="confirm_new_passwords">Confirm New Passwords</label>               
                                        </div>
                                    </div>

                            </div>

                                 <br>

                            <center>
                                    <button class="btn btn-success" name="btn_update_password"> <strong>Change Password</strong> </button> 
                            </center>

        </form>



                <?php
                    }
                ?>



           


            <?php
            }
            ?>

           


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

    <?php include('js/demo/chart-bar-demo.1.php'); ?>
    <?php include('js/demo/chart-pie-demo.php'); ?>