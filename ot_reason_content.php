        <?php


                $no_of_reasons_100 = 0;
                $no_of_reasons_101 = 0;
                $no_of_reasons_102 = 0;
                $no_of_reasons_103 = 0;
                $no_of_reasons_104 = 0;
                $no_of_reasons_105 = 0;
                $no_of_reasons_106 = 0;
                $no_of_reasons_107 = 0;
                $no_of_reasons_108 = 0;
                $no_of_reasons_109 = 0;
                $no_of_reasons_110 = 0;
                $no_of_reasons_111 = 0;
                $no_of_reasons_112 = 0;
                $no_of_reasons_113 = 0;
                $no_of_reasons_114 = 0;
                $no_of_reasons_115 = 0;
                $no_of_reasons_116 = 0;
                $no_of_reasons_117 = 0;
                $no_of_reasons_118 = 0;
                $no_of_reasons_119 = 0;
                $no_of_reasons_120 = 0;

                $select_reason_100 = "SELECT COUNT(reason_no) as 'reason_counter' FROM ot_reason ot,confirm_frame cf WHERE ot.reason = '100' AND ot.frame_no = cf.frame_no AND cf.manager_status = 'Accept'";
                $select_reason_101 = "SELECT COUNT(reason_no) as 'reason_counter' FROM ot_reason ot,confirm_frame cf WHERE ot.reason = '101' AND ot.frame_no = cf.frame_no AND cf.manager_status = 'Accept'";
                $select_reason_102 = "SELECT COUNT(reason_no) as 'reason_counter' FROM ot_reason ot,confirm_frame cf WHERE ot.reason = '102' AND ot.frame_no = cf.frame_no AND cf.manager_status = 'Accept'";
                $select_reason_103 = "SELECT COUNT(reason_no) as 'reason_counter' FROM ot_reason ot,confirm_frame cf WHERE ot.reason = '103' AND ot.frame_no = cf.frame_no AND cf.manager_status = 'Accept'";
                $select_reason_104 = "SELECT COUNT(reason_no) as 'reason_counter' FROM ot_reason ot,confirm_frame cf WHERE ot.reason = '104' AND ot.frame_no = cf.frame_no AND cf.manager_status = 'Accept'";
                $select_reason_105 = "SELECT COUNT(reason_no) as 'reason_counter' FROM ot_reason ot,confirm_frame cf WHERE ot.reason = '105' AND ot.frame_no = cf.frame_no AND cf.manager_status = 'Accept'";
                $select_reason_106 = "SELECT COUNT(reason_no) as 'reason_counter' FROM ot_reason ot,confirm_frame cf WHERE ot.reason = '106' AND ot.frame_no = cf.frame_no AND cf.manager_status = 'Accept'";
                $select_reason_107 = "SELECT COUNT(reason_no) as 'reason_counter' FROM ot_reason ot,confirm_frame cf WHERE ot.reason = '107' AND ot.frame_no = cf.frame_no AND cf.manager_status = 'Accept'";
                $select_reason_108 = "SELECT COUNT(reason_no) as 'reason_counter' FROM ot_reason ot,confirm_frame cf WHERE ot.reason = '108' AND ot.frame_no = cf.frame_no AND cf.manager_status = 'Accept'";
                $select_reason_109 = "SELECT COUNT(reason_no) as 'reason_counter' FROM ot_reason ot,confirm_frame cf WHERE ot.reason = '109' AND ot.frame_no = cf.frame_no AND cf.manager_status = 'Accept'";
                $select_reason_110 = "SELECT COUNT(reason_no) as 'reason_counter' FROM ot_reason ot,confirm_frame cf WHERE ot.reason = '110' AND ot.frame_no = cf.frame_no AND cf.manager_status = 'Accept'";
                $select_reason_111 = "SELECT COUNT(reason_no) as 'reason_counter' FROM ot_reason ot,confirm_frame cf WHERE ot.reason = '111' AND ot.frame_no = cf.frame_no AND cf.manager_status = 'Accept'";
                $select_reason_112 = "SELECT COUNT(reason_no) as 'reason_counter' FROM ot_reason ot,confirm_frame cf WHERE ot.reason = '112' AND ot.frame_no = cf.frame_no AND cf.manager_status = 'Accept'";
                $select_reason_113 = "SELECT COUNT(reason_no) as 'reason_counter' FROM ot_reason ot,confirm_frame cf WHERE ot.reason = '113' AND ot.frame_no = cf.frame_no AND cf.manager_status = 'Accept'";
                $select_reason_114 = "SELECT COUNT(reason_no) as 'reason_counter' FROM ot_reason ot,confirm_frame cf WHERE ot.reason = '114' AND ot.frame_no = cf.frame_no AND cf.manager_status = 'Accept'";
                $select_reason_115 = "SELECT COUNT(reason_no) as 'reason_counter' FROM ot_reason ot,confirm_frame cf WHERE ot.reason = '115' AND ot.frame_no = cf.frame_no AND cf.manager_status = 'Accept'";
                $select_reason_116 = "SELECT COUNT(reason_no) as 'reason_counter' FROM ot_reason ot,confirm_frame cf WHERE ot.reason = '116' AND ot.frame_no = cf.frame_no AND cf.manager_status = 'Accept'";
                $select_reason_117 = "SELECT COUNT(reason_no) as 'reason_counter' FROM ot_reason ot,confirm_frame cf WHERE ot.reason = '117' AND ot.frame_no = cf.frame_no AND cf.manager_status = 'Accept'"; 
                $select_reason_118 = "SELECT COUNT(reason_no) as 'reason_counter' FROM ot_reason ot,confirm_frame cf WHERE ot.reason = '118' AND ot.frame_no = cf.frame_no AND cf.manager_status = 'Accept'";
                $select_reason_119 = "SELECT COUNT(reason_no) as 'reason_counter' FROM ot_reason ot,confirm_frame cf WHERE ot.reason = '119' AND ot.frame_no = cf.frame_no AND cf.manager_status = 'Accept'";
                $select_reason_120 = "SELECT COUNT(reason_no) as 'reason_counter' FROM ot_reason ot,confirm_frame cf WHERE ot.reason = '120' AND ot.frame_no = cf.frame_no AND cf.manager_status = 'Accept'"; 


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


                if($row_reason_100 = mysqli_fetch_array($qry_reason_100)){
                  $no_of_reasons_100 = $row_reason_100["reason_counter"];
                }
                if($row_reason_101 = mysqli_fetch_array($qry_reason_101)){
                  $no_of_reasons_101 = $row_reason_101["reason_counter"];
                }
                if($row_reason_102 = mysqli_fetch_array($qry_reason_102)){
                  $no_of_reasons_102 = $row_reason_102["reason_counter"];
                }
                if($row_reason_103 = mysqli_fetch_array($qry_reason_103)){
                    $no_of_reasons_103 = $row_reason_103["reason_counter"];
                }
                if($row_reason_104 = mysqli_fetch_array($qry_reason_104)){
                  $no_of_reasons_104 = $row_reason_104["reason_counter"];
                }
                if($row_reason_105 = mysqli_fetch_array($qry_reason_105)){
                  $no_of_reasons_105 = $row_reason_105["reason_counter"];
                }
                if($row_reason_106 = mysqli_fetch_array($qry_reason_106)){
                    $no_of_reasons_106 = $row_reason_106["reason_counter"];
                }
                if($row_reason_107 = mysqli_fetch_array($qry_reason_107)){
                  $no_of_reasons_107 = $row_reason_107["reason_counter"];
                }
                if($row_reason_108 = mysqli_fetch_array($qry_reason_108)){
                    $no_of_reasons_108 = $row_reason_108["reason_counter"];
                }
                if($row_reason_109 = mysqli_fetch_array($qry_reason_109)){
                     $no_of_reasons_109 = $row_reason_109["reason_counter"];
                }
                if($row_reason_110 = mysqli_fetch_array($qry_reason_110)){
                    $no_of_reasons_110 = $row_reason_110["reason_counter"];
                }
                if($row_reason_111 = mysqli_fetch_array($qry_reason_111)){
                   $no_of_reasons_111 = $row_reason_111["reason_counter"];
                }
                if($row_reason_112 = mysqli_fetch_array($qry_reason_112)){
                    $no_of_reasons_112 = $row_reason_112["reason_counter"];
                }
                if($row_reason_113 = mysqli_fetch_array($qry_reason_113)){
                    $no_of_reasons_113 = $row_reason_113["reason_counter"];
                }
                if($row_reason_114 = mysqli_fetch_array($qry_reason_114)){
                     $no_of_reasons_114 = $row_reason_114["reason_counter"];
                }
                if($row_reason_115 = mysqli_fetch_array($qry_reason_115)){
                  $no_of_reasons_115 = $row_reason_115["reason_counter"];
                }
                if($row_reason_116 = mysqli_fetch_array($qry_reason_116)){
                    $no_of_reasons_116 = $row_reason_116["reason_counter"];
                }
                if($row_reason_117 = mysqli_fetch_array($qry_reason_117)){
                    $no_of_reasons_117 = $row_reason_117["reason_counter"];
                }
                if($row_reason_118 = mysqli_fetch_array($qry_reason_118)){
                       $no_of_reasons_118 = $row_reason_118["reason_counter"];
                }
                if($row_reason_119 = mysqli_fetch_array($qry_reason_119)){
                      $no_of_reasons_119 = $row_reason_119["reason_counter"];
                }
                if($row_reason_120 = mysqli_fetch_array($qry_reason_120)){
                      $no_of_reasons_120 = $row_reason_120["reason_counter"];
                }


 

                    $total_no_of_reasons =  $no_of_reasons_100 +  $no_of_reasons_101 +  $no_of_reasons_102 +  $no_of_reasons_103 +  $no_of_reasons_104 +  
                              $no_of_reasons_105 +  $no_of_reasons_106 +  $no_of_reasons_107 +  $no_of_reasons_108 +  $no_of_reasons_109 +  $no_of_reasons_110 + $no_of_reasons_111 +  $no_of_reasons_112 +  $no_of_reasons_113 +  $no_of_reasons_114 +  $no_of_reasons_115 +  $no_of_reasons_116 + $no_of_reasons_117 +  $no_of_reasons_118 +  $no_of_reasons_119 +  $no_of_reasons_120; 
           

                $no_of_ot_reasons_avg_100 = ($no_of_reasons_100 / $total_no_of_reasons) * 100;
                $no_of_ot_reasons_avg_101 = ($no_of_reasons_101 / $total_no_of_reasons) * 100;
                $no_of_ot_reasons_avg_102 = ($no_of_reasons_102 / $total_no_of_reasons) * 100;
                $no_of_ot_reasons_avg_103 = ($no_of_reasons_103 / $total_no_of_reasons) * 100;
                $no_of_ot_reasons_avg_104 = ($no_of_reasons_104 / $total_no_of_reasons) * 100;
                $no_of_ot_reasons_avg_105 = ($no_of_reasons_105 / $total_no_of_reasons) * 100;
                $no_of_ot_reasons_avg_106 = ($no_of_reasons_106 / $total_no_of_reasons) * 100;

                $no_of_ot_reasons_avg_107 = ($no_of_reasons_107 / $total_no_of_reasons) * 100;
                $no_of_ot_reasons_avg_108 = ($no_of_reasons_108 / $total_no_of_reasons) * 100;
                $no_of_ot_reasons_avg_109 = ($no_of_reasons_109 / $total_no_of_reasons) * 100;
                $no_of_ot_reasons_avg_110 = ($no_of_reasons_110 / $total_no_of_reasons) * 100;
                $no_of_ot_reasons_avg_111 = ($no_of_reasons_111 / $total_no_of_reasons) * 100;
                $no_of_ot_reasons_avg_112 = ($no_of_reasons_112 / $total_no_of_reasons) * 100;
                $no_of_ot_reasons_avg_113 = ($no_of_reasons_113 / $total_no_of_reasons) * 100;

                $no_of_ot_reasons_avg_114 = ($no_of_reasons_114 / $total_no_of_reasons) * 100;
                $no_of_ot_reasons_avg_115 = ($no_of_reasons_115 / $total_no_of_reasons) * 100;
                $no_of_ot_reasons_avg_116 = ($no_of_reasons_116 / $total_no_of_reasons) * 100;
                $no_of_ot_reasons_avg_117 = ($no_of_reasons_117 / $total_no_of_reasons) * 100;
                $no_of_ot_reasons_avg_118 = ($no_of_reasons_118 / $total_no_of_reasons) * 100;
                $no_of_ot_reasons_avg_119 = ($no_of_reasons_119 / $total_no_of_reasons) * 100;
                $no_of_ot_reasons_avg_120 = ($no_of_reasons_120 / $total_no_of_reasons) * 100;
        

