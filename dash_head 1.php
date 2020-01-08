
        		 <div class="row">
              <div class="col-xl-3 col-sm-6 mb-3">
                  <div class="card text-white bg-secondary o-hidden h-100">
                    <div class="card-body">
           
                       		 <img src="images/MAS_logo.png" style="width:100%;margin-top:10px;" alt="">
       
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
                            $sql_dashbord_Security = "SELECT * FROM stakeholders WHERE username='".@$_SESSION["uname"]."' AND designation = 'Manager' AND confirmation = 'Accept'";
                            $qry_dashbord_Security = mysqli_query($con,$sql_dashbord_Security);
                            if($row_dashbord_Security = mysqli_fetch_array($qry_dashbord_Security)){
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
                         $sql_dashbord_Security1 = "SELECT * FROM stakeholders WHERE username='".@$_SESSION["uname"]."' AND designation = 'OT Checker' AND confirmation = 'Accept'";
                         $qry_dashbord_Security1 = mysqli_query($con,$sql_dashbord_Security1);
                         if($row_dashbord_Security1 = mysqli_fetch_array($qry_dashbord_Security1)){
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
                         }else{
            ?>
                            
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-warning o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-list"></i>
                  </div>
                  <div class="mr-5">New Requests</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="#">
                  <span class="float-left">View Details!</span>
       
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
                  <div class="mr-5">13 New Tickets!</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="#">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    
                  </span>
                </a>
              </div>
            </div>
          </div>