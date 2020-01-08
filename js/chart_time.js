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