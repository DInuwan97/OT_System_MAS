


<?php
  $sql_dashbord_Security = "SELECT * FROM stakeholders WHERE username='".@$_SESSION["uname"]."' AND confirmation = 'Accept'";
  $qry_dashbord_Security = mysqli_query($con,$sql_dashbord_Security);
  if($row_dashbord_Security = mysqli_fetch_array($qry_dashbord_Security)){
?>
        		 <div class="row">
              <div class="col-xl-3 col-sm-6 mb-3">
                  <div class="card text-white bg-secondary o-hidden h-100">
                    <div class="card-body">
           
                                <img src="images/MAS_logo.png" style="width:100%;margin-top:10px;" alt="">

                            <?php
                                if($row_dashbord_Security["designation"] == "Manager" || $row_dashbord_Security["designation"] == "Admin" ){
                                    $sql_ot_frame_check_transport = "SELECT count(rf.frame_no) as 'transport' FROM request_frame rf,confirm_frame cf
                                    WHERE rf.frame_no = cf.frame_no AND  cf.ot_final_status = 'Accept' AND cf.transport_status = 'Pending'";
                      
                                    $qry_ot_frame_check_transport = mysqli_query($con,$sql_ot_frame_check_transport);
                                    if($row_ot_frame_check_transport = mysqli_fetch_array($qry_ot_frame_check_transport))
                                    {
                            ?>
                                            <?php
                                                if($row_ot_frame_check_transport["transport"] > 0){
                                                  if($row_dashbord_Security["designation"] == "Manager"){
                                            ?>
                                                                       
                                                <blink><button style="margin-top : 2px;display-inline:block"class="btn btn-info btn btn-sm">TRA <span class="badge badge-light"><?php echo $row_ot_frame_check_transport["transport"]?></span></button></blink>
                                            
                                            <?php
                                                  }
                                                  else
                                                  {
                                            ?>

                                                 <blink><button style="margin-top : 2px;display-inline:block"class="btn btn-info btn btn-sm"><a style="text-decoration:none;color:white" href="transport-summary.php"> TRA</a> <span class="badge badge-light"><?php echo $row_ot_frame_check_transport["transport"]?></span></button></blink>

                                            <?php
                                                }
                                              }
                                            ?>

                                            <?php
                                                             $counter = 0;

                                                             $sql_ot_frame_check = "SELECT * FROM request_frame rf,confirm_frame cf
                                                             WHERE rf.frame_no = cf.frame_no AND (cf.ot_final_status = 'Pending' OR  cf.ot_final_status = 'Processing')  AND cf.transport_status = 'Pending'";
                                               
                                                             $qry_ot_frame_check = mysqli_query($con,$sql_ot_frame_check);
                                                             while($row_ot_frame_check = mysqli_fetch_array($qry_ot_frame_check))
                                                             {
                                               
                                                               $sql_frame_ot_notification = "SELECT *FROM request_frame  WHERE worker_members = (SELECT COUNT(frame_no) FROM emp_details WHERE  
                                                               frame_no = '".$row_ot_frame_check["frame_no"]."' AND status = 'Worker') AND
                                                               staff_members =(SELECT COUNT(frame_no) FROM emp_details WHERE  frame_no = '".$row_ot_frame_check["frame_no"]."' AND status = 'Staff')
                                                               AND frame_no = '".$row_ot_frame_check["frame_no"]."'";
                                               
                                                               $qry_frame_ot_notification = mysqli_query($con, $sql_frame_ot_notification);
                                                                 if($row_frame_ot_notification = mysqli_fetch_array( $qry_frame_ot_notification))
                                                                 {              
                                                                   $counter = $counter + 1;
                                                                 }



                                                                 
                                                             }

                                            ?>

                                            <?php
                                                    if($counter > 0){
                                                      if($row_dashbord_Security["designation"] == "Manager"){
                                            ?>
                                                        <blink><button style="margin-top : 2px;display-inline:block"class="btn btn-primary btn btn-sm">OTC <span class="badge badge-light"><?php echo $counter?></span></button></blink>
                                                            
                                            <?php
                                                      }else{
                                             ?>
                                                      <blink><button style="margin-top : 2px;display-inline:block"class="btn btn-primary btn btn-sm"><a style="text-decoration:none;color:white" href="ot-checker-summary.php">OTC </a> <span class="badge badge-light"><?php echo $counter?></span></button></blink>
                                             <?php

                                                      }
                                                    }
                                            ?>

                                            

                            <?php
                                    }
                                }
                            ?>
       
                    </div>     
                  </div>
                </div>
    
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-comments"></i>
                  </div>
                  <div class="mr-5">New Approvals!</div>

                </div>
                <a class="card-footer text-white clearfix small z-1" href="#">

                  <span class="float-left">

                  	<table>
                  		<tr>

                        <?php
                      
                             if($row_dashbord_Security["designation"] == 'Manager' || $row_dashbord_Security["designation"] == 'Admin'){
                        ?>


                  			<form action="" method="POST">
                  				<td><input type="text"  class="form-control" name="frame_num" placeholder="Frame Number" required=""></td>
                  				<td><button name="btnsearchframe" class="btn btn-info"><i class="fas fa-search"></i></button></td>
                  			</form> 

                  			<?php
                  				include('connection.php');
                  				if(isset($_POST["btnsearchframe"])){

                  					$frame_num = $_POST["frame_num"];

                  					$sql_check_frame_request = "SELECT * FROM cost WHERE frame_no = $frame_num";
                  					$qry_check_frame_request  = mysqli_query($con,$sql_check_frame_request);
                  					if($row_check_frame_request = mysqli_fetch_array($qry_check_frame_request)){
                  			?>
							
								            <script>
								              window.location = "admin.php?id=<?php echo $row_check_frame_request["frame_no"];?>"
								            </script>
								  
							<?php	         
                  					}else{
                  						echo '
                  								 <div class="alert alert-danger">
									               <strong>Invalid Frame!</strong>
									          </div>

                  						';
                  						    
                                      }
                                    }
                  				
                  				
                          ?>  
                        
                        <?php
                            }else{                          
                        ?>

                          
                  			<form action="" method="POST">
                  				<td><input disabled type="text"  class="form-control" name="frame_num" placeholder="Restricted"></td>
                  				<td><button disabled name="btnsearchframe" class="btn btn-info"><i class="fas fa-search"></i></button></td>
                            </form> 
                        
                        <?php
                            }
                        ?>

                  		</tr>
                  	</table>








                  </span>
                  <span class="float-right">
                    
                  </span>
                </a>
              </div>
            </div>

              <?php
                if($row_dashbord_Security["designation"] == 'OT Checker'){
              ?>


            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-warning o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-list"></i>
                  </div>
                  <div class="mr-5">New Pendig OT Requests</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="ot-checker-summary.php">
                  <span class="float-left"> <blink>
                  <button type="button" class="btn btn-success" >
                    Notifications <span class="badge badge-light"><?php echo $counter?></span>
                  </button>
                  </blink></span>
                  <span class="float-right">
                    
                  </span>
                </a>
              </div>
            </div>

            <?php
                }else if($row_dashbord_Security["designation"] == 'Admin'){
            ?>
                                   
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-warning o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-list"></i>
                  </div>
                  <div class="mr-5">New Forgotten Passwords Requests</div>
                </div>
       


            <?php
                    $sql_forgot_req = "SELECT count(stake_ho_no) as 'stakeholder' FROM stakeholders WHERE confirmation = 'Forgot'";
                    $qry_forgot_req = mysqli_query($con,$sql_forgot_req);
                    if($row_forgot_req = mysqli_fetch_array($qry_forgot_req)){

                        if($row_forgot_req["stakeholder"] > 0){                    
            ?>
                      <a class="card-footer text-white clearfix small z-1" href="forgot_request.php">
                <span class="float-left"> 
                                              
                  <blink style=""><button class="btn btn-success">Notifications <span class="badge badge-light"><?php echo $row_forgot_req["stakeholder"];?></span></button></blink></span>
                            
                  <span class="float-right">                   
                  </span>
                  </span>
                </a>

            <?php
                    }
                }
            ?>



        

              </div>
            </div>


            <?php              
            }
                else{
            ?>

            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-warning o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-list"></i>
                  </div>
                  <div class="mr-5">New Forgotten Passwords Requests</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="">

                  <span class="float-left">Restricted</span>
       
                  <span class="float-right">
                    
                  </span>
                </a>
              </div>
            </div>



            <?php
            }
            ?>
            


            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-danger o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-life-ring"></i>
                  </div>
                  <div class="mr-5">New Registrations Requests</div>
                </div>
               


                <?php                       
                  if($row_dashbord_Security["designation"] == 'Admin'){

                    $sql_user_registration_req = "SELECT COUNT(stake_ho_no) as 'pending_request' FROM 
                                                  stakeholders WHERE confirmation = 'Pending'";

                    $qry_user_registration_req = mysqli_query($con,$sql_user_registration_req);
                    if($row_user_registration_req = mysqli_fetch_array($qry_user_registration_req))
                    {
                      if($row_user_registration_req["pending_request"] > 0){  

                ?>

                 <a class="card-footer text-white clearfix small z-1" href="user_request.php">
                  <span class="float-left">
                  
                  <blink style=""><button class="btn btn-dark">Notifications <span class="badge badge-light"><?php echo $row_user_registration_req["pending_request"];?></span></button></blink></span>

                  </span>
                  <span class="float-right">
                    
                  </span>
                </a>


                <?php
                    }
                  }
                  }else
                  {

                ?>
                
                <a class="card-footer text-white clearfix small z-1" href="">
                <span class="float-left">Restricted</span>
                  <span class="float-right">
                    
                  </span>
                </a>

                <?php
                  }
                ?>


              </div>
            </div>
          </div>






          <?php
        }
          ?>