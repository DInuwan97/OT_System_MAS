<?php

////Boiler ///////////////////// >>>>>>>>>>>>>>>>>>>///////////////////////////////////////////////boiler///////////////////////////////////////////


$boiler_avg = 0;
$boiler_total = 0;

$boiler_89_total = 0;
$boiler_88_total = 0;
$boiler_87_total = 0;
$boiler_86_total = 0;
$boiler_85_total = 0;
$boiler_84_total = 0;

$boiler_83_total = 0;
$boiler_82_total = 0;
$boiler_81_total = 0;
$boiler_80_total = 0;
$boiler_90_total = 0;
$boiler_91_total = 0;

$boiler_92_total = 0;
$boiler_93_total = 0;
$boiler_94_total = 0;
$boiler_95_total = 0;
$boiler_96_total = 0;
$boiler_97_total = 0;



    $sql_max_boiler_to_date = "SELECT max(rfr.boiler) as 'max_boiler_cost',rf.req_date,rf.frame_no from confirm_frame cf,request_frame rf,request_frame_resources rfr
     where cf.frame_no = rf.frame_no and cf.manager_status = 'Accept' and rfr.frame_no = rf.frame_no AND rfr.boiler > 0.00 group by rf.req_date";

    $qry_max_boiler_to_date = mysqli_query($con,$sql_max_boiler_to_date);
    while($row_max_boiler_to_date = mysqli_fetch_array($qry_max_boiler_to_date)){

       // $sql99 = "SELECT COUNT(rf.frame_no),rf.req_date,st.department from request_frame rf,request_frame_resources rfr,stakeholders st where
       // rfr.frame_no = rf.frame_no and rfr.boiler > 0.00 and rf.frame_by = st.username and rf.req_date = '".$row_max_boiler_to_date["req_date"]."' GROUP BY st.department";

        //$qry99 = mysqli_query($con,$sql99);
       // while($row99 = mysqli_fetch_array($qry99)){

         $sql98 = "SELECT COUNT(rf.frame_no) as 'no_of_ask' from confirm_frame cf,request_frame rf,request_frame_resources rfr where  cf.frame_no = rf.frame_no and cf.manager_status = 'Accept' and rf.frame_no = rfr.frame_no
          AND rfr.boiler > 0.00 AND rf.req_date = '".$row_max_boiler_to_date["req_date"]."' and cf.manager_status = 'Accept' and cf.frame_no = rf.frame_no";

          $qry98 = mysqli_query($con,$sql98);
          if($row98 = mysqli_fetch_array($qry98)){

           $boiler_avg = $row_max_boiler_to_date["max_boiler_cost"] / $row98["no_of_ask"];
          // $boiler_total = $boiler_total + $boiler_avg;

           // echo $boiler_avg;
           // echo '</br>';



              $sql97 = "SELECT COUNT(rf.frame_no) as 'dpt_count',rf.req_date,st.department from confirm_frame cf,request_frame rf,request_frame_resources rfr,stakeholders st
                        where  cf.frame_no = rf.frame_no and cf.manager_status = 'Accept' and rfr.frame_no = rf.frame_no and rfr.boiler > 0.00 and rf.frame_by = st.username 
                        and rf.req_date = '".$row_max_boiler_to_date["req_date"]."' and cf.manager_status = 'Accept' and st.department = 'Factory Engineering' and cf.frame_no = rf.frame_no and cf.manager_status = 'Accept'";

$sql96 = "SELECT COUNT(rf.frame_no) as 'dpt_count',rf.req_date,st.department from confirm_frame cf,request_frame rf,request_frame_resources rfr,stakeholders st
where  cf.frame_no = rf.frame_no and cf.manager_status = 'Accept' and rfr.frame_no = rf.frame_no and rfr.boiler > 0.00 and rf.frame_by = st.username 
and rf.req_date = '".$row_max_boiler_to_date["req_date"]."' and st.department = 'Production Engineering'";


$sql95 = "SELECT COUNT(rf.frame_no) as 'dpt_count',rf.req_date,st.department from confirm_frame cf,request_frame rf,request_frame_resources rfr,stakeholders st
                        where  cf.frame_no = rf.frame_no and cf.manager_status = 'Accept' and rfr.frame_no = rf.frame_no and rfr.boiler > 0.00 and rf.frame_by = st.username 
                        and rf.req_date = '".$row_max_boiler_to_date["req_date"]."' and st.department = 'Autonomation'";


$sql94 = "SELECT COUNT(rf.frame_no) as 'dpt_count',rf.req_date,st.department from confirm_frame cf,request_frame rf,request_frame_resources rfr,stakeholders st
                        where  cf.frame_no = rf.frame_no and cf.manager_status = 'Accept' and rfr.frame_no = rf.frame_no and rfr.boiler > 0.00 and rf.frame_by = st.username 
                        and rf.req_date = '".$row_max_boiler_to_date["req_date"]."' and st.department = 'MOS'";



$sql93 = "SELECT COUNT(rf.frame_no) as 'dpt_count',rf.req_date,st.department from confirm_frame cf,request_frame rf,request_frame_resources rfr,stakeholders st
where  cf.frame_no = rf.frame_no and cf.manager_status = 'Accept' and rfr.frame_no = rf.frame_no and rfr.boiler > 0.00 and rf.frame_by = st.username 
and rf.req_date = '".$row_max_boiler_to_date["req_date"]."' and st.department = 'Quality'";


$sql92 = "SELECT COUNT(rf.frame_no) as 'dpt_count',rf.req_date,st.department from confirm_frame cf,request_frame rf,request_frame_resources rfr,stakeholders st
                        where  cf.frame_no = rf.frame_no and cf.manager_status = 'Accept' and rfr.frame_no = rf.frame_no and rfr.boiler > 0.00 and rf.frame_by = st.username 
                        and rf.req_date = '".$row_max_boiler_to_date["req_date"]."' and st.department = 'RM'";


$sql91 = "SELECT COUNT(rf.frame_no) as 'dpt_count',rf.req_date,st.department from confirm_frame cf,request_frame rf,request_frame_resources rfr,stakeholders st
                        where  cf.frame_no = rf.frame_no and cf.manager_status = 'Accept' and rfr.frame_no = rf.frame_no and rfr.boiler > 0.00 and rf.frame_by = st.username 
                        and rf.req_date = '".$row_max_boiler_to_date["req_date"]."' and st.department = 'FG'";



$sql90 = "SELECT COUNT(rf.frame_no) as 'dpt_count',rf.req_date,st.department from confirm_frame cf,request_frame rf,request_frame_resources rfr,stakeholders st
where  cf.frame_no = rf.frame_no and cf.manager_status = 'Accept' and rfr.frame_no = rf.frame_no and rfr.boiler > 0.00 and rf.frame_by = st.username 
and rf.req_date = '".$row_max_boiler_to_date["req_date"]."' and st.department = 'Technical'";


$sql89 = "SELECT COUNT(rf.frame_no) as 'dpt_count',rf.req_date,st.department from confirm_frame cf,request_frame rf,request_frame_resources rfr,stakeholders st
                        where   cf.frame_no = rf.frame_no and cf.manager_status = 'Accept' and  rfr.frame_no = rf.frame_no and rfr.boiler > 0.00 and rf.frame_by = st.username 
                        and rf.req_date = '".$row_max_boiler_to_date["req_date"]."' and st.department = 'Cutting'";


$sql88 = "SELECT COUNT(rf.frame_no) as 'dpt_count',rf.req_date,st.department from confirm_frame cf,request_frame rf,request_frame_resources rfr,stakeholders st
                        where  cf.frame_no = rf.frame_no and cf.manager_status = 'Accept' and  rfr.frame_no = rf.frame_no and rfr.boiler > 0.00 and rf.frame_by = st.username 
                        and rf.req_date = '".$row_max_boiler_to_date["req_date"]."' and st.department = 'HR'";


$sql87 = "SELECT COUNT(rf.frame_no) as 'dpt_count',rf.req_date,st.department from confirm_frame cf,request_frame rf,request_frame_resources rfr,stakeholders st
where  cf.frame_no = rf.frame_no and cf.manager_status = 'Accept' and  rfr.frame_no = rf.frame_no and rfr.boiler > 0.00 and rf.frame_by = st.username 
and rf.req_date = '".$row_max_boiler_to_date["req_date"]."' and st.department = 'Operation'";


$sql86 = "SELECT COUNT(rf.frame_no) as 'dpt_count',rf.req_date,st.department from confirm_frame cf,request_frame rf,request_frame_resources rfr,stakeholders st
                        where  cf.frame_no = rf.frame_no and cf.manager_status = 'Accept' and  rfr.frame_no = rf.frame_no and rfr.boiler > 0.00 and rf.frame_by = st.username 
                        and rf.req_date = '".$row_max_boiler_to_date["req_date"]."' and st.department = 'Production VSM 01'";


$sql85 = "SELECT COUNT(rf.frame_no) as 'dpt_count',rf.req_date,st.department from confirm_frame cf,request_frame rf,request_frame_resources rfr,stakeholders st
                        where  cf.frame_no = rf.frame_no and cf.manager_status = 'Accept' and  rfr.frame_no = rf.frame_no and rfr.boiler > 0.00 and rf.frame_by = st.username 
                        and rf.req_date = '".$row_max_boiler_to_date["req_date"]."' and st.department = 'Production VSM 02'";



$sql84 = "SELECT COUNT(rf.frame_no) as 'dpt_count',rf.req_date,st.department from confirm_frame cf,request_frame rf,request_frame_resources rfr,stakeholders st
where  cf.frame_no = rf.frame_no and cf.manager_status = 'Accept' and  rfr.frame_no = rf.frame_no and rfr.boiler > 0.00 and rf.frame_by = st.username 
and rf.req_date = '".$row_max_boiler_to_date["req_date"]."' and st.department = 'Production VSM 03'";


$sql83 = "SELECT COUNT(rf.frame_no) as 'dpt_count',rf.req_date,st.department from confirm_frame cf,request_frame rf,request_frame_resources rfr,stakeholders st
                        where  cf.frame_no = rf.frame_no and cf.manager_status = 'Accept' and  rfr.frame_no = rf.frame_no and rfr.boiler > 0.00 and rf.frame_by = st.username 
                        and rf.req_date = '".$row_max_boiler_to_date["req_date"]."' and st.department = 'Production VSM 04'";


$sql82 = "SELECT COUNT(rf.frame_no) as 'dpt_count',rf.req_date,st.department from confirm_frame cf,request_frame rf,request_frame_resources rfr,stakeholders st
                        where  cf.frame_no = rf.frame_no and cf.manager_status = 'Accept' and  rfr.frame_no = rf.frame_no and rfr.boiler > 0.00 and rf.frame_by = st.username 
                        and rf.req_date = '".$row_max_boiler_to_date["req_date"]."' and st.department = 'Pre-Sewing'";


$sql81 = "SELECT COUNT(rf.frame_no) as 'dpt_count',rf.req_date,st.department from confirm_frame cf,request_frame rf,request_frame_resources rfr,stakeholders st
                        where  cf.frame_no = rf.frame_no and cf.manager_status = 'Accept' and  rfr.frame_no = rf.frame_no and rfr.boiler > 0.00 and rf.frame_by = st.username 
                        and rf.req_date = '".$row_max_boiler_to_date["req_date"]."' and st.department = 'Emblishment'";

$sql80 = "SELECT COUNT(rf.frame_no) as 'dpt_count',rf.req_date,st.department from confirm_frame cf,request_frame rf,request_frame_resources rfr,stakeholders st
                        where  cf.frame_no = rf.frame_no and cf.manager_status = 'Accept' and  rfr.frame_no = rf.frame_no and rfr.boiler > 0.00 and rf.frame_by = st.username 
                        and rf.req_date = '".$row_max_boiler_to_date["req_date"]."' and st.department = 'IE'";



            $qry97 = mysqli_query($con,$sql97);
            $qry96 = mysqli_query($con,$sql96);
            $qry95 = mysqli_query($con,$sql95);
            $qry94 = mysqli_query($con,$sql94);
            $qry93 = mysqli_query($con,$sql93);
            $qry92 = mysqli_query($con,$sql92);
            $qry91 = mysqli_query($con,$sql91);
            $qry90 = mysqli_query($con,$sql90);
            $qry89 = mysqli_query($con,$sql89);
            $qry88 = mysqli_query($con,$sql88);
            $qry87 = mysqli_query($con,$sql87);
            $qry86 = mysqli_query($con,$sql86);
            $qry85 = mysqli_query($con,$sql85);
            $qry84 = mysqli_query($con,$sql84);
            $qry83 = mysqli_query($con,$sql83);
            $qry82 = mysqli_query($con,$sql82);
            $qry81 = mysqli_query($con,$sql81);
            $qry80 = mysqli_query($con,$sql80);


            if($row97 = mysqli_fetch_array($qry97)){
              $boiler_97_total = $boiler_97_total + $boiler_avg * $row97["dpt_count"];
            }

            if($row96 = mysqli_fetch_array($qry96)){
              $boiler_96_total = $boiler_96_total + $boiler_avg * $row96["dpt_count"];
            }
            if($row95 = mysqli_fetch_array($qry95)){
              $boiler_95_total = $boiler_95_total + $boiler_avg * $row95["dpt_count"];
            }

            if($row94 = mysqli_fetch_array($qry94)){
              $boiler_94_total = $boiler_94_total + $boiler_avg * $row94["dpt_count"];
            }
            if($row93 = mysqli_fetch_array($qry93)){
              $boiler_93_total = $boiler_93_total + $boiler_avg * $row93["dpt_count"];
            }
            if($row92 = mysqli_fetch_array($qry92)){
              $boiler_92_total = $boiler_92_total + $boiler_avg * $row92["dpt_count"];
            }


            if($row91 = mysqli_fetch_array($qry91)){
              $boiler_91_total = $boiler_91_total + $boiler_avg * $row91["dpt_count"];
            }
            if($row90 = mysqli_fetch_array($qry90)){
              $boiler_90_total = $boiler_90_total + $boiler_avg * $row90["dpt_count"];
            }
            if($row89 = mysqli_fetch_array($qry89)){
                $boiler_89_total = $boiler_89_total + $boiler_avg * $row89["dpt_count"];
            }

            if($row88 = mysqli_fetch_array($qry88)){
               $boiler_88_total = $boiler_88_total + $boiler_avg * $row88["dpt_count"];
            }
            if($row87 = mysqli_fetch_array($qry87)){
              $boiler_87_total = $boiler_87_total + $boiler_avg * $row87["dpt_count"];
            }
            if($row86 = mysqli_fetch_array($qry86)){
              $boiler_86_total = $boiler_86_total + $boiler_avg * $row86["dpt_count"];
            }

            if($row85 = mysqli_fetch_array($qry85)){
              $boiler_85_total = $boiler_85_total + $boiler_avg * $row85["dpt_count"];
            }
            if($row84 = mysqli_fetch_array($qry84)){
              $boiler_84_total = $boiler_84_total + $boiler_avg * $row84["dpt_count"];
            }
            if($row83 = mysqli_fetch_array($qry83)){
              $boiler_83_total = $boiler_83_total + $boiler_avg * $row83["dpt_count"];
            }

            if($row82 = mysqli_fetch_array($qry82)){
              $boiler_82_total = $boiler_82_total + $boiler_avg * $row82["dpt_count"];
            }
            if($row81 = mysqli_fetch_array($qry81)){
              $boiler_81_total = $boiler_81_total + $boiler_avg * $row81["dpt_count"];
            }
            if($row80 = mysqli_fetch_array($qry80)){
              $boiler_80_total = $boiler_80_total + $boiler_avg * $row80["dpt_count"];
            }


          } //if row98
        
        //} //while of row99

    } //while of row_max_boiler_to_date
  //   echo '</br>';
  // echo 'Cutting' ; echo $boiler_89_total;

  // echo '</br>';
  // echo 'HR' ; echo $boiler_88_total;

  // echo '</br>';
  // echo 'oPERATION' ; echo $boiler_87_total;



