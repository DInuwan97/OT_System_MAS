
<?php
       include('connection.php');

       if(isset($_POST["adstaff"])){
 

       

            $req_date = $_POST["req_date"];
            $start_time = $_POST["start_time"];
            $end_time = $_POST["end_time"];

            $no_of_staff =  $_POST["no_of_staff"];
            //$no_of_employee =  $_POST["no_of_employee"];

            $staff_epf_no = $_POST["staff_epf_no"];
            //$emp_epf_no = $_POST["emp_epf_no"];

            $staff_name = $_POST["staff_name"];
            //$emp_name = $_POST["emp_name"];

            $staff_start_location = $_POST["staff_start_location"];
            //$emp_start_location = $_POST["emp_start_location"];

            $staff_end_location = $_POST["staff_end_location"];
            //$emp_end_location =  $_POST["emp_end_location"];

            $staff_status = $_POST["staff"];

            $sql_add_staff = "INSERT INTO ot_workers(start_time,end_time,req_date,epf_no,name,status,
            start_location,end_location)VALUES('$start_time','$end_time','$req_date','$staff_epf_no',
            '$staff_name','$staff_status','$staff_start_location','$staff_end_location')"; 

            if(mysqli_query($con,$sql_add_staff)){
                   echo'
                
                ';                     
            
                
            }
            else{

                die(mysqli_error($con));
                echo 'error';

            }

                 

    }  //end of isset add staff



?>
