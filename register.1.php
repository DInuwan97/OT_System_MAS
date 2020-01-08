

  <body class="bg-dark">


    <div class="container" >



      <div class="card card-register mx-auto mt-5" style="display:inline-block;">
        <div class="card-header">OT Workers Request Form</div>
        <div class="card-body" style="height:600px; overflow:auto;">


<form method="POST" action="" onsubmit="return post();"  >

            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
<!--                     
                  <div class="form-label-group">
                    <input type="text" id="firstName" class="form-control" placeholder="First name" required="required" autofocus="autofocus">
                    <label for="firstName">First name</label>
                  </div> -->


     <!-- modal start -->

    <!-- modal end -->





            <div class="form-group">
                <div class="input-group date" id="datetimepicker4" data-target-input="nearest">
          
                    <input type="text" placeholder="Required Date"  style="width:200px; cursor:pointer" class="form-control" data-target="#datetimepicker4" required="" name="req_date">
                    <div class="input-group-append" style="cursor:pointer" data-target="#datetimepicker4" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                    </div>
                </div>
            </div>
       
        <script type="text/javascript">
            $(function () {
                $('#datetimepicker4').datetimepicker({
                    format: 'L'
                });
            });
        </script>

      
              </div>
            </div>

       
            <div class="form-group">
              <div class="form-row">

                <div class="col-md-6">

            
                <div class="form-check">
                <input class="form-check-input" style=" zoom: 1.5;" type="checkbox" id="gridCheck1">
                <label class="form-check-label" for="gridCheck1" style="font-size:17px;">
                    Boiler
                </label>
                </div>

                 <div class="form-check">
                <input class="form-check-input" style=" zoom: 1.5;" type="checkbox" id="gridCheck2">
                <label class="form-check-label" for="gridCheck2" style="font-size:17px;">
                   Mini Boiler
                </label>
                </div>
              

            
                </div>




                <div class="col-md-6">

                            
                <div class="form-check">
                <input class="form-check-input" style=" zoom: 1.5;" type="checkbox" id="gridCheck3">
                <label class="form-check-label" for="gridCheck3" style="font-size:17px;">
                    Compreasure
                </label>
                </div>

                <div class="form-check">
                <input class="form-check-input" style=" zoom: 1.5;" type="checkbox" id="gridCheck4">
                <label class="form-check-label" for="gridCheck4" style="font-size:17px;">
                   Mini Compreasure
                </label>
                </div>



                </div>


            </div>
        </div>




        



        

            <!-- <div class="form-group">

              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="required">
                <label for="inputEmail">Email address</label>
              </div>

            </div> -->



            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">

                  <div class="form-group">
                        <div class="input-group date" id="datetimepicker3" data-target-input="nearest">
                            <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker3" placeholder="Start Time" required="" name="start_time">
                        <div class="input-group-append" data-target="#datetimepicker3" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-clock"></i></div>
                        </div>
                        </div>

                  </div>
  
                <script type="text/javascript">
                    $(function () {
                        $('#datetimepicker3').datetimepicker({
                            format: 'LT'
                     });
                  });
                </script>



                </div>

                <div class="col-md-6">
           
                   
                <div class="form-group">
                    <div class="input-group date" id="datetimepicker5" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker5"  placeholder="End Time" required="" name="end_time">
                            <div class="input-group-append" data-target="#datetimepicker5" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-clock"></i></div>
                            </div>
                    </div>
                </div>
  
                <script type="text/javascript">
                        $(function () {
                            $('#datetimepicker5').datetimepicker({
                            format: 'LT'
                         });
                        });
                </script>
               
                </div>
              </div>


            </div>


            
  
         <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
              

                     
                    <div class="form-label-group">
                        <input type="number" name="vsm_no" id="vsm_no" class="form-control" placeholder="VSM Number:" required="">
                        <label for="vsm_no">VSM Number</label>
                    </div>

                            <br>

                    <div class="form-label-group">
                        <input type="number" id="no_of_staff" name="no_of_staff"  style="margin-top:2px" class="form-control" placeholder="Number of Staff" required="">
                        <label for="no_of_staff">Number of Staff</label>          
                    </div>

                            <br>

                    <div class="form-label-group">
                        <input type="number" name="epf_no" id="epf_no" class="form-control" placeholder="EPF No:" required="">
                        <label for="epf_no">EPF No:</label>
                    </div>

                    <div class="form-label-group">
                        <input type="text" name="start_location" style="margin-top:2px" id="start_location" class="form-control" placeholder="EPF No:" required="">
                        <label for="start_location">Start Location</label>
                    </div>

                
                           <br>

   
                </div>

                        
                <div class="col-md-6">
           
                    <div class="form-label-group">
                        <input type="number" name="model_no" id="model_no" class="form-control" placeholder="VSM Number:" required="">
                        <label for="model_no">Model Number</label>
                    </div>

                            <br>


                    <div class="form-label-group">
                        <input type="number" name="no_of_workers"   style="margin-top:2px" id="no_of_workers" class="form-control" placeholder="Number of Employees" required="">
                        <label for="no_of_workers">Number of Workers</label>
                    </div>

                            <br>


                                    <!-- <input type="text" class="form-control"> -->

                    <div class="form-label-group">
                        <input type="text" name="emp_name"  id="emp_name" class="form-control" placeholder="Employee Name" required="">
                        <label for="emp_name">Employee Name</label>
                    </div>

                    <div class="form-label-group">
                        <input type="text" name="end_location" style="margin-top:2px" id="end_location" class="form-control" placeholder="EPF No:" required="">
                        <label for="end_location">End Location</label>
                    </div>

              
                    </div>
              </div>
           



                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">Employee Type</label>
                                </div>
                                <select class="custom-select" name="emp_type" id="inputGroupSelect01" required="">
                                    <option selected>Choose...</option>
                                    <option value="Staff">Staff</option>
                                    <option value="Worker">Worker</option>
                       
                                </select>
                            </div>

    <center><button class="btn btn-warning" onclick="myFunction();" name="ademp" 
    style="border-radius:50px;">Add Staff <i class="fa fa-plus fa-1x" aria-hidden="true"></i></button></center>


    </div>
                 