////Boiler ///////////////////// >>>>>>>>>>>>>>>>>>>///////////////////////////////////////////////boiler///////////////////////////////////////////

/////Compressor ///////////////////////// >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>Compressor ?//////////////////////////////////////////

$compressor_avg = 0;
$compressor_total = 0;

$compressor_69_total = 0;
$compressor_68_total = 0;
$compressor_67_total = 0;
$compressor_66_total = 0;
$compressor_65_total = 0;
$compressor_64_total = 0;

$compressor_63_total = 0;
$compressor_62_total = 0;
$compressor_61_total = 0;
$compressor_60_total = 0;
$compressor_70_total = 0;
$compressor_71_total = 0;

$compressor_72_total = 0;
$compressor_73_total = 0;
$compressor_74_total = 0;
$compressor_75_total = 0;
$compressor_76_total = 0;
$compressor_77_total = 0;



    $sql_max_compreasure_to_date = "SELECT max(rfr.compreasure) as 'max_compreasure_cost',rf.req_date,rf.frame_no from confirm_frame cf,request_frame rf,request_frame_resources rfr
     where   cf.frame_no = rf.frame_no and cf.manager_status = 'Accept' and rfr.frame_no = rf.frame_no AND rfr.compreasure > 0.00 group by rf.req_date";

    $qry_max_compreasure_to_date = mysqli_query($con,$sql_max_compreasure_to_date);
    while($row_max_compreasure_to_date = mysqli_fetch_array($qry_max_compreasure_to_date)){

       // $sql99 = "SELECT COUNT(rf.frame_no),rf.req_date,st.department from request_frame rf,request_frame_resources rfr,stakeholders st where
       // rfr.frame_no = rf.frame_no and rfr.boiler > 0.00 and rf.frame_by = st.username and rf.req_date = '".$row_max_boiler_to_date["req_date"]."' GROUP BY st.department";

        //$qry99 = mysqli_query($con,$sql99);
       // while($row99 = mysqli_fetch_array($qry99)){

         $sql78 = "SELECT COUNT(rf.frame_no) as 'no_of_ask' from confirm_frame cf,request_frame rf,request_frame_resources rfr where  cf.frame_no = rf.frame_no and cf.manager_status = 'Accept' and  rf.frame_no = rfr.frame_no
          AND rfr.compreasure > 0.00 AND rf.req_date = '".$row_max_compreasure_to_date["req_date"]."'";

          $qry78 = mysqli_query($con,$sql78);
          if($row78 = mysqli_fetch_array($qry78)){

           $compressor_avg = $row_max_compreasure_to_date["max_compreasure_cost"] / $row78["no_of_ask"];
          // $boiler_total = $boiler_total + $boiler_avg;
 // echo '</br>';
 //           echo $compressor_avg;
 //           echo '</br>';



              $sql77 = "SELECT COUNT(rf.frame_no) as 'dpt_count',rf.req_date,st.department from confirm_frame cf,request_frame rf,request_frame_resources rfr,stakeholders st
                        where   cf.frame_no = rf.frame_no and cf.manager_status = 'Accept' and rfr.frame_no = rf.frame_no and rfr.compreasure > 0.00 and rf.frame_by = st.username 
                        and rf.req_date = '".$row_max_compreasure_to_date["req_date"]."' and st.department = 'Factory Engineering'";

$sql76 = "SELECT COUNT(rf.frame_no) as 'dpt_count',rf.req_date,st.department from confirm_frame cf,request_frame rf,request_frame_resources rfr,stakeholders st
where  cf.frame_no = rf.frame_no and cf.manager_status = 'Accept' and  rfr.frame_no = rf.frame_no and rfr.compreasure > 0.00 and rf.frame_by = st.username 
and rf.req_date = '".$row_max_compreasure_to_date["req_date"]."' and st.department = 'Production Engineering'";


$sql75 = "SELECT COUNT(rf.frame_no) as 'dpt_count',rf.req_date,st.department from confirm_frame cf,request_frame rf,request_frame_resources rfr,stakeholders st
                        where  cf.frame_no = rf.frame_no and cf.manager_status = 'Accept' and  rfr.frame_no = rf.frame_no and rfr.compreasure > 0.00 and rf.frame_by = st.username 
                        and rf.req_date = '".$row_max_compreasure_to_date["req_date"]."' and st.department = 'Autonomation'";


$sql74 = "SELECT COUNT(rf.frame_no) as 'dpt_count',rf.req_date,st.department from confirm_frame cf,request_frame rf,request_frame_resources rfr,stakeholders st
                        where  cf.frame_no = rf.frame_no and cf.manager_status = 'Accept' and  rfr.frame_no = rf.frame_no and rfr.compreasure > 0.00 and rf.frame_by = st.username 
                        and rf.req_date = '".$row_max_compreasure_to_date["req_date"]."' and st.department = 'MOS'";



$sql73 = "SELECT COUNT(rf.frame_no) as 'dpt_count',rf.req_date,st.department from confirm_frame cf,request_frame rf,request_frame_resources rfr,stakeholders st
where  cf.frame_no = rf.frame_no and cf.manager_status = 'Accept' and  rfr.frame_no = rf.frame_no and rfr.compreasure > 0.00 and rf.frame_by = st.username 
and rf.req_date = '".$row_max_compreasure_to_date["req_date"]."' and st.department = 'Quality'";


$sql72 = "SELECT COUNT(rf.frame_no) as 'dpt_count',rf.req_date,st.department from confirm_frame cf,request_frame rf,request_frame_resources rfr,stakeholders st
                        where  cf.frame_no = rf.frame_no and cf.manager_status = 'Accept' and  rfr.frame_no = rf.frame_no and rfr.compreasure > 0.00 and rf.frame_by = st.username 
                        and rf.req_date = '".$row_max_compreasure_to_date["req_date"]."' and st.department = 'RM'";


$sql71 = "SELECT COUNT(rf.frame_no) as 'dpt_count',rf.req_date,st.department from confirm_frame cf,request_frame rf,request_frame_resources rfr,stakeholders st
                        where  cf.frame_no = rf.frame_no and cf.manager_status = 'Accept' and  rfr.frame_no = rf.frame_no and rfr.compreasure > 0.00 and rf.frame_by = st.username 
                        and rf.req_date = '".$row_max_compreasure_to_date["req_date"]."' and st.department = 'FG'";



$sql70 = "SELECT COUNT(rf.frame_no) as 'dpt_count',rf.req_date,st.department from confirm_frame cf,request_frame rf,request_frame_resources rfr,stakeholders st
where rfr.frame_no = rf.frame_no and rfr.compreasure > 0.00 and rf.frame_by = st.username 
and rf.req_date = '".$row_max_compreasure_to_date["req_date"]."' and st.department = 'Technical'";


$sql69 = "SELECT COUNT(rf.frame_no) as 'dpt_count',rf.req_date,st.department from confirm_frame cf,request_frame rf,request_frame_resources rfr,stakeholders st
                        where  cf.frame_no = rf.frame_no and cf.manager_status = 'Accept' and  rfr.frame_no = rf.frame_no and rfr.compreasure > 0.00 and rf.frame_by = st.username 
                        and rf.req_date = '".$row_max_compreasure_to_date["req_date"]."' and st.department = 'Cutting'";


$sql68 = "SELECT COUNT(rf.frame_no) as 'dpt_count',rf.req_date,st.department from confirm_frame cf,request_frame rf,request_frame_resources rfr,stakeholders st
                        where  cf.frame_no = rf.frame_no and cf.manager_status = 'Accept' and  rfr.frame_no = rf.frame_no and rfr.compreasure > 0.00 and rf.frame_by = st.username 
                        and rf.req_date = '".$row_max_compreasure_to_date["req_date"]."' and st.department = 'HR'";


$sql67 = "SELECT COUNT(rf.frame_no) as 'dpt_count',rf.req_date,st.department from confirm_frame cf,request_frame rf,request_frame_resources rfr,stakeholders st
where rfr.frame_no = rf.frame_no and rfr.compreasure > 0.00 and rf.frame_by = st.username 
and rf.req_date = '".$row_max_compreasure_to_date["req_date"]."' and st.department = 'Operation'";


$sql66 = "SELECT COUNT(rf.frame_no) as 'dpt_count',rf.req_date,st.department from confirm_frame cf,request_frame rf,request_frame_resources rfr,stakeholders st
                        where  cf.frame_no = rf.frame_no and cf.manager_status = 'Accept' and  rfr.frame_no = rf.frame_no and rfr.compreasure > 0.00 and rf.frame_by = st.username 
                        and rf.req_date = '".$row_max_compreasure_to_date["req_date"]."' and st.department = 'Production VSM 01'";


$sql65 = "SELECT COUNT(rf.frame_no) as 'dpt_count',rf.req_date,st.department from confirm_frame cf, request_frame rf,request_frame_resources rfr,stakeholders st
                        where  cf.frame_no = rf.frame_no and cf.manager_status = 'Accept' and  rfr.frame_no = rf.frame_no and rfr.compreasure > 0.00 and rf.frame_by = st.username 
                        and rf.req_date = '".$row_max_compreasure_to_date["req_date"]."' and st.department = 'Production VSM 02'";



$sql64 = "SELECT COUNT(rf.frame_no) as 'dpt_count',rf.req_date,st.department from confirm_frame cf, request_frame rf,request_frame_resources rfr,stakeholders st
where  cf.frame_no = rf.frame_no and cf.manager_status = 'Accept' and  rfr.frame_no = rf.frame_no and rfr.compreasure > 0.00 and rf.frame_by = st.username 
and rf.req_date = '".$row_max_compreasure_to_date["req_date"]."' and st.department = 'Production VSM 03'";


$sql63 = "SELECT COUNT(rf.frame_no) as 'dpt_count',rf.req_date,st.department from confirm_frame cf, request_frame rf,request_frame_resources rfr,stakeholders st
                        where  cf.frame_no = rf.frame_no and cf.manager_status = 'Accept' and  rfr.frame_no = rf.frame_no and rfr.compreasure > 0.00 and rf.frame_by = st.username 
                        and rf.req_date = '".$row_max_compreasure_to_date["req_date"]."' and st.department = 'Production VSM 04'";


$sql62 = "SELECT COUNT(rf.frame_no) as 'dpt_count',rf.req_date,st.department from confirm_frame cf, request_frame rf,request_frame_resources rfr,stakeholders st
                        where  cf.frame_no = rf.frame_no and cf.manager_status = 'Accept' and  rfr.frame_no = rf.frame_no and rfr.compreasure > 0.00 and rf.frame_by = st.username 
                        and rf.req_date = '".$row_max_compreasure_to_date["req_date"]."' and st.department = 'Pre-Sewing'";


$sql61 = "SELECT COUNT(rf.frame_no) as 'dpt_count',rf.req_date,st.department from confirm_frame cf, request_frame rf,request_frame_resources rfr,stakeholders st
                        where  cf.frame_no = rf.frame_no and cf.manager_status = 'Accept' and  rfr.frame_no = rf.frame_no and rfr.compreasure > 0.00 and rf.frame_by = st.username 
                        and rf.req_date = '".$row_max_compreasure_to_date["req_date"]."' and st.department = 'Emblishment'";

$sql60 = "SELECT COUNT(rf.frame_no) as 'dpt_count',rf.req_date,st.department from confirm_frame cf, request_frame rf,request_frame_resources rfr,stakeholders st
                        where  cf.frame_no = rf.frame_no and cf.manager_status = 'Accept' and  rfr.frame_no = rf.frame_no and rfr.compreasure > 0.00 and rf.frame_by = st.username 
                        and rf.req_date = '".$row_max_compreasure_to_date["req_date"]."' and st.department = 'IE'";



            $qry77 = mysqli_query($con,$sql77);
            $qry76 = mysqli_query($con,$sql76);
            $qry75 = mysqli_query($con,$sql75);
            $qry74 = mysqli_query($con,$sql74);
            $qry73 = mysqli_query($con,$sql73);
            $qry72 = mysqli_query($con,$sql72);
            $qry71 = mysqli_query($con,$sql71);
            $qry70 = mysqli_query($con,$sql70);
            $qry69 = mysqli_query($con,$sql69);
            $qry68 = mysqli_query($con,$sql68);
            $qry67 = mysqli_query($con,$sql67);
            $qry66 = mysqli_query($con,$sql66);
            $qry65 = mysqli_query($con,$sql65);
            $qry64 = mysqli_query($con,$sql64);
            $qry63 = mysqli_query($con,$sql63);
            $qry62 = mysqli_query($con,$sql62);
            $qry61 = mysqli_query($con,$sql61);
            $qry60 = mysqli_query($con,$sql60);


            if($row77 = mysqli_fetch_array($qry77)){
              $compressor_77_total = $compressor_77_total + $compressor_avg * $row77["dpt_count"];
            }

            if($row76 = mysqli_fetch_array($qry76)){
              $compressor_76_total = $compressor_76_total + $compressor_avg * $row76["dpt_count"];
            }
            if($row75 = mysqli_fetch_array($qry75)){
              $compressor_75_total = $compressor_75_total + $compressor_avg * $row75["dpt_count"];
            }

            if($row74 = mysqli_fetch_array($qry74)){
              $compressor_74_total = $compressor_74_total + $compressor_avg * $row74["dpt_count"];
            }
            if($row73 = mysqli_fetch_array($qry73)){
              $compressor_73_total = $compressor_73_total + $compressor_avg * $row73["dpt_count"];
            }
            if($row72 = mysqli_fetch_array($qry72)){
              $compressor_72_total = $compressor_72_total + $compressor_avg * $row72["dpt_count"];
            }


            if($row71 = mysqli_fetch_array($qry71)){
              $compressor_71_total = $compressor_71_total + $compressor_avg * $row71["dpt_count"];
            }
            if($row70 = mysqli_fetch_array($qry70)){
              $compressor_70_total = $compressor_70_total + $compressor_avg * $row70["dpt_count"];
            }
            if($row69 = mysqli_fetch_array($qry69)){
                $compressor_69_total = $compressor_69_total + $compressor_avg * $row69["dpt_count"];
            }

            if($row68 = mysqli_fetch_array($qry68)){
               $compressor_68_total = $compressor_68_total + $compressor_avg * $row68["dpt_count"];
            }
            if($row67 = mysqli_fetch_array($qry67)){
              $compressor_67_total = $compressor_67_total + $compressor_avg * $row67["dpt_count"];
            }
            if($row66 = mysqli_fetch_array($qry66)){
              $compressor_66_total = $compressor_66_total + $compressor_avg * $row66["dpt_count"];
            }

            if($row65 = mysqli_fetch_array($qry65)){
              $compressor_65_total = $compressor_65_total + $compressor_avg * $row65["dpt_count"];
            }
            if($row64 = mysqli_fetch_array($qry64)){
              $compressor_64_total = $compressor_64_total + $compressor_avg * $row64["dpt_count"];
            }
            if($row63 = mysqli_fetch_array($qry63)){
              $compressor_63_total = $compressor_63_total + $compressor_avg * $row63["dpt_count"];
            }

            if($row62 = mysqli_fetch_array($qry62)){
              $compressor_62_total = $compressor_62_total + $compressor_avg * $row62["dpt_count"];
            }
            if($row61 = mysqli_fetch_array($qry61)){
              $compressor_61_total = $compressor_61_total + $compressor_avg * $row61["dpt_count"];
            }
            if($row60 = mysqli_fetch_array($qry60)){
              $compressor_60_total = $compressor_60_total + $compressor_avg * $row60["dpt_count"];
            }


          } //if row98
        
        //} //while of row99

    } //while of row_max_boiler_to_date
    //echo '</br>';
  //echo 'Cutting' ; echo $boiler_89_total;

  //echo '</br>';
  //echo 'HR' ; echo $boiler_88_total;

  //echo '</br>';
  //echo 'oPERATION' ; echo $boiler_87_total;

 // echo 'Production VSM (II)'; echo $compressor_65_total;