?>



















            <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-chart-area"></i>
             OT Reason Calasification</div>
            <div class="card-body" style="background:#98DCD5">
             
            <table style="width:100%">

<tr style="width:100%" border="1">



<table>   
        <tr>
          <td>

  <tr>
    <td style="width:10%">
        <table border="0">
            <tr>      
            <button class="btn btn-info">Plan OT</button>         
            </tr> 
        </table>
    </td>

    <td style="width:90%">
      <div class="progress">   
          <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="75" aria-valuemin="0"
           aria-valuemax="100" style="width:<?php echo $no_of_ot_reasons_avg_100?>%"><strong style="color:black"><?php echo number_format($no_of_ot_reasons_avg_100,2)?>%
           </strong> </div>
      </div>       
    <a href="#" style=""class="badge badge-primary"># Reasons : <?php echo $no_of_reasons_100?></a>
   </td>
</tr>


 <tr>
    <td style="width:10%">
          <table>  
              <tr>      
                <button class="btn btn-warning">Service capacity issues</button>         
              </tr> 
          </table>
    </td>

    <td style="width:90%">
       <div class="progress">
          <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="75" aria-valuemin="0"
           aria-valuemax="100" style="width:<?php echo $no_of_ot_reasons_avg_101?>%"><strong style="color:black"><?php echo number_format($no_of_ot_reasons_avg_101,2)?>%</strong> </div>
       </div>   
       <a href="#" style=""class="badge badge-warning"># Reasons : <?php echo $no_of_reasons_101?></a>
     </td>
