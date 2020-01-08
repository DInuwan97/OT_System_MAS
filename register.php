

  <body class="bg-dark">


    <div class="container" >

      <div class="card card-register mx-auto mt-5">
        <div class="card-header">OT Workers Request Form</div>
        <div class="card-body" style=" overflow:auto;">


<form method="POST" action="" onsubmit="return post();"  >

<input type="hidden" value="<?php echo $_SESSION["uname"] ?>" name="username">

            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
  
            <div class="form-group">
                <div class="input-group date" id="datetimepicker4" data-target-input="nearest">
          

                    <input type="text" placeholder="Required Date"  
                    style="width:200px; cursor:pointer"  class="form-control" data-target="#datetimepicker4" 
                    required="" name="req_date">

       

                    <div class="input-group-append" style="cursor:pointer" data-target="#datetimepicker4" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                    </div>
                    
                </div>
            </div>
       
        <script type="text/javascript">
            $(function () {
                $('#datetimepicker4').datetimepicker({
                    format: 'L'
                });
            });
        </script>

      
              </div> 
              <!-- end of col -->

    



            </div>
            <!-- end of row -->



       
  




        



        

            <!-- <div class="form-group">

              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="required">
                <label for="inputEmail">Email address</label>
              </div>

            </div> -->



            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">

                  <div class="form-group">
                        <div class="input-group date" id="datetimepicker3" data-target-input="nearest">
                            <input type="text" onmousedown="mDown()" onkeyup="myFunction()" onclick="uncheck()" class="form-control datetimepicker-input" data-target="#datetimepicker3" id="start_time12"  placeholder="Start Time" required="" name="start_time">
                        <div class="input-group-append" data-target="#datetimepicker3" data-toggle="datetimepicker">
                            <div class="input-group-text" ><i  onmousedown="mDown()"  onmousedown="myFunction()" class="fa fa-clock"></i></div>
                        </div>
                        </div>

                  </div>
  
                <script type="text/javascript">
                    $(function () {
                        $('#datetimepicker3').datetimepicker({
                            format: 'LT'
                          
                     });
                  });
                </script>



                </div>

                <div class="col-md-6">
           
                   
                <div class="form-group">
                    <div class="input-group date" id="datetimepicker5" data-target-input="nearest">
                        <input type="text"  onmousedown="mDown()"  onkeyup="myFunction()" onclick="uncheck()" class="form-control datetimepicker-input" data-target="#datetimepicker5" id="end_time12"  placeholder="End Time" required="" name="end_time">
                            <div class="input-group-append" data-target="#datetimepicker5" data-toggle="datetimepicker">
                                <div class="input-group-text"><i  onmousedown="mDown()"  onmousedown="myFunction()" class="fa fa-clock"></i></div>
                            </div>
                    </div>
                </div>
  
                <script type="text/javascript">
                        $(function () {
                            $('#datetimepicker5').datetimepicker({
                            format: 'LT'
                         });
                        });
                </script>
               
                </div>
              </div>


            </div>

                 

            
  
         <div class="form-group">
              <div class="form-row">


                        
        



                <div class="col-md-6">                    
                    <div class="form-label-group">
                        <input type="number" name="vsm_no" id="vsm_no" class="form-control" placeholder="VSM Number:" required="">
                        <label for="vsm_no">No:of Sewing Machines</label>
                    </div>
                </div>

                            <br>
                                  
            <div class="col-md-6">
           
                    <div class="form-label-group">
                        <input type="number" name="model_no" id="model_no"  class="form-control" placeholder="VSM Number:" required="">
                        <label for="model_no">Module Number</label>
                    </div>         
            </div>

                        
                        <br>

            <div class="col-md-6">
                    <div class="form-label-group">
                        <input type="number" id="no_of_staff" name="no_of_staff" style="margin-top:2px"  class="form-control" placeholder="Number of Staff" required="">
                        <label for="no_of_staff">Number of Staff</label>          
                    </div>
            </div>

                        
         
                            <br>


                <div class="col-md-6">
                    <div class="form-label-group">
                        <input type="number" name="no_of_workers"   style="margin-top:2px" id="no_of_workers" class="form-control" placeholder="Number of Employees" required="">
                        <label for="no_of_workers">Number of Workers</label>
                    </div>
                
                            
                            <br>
              
                    </div>
              </div>
           


                    <!-- <div class="form-group">
                    <label for="comment">Reason for the OT Request</label>
                        <textarea class="form-control" rows="5" name="reason" id="comment"></textarea>
  
                    </div> -->


                    <div class="input-group mb-3" >
                                <div class="input-group-prepend" style="margin-left:8px;">
                                    <label class="input-group-text" for="icomment">OT Reason</label>
                                </div>
                                <select class="custom-select" name="reason"  id="comment" required="" style="margin-right:8px; height:40px;">
                                    <option value="">Select the Reason for requsting OT</option>
                                    <option value="100">100 - Plan OT</option>  
                                    <option value="101">101 - Service capacity issues</option>      
                                    <option value="102">102 - Unplan style</option> 
                                    <option value="103">103 - QCO failures</option>  
                                    <option value="104">104 - Due to Machine BD</option>  
                                    <option value="105">105 - Production behind</option>                
                                    <option value="106">106 - Due to Material delay</option>  
                                    <option value="107">107 - High absenteeism</option>                
                                    <option value="108">108 - Approval delay</option>
                                    <option value="109">109 - Power off</option>                    
                                    <option value="110">110 - Machine presetting</option>    
                                    <option value="111">111 - Operation training</option>                
                                    <option value="112">112 - Focus training</option>
                                    <option value="113">113 - TL/GL training</option>  
                                    <option value="114">114 - Size set</option>   
                                    <option value="115">115 - Final Inspection</option>                 
                                    <option value="116">116 - Material Quality issues</option>                                   
                                    <option value="117">117 - New team members training</option>                
                                    <option value="118">118 - Construction</option>                
                                    <option value="119">119 - Machine service</option>                
                                    <option value="120">120 - Special Reasons</option>                
                               </select>
                		</div>



                         <div class="form-group">
              <div class="form-row">

                <div class="col-md-6">

            
                <div class="form-check">
                <input class="form-check-input" style=" zoom: 1.5;" type="checkbox" id="gridCheck1" name="ch[]" value="Boiler"  onclick="myFunction()">
                <label class="form-check-label" for="gridCheck1" style="font-size:17px;">
                    Boiler
                </label>
                </div>

                 <div class="form-check">
                <input class="form-check-input" style=" zoom: 1.5;" type="checkbox" id="gridCheck2" name="ch[]" value="Mini Boiler" onclick="myFunction()">
                <label class="form-check-label" for="gridCheck2" style="font-size:17px;">
                   Mini Boiler
                </label>
                </div>

                <div class="form-check">
                <input class="form-check-input" style=" zoom: 1.5;" type="checkbox" id="gridCheck5" name="ch[]" value="AC" onclick="myFunction()">
                <label class="form-check-label" for="gridCheck5" style="font-size:17px;">
                   A/C
                </label>
                </div>

