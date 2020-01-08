       <!-- '".$row_choose_frame["frame_no"]."' -->

            <table class="table table-dark" id="workers-list" style="margin-top:none;">
<tbody>


           <?php
                       include('connection.php');

                       if(isset($_POST["btnsearch"]))
                       {

                       //$frame_no_hide = $_POST["frame_no_hide"];
                
                       $sql_show_list = "SELECT rf.frame_no as 'frame_no',rf.frame_by,rf.req_date as 'req_date',rf.start_time as 'start_time',
                       rf.end_time as 'end_time',ed.status as 'status',ed.epf_no as 'epf_no',ed.name as 'name',
                       ed.start_location as 'start_location',ed.end_location as 'end_location' ,ed.frame_no
                       FROM request_frame rf,emp_details ed WHERE rf.frame_no = ed.frame_no 
                       AND ed.frame_no = '{$search_frame}'  ";

                       $qry_show_list=mysqli_query($con,$sql_show_list);

                       while($row_show_list=mysqli_fetch_array($qry_show_list))
                       {
            ?>

           <tr id="tbl_list">

               <td><?php echo $row_show_list["epf_no"];?></td>
               <td><?php echo $row_show_list["name"];?></td>
               <td><?php echo $row_show_list["status"];?></td>
               <td><?php echo $row_show_list["req_date"];?></td>
               <td><?php echo $row_show_list["start_time"];?> - <?php echo $row_show_list["end_time"];?> </td>
               <td><?php echo $row_show_list["start_location"];?> - <?php echo $row_show_list["end_location"];?> </td>
                            
               <td>
           
                     <button class="btn btn-danger" style="border-radius:50px;" name="btndelete"><i class="fa fa-trash" aria-hidden="true"></i></button>
                       <!-- <button class="btn btn-primary" style="border-radius:50px;"  ><i class="fa fa-pen" aria-hidden="true"></i></button> -->
               <input type="hidden" name="hidden_work_no" value="<?php echo $row_show_list["emp_no"];?>">     


               </td>
           </tr>

           
           <?php
               }
            }
           ?>
            
</tbody>
</table>  
           