///////////////////compressor//////////////////////////////////////////////////////////////////////////compressor/////////////////////////////////////



//////////////////////////////////////////////////aaaaaaaaaaaaaaaaaaaaaaaaaccccccccccccccccccccccccccccccc///////////////////////////////////////////

$ac_avg = 0;
$ac_total = 0;

$ac_49_total = 0;
$ac_48_total = 0;
$ac_47_total = 0;
$ac_46_total = 0;
$ac_45_total = 0;
$ac_44_total = 0;

$ac_43_total = 0;
$ac_42_total = 0;
$ac_41_total = 0;
$ac_40_total = 0;
$ac_50_total = 0;
$ac_51_total = 0;

$ac_52_total = 0;
$ac_53_total = 0;
$ac_54_total = 0;
$ac_55_total = 0;
$ac_56_total = 0;
$ac_57_total = 0;



    $sql_max_ac_to_date = "SELECT max(rfr.ac) as 'max_ac_cost',rf.req_date,rf.frame_no from confirm_frame cf, request_frame rf,request_frame_resources rfr
     where  cf.frame_no = rf.frame_no and cf.manager_status = 'Accept' and  rfr.frame_no = rf.frame_no AND rfr.ac > 0.00 group by rf.req_date";

    $qry_max_ac_to_date = mysqli_query($con,$sql_max_ac_to_date);
    while($row_max_ac_to_date = mysqli_fetch_array($qry_max_ac_to_date)){

       // $sql99 = "SELECT COUNT(rf.frame_no),rf.req_date,st.department from request_frame rf,request_frame_resources rfr,stakeholders st where
       // rfr.frame_no = rf.frame_no and rfr.boiler > 0.00 and rf.frame_by = st.username and rf.req_date = '".$row_max_boiler_to_date["req_date"]."' GROUP BY st.department";

        //$qry99 = mysqli_query($con,$sql99);
       // while($row99 = mysqli_fetch_array($qry99)){

         $sql58 = "SELECT COUNT(rf.frame_no) as 'no_of_ask' from  confirm_frame cf,request_frame rf,request_frame_resources rfr where  cf.frame_no = rf.frame_no and cf.manager_status = 'Accept' and  rf.frame_no = rfr.frame_no
          AND rfr.ac > 0.00 AND rf.req_date = '".$row_max_ac_to_date["req_date"]."'";

          $qry58 = mysqli_query($con,$sql58);
          if($row58 = mysqli_fetch_array($qry58)){

           $ac_avg = $row_max_ac_to_date["max_ac_cost"] / $row58["no_of_ask"];
          // $boiler_total = $boiler_total + $boiler_avg;
 // echo '</br>';
 //           echo $ac_avg;
 //           echo '</br>';



              $sql57 = "SELECT COUNT(rf.frame_no) as 'dpt_count',rf.req_date,st.department from confirm_frame cf, request_frame rf,request_frame_resources rfr,stakeholders st
                        where  cf.frame_no = rf.frame_no and cf.manager_status = 'Accept' and  rfr.frame_no = rf.frame_no and rfr.ac > 0.00 and rf.frame_by = st.username 
                        and rf.req_date = '".$row_max_ac_to_date["req_date"]."' and st.department = 'Factory Engineering'";

$sql56 = "SELECT COUNT(rf.frame_no) as 'dpt_count',rf.req_date,st.department from confirm_frame cf, request_frame rf,request_frame_resources rfr,stakeholders st
where  cf.frame_no = rf.frame_no and cf.manager_status = 'Accept' and  rfr.frame_no = rf.frame_no and rfr.ac > 0.00 and rf.frame_by = st.username 
and rf.req_date = '".$row_max_ac_to_date["req_date"]."' and st.department = 'Production Engineering'";


$sql55 = "SELECT COUNT(rf.frame_no) as 'dpt_count',rf.req_date,st.department from  confirm_frame cf,request_frame rf,request_frame_resources rfr,stakeholders st
                        where  cf.frame_no = rf.frame_no and cf.manager_status = 'Accept' and  rfr.frame_no = rf.frame_no and rfr.ac > 0.00 and rf.frame_by = st.username 
                        and rf.req_date = '".$row_max_ac_to_date["req_date"]."' and st.department = 'Autonomation'";


$sql54 = "SELECT COUNT(rf.frame_no) as 'dpt_count',rf.req_date,st.department from confirm_frame cf, request_frame rf,request_frame_resources rfr,stakeholders st
                        where  cf.frame_no = rf.frame_no and cf.manager_status = 'Accept' and  rfr.frame_no = rf.frame_no and rfr.ac > 0.00 and rf.frame_by = st.username 
                        and rf.req_date = '".$row_max_ac_to_date["req_date"]."' and st.department = 'MOS'";



$sql53 = "SELECT COUNT(rf.frame_no) as 'dpt_count',rf.req_date,st.department from confirm_frame cf, request_frame rf,request_frame_resources rfr,stakeholders st
where   cf.frame_no = rf.frame_no and cf.manager_status = 'Accept' and rfr.frame_no = rf.frame_no and rfr.ac > 0.00 and rf.frame_by = st.username 
and rf.req_date = '".$row_max_ac_to_date["req_date"]."' and st.department = 'Quality'";


$sql52 = "SELECT COUNT(rf.frame_no) as 'dpt_count',rf.req_date,st.department from confirm_frame cf, request_frame rf,request_frame_resources rfr,stakeholders st
                        where  cf.frame_no = rf.frame_no and cf.manager_status = 'Accept' and  rfr.frame_no = rf.frame_no and rfr.ac > 0.00 and rf.frame_by = st.username 
                        and rf.req_date = '".$row_max_ac_to_date["req_date"]."' and st.department = 'RM'";


$sql51 = "SELECT COUNT(rf.frame_no) as 'dpt_count',rf.req_date,st.department from confirm_frame cf, request_frame rf,request_frame_resources rfr,stakeholders st
                        where  cf.frame_no = rf.frame_no and cf.manager_status = 'Accept' and  rfr.frame_no = rf.frame_no and rfr.ac > 0.00 and rf.frame_by = st.username 
                        and rf.req_date = '".$row_max_ac_to_date["req_date"]."' and st.department = 'FG'";



$sql50 = "SELECT COUNT(rf.frame_no) as 'dpt_count',rf.req_date,st.department from confirm_frame cf, request_frame rf,request_frame_resources rfr,stakeholders st
where  cf.frame_no = rf.frame_no and cf.manager_status = 'Accept' and  rfr.frame_no = rf.frame_no and rfr.ac > 0.00 and rf.frame_by = st.username 
and rf.req_date = '".$row_max_ac_to_date["req_date"]."' and st.department = 'Technical'";


$sql49 = "SELECT COUNT(rf.frame_no) as 'dpt_count',rf.req_date,st.department from confirm_frame cf, request_frame rf,request_frame_resources rfr,stakeholders st
                        where  cf.frame_no = rf.frame_no and cf.manager_status = 'Accept' and  rfr.frame_no = rf.frame_no and rfr.ac > 0.00 and rf.frame_by = st.username 
                        and rf.req_date = '".$row_max_ac_to_date["req_date"]."' and st.department = 'Cutting'";


$sql48 = "SELECT COUNT(rf.frame_no) as 'dpt_count',rf.req_date,st.department from confirm_frame cf, request_frame rf,request_frame_resources rfr,stakeholders st
                        where  cf.frame_no = rf.frame_no and cf.manager_status = 'Accept' and  rfr.frame_no = rf.frame_no and rfr.ac > 0.00 and rf.frame_by = st.username 
                        and rf.req_date = '".$row_max_ac_to_date["req_date"]."' and st.department = 'HR'";


$sql47 = "SELECT COUNT(rf.frame_no) as 'dpt_count',rf.req_date,st.department from confirm_frame cf, request_frame rf,request_frame_resources rfr,stakeholders st
where  cf.frame_no = rf.frame_no and cf.manager_status = 'Accept' and  rfr.frame_no = rf.frame_no and rfr.ac > 0.00 and rf.frame_by = st.username 
and rf.req_date = '".$row_max_ac_to_date["req_date"]."' and st.department = 'Operation'";


$sql46 = "SELECT COUNT(rf.frame_no) as 'dpt_count',rf.req_date,st.department from confirm_frame cf,  request_frame rf,request_frame_resources rfr,stakeholders st
                        where  cf.frame_no = rf.frame_no and cf.manager_status = 'Accept' and  rfr.frame_no = rf.frame_no and rfr.ac > 0.00 and rf.frame_by = st.username 
                        and rf.req_date = '".$row_max_ac_to_date["req_date"]."' and st.department = 'Production VSM 01'";


$sql45 = "SELECT COUNT(rf.frame_no) as 'dpt_count',rf.req_date,st.department from confirm_frame cf, request_frame rf,request_frame_resources rfr,stakeholders st
                        where  cf.frame_no = rf.frame_no and cf.manager_status = 'Accept' and  rfr.frame_no = rf.frame_no and rfr.ac > 0.00 and rf.frame_by = st.username 
                        and rf.req_date = '".$row_max_ac_to_date["req_date"]."' and st.department = 'Production VSM 02'";



$sql44 = "SELECT COUNT(rf.frame_no) as 'dpt_count',rf.req_date,st.department from confirm_frame cf, request_frame rf,request_frame_resources rfr,stakeholders st
where  cf.frame_no = rf.frame_no and cf.manager_status = 'Accept' and  rfr.frame_no = rf.frame_no and rfr.ac > 0.00 and rf.frame_by = st.username 
and rf.req_date = '".$row_max_ac_to_date["req_date"]."' and st.department = 'Production VSM 03'";


$sql43 = "SELECT COUNT(rf.frame_no) as 'dpt_count',rf.req_date,st.department from confirm_frame cf, request_frame rf,request_frame_resources rfr,stakeholders st
                        where  cf.frame_no = rf.frame_no and cf.manager_status = 'Accept' and  rfr.frame_no = rf.frame_no and rfr.ac > 0.00 and rf.frame_by = st.username 
                        and rf.req_date = '".$row_max_ac_to_date["req_date"]."' and st.department = 'Production VSM 04'";


$sql42 = "SELECT COUNT(rf.frame_no) as 'dpt_count',rf.req_date,st.department from confirm_frame cf, request_frame rf,request_frame_resources rfr,stakeholders st
                        where  cf.frame_no = rf.frame_no and cf.manager_status = 'Accept' and  rfr.frame_no = rf.frame_no and rfr.ac > 0.00 and rf.frame_by = st.username 
                        and rf.req_date = '".$row_max_ac_to_date["req_date"]."' and st.department = 'Pre-Sewing'";


$sql41 = "SELECT COUNT(rf.frame_no) as 'dpt_count',rf.req_date,st.department from confirm_frame cf, request_frame rf,request_frame_resources rfr,stakeholders st
                        where  cf.frame_no = rf.frame_no and cf.manager_status = 'Accept' and  rfr.frame_no = rf.frame_no and rfr.ac > 0.00 and rf.frame_by = st.username 
                        and rf.req_date = '".$row_max_ac_to_date["req_date"]."' and st.department = 'Emblishment'";

$sql40 = "SELECT COUNT(rf.frame_no) as 'dpt_count',rf.req_date,st.department from confirm_frame cf, request_frame rf,request_frame_resources rfr,stakeholders st
                        where  cf.frame_no = rf.frame_no and cf.manager_status = 'Accept' and  rfr.frame_no = rf.frame_no and rfr.ac > 0.00 and rf.frame_by = st.username 
                        and rf.req_date = '".$row_max_ac_to_date["req_date"]."' and st.department = 'IE'";



            $qry57 = mysqli_query($con,$sql57);
            $qry56 = mysqli_query($con,$sql56);
            $qry55 = mysqli_query($con,$sql55);
            $qry54 = mysqli_query($con,$sql54);
            $qry53 = mysqli_query($con,$sql53);
            $qry52 = mysqli_query($con,$sql52);
            $qry51 = mysqli_query($con,$sql51);
            $qry50 = mysqli_query($con,$sql50);
            $qry49 = mysqli_query($con,$sql49);
            $qry48 = mysqli_query($con,$sql48);
            $qry47 = mysqli_query($con,$sql47);
            $qry46 = mysqli_query($con,$sql46);
            $qry45 = mysqli_query($con,$sql45);
            $qry44 = mysqli_query($con,$sql44);
            $qry43 = mysqli_query($con,$sql43);
            $qry42 = mysqli_query($con,$sql42);
            $qry41 = mysqli_query($con,$sql41);
            $qry40 = mysqli_query($con,$sql40);


            if($row57 = mysqli_fetch_array($qry57)){
              $ac_57_total = $ac_57_total + $ac_avg * $row57["dpt_count"];
            }

            if($row56 = mysqli_fetch_array($qry56)){
              $ac_56_total = $ac_56_total + $ac_avg * $row56["dpt_count"];
            }
            if($row55 = mysqli_fetch_array($qry55)){
              $ac_55_total = $ac_55_total + $ac_avg * $row55["dpt_count"];
            }

            if($row54 = mysqli_fetch_array($qry54)){
              $ac_54_total = $ac_54_total + $ac_avg * $row54["dpt_count"];
            }
            if($row53 = mysqli_fetch_array($qry53)){
              $ac_53_total = $ac_53_total + $ac_avg * $row53["dpt_count"];
            }
            if($row52 = mysqli_fetch_array($qry52)){
              $ac_52_total = $ac_52_total + $ac_avg * $row52["dpt_count"];
            }


            if($row51 = mysqli_fetch_array($qry51)){
              $ac_51_total = $ac_51_total + $ac_avg * $row51["dpt_count"];
            } 
            if($row50 = mysqli_fetch_array($qry50)){
              $ac_50_total = $ac_50_total + $ac_avg * $row50["dpt_count"];
            }
            if($row49 = mysqli_fetch_array($qry49)){
                $ac_49_total = $ac_49_total + $ac_avg * $row49["dpt_count"];
            }

            if($row48 = mysqli_fetch_array($qry48)){
               $ac_48_total = $ac_48_total + $ac_avg * $row48["dpt_count"];
            }
            if($row47 = mysqli_fetch_array($qry47)){
              $ac_47_total = $ac_47_total + $ac_avg * $row47["dpt_count"];
            }
            if($row46 = mysqli_fetch_array($qry46)){
              $ac_46_total = $ac_46_total + $ac_avg * $row46["dpt_count"];
            }

            if($row45 = mysqli_fetch_array($qry45)){
              $ac_45_total = $ac_45_total + $ac_avg * $row45["dpt_count"];
            }
            if($row44 = mysqli_fetch_array($qry44)){
              $ac_44_total = $ac_44_total + $ac_avg * $row44["dpt_count"];
            }
            if($row43 = mysqli_fetch_array($qry43)){
              $ac_43_total = $ac_43_total + $ac_avg * $row43["dpt_count"];
            }

            if($row42 = mysqli_fetch_array($qry42)){
              $ac_42_total = $ac_42_total + $ac_avg * $row42["dpt_count"];
            }
            if($row41 = mysqli_fetch_array($qry41)){
              $ac_41_total = $ac_41_total + $ac_avg * $row41["dpt_count"];
            }
            if($row40 = mysqli_fetch_array($qry40)){
              $ac_40_total = $ac_40_total + $ac_avg * $row40["dpt_count"];
            }


          } //if row98
        
        //} //while of row99

    } //while of row_max_boiler_to_date
  //   echo '</br>';
  // echo 'Cutting' ; echo $ac_49_total;

  // echo '</br>';
  // echo 'HR' ; echo $ac_48_total;

  // echo '</br>';
  //echo 'oPERATION' ; echo $boiler_87_total;

  //echo 'Production VSM (II)'; echo $ac_45_total;

