<?php
  include('chart_cal.php');
?>



<script>

var ctx = document.getElementById("myBarChart");
var myLineChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ["Sew Cost","Utility Cost", "Employee Cost","Transport Cost","Total_Cost"],
    datasets: [{
      label: "Rs",
      backgroundColor: "rgba(2,157,216,1)",
      borderColor: "rgba(2,117,216,1)",




       data: [<?php echo $department_sew_cost?>,<?php echo $departmet_utility?>,<?php echo $department_emp_cost?>,<?php echo $departmet_transport?>,<?php echo $department_total?>],

                      

    
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
