
<script>

var ctx = document.getElementById("myBarChart");
var myLineChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ["Utility Cost", "Employee Cost","Transport Cost","Total_Cost"],
    datasets: [{
      label: "Rs",
      backgroundColor: "rgba(2,157,216,1)",
      borderColor: "rgba(2,117,216,1)",

      <?php
     include('connection.php');
  

      if(isset($_POST["btnfilter"])){
       
        $date1 = $_POST["txtday1"];
        $date2 = $_POST["txtday2"];
            
        $sql = "SELECT SUM(cs.utility_cost) as 'total_utility',SUM(cs.emp_cost) as 'total_emp',SUM(cs.transport_cost) as 'total_transport' 
        FROM cost cs,confirm_frame cf,request_frame rf WHERE cf.frame_no = cs.frame_no AND rf.frame_no = cf.frame_no and cf.transport_status = 'Accept'
      AND cf.manager_status = 'Accept' AND cs.manager_status = 'Accept' AND rf.req_date BETWEEN '$date1'  AND '$date2'";

        $qry = mysqli_query($con,$sql);
        if($row = mysqli_fetch_array($qry)){

          $sql_total_utility = "SELECT SUM(rfr.boiler) as 'boiler_charge' , SUM(rfr.mini_boiler) as 'mini_boiler_charge' ,   
          SUM(rfr.compreasure) as 'compreasure_charge' , SUM(rfr.mini_compreasure) as 'mini_compreasure_charge'  , SUM(rfr.ac) as 'ac_charge'  
          FROM request_frame_resources rfr,confirm_frame cf,request_frame rf
          WHERE rfr.frame_no = cf.frame_no AND cf.manager_status = 'Accept' AND rf.req_date BETWEEN '$date1' AND '$date2'";

          $qry_total_utility = mysqli_query($con,$sql_total_utility);

          if($row_total_utility = mysqli_fetch_array( $qry_total_utility)){

            $sql_boiler_count = "SELECT COUNT(rfr.boiler) as 'no_of_boilers' FROM request_frame_resources rfr,confirm_frame cf,request_frame rf 
            WHERE rfr.boiler > 0.00 AND cf.frame_no = rfr.frame_no AND cf.manager_status = 'Accept' AND rf.req_date BETWEEN '$date1' AND '$date2'";
            $qry_boiler_count = mysqli_query($con,$sql_boiler_count);
            if($row_boiler_count = mysqli_fetch_array($qry_boiler_count)){
        
              $sql_compreasure_count = "SELECT COUNT(rfr.compreasure) as 'no_of_compreasures' FROM request_frame_resources rfr,confirm_frame cf,request_frame rf 
              WHERE rfr.compreasure > 0.00 AND cf.frame_no = rfr.frame_no AND cf.manager_status = 'Accept' AND rf.req_date BETWEEN '$date1' AND '$date2'";
              $qry_compreasure_count = mysqli_query($con,$sql_compreasure_count);
              if($row_compreasure_count = mysqli_fetch_array($qry_compreasure_count)){
      
              $sql_ac_count = "SELECT COUNT(rfr.ac) as 'no_of_ac' FROM request_frame_resources rfr,confirm_frame cf,request_frame rf  WHERE rfr.ac > 0.00 
              AND cf.frame_no = rfr.frame_no AND cf.manager_status = 'Accept'  AND rf.req_date BETWEEN '$date1' AND '$date2'";
                $qry_ac_count = mysqli_query($con,$sql_ac_count);
               if($row_ac_count = mysqli_fetch_array($qry_ac_count)){

                  if($row_ac_count["no_of_ac"] > 0){
                      $avg_ac = ($row_total_utility["ac_charge"] / $row_ac_count["no_of_ac"]);
                  }else{
                      $avg_ac = 0;
                  }

                  if($row_compreasure_count["no_of_compreasures"] > 0){
                    $avg_compreasure = ($row_total_utility["compreasure_charge"] / $row_compreasure_count["no_of_compreasures"]);
                  }else{
                    $avg_compreasure = 0;
                  }

                  if($row_boiler_count["no_of_boilers"] > 0){
                    $avg_boiler = ($row_total_utility["boiler_charge"] / $row_boiler_count["no_of_boilers"]);
                  }else{
                    $avg_boiler = 0;
                  }

                 $avg_utility_cost = $avg_ac + $avg_compreasure + $avg_boiler + $row_total_utility["mini_boiler_charge"] + $row_total_utility["mini_compreasure_charge"];

                
      ?>  
        
            data: [<?php echo $avg_utility_cost;?>,<?php echo $row["total_emp"];?>,<?php echo $row["total_transport"];?>,<?php echo $avg_utility_cost + $row["total_emp"] + $row["total_transport"];?>]

      <?php
                }
              }
            }

          }//total utility query end

      } //row query end
      
      } //filter btn end

      else{
        include('connection.php');
        
        $sql1 = "SELECT SUM(cs.utility_cost) as 'total_utility',SUM(cs.emp_cost) as 'total_emp',SUM(cs.transport_cost) as 'total_transport' 
        FROM cost cs,confirm_frame cf,request_frame rf WHERE cf.frame_no = cs.frame_no AND rf.frame_no = cf.frame_no and 
        cf.transport_status = 'Accept' AND cf.manager_status = 'Accept'";

        $qry1 = mysqli_query($con,$sql1);
        if($row1 = mysqli_fetch_array($qry1)){

          $sql_total_utility = "SELECT SUM(rfr.boiler) as 'boiler_charge' , SUM(rfr.mini_boiler) as 'mini_boiler_charge' ,   
          SUM(rfr.compreasure) as 'compreasure_charge' , SUM(rfr.mini_compreasure) as 'mini_compreasure_charge'  , SUM(rfr.ac) as 'ac_charge'  
          FROM request_frame_resources rfr,confirm_frame cf
          WHERE rfr.frame_no = cf.frame_no AND cf.manager_status = 'Accept'";

          $qry_total_utility = mysqli_query($con,$sql_total_utility);

          if($row_total_utility = mysqli_fetch_array( $qry_total_utility)){

            $sql_boiler_count = "SELECT COUNT(rfr.boiler) as 'no_of_boilers' FROM request_frame_resources rfr,confirm_frame cf WHERE rfr.boiler > 0.00 AND cf.frame_no = rfr.frame_no AND cf.manager_status = 'Accept'";
            $qry_boiler_count = mysqli_query($con,$sql_boiler_count);
            if($row_boiler_count = mysqli_fetch_array($qry_boiler_count)){
        
              $sql_compreasure_count = "SELECT COUNT(rfr.compreasure) as 'no_of_compreasures' FROM request_frame_resources rfr,confirm_frame cf WHERE rfr.compreasure > 0.00 AND cf.frame_no = rfr.frame_no AND cf.manager_status = 'Accept'";
              $qry_compreasure_count = mysqli_query($con,$sql_compreasure_count);
              if($row_compreasure_count = mysqli_fetch_array($qry_compreasure_count)){
      
              $sql_ac_count = "SELECT COUNT(rfr.ac) as 'no_of_ac' FROM request_frame_resources rfr,confirm_frame cf WHERE rfr.ac > 0.00 
              AND cf.frame_no = rfr.frame_no AND cf.manager_status = 'Accept'";
                $qry_ac_count = mysqli_query($con,$sql_ac_count);
               if($row_ac_count = mysqli_fetch_array($qry_ac_count)){

                  if($row_ac_count["no_of_ac"] > 0){
                      $avg_ac = ($row_total_utility["ac_charge"] / $row_ac_count["no_of_ac"]);
                  }else{
                      $avg_ac = 0;
                  }

                  if($row_compreasure_count["no_of_compreasures"] > 0){
                    $avg_compreasure = ($row_total_utility["compreasure_charge"] / $row_compreasure_count["no_of_compreasures"]);
                  }else{
                    $avg_compreasure = 0;
                  }

                  if($row_boiler_count["no_of_boilers"] > 0){
                    $avg_boiler = ($row_total_utility["boiler_charge"] / $row_boiler_count["no_of_boilers"]);
                  }else{
                    $avg_boiler = 0;
                  }

                 $avg_utility_cost = $avg_ac + $avg_compreasure + $avg_boiler + $row_total_utility["mini_boiler_charge"] + $row_total_utility["mini_compreasure_charge"];

        
          

      ?>

                  data: [<?php echo $avg_utility_cost;?>,<?php echo $row1["total_emp"];?>,<?php echo $row1["total_transport"];?>,<?php echo $avg_utility_cost +  $row1["total_emp"] + $row1["total_transport"];?>]

      <?php
              
            }
         }
        }
     }
    //}
  //}
          
                    }          
                  }
      ?>
    }],
  },
  options: {
    scales: {
      xAxes: [{
        time: {
          unit: 'month'
        },
        gridLines: {
          display: false
        },
        ticks: {
          maxTicksLimit: 6
        }
      }],
      yAxes: [{
        ticks: {
          <?php
              $sql_area_chart_limit = "SELECT * from charts WHERE id = 1";
              $qry_area_chart_limit = mysqli_query($con,$sql_area_chart_limit);
              
              if($row_area_chart_limit = mysqli_fetch_array($qry_area_chart_limit)){
          ?>
         min: <?php echo $row_area_chart_limit["min_limit"];?>,
          max: <?php echo $row_area_chart_limit["max_limit"];?>,
          maxTicksLimit: <?php echo $row_area_chart_limit["maxtickslimit"];?>
          <?php
              }
          ?>
        },
        gridLines: {
          display: true
        }
      }],
    },
    legend: {
      display: false
    }
  }
});

</script>