//////////////////////////////////////////////////aaaaaaaaaaaaaaaaaaaaaaaaaccccccccccccccccccccccccccccccc///////////////////////////////////////////


//////////////////////////////////////////////mini boiler///////////////////////////////////////////////////////////////////////

  $mini_boiler_29_total = 0;
$mini_boiler_28_total = 0;
$mini_boiler_27_total = 0;
$mini_boiler_26_total = 0;
$mini_boiler_25_total = 0;
$mini_boiler_24_total = 0;

$mini_boiler_23_total = 0;
$mini_boiler_22_total = 0;
$mini_boiler_21_total = 0;
$mini_boiler_20_total = 0;
$mini_boiler_30_total = 0;
$mini_boiler_31_total = 0;

$mini_boiler_32_total = 0;
$mini_boiler_33_total = 0;
$mini_boiler_34_total = 0;
$mini_boiler_35_total = 0;
$mini_boiler_36_total = 0;
$mini_boiler_37_total = 0;















  $sql38 = "SELECT rfr.mini_boiler,rf.req_date,rf.frame_no from confirm_frame cf, request_frame rf,request_frame_resources rfr where  cf.frame_no = rf.frame_no and cf.manager_status = 'Accept' and  
            rfr.frame_no = rf.frame_no AND rfr.mini_boiler > 0.00 ";

  $qry38 = mysqli_query($con,$sql38);
  while($row38 = mysqli_fetch_array($qry38)){


          $sql37 = "SELECT (rfr.mini_boiler) as 'total_mini_boiler_cost_todate',rf.req_date,rf.frame_no from confirm_frame cf, request_frame rf,request_frame_resources rfr,stakeholders st 
            WHERE  cf.frame_no = rf.frame_no and cf.manager_status = 'Accept' and  st.username = rf.frame_by AND rf.frame_no = '".$row38["frame_no"]."' and st.department = 'Factory Engineering' AND rfr.mini_boiler > 0.00 and rfr.frame_no = rf.frame_no";


          $sql36 = "SELECT (rfr.mini_boiler) as 'total_mini_boiler_cost_todate',rf.req_date,rf.frame_no from confirm_frame cf, request_frame rf,request_frame_resources rfr,stakeholders st 
            WHERE  cf.frame_no = rf.frame_no and cf.manager_status = 'Accept' and  st.username = rf.frame_by AND rf.frame_no = '".$row38["frame_no"]."' and st.department = 'Production Engineering' AND rfr.mini_boiler > 0.00 and rfr.frame_no = rf.frame_no";

          $sql35 = "SELECT (rfr.mini_boiler) as 'total_mini_boiler_cost_todate',rf.req_date,rf.frame_no from  confirm_frame cf,request_frame rf,request_frame_resources rfr,stakeholders st 
            WHERE  cf.frame_no = rf.frame_no and cf.manager_status = 'Accept' and  st.username = rf.frame_by AND rf.frame_no = '".$row38["frame_no"]."' and st.department = 'Autonomation' AND rfr.mini_boiler > 0.00 and rfr.frame_no = rf.frame_no";



          $sql34 = "SELECT (rfr.mini_boiler) as 'total_mini_boiler_cost_todate',rf.req_date,rf.frame_no from confirm_frame cf, request_frame rf,request_frame_resources rfr,stakeholders st 
            WHERE  cf.frame_no = rf.frame_no and cf.manager_status = 'Accept' and  st.username = rf.frame_by AND rf.frame_no = '".$row38["frame_no"]."' and st.department = 'MOS' AND rfr.mini_boiler > 0.00 and rfr.frame_no = rf.frame_no";


          $sql33 = "SELECT (rfr.mini_boiler) as 'total_mini_boiler_cost_todate',rf.req_date,rf.frame_no from confirm_frame cf, request_frame rf,request_frame_resources rfr,stakeholders st 
            WHERE  cf.frame_no = rf.frame_no and cf.manager_status = 'Accept' and  st.username = rf.frame_by AND rf.frame_no = '".$row38["frame_no"]."' and st.department = 'Quality' AND rfr.mini_boiler > 0.00 and rfr.frame_no = rf.frame_no";

          $sql32 = "SELECT (rfr.mini_boiler) as 'total_mini_boiler_cost_todate',rf.req_date,rf.frame_no from confirm_frame cf, request_frame rf,request_frame_resources rfr,stakeholders st 
            WHERE  cf.frame_no = rf.frame_no and cf.manager_status = 'Accept' and  st.username = rf.frame_by AND rf.frame_no = '".$row38["frame_no"]."' and st.department = 'RM' AND rfr.mini_boiler > 0.00 and rfr.frame_no = rf.frame_no";



          $sql31 = "SELECT (rfr.mini_boiler) as 'total_mini_boiler_cost_todate',rf.req_date,rf.frame_no from confirm_frame cf, request_frame rf,request_frame_resources rfr,stakeholders st 
            WHERE  cf.frame_no = rf.frame_no and cf.manager_status = 'Accept' and  st.username = rf.frame_by AND rf.frame_no = '".$row38["frame_no"]."' and st.department = 'FG' AND rfr.mini_boiler > 0.00 and rfr.frame_no = rf.frame_no";


          $sql30 = "SELECT (rfr.mini_boiler) as 'total_mini_boiler_cost_todate',rf.req_date,rf.frame_no from confirm_frame cf, request_frame rf,request_frame_resources rfr,stakeholders st 
            WHERE  cf.frame_no = rf.frame_no and cf.manager_status = 'Accept' and  st.username = rf.frame_by AND rf.frame_no = '".$row38["frame_no"]."' and st.department = 'Technical' AND rfr.mini_boiler > 0.00 and rfr.frame_no = rf.frame_no";

          $sql29 = "SELECT (rfr.mini_boiler) as 'total_mini_boiler_cost_todate',rf.req_date,rf.frame_no from confirm_frame cf, request_frame rf,request_frame_resources rfr,stakeholders st 
            WHERE  cf.frame_no = rf.frame_no and cf.manager_status = 'Accept' and  st.username = rf.frame_by AND rf.frame_no = '".$row38["frame_no"]."' and st.department = 'Cutting' AND rfr.mini_boiler > 0.00 and rfr.frame_no = rf.frame_no";

            

          $sql28 = "SELECT (rfr.mini_boiler) as 'total_mini_boiler_cost_todate',rf.req_date,rf.frame_no from confirm_frame cf, request_frame rf,request_frame_resources rfr,stakeholders st 
            WHERE  cf.frame_no = rf.frame_no and cf.manager_status = 'Accept' and  st.username = rf.frame_by AND rf.frame_no = '".$row38["frame_no"]."' and st.department = 'HR' AND rfr.mini_boiler > 0.00 and rfr.frame_no = rf.frame_no";


          $sql27 = "SELECT (rfr.mini_boiler) as 'total_mini_boiler_cost_todate',rf.req_date,rf.frame_no from confirm_frame cf, request_frame rf,request_frame_resources rfr,stakeholders st 
            WHERE  cf.frame_no = rf.frame_no and cf.manager_status = 'Accept' and  st.username = rf.frame_by AND rf.frame_no = '".$row38["frame_no"]."' and st.department = 'Operation' AND rfr.mini_boiler > 0.00 and rfr.frame_no = rf.frame_no";

          $sql26 = "SELECT (rfr.mini_boiler) as 'total_mini_boiler_cost_todate',rf.req_date,rf.frame_no from confirm_frame cf, request_frame rf,request_frame_resources rfr,stakeholders st 
            WHERE  cf.frame_no = rf.frame_no and cf.manager_status = 'Accept' and  st.username = rf.frame_by AND rf.frame_no = '".$row38["frame_no"]."' and st.department = 'Production VSM 01' AND rfr.mini_boiler > 0.00 and rfr.frame_no = rf.frame_no";



          $sql25 = "SELECT (rfr.mini_boiler) as 'total_mini_boiler_cost_todate',rf.req_date,rf.frame_no from confirm_frame cf, request_frame rf,request_frame_resources rfr,stakeholders st 
            WHERE  cf.frame_no = rf.frame_no and cf.manager_status = 'Accept' and  st.username = rf.frame_by AND rf.frame_no = '".$row38["frame_no"]."' and st.department = 'Production VSM 02' AND rfr.mini_boiler > 0.00 and rfr.frame_no = rf.frame_no";


          $sql24 = "SELECT (rfr.mini_boiler) as 'total_mini_boiler_cost_todate',rf.req_date,rf.frame_no from confirm_frame cf, request_frame rf,request_frame_resources rfr,stakeholders st 
            WHERE st.username = rf.frame_by AND rf.frame_no = '".$row38["frame_no"]."' and st.department = 'Production VSM 03' AND rfr.mini_boiler > 0.00 and rfr.frame_no = rf.frame_no";

          $sql23 = "SELECT (rfr.mini_boiler) as 'total_mini_boiler_cost_todate',rf.req_date,rf.frame_no from confirm_frame cf, request_frame rf,request_frame_resources rfr,stakeholders st 
            WHERE  cf.frame_no = rf.frame_no and cf.manager_status = 'Accept' and  st.username = rf.frame_by AND rf.frame_no = '".$row38["frame_no"]."' and st.department = 'Production VSM 04' AND rfr.mini_boiler > 0.00 and rfr.frame_no = rf.frame_no";

            

          $sql22 = "SELECT (rfr.mini_boiler) as 'total_mini_boiler_cost_todate',rf.req_date,rf.frame_no from confirm_frame cf, request_frame rf,request_frame_resources rfr,stakeholders st 
            WHERE  cf.frame_no = rf.frame_no and cf.manager_status = 'Accept' and  st.username = rf.frame_by AND rf.frame_no = '".$row38["frame_no"]."' and st.department = 'Pre-Sewing' AND rfr.mini_boiler > 0.00 and rfr.frame_no = rf.frame_no";


          $sql21 = "SELECT (rfr.mini_boiler) as 'total_mini_boiler_cost_todate',rf.req_date,rf.frame_no from confirm_frame cf, request_frame rf,request_frame_resources rfr,stakeholders st 
            WHERE  cf.frame_no = rf.frame_no and cf.manager_status = 'Accept' and  st.username = rf.frame_by AND rf.frame_no = '".$row38["frame_no"]."' and st.department = 'Emblishment' AND rfr.mini_boiler > 0.00 and rfr.frame_no = rf.frame_no";

          $sql20 = "SELECT (rfr.mini_boiler) as 'total_mini_boiler_cost_todate',rf.req_date,rf.frame_no from confirm_frame cf, request_frame rf,request_frame_resources rfr,stakeholders st 
            WHERE  cf.frame_no = rf.frame_no and cf.manager_status = 'Accept' and  st.username = rf.frame_by AND rf.frame_no = '".$row38["frame_no"]."' and st.department = 'IE' AND rfr.mini_boiler > 0.00 and rfr.frame_no = rf.frame_no";




            $qry37 = mysqli_query($con,$sql37);
            $qry36 = mysqli_query($con,$sql36);
            $qry35 = mysqli_query($con,$sql35);
            $qry34 = mysqli_query($con,$sql34);
            $qry33 = mysqli_query($con,$sql33);
            $qry32 = mysqli_query($con,$sql32);
            $qry31 = mysqli_query($con,$sql31);
            $qry30 = mysqli_query($con,$sql30);
            $qry29 = mysqli_query($con,$sql29);
            $qry28 = mysqli_query($con,$sql28);
            $qry27 = mysqli_query($con,$sql27);
            $qry26 = mysqli_query($con,$sql26);
            $qry25 = mysqli_query($con,$sql25);
            $qry24 = mysqli_query($con,$sql24);
            $qry23 = mysqli_query($con,$sql23);
            $qry22 = mysqli_query($con,$sql22);
            $qry21 = mysqli_query($con,$sql21);
            $qry20 = mysqli_query($con,$sql20);








                  

                  if($row37 = mysqli_fetch_array($qry37)){
                    $mini_boiler_37_total = $mini_boiler_37_total + $row37["total_mini_boiler_cost_todate"];
                  }


                  if($row36 = mysqli_fetch_array($qry36)){
                    $mini_boiler_36_total = $mini_boiler_36_total + $row36["total_mini_boiler_cost_todate"];
                  }


                  if($row35 = mysqli_fetch_array($qry35)){
                    $mini_boiler_35_total = $mini_boiler_35_total + $row35["total_mini_boiler_cost_todate"];
                  }


                  if($row34 = mysqli_fetch_array($qry34)){
                    $mini_boiler_34_total = $mini_boiler_34_total + $row34["total_mini_boiler_cost_todate"];
                  }


                  if($row33 = mysqli_fetch_array($qry33)){
                    $mini_boiler_33_total = $mini_boiler_33_total + $row33["total_mini_boiler_cost_todate"];
                  }


                  if($row32 = mysqli_fetch_array($qry32)){
                    $mini_boiler_32_total = $mini_boiler_32_total + $row32["total_mini_boiler_cost_todate"];
                  }


                  if($row31 = mysqli_fetch_array($qry31)){
                    $mini_boiler_31_total = $mini_boiler_31_total + $row31["total_mini_boiler_cost_todate"];
                  }


                  if($row30 = mysqli_fetch_array($qry30)){
                    $mini_boiler_30_total = $mini_boiler_30_total + $row30["total_mini_boiler_cost_todate"];
                  }


                  if($row29 = mysqli_fetch_array($qry29)){
                    $mini_boiler_29_total = $mini_boiler_29_total + $row29["total_mini_boiler_cost_todate"];
                  }


                  if($row28 = mysqli_fetch_array($qry28)){
                    $mini_boiler_28_total = $mini_boiler_28_total + $row28["total_mini_boiler_cost_todate"];
                  }


                  if($row27 = mysqli_fetch_array($qry27)){
                    $mini_boiler_27_total = $mini_boiler_27_total + $row27["total_mini_boiler_cost_todate"];
                  }

              
                  if($row26 = mysqli_fetch_array($qry26)){
                    $mini_boiler_26_total = $mini_boiler_26_total + $row26["total_mini_boiler_cost_todate"];
                  }



                  if($row25 = mysqli_fetch_array($qry25)){
                    $mini_boiler_25_total = $mini_boiler_25_total + $row25["total_mini_boiler_cost_todate"];
                  }


                  if($row24 = mysqli_fetch_array($qry24)){
                    $mini_boiler_24_total = $mini_boiler_24_total + $row24["total_mini_boiler_cost_todate"];
                  }


                  if($row23 = mysqli_fetch_array($qry23)){
                    $mini_boiler_23_total = $mini_boiler_23_total + $row23["total_mini_boiler_cost_todate"];
                  }


                  if($row22 = mysqli_fetch_array($qry22)){
                    $mini_boiler_22_total = $mini_boiler_22_total + $row22["total_mini_boiler_cost_todate"];
                  }


                  if($row21 = mysqli_fetch_array($qry21)){
                    $mini_boiler_21_total = $mini_boiler_21_total + $row21["total_mini_boiler_cost_todate"];
                  }

              
                  if($row20 = mysqli_fetch_array($qry20)){
                    $mini_boiler_20_total = $mini_boiler_20_total + $row20["total_mini_boiler_cost_todate"];
                  }

        //$qry39 = mysqli_query($con,$sql39);
                  //echo '<br>';
// echo '<br>';
// echo $mini_boiler_28_total;
// echo '<br>';
// echo $mini_boiler_25_total;
// echo '<br>';

  } //end of while row 38