</tr>


<tr>
    <td style="width:10%">
        <table border="0">
            <tr>      
            <button class="btn btn-info">Unplan style</button>         
            </tr> 
        </table>
    </td>

    <td style="width:90%">
          <div class="progress">
          <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="75" aria-valuemin="0"
           aria-valuemax="100" style="width:<?php echo $no_of_ot_reasons_avg_102?>%"><strong style="color:black"><?php echo number_format($no_of_ot_reasons_avg_102,2)?>%</strong> </div>
       </div>         
    <a href="#" style=""class="badge badge-primary"># Reasons : <?php echo $no_of_reasons_102?></a>
   </td>
</tr>


 <tr>
    <td style="width:10%">
          <table>  
              <tr>      
                <button class="btn btn-warning">QCO failures</button>         
              </tr> 
          </table>
    </td>

    <td style="width:90%">
       <div class="progress">
          <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="75" aria-valuemin="0"
           aria-valuemax="100" style="width:<?php echo $no_of_ot_reasons_avg_103?>%"><strong style="color:black"><?php echo number_format($no_of_ot_reasons_avg_103,2)?>%</strong> </div>
       </div>   
       <a href="#" style=""class="badge badge-warning"># Reasons : <?php echo $no_of_reasons_103?></a>
     </td>