</form>                    
                 
            










            <!-- <a class="btn btn-primary btn-block" href="login.html">Register</a> -->
        

          <!-- <div class="text-center">
            <a class="d-block small mt-3" href="login.html">Login Page</a>
            <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
          </div> -->

        </div>
      </div>
    
</div>



                       <!-- -------------------------------2nd form------------------------------------ -->



 <div class="card card-register mx-auto mt-5" style="display:inline-block;  position:absolute;">
        <div class="card-header" >List of Added Workers</div>
        <div class="card-body" >


<form action="" method="POST">

    <div id="auto" >    

    </div>

     <div class="form-group">
      <label for="comment">Comment:</label>
      <textarea class="form-control" rows="5" id="comment"></textarea>
    </div>    

</form>


<!-- <script>
function post()
{
  var req_date = document.getElementById("req_date").value;
  var no_of_staff = document.getElementById("no_of_staff").value;
  var staff_epf_no = document.getElementById("staff_epf_no").value;

  var start_time = document.getElementById("start_time").value;
  var end_time = document.getElementById("end_time").value;

  var staff_name = document.getElementById("staff_name").value;
  var staff_start_location = document.getElementById("staff_start_location").value;
  var staff_end_location = document.getElementById("staff_end_location").value;

  if(req_date && no_of_staff && staff_epf_no && staff_name &&  staff_start_location && staff_end_location)
  {
    $.ajax
    ({
      type: 'POST',
     // url: 'register_inc.php',
      data: 
      {
         req_date : req_date,
         no_of_staff : no_of_staff,
         staff_epf_no : staff_epf_no,
         staff_name : staff_name,
         staff_start_location : staff_start_location,
         staff_end_location : staff_end_location,
         start_time : start_time,
         end_time : end_time

      },

       success: function (response) 
      {
	    document.getElementById("status").innerHTML="Form Submitted Successfully";;
  
      }
 
    });
  }
  
  return false;
}
</script> -->



<?php
   include('connection.php');
   if(isset($_POST["btndelete"]))
      {

       $sql_worker_delete = "DELETE  FROM ot_workers WHERE work_no = '".$_POST["hidden_work_no"]."'";
       if(mysqli_query($con,$sql_worker_delete))
       {
          echo'success';
       }
       else{
           echo 'erro';
       }

    }

?>
                <script>
                                    
                    $(document).ready( function(){
                    $('#auto').load('load.php');
                    refresh();
                    });
                    
                    function refresh()
                    {
                        setTimeout( function() {
                        $('#auto').load('load.php').fadeIn('slow');
                        refresh();
                        }, 200);
                    }                  
                </script>



  
        




          <div class="text-center">
            <!-- <a class="d-block small mt-3" href="login.html">Login Page</a>
            <a class="d-block small" href="forgot-password.html">Forgot Password?</a> -->
          </div>









        </div>                    
      </div>
    





  
     <P ="status">Test</P>



     
      </div>

  </body>

</html>



<?php
       include('connection.php');

       if(isset($_POST["ademp"])){
 

       

            $req_date = $_POST["req_date"];
            $start_time = $_POST["start_time"];
            $end_time = $_POST["end_time"];

            $vsm_no = $_POST["vsm_no"];
            $model_no = $_POST["model_no"];

            $no_of_staff =  $_POST["no_of_staff"];
            $no_of_workers =  $_POST["no_of_workers"];

            $epf_no = $_POST["epf_no"];
            //$emp_epf_no = $_POST["emp_epf_no"];

            $emp_name = $_POST["emp_name"];
            //$emp_name = $_POST["emp_name"];

            $start_location = $_POST["start_location"];
            //$emp_start_location = $_POST["emp_start_location"];

            $end_location = $_POST["end_location"];
            //$emp_end_location =  $_POST["emp_end_location"];

            $emp_type = $_POST["emp_type"];

            $sql_add_emp = "INSERT INTO ot_workers(start_time,end_time,req_date,vsm_no,model_no,epf_no,name,status,
            start_location,end_location)VALUES('$start_time','$end_time','$req_date','$vsm_no','$model_no','$epf_no',
            '$emp_name','$emp_type','$start_location','$end_location')"; 

            if(mysqli_query($con,$sql_add_emp)){
                   echo'
                
                ';                     
            
                
            }
            else{

                die(mysqli_error($con));
                echo 'error';

            }

                 

    }  //end of isset add staff



?>