// echo '<br>';
// echo $mini_boiler_28_total;
// echo '<br>';
// echo $mini_boiler_25_total;



//////////////////////////////////////////////mini boiler//////////////////////////////////////////////////////////////////////////////////////////////


////////////////////////////////////////////////mini compreasure///////////////////////////////////////////////////////////////////////////////////////



  $mini_compreasure_129_total = 0;
$mini_compreasure_128_total = 0;
$mini_compreasure_127_total = 0;
$mini_compreasure_126_total = 0;
$mini_compreasure_125_total = 0;
$mini_compreasure_124_total = 0;

$mini_compreasure_123_total = 0;
$mini_compreasure_122_total = 0;
$mini_compreasure_121_total = 0;
$mini_compreasure_120_total = 0;
$mini_compreasure_137_total = 0;
$mini_compreasure_136_total = 0;

$mini_compreasure_135_total = 0;
$mini_compreasure_134_total = 0;
$mini_compreasure_133_total = 0;
$mini_compreasure_132_total = 0;
$mini_compreasure_131_total = 0;
$mini_compreasure_130_total = 0;







  $sql138 = "SELECT rfr.mini_compreasure,rf.req_date,rf.frame_no from confirm_frame cf, request_frame rf,request_frame_resources rfr where  cf.frame_no = rf.frame_no and cf.manager_status = 'Accept' and  
            rfr.frame_no = rf.frame_no AND rfr.mini_compreasure > 0.00 ";

  $qry138 = mysqli_query($con,$sql138);
  while($row138 = mysqli_fetch_array($qry138)){


          $sql137 = "SELECT (rfr.mini_compreasure) as 'total_mini_compreasure_cost_todate',rf.req_date,rf.frame_no from confirm_frame cf, request_frame rf,request_frame_resources rfr,stakeholders st 
            WHERE  cf.frame_no = rf.frame_no and cf.manager_status = 'Accept' and  st.username = rf.frame_by AND rf.frame_no = '".$row138["frame_no"]."' and st.department = 'Factory Engineering' AND rfr.mini_compreasure > 0.00 and rfr.frame_no = rf.frame_no";


          $sql136 = "SELECT (rfr.mini_compreasure) as 'total_mini_compreasure_cost_todate',rf.req_date,rf.frame_no from confirm_frame cf, request_frame rf,request_frame_resources rfr,stakeholders st 
            WHERE  cf.frame_no = rf.frame_no and cf.manager_status = 'Accept' and  st.username = rf.frame_by AND rf.frame_no = '".$row138["frame_no"]."' and st.department = 'Production Engineering' AND rfr.mini_compreasure > 0.00 and rfr.frame_no = rf.frame_no";

          $sql135 = "SELECT (rfr.mini_compreasure) as 'total_mini_compreasure_cost_todate',rf.req_date,rf.frame_no from confirm_frame cf, request_frame rf,request_frame_resources rfr,stakeholders st 
            WHERE  cf.frame_no = rf.frame_no and cf.manager_status = 'Accept' and  st.username = rf.frame_by AND rf.frame_no = '".$row138["frame_no"]."' and st.department = 'Autonomation' AND rfr.mini_compreasure > 0.00 and rfr.frame_no = rf.frame_no";



          $sql134 = "SELECT (rfr.mini_compreasure) as 'total_mini_compreasure_cost_todate',rf.req_date,rf.frame_no from confirm_frame cf, request_frame rf,request_frame_resources rfr,stakeholders st 
            WHERE  cf.frame_no = rf.frame_no and cf.manager_status = 'Accept' and  st.username = rf.frame_by AND rf.frame_no = '".$row138["frame_no"]."' and st.department = 'MOS' AND rfr.mini_compreasure > 0.00 and rfr.frame_no = rf.frame_no";


          $sql133 = "SELECT (rfr.mini_compreasure) as 'total_mini_compreasure_cost_todate',rf.req_date,rf.frame_no from confirm_frame cf, request_frame rf,request_frame_resources rfr,stakeholders st 
            WHERE  cf.frame_no = rf.frame_no and cf.manager_status = 'Accept' and  st.username = rf.frame_by AND rf.frame_no = '".$row138["frame_no"]."' and st.department = 'Quality' AND rfr.mini_compreasure > 0.00 and rfr.frame_no = rf.frame_no";

          $sql132 = "SELECT (rfr.mini_compreasure) as 'total_mini_compreasure_cost_todate',rf.req_date,rf.frame_no from confirm_frame cf, request_frame rf,request_frame_resources rfr,stakeholders st 
            WHERE  cf.frame_no = rf.frame_no and cf.manager_status = 'Accept' and  st.username = rf.frame_by AND rf.frame_no = '".$row138["frame_no"]."' and st.department = 'RM' AND rfr.mini_compreasure > 0.00 and rfr.frame_no = rf.frame_no";



          $sql131 = "SELECT (rfr.mini_compreasure) as 'total_mini_compreasure_cost_todate',rf.req_date,rf.frame_no from confirm_frame cf, request_frame rf,request_frame_resources rfr,stakeholders st 
            WHERE  cf.frame_no = rf.frame_no and cf.manager_status = 'Accept' and  st.username = rf.frame_by AND rf.frame_no = '".$row138["frame_no"]."' and st.department = 'FG' AND rfr.mini_compreasure > 0.00 and rfr.frame_no = rf.frame_no";


          $sql130 = "SELECT (rfr.mini_compreasure) as 'total_mini_compreasure_cost_todate',rf.req_date,rf.frame_no from confirm_frame cf, request_frame rf,request_frame_resources rfr,stakeholders st 
            WHERE  cf.frame_no = rf.frame_no and cf.manager_status = 'Accept' and  st.username = rf.frame_by AND rf.frame_no = '".$row138["frame_no"]."' and st.department = 'Technical' AND rfr.mini_compreasure > 0.00 and rfr.frame_no = rf.frame_no";

          $sql129 = "SELECT (rfr.mini_compreasure) as 'total_mini_compreasure_cost_todate',rf.req_date,rf.frame_no from confirm_frame cf, request_frame rf,request_frame_resources rfr,stakeholders st 
            WHERE  cf.frame_no = rf.frame_no and cf.manager_status = 'Accept' and  st.username = rf.frame_by AND rf.frame_no = '".$row138["frame_no"]."' and st.department = 'Cutting' AND rfr.mini_compreasure > 0.00 and rfr.frame_no = rf.frame_no";

            

          $sql128 = "SELECT (rfr.mini_compreasure) as 'total_mini_compreasure_cost_todate',rf.req_date,rf.frame_no from confirm_frame cf, request_frame rf,request_frame_resources rfr,stakeholders st 
            WHERE  cf.frame_no = rf.frame_no and cf.manager_status = 'Accept' and  st.username = rf.frame_by AND rf.frame_no = '".$row138["frame_no"]."' and st.department = 'HR' AND rfr.mini_compreasure > 0.00 and rfr.frame_no = rf.frame_no";


          $sql127 = "SELECT (rfr.mini_compreasure) as 'total_mini_compreasure_cost_todate',rf.req_date,rf.frame_no from confirm_frame cf, request_frame rf,request_frame_resources rfr,stakeholders st 
            WHERE  cf.frame_no = rf.frame_no and cf.manager_status = 'Accept' and  st.username = rf.frame_by AND rf.frame_no = '".$row138["frame_no"]."' and st.department = 'Operation' AND rfr.mini_compreasure > 0.00 and rfr.frame_no = rf.frame_no";

          $sql126 = "SELECT (rfr.mini_compreasure) as 'total_mini_compreasure_cost_todate',rf.req_date,rf.frame_no from confirm_frame cf, request_frame rf,request_frame_resources rfr,stakeholders st 
            WHERE  cf.frame_no = rf.frame_no and cf.manager_status = 'Accept' and  st.username = rf.frame_by AND rf.frame_no = '".$row138["frame_no"]."' and st.department = 'Production VSM 01' AND rfr.mini_compreasure > 0.00 and rfr.frame_no = rf.frame_no";



          $sql125 = "SELECT (rfr.mini_compreasure) as 'total_mini_compreasure_cost_todate',rf.req_date,rf.frame_no from confirm_frame cf, request_frame rf,request_frame_resources rfr,stakeholders st 
            WHERE  cf.frame_no = rf.frame_no and cf.manager_status = 'Accept' and  st.username = rf.frame_by AND rf.frame_no = '".$row138["frame_no"]."' and st.department = 'Production VSM 02' AND rfr.mini_compreasure > 0.00 and rfr.frame_no = rf.frame_no";


          $sql124 = "SELECT (rfr.mini_compreasure) as 'total_mini_compreasure_cost_todate',rf.req_date,rf.frame_no from  confirm_frame cf,request_frame rf,request_frame_resources rfr,stakeholders st 
            WHERE  cf.frame_no = rf.frame_no and cf.manager_status = 'Accept' and  st.username = rf.frame_by AND rf.frame_no = '".$row138["frame_no"]."' and st.department = 'Production VSM 03' AND rfr.mini_compreasure > 0.00 and rfr.frame_no = rf.frame_no";

          $sql123 = "SELECT (rfr.mini_compreasure) as 'total_mini_compreasure_cost_todate',rf.req_date,rf.frame_no from confirm_frame cf, request_frame rf,request_frame_resources rfr,stakeholders st 
            WHERE  cf.frame_no = rf.frame_no and cf.manager_status = 'Accept' and  st.username = rf.frame_by AND rf.frame_no = '".$row138["frame_no"]."' and st.department = 'Production VSM 04' AND rfr.mini_compreasure > 0.00 and rfr.frame_no = rf.frame_no";

            

          $sql122 = "SELECT (rfr.mini_compreasure) as 'total_mini_compreasure_cost_todate',rf.req_date,rf.frame_no from confirm_frame cf, request_frame rf,request_frame_resources rfr,stakeholders st 
            WHERE  cf.frame_no = rf.frame_no and cf.manager_status = 'Accept' and  st.username = rf.frame_by AND rf.frame_no = '".$row138["frame_no"]."' and st.department = 'Pre-Sewing' AND rfr.mini_compreasure > 0.00 and rfr.frame_no = rf.frame_no";


          $sql121 = "SELECT (rfr.mini_compreasure) as 'total_mini_compreasure_cost_todate',rf.req_date,rf.frame_no from  confirm_frame cf,request_frame rf,request_frame_resources rfr,stakeholders st 
            WHERE  cf.frame_no = rf.frame_no and cf.manager_status = 'Accept' and  st.username = rf.frame_by AND rf.frame_no = '".$row138["frame_no"]."' and st.department = 'Emblishment' AND rfr.mini_compreasure > 0.00 and rfr.frame_no = rf.frame_no";

          $sql120 = "SELECT (rfr.mini_compreasure) as 'total_mini_compreasure_cost_todate',rf.req_date,rf.frame_no from confirm_frame cf, request_frame rf,request_frame_resources rfr,stakeholders st 
            WHERE  cf.frame_no = rf.frame_no and cf.manager_status = 'Accept' and  st.username = rf.frame_by AND rf.frame_no = '".$row138["frame_no"]."' and st.department = 'IE' AND rfr.mini_compreasure > 0.00 and rfr.frame_no = rf.frame_no";




            $qry137 = mysqli_query($con,$sql137);
            $qry136 = mysqli_query($con,$sql136);
            $qry135 = mysqli_query($con,$sql135);
            $qry134 = mysqli_query($con,$sql134);
            $qry133 = mysqli_query($con,$sql133);
            $qry132 = mysqli_query($con,$sql132);
            $qry131 = mysqli_query($con,$sql131);
            $qry130 = mysqli_query($con,$sql130);
            $qry129 = mysqli_query($con,$sql129);
            $qry128 = mysqli_query($con,$sql128);
            $qry127 = mysqli_query($con,$sql127);
            $qry126 = mysqli_query($con,$sql126);
            $qry125 = mysqli_query($con,$sql125);
            $qry124 = mysqli_query($con,$sql124);
            $qry123 = mysqli_query($con,$sql123);
            $qry122 = mysqli_query($con,$sql122);
            $qry121 = mysqli_query($con,$sql121);
            $qry120 = mysqli_query($con,$sql120);








                  

                  if($row137 = mysqli_fetch_array($qry137)){
                    $mini_compreasure_137_total = $mini_compreasure_137_total + $row137["total_mini_compreasure_cost_todate"];
                  }


                  if($row136 = mysqli_fetch_array($qry136)){
                    $mini_compreasure_136_total = $mini_compreasure_136_total + $row136["total_mini_compreasure_cost_todate"];
                  }


                  if($row135 = mysqli_fetch_array($qry135)){
                    $mini_compreasure_135_total = $mini_compreasure_135_total + $row135["total_mini_compreasure_cost_todate"];
                  }


                  if($row134 = mysqli_fetch_array($qry134)){
                    $mini_compreasure_134_total = $mini_compreasure_134_total + $row134["total_mini_compreasure_cost_todate"];
                  }


                  if($row133 = mysqli_fetch_array($qry133)){
                    $mini_compreasure_133_total = $mini_compreasure_133_total + $row133["total_mini_compreasure_cost_todate"];
                  }


                  if($row132 = mysqli_fetch_array($qry132)){
                    $mini_compreasure_132_total = $mini_compreasure_132_total + $row132["total_mini_compreasure_cost_todate"];
                  }


                  if($row131 = mysqli_fetch_array($qry131)){
                    $mini_compreasure_131_total = $mini_compreasure_131_total + $row131["total_mini_compreasure_cost_todate"];
                  }


                  if($row130 = mysqli_fetch_array($qry130)){
                    $mini_compreasure_130_total = $mini_compreasure_130_total + $row130["total_mini_compreasure_cost_todate"];
                  }


                  if($row129 = mysqli_fetch_array($qry129)){
                    $mini_compreasure_129_total = $mini_compreasure_129_total + $row129["total_mini_compreasure_cost_todate"];
                  }


                  if($row128 = mysqli_fetch_array($qry128)){
                    $mini_compreasure_128_total = $mini_compreasure_128_total + $row128["total_mini_compreasure_cost_todate"];
                  }


                  if($row127 = mysqli_fetch_array($qry127)){
                    $mini_compreasure_127_total = $mini_compreasure_127_total + $row127["total_mini_compreasure_cost_todate"];
                  }

              
                  if($row126 = mysqli_fetch_array($qry126)){
                    $mini_compreasure_126_total = $mini_compreasure_126_total + $row126["total_mini_compreasure_cost_todate"];
                  }



                  if($row125 = mysqli_fetch_array($qry125)){
                    $mini_compreasure_125_total = $mini_compreasure_125_total + $row125["total_mini_compreasure_cost_todate"];
                  }


                  if($row124 = mysqli_fetch_array($qry124)){
                    $mini_compreasure_124_total = $mini_compreasure_124_total + $row124["total_mini_compreasure_cost_todate"];
                  }


                  if($row123 = mysqli_fetch_array($qry123)){
                    $mini_compreasure_123_total = $mini_compreasure_123_total + $row123["total_mini_compreasure_cost_todate"];
                  }


                  if($row122 = mysqli_fetch_array($qry122)){
                    $mini_compreasure_122_total = $mini_compreasure_122_total + $row122["total_mini_compreasure_cost_todate"];
                  }


                  if($row121 = mysqli_fetch_array($qry121)){
                    $mini_compreasure_121_total = $mini_compreasure_121_total + $row121["total_mini_compreasure_cost_todate"];
                  }

              
                  if($row120 = mysqli_fetch_array($qry120)){
                    $mini_compreasure_120_total = $mini_compreasure_120_total + $row120["total_mini_compreasure_cost_todate"];
                  }

        //$qry39 = mysqli_query($con,$sql39);



  } //end of while row 38


