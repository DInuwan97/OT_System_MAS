



<input type="text" id="boiler" name="boiler" value=0>
<!-- </br> -->
<input type="text" id="miniboiler" name="miniboiler" value=0>
<!-- </br> -->
<input type="text" id="compreasure" name="compreasure" value=0>
<!-- </br> -->
<input type="text" id="minicompreasure" name="minicompreasure" value=0>
<!-- </br> -->
<input type="text" id="ac" name="ac" value=0>
<!-- <br>
<br> -->
<input type="text" id="start_time24" name="start_time24">
<!-- <br> -->
<input type="text" id="end_time24" name="end_time24">
<!-- <br> -->
<input type="text" id="difminitues" name="difminitues" >
<!-- <br> -->
<input type="text">
<!-- <br> -->
<input type="text">







<script type="text/javascript">



    var fe_utility_cost = 0;
    var pe_utility_cost = 0;
    var autonomation_utility_cost = 0;
    var mos_utility_cost = 0;
    var rm_utility_cost = 0;
     var quality_utility_cost = 0;
     var fg_utility_cost = 0;
     var technical_utility_cost = 0;
     var cutting_utility_cost = 0;
      var hr_utility_cost = 0;
      var operation_utility_cost = 0;
      var vsm1_utility_cost = 0;
      var vsm2_utility_cost = 0;
      var vsm3_utility_cost = 0;
      var vsm4_utility_cost = 0;
      var pre_sewing_utility_cost = 0;
      var emb_utility_cost = 0;
      var emb_utility_cost = 0;




