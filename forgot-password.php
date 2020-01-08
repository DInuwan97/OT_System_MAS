<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Forgot Password</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body class="bg-dark">

      

  <br>
  <br>
  <center>
    <img src="images/MAS_logo.png" alt="">
    <br><br>
    <h1 style="color:white">Factory OT System - Forgotten Password</h1>
  
  </center>

    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Reset Password</div>
        <div class="card-body">
          <div class="text-center mb-4">
            <h4>Forgot your password?</h4>
            <p>Enter your email address and we will send you instructions on how to reset your password.</p>
          </div>

         <form action="" method="POST">

            <div class="form-group">
              <div class="form-label-group">
                <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Enter email address" required="required" autofocus="autofocus">
                <label for="inputEmail">Enter email address</label>
              </div>
            </div>

            <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="username" name="username" class="form-control" placeholder="Enter Username" required="required" autofocus="autofocus">
                <label for="username">Enter Username</label>
              </div>
            </div>

            <button class="btn btn-primary btn-block" name="btnforgotpwd">Sent Request</button>
            
        </form>


          <div class="text-center">
            <a class="d-block small mt-3" href="user_registration.php">Register an Account</a>
            <a class="d-block small" href="login.php">Login Page</a>
          </div>
        </div>
      </div>
    </div>



    <?php
    include('connection.php');

        if(isset($_POST["btnforgotpwd"])){

            $email = $_POST["email"];
            $username= $_POST["username"];


            $sql_valid_user = "SELECT * FROM stakeholders WHERE email = '{$email}' AND username = '{$username}' AND confirmation = 'Accept'";
            $qry_valid_user = mysqli_query($con,$sql_valid_user);
            if($row_valid_user = mysqli_fetch_array($qry_valid_user)){

            $sql_forgot = "UPDATE stakeholders SET confirmation = 'Forgot' WHERE stake_ho_no = '{$row_valid_user["stake_ho_no"]}'";
                if(mysqli_query($con,$sql_forgot)){
                    echo'
                    <br>
                    <center>
                        <div class="alert alert-success" style="width:50%">
                        <strong>Successfully sent to the Admin!</strong>
                        </div>
                    </center>
                 ';
                }else{
                    echo'
                    <br>
                    <center>
                        <div class="alert alert-danger" style="width:50%">
                        <strong>Invalid Details or You are no longer as an User!</strong>
                        </div>
                    </center>
                 ';
                }
   




            }else{
                echo'
                <br>
                <center>
                    <div class="alert alert-warning" style="width:50%">
                    <strong>Invalid Details or You are no longer as an User!</strong>
                    </div>
                </center>
             ';
            }
        }

       

    ?>







    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  </body>

</html>