// echo '<br>';
// echo 'HR';
// echo $mini_compreasure_128_total;
// echo '<br>';
// echo $mini_compreasure_129_total;
// echo '<br>';
// echo $mini_compreasure_125_total;

////////////////////////////////////////////////mini compreasure///////////////////////////////////////////////////////////////////////////////////////
$factory_engineering_utility = 0;
$production_engineering_utility = 0;
$autonomation_utility = 0;
$mos_utility          = 0;
$quality_utility      = 0;
$rm_utility           =0;
$fg_utility           = 0;
$technical_utility    = 0;
$cutting_utility      = 0;
$hr_utility           = 0;
$operation_utility    = 0;
$prod_vsm1_utility    = 0;
$prod_vsm2_utility    = 0;
$prod_vsm3_utility    = 0;
$prod_vsm4_utility    = 0;
$pre_sewing_utility   = 0;
$emblishment_utility  = 0;
$ie_utility           = 0;

$departmet_utility = 0;











$factory_engineering_utility = $boiler_97_total + $compressor_77_total + $ac_57_total + $mini_boiler_37_total + $mini_compreasure_137_total;
$production_engineering_utility = $boiler_96_total + $compressor_76_total + $ac_56_total + $mini_boiler_36_total + $mini_compreasure_136_total;
$autonomation_utility = $boiler_95_total + $compressor_75_total + $ac_55_total + $mini_boiler_35_total + $mini_compreasure_135_total;
$mos_utility          = $boiler_94_total + $compressor_74_total + $ac_54_total + $mini_boiler_34_total + $mini_compreasure_134_total;
$quality_utility      = $boiler_93_total + $compressor_73_total + $ac_53_total + $mini_boiler_33_total + $mini_compreasure_133_total;
$rm_utility           = $boiler_92_total + $compressor_72_total + $ac_52_total + $mini_boiler_32_total + $mini_compreasure_132_total;
$fg_utility           = $boiler_91_total + $compressor_71_total + $ac_51_total + $mini_boiler_31_total + $mini_compreasure_131_total;
$technical_utility    = $boiler_90_total + $compressor_70_total + $ac_50_total + $mini_boiler_30_total + $mini_compreasure_130_total;
$cutting_utility      = $boiler_89_total + $compressor_69_total + $ac_49_total + $mini_boiler_29_total + $mini_compreasure_129_total;
$hr_utility           = $boiler_88_total + $compressor_68_total + $ac_48_total + $mini_boiler_28_total + $mini_compreasure_128_total;
$operation_utility    = $boiler_87_total + $compressor_67_total + $ac_47_total + $mini_boiler_27_total + $mini_compreasure_127_total;
$prod_vsm1_utility    = $boiler_86_total + $compressor_66_total + $ac_46_total + $mini_boiler_26_total + $mini_compreasure_126_total;
$prod_vsm2_utility    = $boiler_85_total + $compressor_65_total + $ac_45_total + $mini_boiler_25_total + $mini_compreasure_125_total;
$prod_vsm3_utility    = $boiler_84_total + $compressor_64_total + $ac_44_total + $mini_boiler_24_total + $mini_compreasure_124_total;
$prod_vsm4_utility    = $boiler_83_total + $compressor_63_total + $ac_43_total + $mini_boiler_23_total + $mini_compreasure_123_total;
$pre_sewing_utility   = $boiler_82_total + $compressor_62_total + $ac_42_total + $mini_boiler_22_total + $mini_compreasure_122_total;
$emblishment_utility  = $boiler_81_total + $compressor_61_total + $ac_41_total + $mini_boiler_21_total + $mini_compreasure_121_total;
$ie_utility           = $boiler_80_total + $compressor_60_total + $ac_40_total + $mini_boiler_20_total + $mini_compreasure_120_total;

