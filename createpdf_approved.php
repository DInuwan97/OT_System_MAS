
<?php  
 function fetch_data()  
 {  
      $output = '';  
      include('connection.php');
      $id=$_GET['id'];

      $sql_security_confirm_frame = "SELECT * FROM confirm_frame WHERE frame_no = '{$id}'";
      $qry_security_confirm_frame = mysqli_query($con,$sql_security_confirm_frame);
   
      if($row_security_confirm_frame = mysqli_fetch_array($qry_security_confirm_frame)){
        if($row_security_confirm_frame["transport_status"] == 'Pending' || $row_security_confirm_frame["ot_final_status"] == 'Pending')
        {
          echo'
         <script>
          window.location = "transport-summary.php"
         </script>
           ';
        }
        
      }

      $sql = "SELECT * FROM request_frame rf,confirm_frame cf,cost cs,stakeholders st WHERE rf.frame_no = $id AND rf.frame_no = cf.frame_no AND 
      cf.frame_no = cs.frame_no AND rf.frame_by = st.username AND cf.ot_final_status = 'Accept' AND cf.transport_status = 'Accept' AND cf.manager_status = 'Accept'
      AND cs.manager_status = 'Accept'";  


      $result = mysqli_query($con,$sql);  
      if($row = mysqli_fetch_array($result))  
      { 
        
             
              
              
             
 


        $total_budjet =  $row["utility_cost"] + $row["emp_cost"] + $row["transport_cost"] + $row["sew_cost"];
        //$total_budjet_formated = round_to_2dp($total_budjet);

 
      $output .= '<tr>  
                          <td>Frame Number </td>  
                          <td>'.$row["frame_no"].'</td>                         
                  </tr> 
                  <tr>  
                          <td>Request By </td>  
                          <td>'.$row["frame_by"].' @ '.$row["added_date"].'</td>                         
                  </tr>
                  <tr>  
                          <td>Required Date </td>  
                          <td>'.$row["req_date"].'</td>                         
                  </tr>
                  <tr>  
                          <td>OT Period </td>  
                          <td>'.$row["start_time"].' - '.$row["end_time"].'</td>                         
                  </tr>
                  <tr>  
                          <td>Department</td>  
                          <td>'.$row["department"].'</td>                         
                  </tr> 
                  <tr>  
                          <td>Module Number </td>  
                          <td>'.$row["model_num"].'</td>                         
                  </tr>
                  <tr>  
                          <td>Number of Staff </td>  
                          <td>'.$row["staff_members"].'</td>                         
                  </tr>

                  <tr>  
                          <td>Number of Workers </td>  
                          <td>'.$row["worker_members"].'</td>                         
                  </tr>

                  <tr>  
                        <td>Utility Resources</td>  
                        <td>'.$row["utility"].'</td>                         
                 </tr>

                 <tr>  
                        <td>No:of Sewing Machines</td>  
                        <td>'.$row["vsm_num"].'</td>                         
                 </tr>

                 
                 <tr>  
                        <td>Sewing Machine Cost</td>  
                        <td>Rs : '.number_format($row["sew_cost"],2).'</td>                         
                 </tr>

                  <tr>  
                          <td>Utility Cost</td>  
                          <td>Rs : '.number_format($row["utility_cost"],2).'</td>                         
                  </tr>
                  <tr>  
                         <td>Employee Cost</td>  
                         <td>Rs : '.number_format($row["emp_cost"],2).'</td>                         
                  </tr>
                  <tr>  
                         <td>Transport Cost</td>  
                         <td>Rs : '.number_format($row["transport_cost"],2).'</td>                         
                  </tr>
                  <tr>  
                        <td>Total Cost</td>  
                        <td>Rs : '.number_format($total_budjet,2).'</td>                         
                  </tr>
                  <tr>  
                         <td> Approved By <br> (Name/Designation/Signature)</td>  
                         <td style="height:80px"> <img src="images/approval.jpg" alt="" style="width:80px;height:80px;" > </td>                         
                  </tr>

                  <br> <br> <br> <br> <br>

                  <tr>
                  <div class="footer1" style="position:relative;left:0;font-size:10px;margin-bottom: 0;width: 100%;background-color:white; text-align:bottom;">
                  <p>Copyrights © Dinuwan Kalubowila | System Designed by THIRTYFIRST LANKA</p>
                   </div>
                  </tr>

                       
                     
             




                          ';  
      }  
      return $output;  
 }  
 if(isset($_POST["create_pdf"]))  
 {  
    require_once('tcpdf/tcpdf.php');  
    $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
    $obj_pdf->SetCreator(PDF_CREATOR);  
    $obj_pdf->SetTitle("Factory OT System - MAS KREEDA SYNERGY - Avissawella");  
    $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
    $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
    $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
    $obj_pdf->SetDefaultMonospacedFont('helvetica');  
    $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
    $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '5', PDF_MARGIN_RIGHT);  
    $obj_pdf->setPrintHeader(false);  
    $obj_pdf->setPrintFooter(false);  
    $obj_pdf->SetAutoPageBreak(TRUE, 10);  
    $obj_pdf->SetFont('helvetica', '', 12);  
    $obj_pdf->AddPage();  
      $content = '';  
      $content .= '  
<center>
      <table>

        <tr>
          <td><img src="images/MAS_logo.png" alt="" style="width:200px;height:40px;" ></td>
          <td style="margin-top:20spx;"><center><h1 style="font-size:25px;"> SMART SYNERGY</h1></center></td>
        </tr>

      </table>
</center>      


     
      <h3 align="center">Factory OT System - MAS KREEDA SYNERGY - Avissawella</h3>
      <h4 align="center">OT Approval Report</h4> 
      <table border="1" cellspacing="0" cellpadding="5">  
           
      ';  
      $content .= fetch_data();  
      $content .= '</table>';  
      $obj_pdf->writeHTML($content);  
      ob_end_clean();
      $obj_pdf->Output('OT Approval Report.pdf', 'I');  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Factory OT System - MAS KREEDA SYNERGY - Avissawella </title>  
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
                
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:700px;">  
           <h3 align="center">Factory OT System - MAS KREEDA SYNERGY - Avissawella</h3><br /> 
           <h4 align="center">OT Approval Report</h4> 
                <div class="table-responsive">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="40%"></th>  
                               <th width="40%"></th>  
                      
                          </tr>  
                     <?php  
                     echo fetch_data();  
                     ?>  
                     </table>  
                     <br />  
                     <form method="post">  
                          <input type="submit" name="create_pdf" class="btn btn-danger" value="Create PDF" />  
                     </form>  
                </div>  
           </div>  
      </body>  
 </html>  