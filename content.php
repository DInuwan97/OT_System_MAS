

<table class="table table-dark" id="workers-list" style="margin-top:none;">
<tbody>


<?php
    include('connection.php');
    $sql_show_list = "SELECT * FROM ot_workers";
    $qry_show_list=mysqli_query($con,$sql_show_list);

    while($row_show_list=mysqli_fetch_array($qry_show_list))
    {
?>

            <tr>

                <td><?php echo $row_show_list["epf_no"];?></td>
                <td><?php echo $row_show_list["name"];?></td>
                <td><?php echo $row_show_list["status"];?></td>
                <td><?php echo $row_show_list["start_time"];?> - <?php echo $row_show_list["end_time"];?> </td>
                <td><?php echo $row_show_list["req_date"];?></td>              
                <td>
                  
                
   
                <form action="" method="POST">
                        <button class="btn btn-danger" name="btndelete"><i class="fa fa-trash" aria-hidden="true"></i></button>
                        <button class="btn btn-primary"><i class="fa fa-pen" aria-hidden="true"></i></button>
                        <input type="hidden" name="hidden_work_no" value="<?php echo $row_show_list["work_no"];?>">
                </form>
                


                </td>

            </tr>




<?php
    }
?>

<?php
   // include('connection.php');
   if(isset($_POST["btndelete"]))
      {

       $sql_worker_delete = "DELETE * FROM ot_workers WHERE work_no = '".$_POST["hidden_work_no"]."'";
       if(mysqli_query($con,$sql_worker_delete))
       {
          echo'success';
       }
       else{
           echo 'erro';
       }

    }

?>








            
                  
                    </tbody>
</table>

  