</tr>

  <tr>
    <td style="width:10%">
        <table border="0">
            <tr>      
            <button class="btn btn-info">Due to Machine BD</button>         
            </tr> 
        </table>
    </td>

    <td style="width:90%">
      <div class="progress">   
          <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="75" aria-valuemin="0"
           aria-valuemax="100" style="width:<?php echo $no_of_ot_reasons_avg_104?>%"><strong style="color:black"><?php echo number_format($no_of_ot_reasons_avg_104,2)?>%</strong> </div>
      </div>       
    <a href="#" style=""class="badge badge-primary"># Reasons : <?php echo $no_of_reasons_104?></a>
   </td>
</tr>


 <tr>
    <td style="width:10%">
          <table>  
              <tr>      
                <button class="btn btn-warning">Production behind</button>         
              </tr> 
          </table>
    </td>

    <td style="width:90%">
       <div class="progress">
          <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="75" aria-valuemin="0"
           aria-valuemax="100" style="width:<?php echo $no_of_ot_reasons_avg_105?>%"><strong style="color:black"><?php echo number_format($no_of_ot_reasons_avg_105,2)?>%</strong> </div>
       </div>   
       <a href="#" style=""class="badge badge-warning"># Reasons : <?php echo $no_of_reasons_105?></a>
     </td>
</tr>


<tr>
    <td style="width:10%">
        <table border="0">
            <tr>      
            <button class="btn btn-info">Due to Material delay</button>         
            </tr> 
        </table>
    </td>

    <td style="width:90%">
      <div class="progress">   
          <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="75" aria-valuemin="0"
           aria-valuemax="100" style="width:<?php echo $no_of_ot_reasons_avg_106?>%"><strong style="color:black"><?php echo number_format($no_of_ot_reasons_avg_106,2)?>%</strong> </div>
      </div>       
    <a href="#" style=""class="badge badge-primary"># Reasons : <?php echo $no_of_reasons_106?></a>
   </td>
