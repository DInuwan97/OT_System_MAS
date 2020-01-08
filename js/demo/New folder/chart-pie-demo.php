<script>

// Pie Chart Example
var ctx = document.getElementById("myPieChart");
var myPieChart = new Chart(ctx, {
  type: 'pie',
  data: {
    labels: ["Plan OT","Service capacity issues", "Unplan style", "QCO failures","Due to Machine BD","Production behind","Due to Material delay","High absenteeism","Approval delay","Power off","Machine presetting","Operation training","Focus training","TL/GL training","Size set","Final Inspection","Material Quality issues","New team members training","Construction","Machine service","Special Reasons"],
    datasets: [{

        <?php
                include('connection.php');


                $select_reason_100 = "SELECT COUNT(reason_no) as 'reason_counter' FROM ot_reason WHERE reason = '100'";
                $select_reason_101 = "SELECT COUNT(reason_no) as 'reason_counter' FROM ot_reason WHERE reason = '101'";
                $select_reason_102 = "SELECT COUNT(reason_no) as 'reason_counter' FROM ot_reason WHERE reason = '102'";
                $select_reason_103 = "SELECT COUNT(reason_no) as 'reason_counter' FROM ot_reason WHERE reason = '103'";
                $select_reason_104 = "SELECT COUNT(reason_no) as 'reason_counter' FROM ot_reason WHERE reason = '104'";
                $select_reason_105 = "SELECT COUNT(reason_no) as 'reason_counter' FROM ot_reason WHERE reason = '105'";
                $select_reason_106 = "SELECT COUNT(reason_no) as 'reason_counter' FROM ot_reason WHERE reason = '106'";
                $select_reason_107 = "SELECT COUNT(reason_no) as 'reason_counter' FROM ot_reason WHERE reason = '107'";
                $select_reason_108 = "SELECT COUNT(reason_no) as 'reason_counter' FROM ot_reason WHERE reason = '108'";
                $select_reason_109 = "SELECT COUNT(reason_no) as 'reason_counter' FROM ot_reason WHERE reason = '109'";
                $select_reason_110 = "SELECT COUNT(reason_no) as 'reason_counter' FROM ot_reason WHERE reason = '110'";
                $select_reason_111 = "SELECT COUNT(reason_no) as 'reason_counter' FROM ot_reason WHERE reason = '111'";
                $select_reason_112 = "SELECT COUNT(reason_no) as 'reason_counter' FROM ot_reason WHERE reason = '112'";
                $select_reason_113 = "SELECT COUNT(reason_no) as 'reason_counter' FROM ot_reason WHERE reason = '113'";
                $select_reason_114 = "SELECT COUNT(reason_no) as 'reason_counter' FROM ot_reason WHERE reason = '114'";
                $select_reason_115 = "SELECT COUNT(reason_no) as 'reason_counter' FROM ot_reason WHERE reason = '115'";
                $select_reason_116 = "SELECT COUNT(reason_no) as 'reason_counter' FROM ot_reason WHERE reason = '116'";
                $select_reason_117 = "SELECT COUNT(reason_no) as 'reason_counter' FROM ot_reason WHERE reason = '117'"; 
                $select_reason_118 = "SELECT COUNT(reason_no) as 'reason_counter' FROM ot_reason WHERE reason = '118'";
                $select_reason_119 = "SELECT COUNT(reason_no) as 'reason_counter' FROM ot_reason WHERE reason = '119'";
                $select_reason_120 = "SELECT COUNT(reason_no) as 'reason_counter' FROM ot_reason WHERE reason = '120'"; 


                $qry_reason_100 = mysqli_query($con,$select_reason_100);
                $qry_reason_101 = mysqli_query($con,$select_reason_101);
                $qry_reason_102 = mysqli_query($con,$select_reason_102);
                $qry_reason_103 = mysqli_query($con,$select_reason_103);
                $qry_reason_104 = mysqli_query($con,$select_reason_104);
                $qry_reason_105 = mysqli_query($con,$select_reason_105);
                $qry_reason_106 = mysqli_query($con,$select_reason_106);
                $qry_reason_107 = mysqli_query($con,$select_reason_107);
                $qry_reason_108 = mysqli_query($con,$select_reason_108);
                $qry_reason_109 = mysqli_query($con,$select_reason_109);
                $qry_reason_110 = mysqli_query($con,$select_reason_110);
                $qry_reason_111 = mysqli_query($con,$select_reason_111);
                $qry_reason_112 = mysqli_query($con,$select_reason_112);
                $qry_reason_113 = mysqli_query($con,$select_reason_113);
                $qry_reason_114 = mysqli_query($con,$select_reason_114);
                $qry_reason_115 = mysqli_query($con,$select_reason_115);
                $qry_reason_116 = mysqli_query($con,$select_reason_116);
                $qry_reason_117 = mysqli_query($con,$select_reason_117); 
                $qry_reason_118 = mysqli_query($con,$select_reason_118);
                $qry_reason_119 = mysqli_query($con,$select_reason_119);
                $qry_reason_120 = mysqli_query($con,$select_reason_120); 


                $row_reason_100 - mysqli_fetch_array($qry_reason_100);
                $row_reason_101 - mysqli_fetch_array($qry_reason_101);
                $row_reason_102 - mysqli_fetch_array($qry_reason_102);
                $row_reason_103 - mysqli_fetch_array($qry_reason_103);
                $row_reason_104 - mysqli_fetch_array($qry_reason_104);
                $row_reason_105 - mysqli_fetch_array($qry_reason_105);
                $row_reason_106 - mysqli_fetch_array($qry_reason_106);
                $row_reason_107 - mysqli_fetch_array($qry_reason_107);
                $row_reason_108 - mysqli_fetch_array($qry_reason_108);
                $row_reason_109 - mysqli_fetch_array($qry_reason_109);
                $row_reason_110 - mysqli_fetch_array($qry_reason_110);
                $row_reason_111 - mysqli_fetch_array($qry_reason_111);
                $row_reason_112 - mysqli_fetch_array($qry_reason_112);
                $row_reason_113 - mysqli_fetch_array($qry_reason_113);
                $row_reason_114 - mysqli_fetch_array($qry_reason_114);
                $row_reason_115 - mysqli_fetch_array($qry_reason_115);
                $row_reason_116 - mysqli_fetch_array($qry_reason_116);
                $row_reason_117 - mysqli_fetch_array($qry_reason_117);
                $row_reason_118 - mysqli_fetch_array($qry_reason_118);
                $row_reason_119 - mysqli_fetch_array($qry_reason_119);
                $row_reason_120 - mysqli_fetch_array($qry_reason_120);


                $no_of_reasons_100 = $row_reason_100["reason_counter"];
                $no_of_reasons_101 = $row_reason_101["reason_counter"];
                $no_of_reasons_102 = $row_reason_102["reason_counter"];
                $no_of_reasons_103 = $row_reason_103["reason_counter"];
                $no_of_reasons_104 = $row_reason_104["reason_counter"];
                $no_of_reasons_105 = $row_reason_105["reason_counter"];
                $no_of_reasons_106 = $row_reason_106["reason_counter"];
                $no_of_reasons_107 = $row_reason_107["reason_counter"];
                $no_of_reasons_108 = $row_reason_108["reason_counter"];
                $no_of_reasons_109 = $row_reason_109["reason_counter"];
                $no_of_reasons_110 = $row_reason_110["reason_counter"];
                $no_of_reasons_111 = $row_reason_111["reason_counter"];
                $no_of_reasons_112 = $row_reason_112["reason_counter"];
                $no_of_reasons_113 = $row_reason_113["reason_counter"];
                $no_of_reasons_114 = $row_reason_114["reason_counter"];
                $no_of_reasons_115 = $row_reason_115["reason_counter"];
                $no_of_reasons_116 = $row_reason_116["reason_counter"];
                $no_of_reasons_117 = $row_reason_117["reason_counter"];
                $no_of_reasons_118 = $row_reason_118["reason_counter"];
                $no_of_reasons_119 = $row_reason_119["reason_counter"];
                $no_of_reasons_120 = $row_reason_120["reason_counter"];

                  //  $total_no_of_reasons =  $no_of_reasons_100 +  $no_of_reasons_101 +  $no_of_reasons_102 +  $no_of_reasons_103 +  $no_of_reasons_104 +  
                              //$no_of_reasons_105 +  $no_of_reasons_106 +  $no_of_reasons_107 +  $no_of_reasons_108 +  $no_of_reasons_109 +  //$no_of_reasons_110 + $no_of_reasons_111 +  $no_of_reasons_112 +  $no_of_reasons_113 +  $no_of_reasons_114 +  //$no_of_reasons_115 +  $no_of_reasons_116 + $no_of_reasons_117 +  $no_of_reasons_118 +  $no_of_reasons_119 +  //$no_of_reasons_120; 
           

  
        

                /*data:[<?php echo $row_reason_100["reason_counter"];?>,<?php echo $row_reason_101["reason_counter"];?>, <?php echo $row_reason_102["reason_counter"];?>,<?php echo $row_reason_103["reason_counter"];?>,<?php echo $row_reason_104["reason_counter"];?>,<?php echo $row_reason_105["reason_counter"];?>,<?php echo $row_reason_106["reason_counter"];?>,<?php echo $row_reason_107["reason_counter"];?>,<?php echo $row_reason_108["reason_counter"];?>,<?php echo $row_reason_109["reason_counter"];?>,<?php echo $row_reason_110["reason_counter"];?>,<?php echo $row_reason_111["reason_counter"];?>,<?php echo $row_reason_112["reason_counter"];?>,<?php echo $row_reason_113["reason_counter"];?>,<?php echo $row_reason_114["reason_counter"];?>,<?php echo $row_reason_115["reason_counter"];?>,<?php echo $row_reason_116["reason_counter"];?>,<?php echo $row_reason_117["reason_counter"];?>,<?php echo $row_reason_118["reason_counter"];?>,<?php echo $row_reason_119["reason_counter"];?>,<?php echo $row_reason_120["reason_counter"];?>],*/
?>
            

                data: [12.21, 15.58, 11.25, 8.32,52.64,12.21, 15.58, 11.25, 8.32,52.64,8.32,52.64,12.21, 15.58, 11.25,12.21, 15.58, 11.25,8.32,52.64,8.32],

          

    


  

      backgroundColor: ['#007bff', '#dc3545', '#ffc107', '#0E613C','Black','#007bff', '#dc3545', '#ffc107', '#0E613C','Black','#007bff', '#dc3545', '#ffc107', '#0E613C','Black','#007bff', '#dc3545', '#ffc107', '#0E613C','Black','#dc3545'],
    }],
  },
});
</script>