$departmet_utility = $factory_engineering_utility + $production_engineering_utility + $autonomation_utility + $mos_utility + $quality_utility +
                      $rm_utility  + $fg_utility  + $technical_utility + $cutting_utility + $hr_utility + $operation_utility + $prod_vsm1_utility + $prod_vsm2_utility + 
                        $prod_vsm3_utility + $prod_vsm3_utility  + $pre_sewing_utility + $emblishment_utility + $ie_utility;






//echo '</br>';
//echo 'Avg is';
//echo $prod_vsm2_utility_avg;




//////////////////////////////////employeeee cost//////////////////////////////////////////////////////////////////////////////////////////////
      
        $tarnsport297 = 0;
        $tarnsport296 = 0;

$tarnsport295 = 0;

$tarnsport294 = 0;

$tarnsport293 = 0;

$tarnsport292 = 0;

$tarnsport291 = 0;

$tarnsport290 = 0;

$tarnsport289 = 0;
$tarnsport288 = 0;
$tarnsport287 = 0;
$tarnsport286 = 0;
$tarnsport285 = 0;
$tarnsport284 = 0;
$tarnsport283 = 0;
$tarnsport282 = 0;
$tarnsport281 = 0;
$tarnsport280 = 0;

$emp_cost297 = 0;

$emp_cost296 = 0;

$emp_cost295 = 0;

$emp_cost294 = 0;

$emp_cost293 = 0;

$emp_cost292 = 0;

$emp_cost291 = 0;

$emp_cost290 = 0;

$emp_cost289 = 0;

$emp_cost288 = 0;

$emp_cost287 = 0;
$emp_cost286 = 0;

$emp_cost285 = 0;

$emp_cost284 = 0;

$emp_cost283 = 0;

$emp_cost282 = 0;

$emp_cost281 = 0;

