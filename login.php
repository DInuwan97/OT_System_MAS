<?php
    include('common/imports.php');
?>

  <body class="bg-dark">


  <br>
  <br>
  <br>
  <br>
  <center>
    <img src="images/MAS_logo.png" alt="">
    <br><br>
    <h1 style="color:white">Factory OT System - User Login</h1>
  
  </center>
 


    <div class="container" style="margin-top:50px;">
      <div class="card card-login mx-auto mt-5">

        <div class="card-header">Login</div>
        <div class="card-body">

          <form method="POST" action="" >
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" name="username" id="name" class="form-control" placeholder="Username" required="required" autofocus="autofocus">
                <label for="name">Username</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required="required">
                <label for="inputPassword">Password</label>
              </div>
            </div>
            <div class="form-group">
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="remember-me">
                  Remember Password
                </label>
              </div>
            </div>
            <button class="btn btn-primary btn-block" name="btnlog" data-toggle="modal" data-target="ResetModal">Login</button>
          </form>

          <div class="text-center">
            <a class="d-block small mt-3" href="user_registration.php">Register an Account</a>
            <a class="d-block small" href="forgot-password.php">Forgot Your Password?</a>

          </div>
        </div>
      </div>
    </div>



    <?php
      if(isset($_POST["btnlog"])){
    include('connection.php');

    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql_login = "SELECT * FROM stakeholders WHERE username = '{$username}' AND password = '{$password}'";

    $qry_login = mysqli_query($con,$sql_login);
    $login_result = mysqli_fetch_array($qry_login);

      if($login_result){
        if($login_result["confirmation"] == 'Accept'){
          $_SESSION["uname"] = $username;

          echo'
            <script>
              window.location = "index.php"
            </script>
  
          ';
        }else{
          echo'
          <br>
          <center>
          <strong>
          <div class="alert alert-warning" style="width:50%">
             Still Processing!
          </div>
          </strong>
          </center>
       ';
        }


      }
      else{
        echo'
           <div class="alert alert-danger">
               Invalid Username or Password..Try Again!
           </div>
        ';
      }


  }
  
 

    ?>

    <br>
    <center>  <h1 style="color:white;font:arial;font-size:50px">SMART SYNERGY</h1> </center>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  </body>

</html>