<br>

                  <div class="form-check">
                <input class="form-check-input" style=" zoom: 2.5;" type="checkbox" id="gridCheck6" required=""  value="Confirm" onclick="myFunction()">
                <label class="form-check-label" for="gridCheck6" style="font-size:20px;margin-left:15px;margin-top:5px">
                   <strong>Confirm the Request</strong>  
                </label>
                </div>
              

            
                </div>




                <div class="col-md-6">

                            
                <div class="form-check">
                <input class="form-check-input" style=" zoom: 1.5;" type="checkbox" id="gridCheck3" name="ch[]" value="Compressor" onclick="myFunction()">
                <label class="form-check-label" for="gridCheck3" style="font-size:17px;">
                    Compressor
                </label>
                </div>

                <div class="form-check">
                <input class="form-check-input" style=" zoom: 1.5;" type="checkbox" id="gridCheck4" name="ch[]" value="Mini Compressor" onclick="myFunction()">
                <label class="form-check-label" for="gridCheck4" style="font-size:17px;">
                   Mini Compressor
                </label>
                </div>



                </div>


            </div>
        </div>






<input type="hidden" id="boiler" name="boiler" value=0>
<!-- </br> -->
<input type="hidden" id="miniboiler" name="miniboiler" value=0>
<!-- </br> -->
<input type="hidden" id="compreasure" name="compreasure" value=0>
<!-- </br> -->
<input type="hidden" id="minicompreasure" name="minicompreasure" value=0>
<!-- </br> -->
<input type="hidden" id="ac" name="ac" value=0>
<!-- <br>
<br> -->
<input type="hidden" id="start_time24" name="start_time24">
<!-- <br> -->
<input type="hidden" id="end_time24" name="end_time24">
<!-- <br> -->
<input type="hidden" id="difminitues" name="difminitues" onkeyup="myFunction()">
<!-- <br> -->
<input type="hidden">
<!-- <br> -->
<input type="hidden">
<!-- <br> -->



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