$emp_cost280 = 0;





        $sql_other_cost = "SELECT rf.req_date,rf.frame_no,cs.transport_cost,cs.emp_cost FROM  confirm_frame cf,request_frame rf,cost cs WHERE cf.frame_no = rf.frame_no and rf.frame_no = cs.frame_no and cf.manager_status = 'Accept'";

        $qry_other_cost = mysqli_query($con,$sql_other_cost);

          while($row_other_cost = mysqli_fetch_array($qry_other_cost)){


            $sql297 = "SELECT cs.transport_cost,cs.emp_cost,rf.frame_no,st.department FROM stakeholders st,cost cs,request_frame rf,confirm_frame cf where cf.frame_no = rf.frame_no 
            and rf.frame_no = cs.frame_no and rf.frame_by = st.username and cf.manager_status = 'Accept' and rf.frame_no = '".$row_other_cost["frame_no"]."' and st.department = 'Factory_Engineering'";


              $sql296 = "SELECT cs.transport_cost,cs.emp_cost,rf.frame_no,st.department FROM stakeholders st,cost cs,request_frame rf,confirm_frame cf where cf.frame_no = rf.frame_no 
            and rf.frame_no = cs.frame_no and rf.frame_by = st.username and cf.manager_status = 'Accept' and rf.frame_no = '".$row_other_cost["frame_no"]."' and st.department = 'Production_Engineering'";


              $sql295 = "SELECT cs.transport_cost,cs.emp_cost,rf.frame_no,st.department FROM stakeholders st,cost cs,request_frame rf,confirm_frame cf where cf.frame_no = rf.frame_no 
            and rf.frame_no = cs.frame_no and rf.frame_by = st.username and cf.manager_status = 'Accept' and rf.frame_no = '".$row_other_cost["frame_no"]."' and st.department = 'Autonomation'";


              $sql294 = "SELECT cs.transport_cost,cs.emp_cost,rf.frame_no,st.department FROM stakeholders st,cost cs,request_frame rf,confirm_frame cf where cf.frame_no = rf.frame_no 
            and rf.frame_no = cs.frame_no and rf.frame_by = st.username and cf.manager_status = 'Accept' and rf.frame_no = '".$row_other_cost["frame_no"]."' and st.department = 'MOS'";


              $sql293 = "SELECT cs.transport_cost,cs.emp_cost,rf.frame_no,st.department FROM stakeholders st,cost cs,request_frame rf,confirm_frame cf where cf.frame_no = rf.frame_no 
            and rf.frame_no = cs.frame_no and rf.frame_by = st.username and cf.manager_status = 'Accept' and rf.frame_no = '".$row_other_cost["frame_no"]."' and st.department = 'Quality'";



  

              $sql292 = "SELECT cs.transport_cost,cs.emp_cost,rf.frame_no,st.department FROM stakeholders st,cost cs,request_frame rf,confirm_frame cf where cf.frame_no = rf.frame_no 
            and rf.frame_no = cs.frame_no and rf.frame_by = st.username and cf.manager_status = 'Accept' and rf.frame_no = '".$row_other_cost["frame_no"]."' and st.department = 'RM'";


              $sql291 = "SELECT cs.transport_cost,cs.emp_cost,rf.frame_no,st.department FROM stakeholders st,cost cs,request_frame rf,confirm_frame cf where cf.frame_no = rf.frame_no 
            and rf.frame_no = cs.frame_no and rf.frame_by = st.username and cf.manager_status = 'Accept' and rf.frame_no = '".$row_other_cost["frame_no"]."' and st.department = 'FG'";


                    $sql290 = "SELECT cs.transport_cost,cs.emp_cost,rf.frame_no,st.department FROM stakeholders st,cost cs,request_frame rf,confirm_frame cf where cf.frame_no = rf.frame_no 
            and rf.frame_no = cs.frame_no and rf.frame_by = st.username and cf.manager_status = 'Accept' and rf.frame_no = '".$row_other_cost["frame_no"]."' and st.department = 'Technical'";


              $sql289 = "SELECT cs.transport_cost,cs.emp_cost,rf.frame_no,st.department FROM stakeholders st,cost cs,request_frame rf,confirm_frame cf where cf.frame_no = rf.frame_no 
            and rf.frame_no = cs.frame_no and rf.frame_by = st.username and cf.manager_status = 'Accept' and rf.frame_no = '".$row_other_cost["frame_no"]."' and st.department = 'Cutting'";


              $sql288 = "SELECT cs.transport_cost,cs.emp_cost,rf.frame_no,st.department FROM stakeholders st,cost cs,request_frame rf,confirm_frame cf where cf.frame_no = rf.frame_no 
            and rf.frame_no = cs.frame_no and rf.frame_by = st.username and cf.manager_status = 'Accept' and rf.frame_no = '".$row_other_cost["frame_no"]."' and st.department = 'HR'";



                $sql287 = "SELECT cs.transport_cost,cs.emp_cost,rf.frame_no,st.department FROM stakeholders st,cost cs,request_frame rf,confirm_frame cf where cf.frame_no = rf.frame_no 
            and rf.frame_no = cs.frame_no and rf.frame_by = st.username and cf.manager_status = 'Accept' and rf.frame_no = '".$row_other_cost["frame_no"]."' and st.department = 'Operation'";


              $sql286 = "SELECT cs.transport_cost,cs.emp_cost,rf.frame_no,st.department FROM stakeholders st,cost cs,request_frame rf,confirm_frame cf where cf.frame_no = rf.frame_no 
            and rf.frame_no = cs.frame_no and rf.frame_by = st.username and cf.manager_status = 'Accept' and rf.frame_no = '".$row_other_cost["frame_no"]."' and st.department = 'Production VSM 01'";


              $sql285 = "SELECT cs.transport_cost,cs.emp_cost,rf.frame_no,st.department FROM stakeholders st,cost cs,request_frame rf,confirm_frame cf where cf.frame_no = rf.frame_no 
            and rf.frame_no = cs.frame_no and rf.frame_by = st.username and cf.manager_status = 'Accept' and rf.frame_no = '".$row_other_cost["frame_no"]."' and st.department = 'Production VSM 02'";



              $sql284 = "SELECT cs.transport_cost,cs.emp_cost,rf.frame_no,st.department FROM stakeholders st,cost cs,request_frame rf,confirm_frame cf where cf.frame_no = rf.frame_no 
            and rf.frame_no = cs.frame_no and rf.frame_by = st.username and cf.manager_status = 'Accept' and rf.frame_no = '".$row_other_cost["frame_no"]."' and st.department = 'Production VSM 03'";


              $sql283 = "SELECT cs.transport_cost,cs.emp_cost,rf.frame_no,st.department FROM stakeholders st,cost cs,request_frame rf,confirm_frame cf where cf.frame_no = rf.frame_no 
            and rf.frame_no = cs.frame_no and rf.frame_by = st.username and cf.manager_status = 'Accept' and rf.frame_no = '".$row_other_cost["frame_no"]."' and st.department = 'Production VSM 04'";


              $sql282 = "SELECT cs.transport_cost,cs.emp_cost,rf.frame_no,st.department FROM stakeholders st,cost cs,request_frame rf,confirm_frame cf where cf.frame_no = rf.frame_no 
            and rf.frame_no = cs.frame_no and rf.frame_by = st.username and cf.manager_status = 'Accept' and rf.frame_no = '".$row_other_cost["frame_no"]."' and st.department = 'Pre-Sewing'";


              $sql281 = "SELECT cs.transport_cost,cs.emp_cost,rf.frame_no,st.department FROM stakeholders st,cost cs,request_frame rf,confirm_frame cf where cf.frame_no = rf.frame_no 
            and rf.frame_no = cs.frame_no and rf.frame_by = st.username and cf.manager_status = 'Accept' and rf.frame_no = '".$row_other_cost["frame_no"]."' and st.department = 'Emblishment'";


              $sql280 = "SELECT cs.transport_cost,cs.emp_cost,rf.frame_no,st.department FROM stakeholders st,cost cs,request_frame rf,confirm_frame cf where cf.frame_no = rf.frame_no 
            and rf.frame_no = cs.frame_no and rf.frame_by = st.username and cf.manager_status = 'Accept' and rf.frame_no = '".$row_other_cost["frame_no"]."' and st.department = 'IE'";



            $qry297 = mysqli_query($con,$sql297);
            $qry296 = mysqli_query($con,$sql296);
            $qry295 = mysqli_query($con,$sql295);
            $qry294 = mysqli_query($con,$sql294);
            $qry293 = mysqli_query($con,$sql293);
            $qry292 = mysqli_query($con,$sql292);
            $qry291 = mysqli_query($con,$sql291);
            $qry290 = mysqli_query($con,$sql290);
            $qry289 = mysqli_query($con,$sql289);
            $qry288 = mysqli_query($con,$sql288);
            $qry287 = mysqli_query($con,$sql287);
            $qry286 = mysqli_query($con,$sql286);
            $qry285 = mysqli_query($con,$sql285);
            $qry284 = mysqli_query($con,$sql284);
            $qry283 = mysqli_query($con,$sql283);
            $qry282 = mysqli_query($con,$sql282);
            $qry281 = mysqli_query($con,$sql281);
            $qry280 = mysqli_query($con,$sql280);








          

            if($row297 = mysqli_fetch_array($qry297)){
                $tarnsport297 = $tarnsport297 + $row297["transport_cost"];
                $emp_cost297 = $emp_cost297 + $row297["emp_cost"];
            }


            if($row296 = mysqli_fetch_array($qry296)){
                $tarnsport296 = $tarnsport296 + $row296["transport_cost"];
                $emp_cost296 = $emp_cost296 + $row296["emp_cost"];
            }


            if($row295 = mysqli_fetch_array($qry295)){
                $tarnsport295 = $tarnsport295 + $row295["transport_cost"];
                $emp_cost295 = $emp_cost295 + $row295["emp_cost"];
            }


            if($row294 = mysqli_fetch_array($qry294)){
                $tarnsport294 = $tarnsport294 + $row294["transport_cost"];
                $emp_cost294 = $emp_cost294 + $row294["emp_cost"];
            }


            if($row293 = mysqli_fetch_array($qry293)){
                $tarnsport293 = $tarnsport293 + $row293["transport_cost"];
                $emp_cost293 = $emp_cost293 + $row293["emp_cost"];
            }


            if($row292 = mysqli_fetch_array($qry292)){
                $tarnsport292 = $tarnsport292 + $row292["transport_cost"];
                $emp_cost292 = $emp_cost292 + $row292["emp_cost"];
            }


            if($row291 = mysqli_fetch_array($qry291)){
                $tarnsport291 = $tarnsport291 + $row291["transport_cost"];
                $emp_cost291 = $emp_cost291 + $row291["emp_cost"];
            }


            if($row290 = mysqli_fetch_array($qry290)){
                $tarnsport290 = $tarnsport290 + $row290["transport_cost"];
                $emp_cost290 = $emp_cost290 + $row290["emp_cost"];
            }


             if($row289 = mysqli_fetch_array($qry289)){
                $tarnsport289 = $tarnsport289 + $row289["transport_cost"];
                $emp_cost289 = $emp_cost289 + $row289["emp_cost"];
            }

             if($row288 = mysqli_fetch_array($qry288)){
                $tarnsport288 = $tarnsport288 + $row288["transport_cost"];
                $emp_cost288 = $emp_cost288 + $row288["emp_cost"];
            }

              if($row287 = mysqli_fetch_array($qry287)){
                $tarnsport287 = $tarnsport287 + $row287["transport_cost"];
                $emp_cost287 = $emp_cost287 + $row287["emp_cost"];
            }
              if($row286 = mysqli_fetch_array($qry286)){
                $tarnsport286 = $tarnsport286 + $row286["transport_cost"];
                $emp_cost286 = $emp_cost286 + $row286["emp_cost"];
            }
              if($row285 = mysqli_fetch_array($qry285)){
                $tarnsport285 = $tarnsport285 + $row285["transport_cost"];
                $emp_cost285 = $emp_cost285 + $row285["emp_cost"];
            }
              if($row284 = mysqli_fetch_array($qry289)){
                $tarnsport284 = $tarnsport284 + $row284["transport_cost"];
                $emp_cost284 = $emp_cost284 + $row284["emp_cost"];
            }
              if($row283 = mysqli_fetch_array($qry283)){
                $tarnsport283 = $tarnsport283 + $row283["transport_cost"];
                $emp_cost283 = $emp_cost283 + $row283["emp_cost"];
            }
              if($row282 = mysqli_fetch_array($qry282)){
                $tarnsport282 = $tarnsport282 + $row282["transport_cost"];
                $emp_cost282 = $emp_cost282 + $row282["emp_cost"];
            }
              if($row281 = mysqli_fetch_array($qry281)){
                $tarnsport281 = $tarnsport281 + $row281["transport_cost"];
                $emp_cost281 = $emp_cost281 + $row281["emp_cost"];
            }
              if($row280 = mysqli_fetch_array($qry280)){
                $tarnsport280 = $tarnsport280 + $row280["transport_cost"];
                $emp_cost280 = $emp_cost280 + $row280["emp_cost"];
            }



           




$factory_engineering_transport = 0;
$production_engineering_transport = 0;
$autonomation_transport = 0;
$mos_transport          = 0;
$quality_transport      = 0;
$rm_transport           =0;
$fg_transport           = 0;
$technical_transport   = 0;
$cutting_transport      = 0;
$hr_transport           = 0;
$operation_transport    = 0;
$prod_vsm1_transport    = 0;
$prod_vsm2_transport    = 0;
$prod_vsm3_transport    = 0;
$prod_vsm4_transport    = 0;
$pre_sewing_transport   = 0;
$emblishment_transport  = 0;
$ie_transport           = 0;



           







          }    //end of while row297 


$departmet_transport = $tarnsport297 +  $tarnsport296 +  $tarnsport295 +  $tarnsport294 +  $tarnsport293 +  $tarnsport292 +  $tarnsport291 +  $tarnsport290+
 $tarnsport289 + $tarnsport288 + $tarnsport287 + $tarnsport286 + $tarnsport285 + $tarnsport284 + $tarnsport283 + $tarnsport282 + $tarnsport281 + $tarnsport280;


$department_emp_cost = $emp_cost297 + $emp_cost296 + $emp_cost295 + $emp_cost294 + $emp_cost293 + $emp_cost292 + $emp_cost291 + $emp_cost290 + 
$emp_cost289 + $emp_cost288 + $emp_cost287 + $emp_cost286 + $emp_cost285 + $emp_cost284 + $emp_cost283 + $emp_cost282 + $emp_cost281 + $emp_cost290; 











//echo 'tanssssssssss';
//echo '</br>';
//echo $department_emp_cost;


//////////////////////////////////employeeee cost//////////////////////////////////////////////////////////////////////////////////////////////


$factory_engineering_total = $factory_engineering_utility + $tarnsport297 + $emp_cost297;
$production_engineering_total = $production_engineering_utility + $tarnsport296 + $emp_cost296; 
$autonomation_total = $autonomation_utility + $tarnsport295 + $emp_cost295;
$mos_total          = $mos_utility + $tarnsport294 + $emp_cost294;
$quality_total      = $quality_utility + $tarnsport293 + $emp_cost293;
$rm_total           = $rm_utility + $tarnsport292 + $emp_cost292 ;
$fg_total           = $fg_utility + $tarnsport291 + $emp_cost291;
$technical_total    = $technical_utility + $tarnsport290 + $emp_cost290;
$cutting_total      = $cutting_utility + $tarnsport289 + $emp_cost289;
$hr_total           = $hr_utility + $tarnsport288 + $emp_cost288;
$operation_total    = $operation_utility + $tarnsport287 + $emp_cost287;
$prod_vsm1_total    = $prod_vsm1_utility + $tarnsport286 + $emp_cost286;
$prod_vsm2_total    = $prod_vsm2_utility + $tarnsport285 + $emp_cost285;
$prod_vsm3_total    = $prod_vsm3_utility + $tarnsport284 + $emp_cost284;
$prod_vsm4_total    = $prod_vsm4_utility + $tarnsport283 + $emp_cost283;
$pre_sewing_total   = $pre_sewing_utility + $tarnsport282 + $emp_cost282;
$emblishment_total  = $emblishment_utility + $tarnsport281  + $emp_cost281;
$ie_total = $ie_utility + $tarnsport280 + $emp_cost280;  




$department_total = $departmet_utility + $departmet_transport + $department_emp_cost;





$factory_engineering_avg =  ($factory_engineering_total/$department_total) *100;
$production_engineering_avg =  ($production_engineering_total/$department_total) *100;
$autonomation_avg =  ($autonomation_total/$department_total) *100;
$mos_avg          =  ($mos_total /$department_total) *100;
$quality_avg      =  ($quality_total /$department_total) *100;
$rm_avg           = ($rm_total /$department_total) *100;
$fg_avg           =  ($fg_total /$department_total) *100;
$technical_avg    =  ($technical_total  /$department_total) *100;
$cutting_avg     =  ($cutting_total /$department_total) *100;
$hr_avg           = ($hr_total/$department_total) *100;
$operation_avg    = ($operation_total/$department_total) *100;
$prod_vsm1_avg    = ($prod_vsm1_total /$department_total) *100;
$prod_vsm2_avg    = ($prod_vsm2_total /$department_total) *100;
$prod_vsm3_avg    = ($prod_vsm3_total /$department_total) *100;
$prod_vsm4_avg    = ($prod_vsm4_total /$department_total) *100;
$pre_sewing_avg   = ($pre_sewing_total/$department_total) *100;
$emblishment_avg  = ($emblishment_total/$department_total) *100;
$ie_avg           = ($ie_total/$department_total) *100;


//echo 'tTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTT';
//echo '</br>';
//echo $department_total;


$prod_vsm2_utility_avg = ($prod_vsm2_utility / $departmet_utility) * 100; 


?>


