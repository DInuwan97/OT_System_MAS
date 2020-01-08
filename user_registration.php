<?php
    include('common/imports.php');
?>



  <center>
      <img src="images/MAS_logo.png" alt="" style="margin-top:10px;">

        <h1 style="color:white">Factory OT System - User Registration</h1>
    
    </center>
  <body class="bg-dark">

    <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Register an Account</div>
        <div class="card-body">



<?php
    include('connection.php');

    if(isset($_POST["btnreg"])){

        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $email = $_POST["email"];
        $reg_type = $_POST["reg_type"];
        $username = $_POST["username"];
        $mobile = $_POST["mobile"];
        $pword = $_POST["pword"];
        $cpword = $_POST["cpword"];
        $department = $_POST["department"];

        // if($department == 'Choose' &&  $reg_type == 'Choose'){

          if($pword == $cpword){

          $sql_register = "INSERT INTO stakeholders(fname,lname,email,mobile,department,designation,username,password,cpassword,confirmation,confirm_by)
          VALUES('$fname','$lname','$email','$mobile','$department','$reg_type','$username','$pword','$cpword','Pending','Pending')";
      
          if(mysqli_query($con,$sql_register)){
      
              echo'
              <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <strong>Successfully Sent!</strong>You can verify your login after Admin Confirmation.
            </div>

            <meta http-equiv="refresh" content="2">
                  
              ';
          }

         }else{
           echo '
          
          <center>
           <div class="alert alert-warning role="alert">
           <strong>Your passwords are not matching! </strong>
          </div>
           </center>

         ';
         }


        // }else{
        //   echo '
        //     <center>
        //     <div class="alert alert-danger" role="alert">
        //      Department or Registeration user Can not be empty value. <strong>You shoud Have to select it
          
        //      from dropdown. </strong>
        //     </div>
        //     </center>

        //   ';
        // }

   


    }




?>




















<form action="" method="POST">
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="firstName" class="form-control" placeholder="First name" name="fname" required="required" autofocus="autofocus">
                    <label for="firstName">First name</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="lastName" class="form-control" placeholder="Last name" name="lname" required="required">
                    <label for="lastName">Last name</label>
                  </div>
                </div>
              </div>
            </div>


            <div class="form-group">
              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email" required="required">
                <label for="inputEmail">Email address</label>
              </div>
            </div>

               <div class="input-group mb-3" style="margin-top:5px">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">Register As</label>
                                </div>
                                <select class="custom-select" name="reg_type"  id="inputGroupSelect01" required="">
                                    <option value="">Select Your Registraion Type</option> 
                                    <option value="Department Leader">Department Leader</option>                
                                    <option value="OT Checker">OT Checker</option>
                                    <option value="Manager">Manager</option>  
                                    <option value="Transport Checker">Transport Checker</option>                   
                               </select>
                </div>

            
            <div class="form-group">

              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="username" class="form-control" name="username" placeholder="Password" required="required">
                    <label for="username">Username</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="number" id="mobile" name="mobile" class="form-control" placeholder="Confirm password" required="required">
                    <label for="mobile">Mobile</label>
                  </div>
                </div>
              </div>

                <div class="input-group mb-3" style="margin-top:5px">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect02">Your Department</label>
                                </div>
                                <select class="custom-select" name="department"  id="inputGroupSelect02" required="">
                                    <option value="">Select Your Department</option>
                                    <option value="Factory Engineering">Factory Engineering</option>  
                                    <option value="Production Engineering">Production Engineering</option>      
                                    <option value="Autonomation">Autonomation</option> 
                                    <option value="MOS">MOS</option>  
                                    <option value="RM">RM</option>  
                                    <option value="Quality">Quality</option>                
                                    <option value="FG">FG</option>  
                                    <option value="Technical">Technical</option>                
                                    <option value="Cutting">Cutting</option>
                                    <option value="HR">HR</option>                    
                                    <option value="Operation">Operation</option>    
                                    <option value="Production VSM 01">Production VSM 01</option>                
                                    <option value="Production VSM 02">Production VSM 02</option>
                                    <option value="Production VSM 03">Production VSM 03</option>  
                                    <option value="Production VSM 04">Production VSM 04</option>   
                                    <option value="Pre-Sewing">Pre-Sewing</option>                 
                                    <option value="Emblishment">Emblishment</option>                                   
                                    <option value="IE">IE</option>                
                               </select>
                </div>



















             <div class="form-row" style="margin-top:10px;">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="password" id="inputPassword" name="pword"class="form-control" placeholder="Password" required="required">
                    <label for="inputPassword">Password</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="password" id="confirmPassword" name="cpword" class="form-control" placeholder="Confirm password" required="required">
                    <label for="confirmPassword">Confirm password</label>
                  </div>
                </div>
              </div>

            </div>

            <button class="btn btn-primary btn-block" name="btnreg">Register</button>
            
 </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="login.php">Login Page</a>


          </div>
        </div>
      </div>
    </div>
























    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  </body>

</html>
