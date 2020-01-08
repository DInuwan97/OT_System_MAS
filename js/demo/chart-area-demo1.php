<script>

// Area Chart Example
var ctx = document.getElementById("myAreaChart");
var myLineChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: ["Utility", "Employee", "Transport"],
    datasets: [{
      label: "Rs",
      lineTension: 0.3,
      backgroundColor: "rgba(2,117,216,0.2)",
      borderColor: "rgba(2,117,216,1)",
      pointRadius: 5,
      pointBackgroundColor: "rgba(2,117,216,1)",
      pointBorderColor: "rgba(255,255,255,0.8)",
      pointHoverRadius: 5,
      pointHoverBackgroundColor: "rgba(2,117,216,1)",
      pointHitRadius: 50,
      pointBorderWidth: 2,

      <?php
                $sql1 = "SELECT SUM(cs.utility_cost) as 'total_utility',SUM(cs.emp_cost) as 'total_emp',SUM(cs.transport_cost) as 'total_transport' 
                FROM cost cs,confirm_frame cf,request_frame rf WHERE cf.frame_no = cs.frame_no AND rf.frame_no = cf.frame_no and cf.transport_status = 'Accept'";
        
                $qry1 = mysqli_query($con,$sql1);
                if($row1 = mysqli_fetch_array($qry1)){
      ?>


      data: [<?php echo $row1["total_utility"]?>, <?php echo $row1["total_emp"]?>, <?php echo $row1["total_transport"]?>],
     

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
          display: false
        },
        ticks: {
          maxTicksLimit: 5
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