<?php
    include('connection.php');
    $sql_resources = "SELECT * FROM charges WHERE id = 1";
    $qry_resources = mysqli_query($con, $sql_resources);
    if($row_resources = mysqli_fetch_array( $qry_resources))
    {
        $sql_resources2 = "SELECT * FROM charges WHERE id = 2";
        $qry_resources2 = mysqli_query($con, $sql_resources2);
        if($row_resources2 = mysqli_fetch_array( $qry_resources2))
        {
            $sql_resources3 = "SELECT * FROM charges WHERE id = 3";
            $qry_resources3 = mysqli_query($con, $sql_resources3);
            if($row_resources3 = mysqli_fetch_array( $qry_resources3))
            {

?>



<?php
    $sql_chart_cost = "SELECT min(rf.start_time24),max(rf.end_time24),rf.req_date,rfr.mini_compreasure,rfr.mini_boiler,rfr.boiler,rfr.compreasure,rfr.ac,st.username,st.department FROM request_frame rf,request_frame_resources rfr,stakeholders st WHERE rf.frame_no = rfr.frame_no AND rf.frame_by = st.username AND (rfr.mini_compreasure > 0.00 OR rfr.mini_boiler > 0.00 OR rfr.boiler > 0.00 OR rfr.compreasure > 0.00 OR rfr.ac > 0.00) GROUP BY rf.req_date,st.department";

    $qry_chart_cost = mysql_query($con,$sql_chart_cost);
    if($row_qry_cost = mysqli_fetch_array($qry_chart_cost)){

?>



    var time12_format_start = <?php echo $row_chart_cost["min(rf.start_time24)"]?>;
    var time12_format_end = <?php echo $row_chart_cost["max(rf.end_time24)"]?>;
    
    //var time12_start = moment(time12_format_start, "h:mm A").format("HH:mm");
    document.getElementById("start_time24").value = time12_start;

    //var time12_end = moment(time12_format_end, "h:mm A").format("HH:mm");
    document.getElementById("end_time24").value = time12_end;

     


    
    var start = moment.utc(time12_start, "HH:mm");
    var end = moment.utc(time12_end, "HH:mm");

    var d = moment.duration(end.diff(start));

    var s = moment.utc(+d).format('HH') * 60;
    var w = moment.utc(+d).format('mm');
    var total = Number(s) + Number(w);

    document.getElementById("difminitues").value = total;

    if(start < moment.utc("18:30", "HH:mm") && start >= moment.utc("05:30", "HH:mm")){

        if(end < moment.utc("18:30", "HH:mm")){

            var duration_boiler = total / 15 * <?php echo $row_resources["boiler"]?>;
            var duration_miniboiler = total / 15 * <?php echo $row_resources["miniboiler"]?>;
            var duration_compreasure =  total / 15 * <?php echo $row_resources["compreasure"]?>;
            var duration_minicompreasure = total / 15 * <?php echo $row_resources["minicompreasure"]?>;
            var duration_ac = total / 15 * <?php echo $row_resources["ac"]?>;

        }
        else if(end >= moment.utc("18:30", "HH:mm") && end < moment.utc("22:30", "HH:mm")){
            
            var cutoff1 = moment.utc("18:30", "HH:mm");

            var d1 = moment.duration(cutoff1.diff(start));
            var s1 = moment.utc(+d1).format('HH') * 60;
            var w1 = moment.utc(+d1).format('mm');
            var total1 = Number(s1) + Number(w1);

            var duration_boiler1 = total1 / 15 * <?php echo $row_resources["boiler"]?>;
            var duration_miniboiler1 = total1 / 15 * <?php echo $row_resources["miniboiler"]?>;
            var duration_compreasure1 = total1 / 15 * <?php echo $row_resources["compreasure"]?>;
            var duration_minicompreasure1 = total1 / 15 * <?php echo $row_resources["minicompreasure"]?>;
            var duration_ac1 =  total1 / 15 * <?php echo $row_resources["ac"]?>;



            var cutoff2 = moment.utc("22:30", "HH:mm");

            var d2 = moment.duration(end.diff(cutoff1));
            var s2 = moment.utc(+d2).format('HH') * 60;
            var w2 = moment.utc(+d2).format('mm');
            var total2 = Number(s2) + Number(w2);

            var duration_boiler = total2 / 15 * <?php echo $row_resources["boiler"]?> + duration_boiler1;
            var duration_miniboiler = total2 / 15 * <?php echo $row_resources2["miniboiler"]?> + duration_miniboiler1;
            var duration_compreasure = total2 / 15 * <?php echo $row_resources2["compreasure"]?> + duration_compreasure1;
            var duration_minicompreasure = total2 / 15 * <?php echo $row_resources2["minicompreasure"]?> + duration_minicompreasure1;
            var duration_ac =  total2 / 15 * <?php echo $row_resources2["ac"]?> + duration_ac1;


        }
        else if(end >= moment.utc("18:30", "HH:mm") && end <= moment.utc("23:59", "HH:mm")){
            
            var cutoff1 = moment.utc("18:30", "HH:mm");

            var d1 = moment.duration(cutoff1.diff(start));
            var s1 = moment.utc(+d1).format('HH') * 60;
            var w1 = moment.utc(+d1).format('mm');
            var total1 = Number(s1) + Number(w1);

            var duration_boiler1 = total1 / 15 * <?php echo $row_resources["boiler"]?>;
            var duration_miniboiler1 = total1 / 15 * <?php echo $row_resources["miniboiler"]?>;
            var duration_compreasure1 = total1 / 15 * <?php echo $row_resources["compreasure"]?>;
            var duration_minicompreasure1 = total1 / 15 * <?php echo $row_resources["minicompreasure"]?>;
            var duration_ac1 =  total1 / 15 * <?php echo $row_resources["ac"]?>;

            
            var cutoff2 = moment.utc("22:30", "HH:mm");


            var d2 = moment.duration(cutoff2.diff(cutoff1));
            var s2 = moment.utc(+d2).format('HH') * 60;
            var w2 = moment.utc(+d2).format('mm');
            var total2 = Number(s2) + Number(w2);

            var duration_boiler2 = total2 / 15 * <?php echo $row_resources["boiler"]?> + duration_boiler1;
            var duration_miniboiler2 = total2 / 15 * <?php echo $row_resources2["miniboiler"]?> + duration_miniboiler1;
            var duration_compreasure2 = total2 / 15 * <?php echo $row_resources2["compreasure"]?> + duration_compreasure1;
            var duration_minicompreasure2 = total2 / 15 * <?php echo $row_resources2["minicompreasure"]?> + duration_minicompreasure1;
            var duration_ac2 =  total2 / 15 * <?php echo $row_resources2["ac"]?> + duration_ac1;


            var d3 = moment.duration(end.diff(cutoff2));
            var s3 = moment.utc(+d3).format('HH') * 60;
            var w3 = moment.utc(+d3).format('mm');
            var total3 = Number(s3) + Number(w3);

            var duration_boiler = total3 / 15 * <?php echo $row_resources["boiler"]?> + duration_boiler2;
            var duration_miniboiler = total3 / 15 * <?php echo $row_resources3["miniboiler"]?> + duration_miniboiler2;
            var duration_compreasure = total3 / 15 * <?php echo $row_resources3["compreasure"]?> + duration_compreasure2;
            var duration_minicompreasure = total3 / 15 * <?php echo $row_resources3["minicompreasure"]?> + duration_minicompreasure2;
            var duration_ac =  total3 / 15 * <?php echo $row_resources3["ac"]?> + duration_ac2;


        }


    }else if(start >= moment.utc("18:30", "HH:mm") && start < moment.utc("22:30", "HH:mm"))
    {
        if(end < moment.utc("22:30","HH:mm")){

            var cutoff1 = moment.utc("22:30", "HH:mm");

            var d1 = moment.duration(end.diff(start));
            var s1 = moment.utc(+d1).format('HH') * 60;
            var w1 = moment.utc(+d1).format('mm');
            var total1 = Number(s1) + Number(w1);
           
            var duration_boiler = total1 / 15 * <?php echo $row_resources["boiler"]?>;
            var duration_miniboiler = total1 / 15 * <?php echo $row_resources2["miniboiler"]?>;
            var duration_compreasure =  total1 / 15 * <?php echo $row_resources2["compreasure"]?>;
            var duration_minicompreasure = total1 / 15 * <?php echo $row_resources2["minicompreasure"]?>;
            var duration_ac = total1 / 15 * <?php echo $row_resources2["ac"]?>;

        }else if(end >= moment.utc("22:30","HH:mm") && end <= moment.utc("23:59", "HH:mm")){

            var cutoff1 = moment.utc("22:30", "HH:mm");

            var d1 = moment.duration(cutoff1.diff(start));
            var s1 = moment.utc(+d1).format('HH') * 60;
            var w1 = moment.utc(+d1).format('mm');
            var total1 = Number(s1) + Number(w1);

            var duration_boiler1 = total1 / 15 * <?php echo $row_resources["boiler"]?>;
            var duration_miniboiler1 = total1 / 15 * <?php echo $row_resources2["miniboiler"]?>;
            var duration_compreasure1 =  total1 / 15 * <?php echo $row_resources2["compreasure"]?>;
            var duration_minicompreasure1 = total1 / 15 * <?php echo $row_resources2["minicompreasure"]?>;
            var duration_ac1 = total1 / 15 * <?php echo $row_resources2["ac"]?>;


            var d2 = moment.duration(end.diff(cutoff1));
            var s2 = moment.utc(+d2).format('HH') * 60;
            var w2 = moment.utc(+d2).format('mm');
            var total2 = Number(s2) + Number(w2);

            var duration_boiler = total2 / 15 * <?php echo $row_resources["boiler"]?> + duration_boiler1;
            var duration_miniboiler = total2 / 15 * <?php echo $row_resources3["miniboiler"]?> + duration_miniboiler1;
            var duration_compreasure =  total2 / 15 * <?php echo $row_resources3["compreasure"]?> + duration_compreasure1;
            var duration_minicompreasure = total2 / 15 * <?php echo $row_resources3["minicompreasure"]?> + duration_minicompreasure1;
            var duration_ac = total2 / 15 * <?php echo $row_resources3["ac"]?> + duration_ac1;

        }

    }else if(start >= moment.utc("22:30", "HH:mm") && start <= moment.utc("23:59", "HH:mm")){

            //var cutoff1 = moment.utc("22:30", "HH:mm");

            var d = moment.duration(end.diff(start));
            var s = moment.utc(+d).format('HH') * 60;
            var w = moment.utc(+d).format('mm');
            var total = Number(s) + Number(w);

            var duration_boiler = total / 15 * <?php echo $row_resources["boiler"]?>;
            var duration_miniboiler = total / 15 * <?php echo $row_resources3["miniboiler"]?>;
            var duration_compreasure =  total / 15 * <?php echo $row_resources3["compreasure"]?>;
            var duration_minicompreasure = total / 15 * <?php echo $row_resources3["minicompreasure"]?>;
            var duration_ac = total / 15 * <?php echo $row_resources3["ac"]?>;

    }else if(start >= moment.utc("00:00", "HH:mm") && start <= moment.utc("05:30", "HH:mm")){

        if(end <= moment.utc("05:30", "HH:mm") && end >= moment.utc("00:00", "HH:mm")){

            var d = moment.duration(end.diff(start));
            var s = moment.utc(+d).format('HH') * 60;
            var w = moment.utc(+d).format('mm');
            var total = Number(s) + Number(w);

            var duration_boiler = total / 15 * <?php echo $row_resources["boiler"]?>;
            var duration_miniboiler = total / 15 * <?php echo $row_resources3["miniboiler"]?>;
            var duration_compreasure =  total / 15 * <?php echo $row_resources3["compreasure"]?>;
            var duration_minicompreasure = total / 15 * <?php echo $row_resources3["minicompreasure"]?>;
            var duration_ac = total / 15 * <?php echo $row_resources3["ac"]?>;

        }else if(end <= moment.utc("18:30", "HH:mm") && end > moment.utc("05:30", "HH:mm")){

               
            var cutoff1 = moment.utc("05:30", "HH:mm");

            var d1 = moment.duration(cutoff1.diff(start));
            var s1 = moment.utc(+d1).format('HH') * 60;
            var w1 = moment.utc(+d1).format('mm');
            var total1 = Number(s1) + Number(w1);

            var duration_boiler1 = total1 / 15 * <?php echo $row_resources["boiler"]?>;
            var duration_miniboiler1 = total1 / 15 * <?php echo $row_resources3["miniboiler"]?>;
            var duration_compreasure1 =  total1 / 15 * <?php echo $row_resources3["compreasure"]?>;
            var duration_minicompreasure1 = total1 / 15 * <?php echo $row_resources3["minicompreasure"]?>;
            var duration_ac1 = total1 / 15 * <?php echo $row_resources3["ac"]?>;


     
            var d2 = moment.duration(end.diff(cutoff1));
            var s2 = moment.utc(+d2).format('HH') * 60;
            var w2 = moment.utc(+d2).format('mm');
            var total2 = Number(s2) + Number(w2);

            
            var duration_boiler = total2 / 15 * <?php echo $row_resources["boiler"]?> + duration_boiler1;
            var duration_miniboiler = total2 / 15 * <?php echo $row_resources["miniboiler"]?> + duration_miniboiler1;
            var duration_compreasure =  total2 / 15 * <?php echo $row_resources["compreasure"]?> + duration_compreasure1;
            var duration_minicompreasure = total2 / 15 * <?php echo $row_resources["minicompreasure"]?> + duration_minicompreasure1;
            var duration_ac = total2 / 15 * <?php echo $row_resources["ac"]?> + duration_ac1;


        }else if(end <= moment.utc("22:30", "HH:mm") && end > moment.utc("18:30", "HH:mm")){

                      
            var cutoff1 = moment.utc("05:30", "HH:mm");

            var d1 = moment.duration(cutoff1.diff(start));
            var s1 = moment.utc(+d1).format('HH') * 60;
            var w1 = moment.utc(+d1).format('mm');
            var total1 = Number(s1) + Number(w1);

            var duration_boiler1 = total1 / 15 * <?php echo $row_resources["boiler"]?>;
            var duration_miniboiler1 = total1 / 15 * <?php echo $row_resources3["miniboiler"]?>;
            var duration_compreasure1 =  total1 / 15 * <?php echo $row_resources3["compreasure"]?>;
            var duration_minicompreasure1 = total1 / 15 * <?php echo $row_resources3["minicompreasure"]?>;
            var duration_ac1 = total1 / 15 * <?php echo $row_resources3["ac"]?>;


            var cutoff2 = moment.utc("18:30", "HH:mm");

            var d2 = moment.duration(cutoff2.diff(cutoff1));
            var s2 = moment.utc(+d2).format('HH') * 60;
            var w2 = moment.utc(+d2).format('mm');
            var total2 = Number(s2) + Number(w2);

            
            var duration_boiler2 = total2 / 15 * <?php echo $row_resources["boiler"]?> + duration_boiler1;
            var duration_miniboiler2 = total2 / 15 * <?php echo $row_resources["miniboiler"]?> + duration_miniboiler1;
            var duration_compreasure2 =  total2 / 15 * <?php echo $row_resources["compreasure"]?> + duration_compreasure1;
            var duration_minicompreasure2 = total2 / 15 * <?php echo $row_resources["minicompreasure"]?> + duration_minicompreasure1;
            var duration_ac2 = total2 / 15 * <?php echo $row_resources["ac"]?> + duration_ac1;

          
            var cutoff2 = moment.utc("18:30", "HH:mm");

            var d3 = moment.duration(end.diff(cutoff2));
            var s3 = moment.utc(+d3).format('HH') * 60;
            var w3 = moment.utc(+d3).format('mm');
            var total3 = Number(s3) + Number(w3);


            var duration_boiler = total3 / 15 * <?php echo $row_resources["boiler"]?> + duration_boiler2;
            var duration_miniboiler = total3 / 15 * <?php echo $row_resources2["miniboiler"]?> + duration_miniboiler2;
            var duration_compreasure =  total3 / 15 * <?php echo $row_resources2["compreasure"]?> + duration_compreasure2;
            var duration_minicompreasure = total3 / 15 * <?php echo $row_resources2["minicompreasure"]?> + duration_minicompreasure2;
            var duration_ac = total3 / 15 * <?php echo $row_resources2["ac"]?> + duration_ac2 ;

        }else if(end <= moment.utc("23:59", "HH:mm") && end > moment.utc("22:30", "HH:mm")){

            var cutoff1 = moment.utc("05:30", "HH:mm");

            var d1 = moment.duration(cutoff1.diff(start));
            var s1 = moment.utc(+d1).format('HH') * 60;
            var w1 = moment.utc(+d1).format('mm');
            var total1 = Number(s1) + Number(w1);

            var duration_boiler1 = total1 / 15 * <?php echo $row_resources["boiler"]?>;
            var duration_miniboiler1 = total1 / 15 * <?php echo $row_resources3["miniboiler"]?>;
            var duration_compreasure1 =  total1 / 15 * <?php echo $row_resources3["compreasure"]?>;
            var duration_minicompreasure1 = total1 / 15 * <?php echo $row_resources3["minicompreasure"]?>;
            var duration_ac1 = total1 / 15 * <?php echo $row_resources3["ac"]?>;


            var cutoff2 = moment.utc("18:30", "HH:mm");

            var d2 = moment.duration(cutoff2.diff(cutoff1));
            var s2 = moment.utc(+d2).format('HH') * 60;
            var w2 = moment.utc(+d2).format('mm');
            var total2 = Number(s2) + Number(w2);


            var duration_boiler2 = total2 / 15 * <?php echo $row_resources["boiler"]?> + duration_boiler1;
            var duration_miniboiler2 = total2 / 15 * <?php echo $row_resources["miniboiler"]?> + duration_miniboiler1;
            var duration_compreasure2 =  total2 / 15 * <?php echo $row_resources["compreasure"]?> + duration_compreasure1;
            var duration_minicompreasure2 = total2 / 15 * <?php echo $row_resources["minicompreasure"]?> + duration_minicompreasure1;
            var duration_ac2 = total2 / 15 * <?php echo $row_resources["ac"]?> + duration_ac1;


            var cutoff3 = moment.utc("22:30", "HH:mm");

            var d3 = moment.duration(cutoff3.diff(cutoff2));
            var s3 = moment.utc(+d3).format('HH') * 60;
            var w3 = moment.utc(+d3).format('mm');
            var total3 = Number(s3) + Number(w3);


            var duration_boiler3 = total3 / 15 * <?php echo $row_resources["boiler"]?> + duration_boiler2;
            var duration_miniboiler3 = total3 / 15 * <?php echo $row_resources2["miniboiler"]?> + duration_miniboiler2;
            var duration_compreasure3 =  total3 / 15 * <?php echo $row_resources2["compreasure"]?> + duration_compreasure2;
            var duration_minicompreasure3 = total3 / 15 * <?php echo $row_resources2["minicompreasure"]?> + duration_minicompreasure2;
            var duration_ac3 = total3 / 15 * <?php echo $row_resources2["ac"]?> + duration_ac2 ;


            var d4 = moment.duration(end.diff(cutoff3));
            var s4 = moment.utc(+d4).format('HH') * 60;
            var w4 = moment.utc(+d4).format('mm');
            var total4 = Number(s4) + Number(w4);


            var duration_boiler = total4 / 15 * <?php echo $row_resources["boiler"]?> + duration_boiler3;
            var duration_miniboiler = total4 / 15 * <?php echo $row_resources3["miniboiler"]?> + duration_miniboiler3;
            var duration_compreasure =  total4 / 15 * <?php echo $row_resources3["compreasure"]?> + duration_compreasure3;
            var duration_minicompreasure = total4 / 15 * <?php echo $row_resources3["minicompreasure"]?> + duration_minicompreasure3;
            var duration_ac = total4 / 15 * <?php echo $row_resources3["ac"]?> + duration_ac3 ;


        }


    
        }
   
   

   
  
    if($row_qry_cost["boiler"] <= 0.00){        
         document.getElementById("boiler").value = duration_boiler;
         //duration_boiler = 0.00;
    }
    
    
    if($row_qry_cost["mini_boiler"] <= 0.00){        
          document.getElementById("miniboiler").value = duration_miniboiler;
          //duration_miniboiler = 0.00;
    }
    
    if($row_qry_cost["compreasure"] <= 0.00){       
         document.getElementById("compreasure").value = duration_compreasure;
         //duration_compreasure = 0.00;
    }

    if($row_qry_cost["mini_compreasure"] <= 0.00){        
          document.getElementById("minicompreasure").value =duration_minicompreasure ;
          //duration_minicompreasure = 0.00;
    }
        
    if($row_qry_cost["mini_compreasure"] <= 0.00){        
          document.getElementById("ac").value = duration_ac;
          //duration_ac = 0.00;
    } 

      
 /*
    if(<?php $row_qry_cost["department"] == 'Factory Engineering' ?>){
         fe_utility_cost = fe_utility_cost + duration_boiler + duration_miniboiler + duration_compreasure + duration_ac;
    }

    if(<?php $row_qry_cost["department"] == 'Production Engineering' ?>){
         pe_utility_cost = pe_utility_cost + duration_boiler + duration_miniboiler + duration_compreasure + duration_ac;
    }

    if(<?php $row_qry_cost["department"] == 'Autonomation' ?>){
         autonomation_utility_cost = autonomation_utility_cost + duration_boiler + duration_miniboiler + duration_compreasure + duration_ac;
    }

    if(<?php $row_qry_cost["department"] == 'MOS' ?>){
         mos_utility_cost = mos_utility_cost + duration_boiler + duration_miniboiler + duration_compreasure + duration_ac;
    }


    if(<?php $row_qry_cost["department"] == 'RM' ?>){
         rm_utility_cost = rm_utility_cost + duration_boiler + duration_miniboiler + duration_compreasure + duration_ac;
    }

    if(<?php $row_qry_cost["department"] == 'Quality' ?>){
         quality_utility_cost = quality_utility_cost + duration_boiler + duration_miniboiler + duration_compreasure + duration_ac;
    }

    if(<?php $row_qry_cost["department"] == 'FG' ?>){
         fg_utility_cost = fg_utility_cost + duration_boiler + duration_miniboiler + duration_compreasure + duration_ac;
    }

    if(<?php $row_qry_cost["department"] == 'Technical' ?>){
         technical_utility_cost = technical_utility_cost + duration_boiler + duration_miniboiler + duration_compreasure + duration_ac;
    }


    if(<?php $row_qry_cost["department"] == 'Cutting' ?>){
         cutting_utility_cost = cutting_utility_cost + duration_boiler + duration_miniboiler + duration_compreasure + duration_ac;
    }

    if(<?php $row_qry_cost["department"] == 'HR' ?>){
         hr_utility_cost = hr_utility_cost + duration_boiler + duration_miniboiler + duration_compreasure + duration_ac;
    }

    if(<?php $row_qry_cost["department"] == 'Operation' ?>){
         operation_utility_cost = operation_utility_cost + duration_boiler + duration_miniboiler + duration_compreasure + duration_ac;
    }

    if(<?php $row_qry_cost["department"] == 'Production VSM 01' ?>){
         vsm1_utility_cost = vsm1_utility_cost + duration_boiler + duration_miniboiler + duration_compreasure + duration_ac;
    }

    if(<?php $row_qry_cost["department"] == 'Production VSM 02' ?>){
         vsm2_utility_cost = vsm2_utility_cost + duration_boiler + duration_miniboiler + duration_compreasure + duration_ac;
    }

     if(<?php $row_qry_cost["department"] == 'Production VSM 03' ?>){
         vsm3_utility_cost = vsm3_utility_cost + duration_boiler + duration_miniboiler + duration_compreasure + duration_ac;
    }

     if(<?php $row_qry_cost["department"] == 'Production VSM 04' ?>){
         vsm4_utility_cost = vsm4_utility_cost + duration_boiler + duration_miniboiler + duration_compreasure + duration_ac;
    }


    if(<?php $row_qry_cost["department"] == 'Pre-Sewing' ?>){
         pre_sewing_utility_cost = pre_sewing_utility_cost + duration_boiler + duration_miniboiler + duration_compreasure + duration_ac;
    }

     if(<?php $row_qry_cost["department"] == 'Emblishment' ?>){
         emb_utility_cost = emb_utility_cost + duration_boiler + duration_miniboiler + duration_compreasure + duration_ac;
    }

     if(<?php $row_qry_cost["department"] == 'IE' ?>){
         ie_utility_cost = ie_utility_cost + duration_boiler + duration_miniboiler + duration_compreasure + duration_ac;
    }


*/

<?php
    }
?>


<?php
        }
    }
}
?>

alert("");


</script>