</tr>


 <tr>
    <td style="width:10%">
          <table>  
              <tr>      
                <button class="btn btn-warning">High absenteeism</button>         
              </tr> 
          </table>
    </td>

    <td style="width:90%">
       <div class="progress">
          <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="75" aria-valuemin="0"
           aria-valuemax="100" style="width:<?php echo $no_of_ot_reasons_avg_107?>%"><strong style="color:black"><?php echo number_format($no_of_ot_reasons_avg_107,2)?>%</strong> </div>
       </div>   
       <a href="#" style=""class="badge badge-warning"># Reasons : <?php echo $no_of_reasons_107?></a>
     </td>
</tr>

  <tr>
    <td style="width:10%">
        <table border="0">
            <tr>      
            <button class="btn btn-info">Approval delay</button>         
            </tr> 
        </table>
    </td>

    <td style="width:90%">
      <div class="progress">   
          <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="75" aria-valuemin="0"
           aria-valuemax="100" style="width:<?php echo $no_of_ot_reasons_avg_108?>%"><strong style="color:black"><?php echo number_format($no_of_ot_reasons_avg_108,2)?>%</strong> </div>
      </div>       
    <a href="#" style=""class="badge badge-primary"># Reasons : <?php echo $no_of_reasons_108?></a>
   </td>
</tr>


 <tr>
    <td style="width:10%">
          <table>  
              <tr>      
                <button class="btn btn-warning">Power off</button>         
              </tr> 
          </table>
    </td>

    <td style="width:90%">
       <div class="progress">
          <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="75" aria-valuemin="0"
           aria-valuemax="100" style="width:<?php echo $no_of_ot_reasons_avg_109?>%"><strong style="color:black"><?php echo number_format($no_of_ot_reasons_avg_109,2)?>%</strong> </div>
       </div>   
       <a href="#" style=""class="badge badge-warning"># Reasons : <?php echo $no_of_reasons_109?></a>
     </td>
</tr>


<tr>
    <td style="width:10%">
        <table border="0">
            <tr>      
            <button class="btn btn-info">Machine presetting</button>         
            </tr> 
        </table>
    </td>

    <td style="width:90%">
      <div class="progress">   
          <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="75" aria-valuemin="0"
           aria-valuemax="100" style="width:<?php echo $no_of_ot_reasons_avg_110?>%"><strong style="color:black"><?php echo number_format($no_of_ot_reasons_avg_110,2)?>%</strong> </div>
      </div>       
    <a href="#" style=""class="badge badge-primary"># Reasons : <?php echo $no_of_reasons_110?></a>
   </td>
</tr>


 <tr>
    <td style="width:10%">
          <table>  
              <tr>      
                <button class="btn btn-warning">Operation training</button>         
              </tr> 
          </table>
    </td>

    <td style="width:90%">
       <div class="progress">
          <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="75" aria-valuemin="0"
           aria-valuemax="100" style="width:<?php echo $no_of_ot_reasons_avg_111?>%"><strong style="color:black"><?php echo number_format($no_of_ot_reasons_avg_111,2)?>%</strong> </div>
       </div>   
       <a href="#" style=""class="badge badge-warning"># Reasons : <?php echo $no_of_reasons_111?></a>
     </td>
</tr>

  <tr>
    <td style="width:10%">
        <table border="0">
            <tr>      
            <button class="btn btn-info">Focus training</button>         
            </tr> 
        </table>
    </td>

    <td style="width:90%">
      <div class="progress">   
          <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="75" aria-valuemin="0"
           aria-valuemax="100" style="width:<?php echo $no_of_ot_reasons_avg_112?>%"><strong style="color:black"><?php echo number_format($no_of_ot_reasons_avg_112,2)?>%</strong> </div>
      </div>       
    <a href="#" style=""class="badge badge-primary"># Reasons : <?php echo $no_of_reasons_112?></a>
   </td>
</tr>


 <tr>
    <td style="width:10%">
          <table>  
              <tr>      
                <button class="btn btn-warning">TL/GL training</button>         
              </tr> 
          </table>
    </td>

    <td style="width:90%">
       <div class="progress">
          <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="75" aria-valuemin="0"
           aria-valuemax="100" style="width:<?php echo $no_of_ot_reasons_avg_113?>%"><strong style="color:black"><?php echo number_format($no_of_ot_reasons_avg_113,2)?>%</strong> </div>
       </div>   
       <a href="#" style=""class="badge badge-warning"># Reasons : <?php echo $no_of_reasons_113?></a>
     </td>
</tr>