<script>
function myFunction() {


    var checkBox1 = document.getElementById("gridCheck1");
        var checkBox2 = document.getElementById("gridCheck2");
    var checkBox3 = document.getElementById("gridCheck3");
        var checkBox4 = document.getElementById("gridCheck4");
    //var checkBox5 = document.getElementById("myCheck5");    
    var checkBox5 = document.getElementById("gridCheck5");  

    var time12_format_start = document.getElementById("start_time12").value;
    var time12_format_end = document.getElementById("end_time12").value;
    
    var time12_start = moment(time12_format_start, "h:mm A").format("HH:mm");
	document.getElementById("start_time24").value = time12_start;

	var time12_end = moment(time12_format_end, "h:mm A").format("HH:mm");
    document.getElementById("end_time24").value = time12_end;

        if(time12_format_end == "12:00 AM"){
                alert("If you want to exceed 12:00AM,please add it it into 02 days")
        }


    
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
   
   
   
      var x = <?php echo $row_resources["boiler"]?>;
      var y = <?php echo $row_resources["miniboiler"]?>;
      var a = <?php echo $row_resources["compreasure"]?>;
      var b = <?php echo $row_resources["minicompreasure"]?>;
      var c = <?php echo $row_resources["ac"]?>;
   
   
    if (checkBox1.checked == true ){    	
    	 document.getElementById("boiler").value = duration_boiler;
    }else{
    	 document.getElementById("boiler").value = 0;
    }
    
    
    if (checkBox2.checked == true){        
          document.getElementById("miniboiler").value = duration_miniboiler;
    }else{
    	  document.getElementById("miniboiler").value = 0;
    }
    
    if (checkBox3.checked == true){    	
    	 document.getElementById("compreasure").value = duration_compreasure;
    }else{
    	 document.getElementById("compreasure").value = 0;
    }
    
  
    if (checkBox4.checked == true){        
          document.getElementById("minicompreasure").value =duration_minicompreasure ;
    }else{
    	document.getElementById("minicompreasure").value = 0;
    }
        
    if (checkBox5.checked == true){        
          document.getElementById("ac").value = duration_ac;
    } else{
    	 document.getElementById("ac").value = 0;
    }


    
    
       
}


function uncheck() {





document.getElementById("gridCheck1").checked = false;
document.getElementById("gridCheck2").checked = false;
document.getElementById("gridCheck3").checked = false;
document.getElementById("gridCheck4").checked = false;
document.getElementById("gridCheck5").checked = false;
document.getElementById("gridCheck6").checked = false;


document.getElementById("boiler").checked = 0;
document.getElementById("miniboiler").checked = false;
document.getElementById("compreasure").checked = false;
document.getElementById("minicompreasure").checked = false;
document.getElementById("ac").checked = false;

    var x = <?php echo $row_resources["boiler"]?>;
    var y = <?php echo $row_resources["miniboiler"]?>;
    var a = <?php echo $row_resources["compreasure"]?>;
    var b = <?php echo $row_resources["minicompreasure"]?>;
    var c = <?php echo $row_resources["ac"]?>;
 
 
  if (checkBox1.checked == true ){    	
       document.getElementById("boiler").value = duration_boiler;
  }else{
       document.getElementById("boiler").value = 0;
  }
  
  
  if (checkBox2.checked == true){        
        document.getElementById("miniboiler").value = duration_miniboiler;
  }else{
        document.getElementById("miniboiler").value = 0;
  }
  
  if (checkBox3.checked == true){    	
       document.getElementById("compreasure").value = duration_compreasure;
  }else{
       document.getElementById("compreasure").value = 0;
  }
  

  if (checkBox4.checked == true){        
        document.getElementById("minicompreasure").value =duration_minicompreasure ;
  }else{
      document.getElementById("minicompreasure").value = 0;
  }
      
  if (checkBox5.checked == true){        
        document.getElementById("ac").value = duration_ac;
  } else{
       document.getElementById("ac").value = 0;
  }



}

function mDown() {
    document.getElementById("boiler").value = 0;
    document.getElementById("miniboiler").value = 0;
    document.getElementById("compreasure").value = 0;
    document.getElementById("minicompreasure").value = 0;
    document.getElementById("ac").value = 0;

    
document.getElementById("gridCheck1").checked = false;
document.getElementById("gridCheck2").checked = false;
document.getElementById("gridCheck3").checked = false;
document.getElementById("gridCheck4").checked = false;
document.getElementById("gridCheck5").checked = false;
document.getElementById("gridCheck6").checked = false;

}

function mUp() {
    document.getElementById("boiler").value = 0;
    document.getElementById("miniboiler").value = 0;
    document.getElementById("compreasure").value = 0;
    document.getElementById("minicompreasure").value = 0;
    document.getElementById("ac").value = 0;

    
document.getElementById("gridCheck1").checked = false;
document.getElementById("gridCheck2").checked = false;
document.getElementById("gridCheck3").checked = false;
document.getElementById("gridCheck4").checked = false;
document.getElementById("gridCheck5").checked = false;
document.getElementById("gridCheck6").checked = false;
}
</script>




<?php
    }
}
    }


?>


                   <center><button name="request_frame" class="btn btn-info btn-lg">Add OT Frame</button></center>

                        
    </div>
                 

