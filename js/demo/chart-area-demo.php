<script>

// Area Chart Example
var ctx = document.getElementById("myAreaChart");
var myLineChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: ["FE", "Production Engineering", "Autonomation", "MOS", "RM", "Quality", "FG", "Technical", "Cutting", "HR", "Operation", "Production VSM 01", "Production VSM 02","Production VSM 03", "Production VSM 04", "Pre-Swing", "Emblishment", "IE"],
   
    datasets: [{
      label: "Rs",
      lineTension: 0.2,
      backgroundColor: "rgba(2,117,216,0.2)",
      borderColor: "red",
      pointRadius: 5,
      pointBackgroundColor: "maroon",
      pointBorderColor: "rgba(255,255,255,0.8)",
      pointHoverRadius: 3,
      pointHoverBackgroundColor: "rgba(2,117,216,1)",
      pointHitRadius: 20,
      pointBorderWidth: 2,

      <?php
                $sql1 = "SELECT min(rf.start_time24), max(rf.end_time24),rf.req_date,rfr.boiler 
                FROM request_frame rf,request_frame_resources rfr WHERE rf.frame_no = rfr.frame_no AND rfr.boiler > 0.00 GROUP BY rf.req_date";
        
                $qry1 = mysqli_query($con,$sql1);
                if($row1 = mysqli_fetch_array($qry1))
                {
      ?>

                 data: [10000,10162,26263,18394,18287,28682,31274,33259,25849,24159,32651,31984,38451,10000,10162,26263,18394,18287],
      
      <?php
                }
      ?>


    }],
  },
  options: {
    scales: {
      xAxes: [{
        time: {
          unit: 'date'
        },
        gridLines: {
          display: true
        },
        ticks: {
          maxTicksLimit: 18
        }
      }],
      yAxes: [{
        ticks: {
          <?php
              $sql_area_chart_limit = "SELECT * from charts WHERE id = 2";
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
          color: "rgba(0, 0, 0, .125)",
        }
      }],
    },
    legend: {
      display: false
    }
  }
});
</script>