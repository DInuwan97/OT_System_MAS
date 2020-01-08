<script>

// Pie Chart Example
var ctx = document.getElementById("myPieChart");
var myPieChart = new Chart(ctx, {
  type: 'pie',
  data: {
    labels: ["Sewing Cost","Utility Cost", "Employee Cost", "Transport Cost"],
    datasets: [{

        <?php
 include('connection.php');

             if(isset($_POST["btnsubmit"])){
               
                //echo 'dggggggggggggg';

                $username=$_POST["searchuname"];
          


                                
            $sql_pie_search = "SELECT SUM(cs.sew_cost) as 'total_sew',SUM(cs.utility_cost) as 'total_utility',SUM(cs.emp_cost) as 'total_emp',SUM(cs.transport_cost) as 'total_transport' 
            FROM cost cs,confirm_frame cf,request_frame rf WHERE cf.frame_no = cs.frame_no AND rf.frame_no = cf.frame_no and cf.transport_status = 'Accept'
             AND cf.manager_status = 'Accept' AND rf.frame_by = '{$username}'";

            $qry_pie_search = mysqli_query($con,$sql_pie_search);
            if($row_pie_search = mysqli_fetch_array($qry_pie_search)){
                //echo 'dggggggggggggg';
        ?>

                 data:[<?php echo $row_pie_search["total_sew"];?>,<?php echo $row_pie_search["total_utility"];?>, <?php echo $row_pie_search["total_emp"];?>,<?php echo $row_pie_search["total_transport"];?>],

      <?php
            }
        }
         else{   
            // echo 'dggggggggggggg';
             $sql_pie = "SELECT SUM(cs.sew_cost) as 'total_sew',SUM(cs.utility_cost) as 'total_utility',SUM(cs.emp_cost) as 'total_emp',SUM(cs.transport_cost) as 'total_transport' 
             FROM cost cs,confirm_frame cf,request_frame rf WHERE cf.frame_no = cs.frame_no AND rf.frame_no = cf.frame_no and cf.transport_status = 'Accept'
             AND cf.manager_status = 'Accept' AND rf.frame_by = '".@$_SESSION["uname"]."'"; 

                 $qry_pie = mysqli_query($con,$sql_pie);
             if($row_pie = mysqli_fetch_array($qry_pie)){   
                      
      ?>

                data:[<?php echo $row_pie["total_sew"];?>,<?php echo $row_pie["total_utility"];?>, <?php echo $row_pie["total_emp"];?>,<?php echo $row_pie["total_transport"];?>],

      <?php
                }
           }
      ?>

      backgroundColor: ['#007bff', '#dc3545', '#ffc107', '#0E613C '],
    }],
  },
});
</script>