</form>                    
                 
            










            <!-- <a class="btn btn-primary btn-block" href="login.html">Register</a> -->
        

          <!-- <div class="text-center">
            <a class="d-block small mt-3" href="login.html">Login Page</a>
            <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
          </div> -->

        </div>
       
      </div>   

</div>


<!-- select request js  -->






<!-- select request js  -->










                       <!-- -------------------------------2nd form------------------------------------ -->

                 <script>
                                    
//                     $(document).ready( function(){
//                     $('#auto').load('load.php');
//                     refresh();
//                     });
                    
//                     function refresh()
//                     {
//                         setTimeout( function() {
//                         $('#auto').load('load.php').fadeIn('slow');
//                         refresh();
//                         }, 200);
//                     }                  
//                 </script>



<?php
    include('connection.php');
    $sql_last_frame_no = "SELECT frame_no FROM keygen ORDER BY frame_no DESC LIMIT 1";
    $qry_last_frame_no = mysqli_query($con,$sql_last_frame_no);
    
    $row_last_frame_no = mysqli_fetch_array($qry_last_frame_no);  
?>





<?php
       include('connection.php');

       if(isset($_POST["request_frame"])){


        $sql_frame_key_gen = "INSERT INTO keygen (added_date)VALUES('Added')";

        if(mysqli_query($con,$sql_frame_key_gen))
        {


 
            $req_date = $_POST["req_date"];
            $start_time = $_POST["start_time"];
            $end_time = $_POST["end_time"];
          

            $vsm_no = $_POST["vsm_no"];
            $model_no = $_POST["model_no"];

            $no_of_staff =  $_POST["no_of_staff"];
            $no_of_workers =  $_POST["no_of_workers"];

            $username = $_POST["username"];
            $no_of_hours = $_POST["difminitues"] / 60.0;

            $check = implode(',', $_POST['ch']);

            $start_time24 = $_POST["start_time24"];
            $end_time24 = $_POST["end_time24"];

            

            $reason = $_POST["reason"];


            $boiler = $_POST["boiler"];
            $miniboiler = $_POST["miniboiler"];
            $compreasure = $_POST["compreasure"];
            $minicompreasure = $_POST["minicompreasure"];
            $ac = $_POST["ac"];





            $sql_frame_req = "INSERT INTO request_frame
            (frame_no,start_time,end_time,req_date,vsm_num,model_num,frame_by,staff_members,worker_members,ot_hours,utility,added_date,start_time24,end_time24)VALUES
            ('".$row_last_frame_no["frame_no"]."' + 1,'$start_time','$end_time','$req_date','$vsm_no','$model_no','$username','$no_of_staff','$no_of_workers','$no_of_hours','$check',NOW(),'$start_time24','$end_time24')";

           if(mysqli_query($con, $sql_frame_req)){


                        $sql_add_reason = "INSERT INTO ot_reason (frame_no,reason)VALUES
                        ('".$row_last_frame_no["frame_no"]."' + 1,'$reason')";
                    
                            if(mysqli_query($con,$sql_add_reason)){
                                

                                $sql_ot_frame_confirmation = "INSERT INTO confirm_frame(frame_no,ot_final_status,transport_status,manager_status,ot_by,transport_by,ot_forward_time,tra_forward_time,utility_activation)VALUES
                                ('".$row_last_frame_no["frame_no"]."' + 1,'Pending','Pending','Pending','Pending','Pending','Pending','Pending','Pending')";
                        
                                if(mysqli_query($con,$sql_ot_frame_confirmation))
                                {
                                    
                                                   
                                    $total_utility_cost = $boiler + $miniboiler + $compreasure + $minicompreasure + $ac;
                        
                                    $sql_add_utility_cost = "INSERT INTO request_frame_resources(frame_no,boiler,mini_boiler,compreasure,mini_compreasure,ac)
                                    VALUES('".$row_last_frame_no["frame_no"]."' + 1,'$boiler','$miniboiler','$compreasure','$minicompreasure','$ac')";
                            
                                        if(mysqli_query($con,$sql_add_utility_cost)){

                                                                                        
                                                    $sql_final_cost = "INSERT INTO cost(frame_no,utility_cost,emp_cost,transport_cost,manager_status)VALUES
                                                    ('".$row_last_frame_no["frame_no"]."' + 1,'$total_utility_cost','Pending','Pending','Pending')";
                                            
                                                    if(mysqli_query($con,$sql_final_cost)){
                                                        echo '
                                                        <script>
                                                        window.location = "frame_list.php"
                                                     </script>
                                                        '; 
                                            
                                                    }
                                            
                                        }//end of inserting req:frame resources


                                    
                                }//end of inserting confirm frame



                            }//end of inserting reason
    
    
            }//end of inserting frame

        } //end of inserting
                         
            }
            else{
                die(mysqli_error($con));
                echo 'error';
            }
            

                 





?>