<tr>
    <td style="width:10%">
        <table border="0">
            <tr>      
            <button class="btn btn-info">Size set</button>         
            </tr> 
        </table>
    </td>

    <td style="width:90%">
      <div class="progress">   
          <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="75" aria-valuemin="0"
           aria-valuemax="100" style="width:<?php echo $no_of_ot_reasons_avg_114?>%"><strong style="color:black"><?php echo number_format($no_of_ot_reasons_avg_114,2)?>%</strong> </div>
      </div>       
    <a href="#" style=""class="badge badge-primary"># Reasons : <?php echo $no_of_reasons_114?></a>
   </td>
</tr>


<tr>
    <td style="width:10%">
        <table border="0">
            <tr>      
            <button class="btn btn-warning">Final Inspection</button>         
            </tr> 
        </table>
    </td>

    <td style="width:90%">
      <div class="progress">   
          <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="75" aria-valuemin="0"
           aria-valuemax="100" style="width:<?php echo $no_of_ot_reasons_avg_115?>%"><strong style="color:black"><?php echo number_format($no_of_ot_reasons_avg_115,2)?>%</strong> </div>
      </div>       
    <a href="#" style=""class="badge badge-warning"># Reasons : <?php echo $no_of_reasons_115?></a>
   </td>
</tr>


 <tr>
    <td style="width:10%">
          <table>  
              <tr>      
                <button class="btn btn-info">Material Quality issues</button>         
              </tr> 
          </table>
    </td>

    <td style="width:90%">
       <div class="progress">
          <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="75" aria-valuemin="0"
           aria-valuemax="100" style="width:<?php echo $no_of_ot_reasons_avg_116?>%"><strong style="color:black"><?php echo number_format($no_of_ot_reasons_avg_116,2)?>%</strong> </div>
       </div>   
       <a href="#" style=""class="badge badge-primary"># Reasons : <?php echo $no_of_reasons_116?></a>
     </td>
</tr>

  <tr>
    <td style="width:10%">
        <table border="0">
            <tr>      
            <button class="btn btn-warning">New team members training</button>         
            </tr> 
        </table>
    </td>

    <td style="width:90%">
      <div class="progress">   
          <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="75" aria-valuemin="0"
           aria-valuemax="100" style="width:<?php echo $no_of_ot_reasons_avg_117?>%"><strong style="color:black"><?php echo number_format($no_of_ot_reasons_avg_117,2)?>%</strong> </div>
      </div>       
    <a href="#" style=""class="badge badge-warning"># Reasons : <?php echo $no_of_reasons_117?></a>
   </td>
</tr>


<tr>
    <td style="width:10%">
        <table border="0">
            <tr>      
            <button class="btn btn-info">Construction</button>         
            </tr> 
        </table>
    </td>

    <td style="width:90%">
      <div class="progress">   
          <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="75" aria-valuemin="0"
           aria-valuemax="100" style="width:<?php echo $no_of_ot_reasons_avg_118?>%"><strong style="color:black"><?php echo number_format($no_of_ot_reasons_avg_118,2)?>%</strong> </div>
      </div>       
    <a href="#" style=""class="badge badge-primary"># Reasons : <?php echo $no_of_reasons_118?></a>
   </td>
</tr>


 <tr>
    <td style="width:10%">
          <table>  
              <tr>      
                <button class="btn btn-warning">Machine service</button>         
              </tr> 
          </table>
    </td>

    <td style="width:90%">
       <div class="progress">
          <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="75" aria-valuemin="0"
           aria-valuemax="100" style="width:<?php echo $no_of_ot_reasons_avg_119?>%"><strong style="color:black"><?php echo number_format($no_of_ot_reasons_avg_119,2)?>%</strong> </div>
       </div>   
       <a href="#" style=""class="badge badge-warning"># Reasons : <?php echo $no_of_reasons_119?></a>
     </td>
</tr>

  <tr>
    <td style="width:10%">
        <table border="0">
            <tr>      
            <button class="btn btn-info">Special Reasons</button>         
            </tr> 
        </table>
    </td>

    <td style="width:90%">
      <div class="progress">   
          <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="75" aria-valuemin="0"
           aria-valuemax="100" style="width:<?php echo $no_of_ot_reasons_avg_120?>%"><strong style="color:black"><?php echo number_format($no_of_ot_reasons_avg_120,2)?>%</strong> </div>
      </div>       
    <a href="#" style=""class="badge badge-primary"># Reasons : <?php echo $no_of_reasons_120?></a>
   </td>
</tr>




           <!-- //////////////////   -->   
            </td>
        </tr>  















  
<!-- third colo -->

</tr>


</table>







            </div>
            <div class="card-footer small text-muted">Updated</div>
          </div>




