
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
      ?>  
        
      data: [<?php echo $row["total_utility"];?>,<?php echo $row["total_emp"];?>,<?php echo $row["total_transport"];?>,<?php echo $row["total_utility"] +  $row["total_emp"] + $row["total_transport"];?>]

      <?php
        }
      }
      else{
        $sql1 = "SELECT SUM(cs.utility_cost) as 'total_utility',SUM(cs.emp_cost) as 'total_emp',SUM(cs.transport_cost) as 'total_transport' 
        FROM cost cs,confirm_frame cf,request_frame rf WHERE cf.frame_no = cs.frame_no AND rf.frame_no = cf.frame_no and cf.transport_status = 'Accept' AND cf.manager_status = 'Accept'";

        $qry1 = mysqli_query($con,$sql1);
        if($row1 = mysqli_fetch_array($qry1)){

      ?>

                  data: [<?php echo $row1["total_utility"];?>,<?php echo $row1["total_emp"];?>,<?php echo $row1["total_transport"];?>,<?php echo $row1["total_utility"] +  $row1["total_emp"] + $row1["total_transport"];?>]

      <?php
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
          min: 0,
          max: 400000,
          maxTicksLimit: 20
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
