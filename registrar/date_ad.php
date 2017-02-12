<?php   include('dbcon.php'); ?>
<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_dasboard.php'); ?>

<?php
require_once('calendar/classes/tc_calendar.php');
?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="calendar/calendar.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="calendar/calendar.js"></script>
<script type="text/javascript" src="STI_grade_inquiry/js/jquery-1.11.2.min.js"></script> 
<style type="text/css">
body, input, select { font-size: 13px; font-family: "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", "DejaVu Sans", "Verdana", sans-serif; }

pre { font-size: 13px; font-family: "Consolas", "Menlo", "Monaco", "Lucida Console", "Liberation Mono", "DejaVu Sans Mono", "Bitstream Vera Sans Mono", "Courier New", monospace, serif; background-color: #FFFFCC; padding: 5px 5px 5px 5px; }
pre .comment { color: #008000; }
pre .builtin { color: #FF0000; }
</style>
</head>

<body>



<div class="container">
		<div class="margin-top">
			<div class="row">
				
				<div class="span12">
				
				</div>
				<div class="span2">
					
				</div>
				<div class="span10">
			
				          
                                                                
                                                                                                                     
                                  <form name="form1" method="post" action="">
  

 
    

 
  
 
  
  <ul>
   
  
  <p class="largetxt"><b>Choose Date For Add/Drop Course Registration Duration</b></p>
  </br>
  From:
  <?php
					$thisweek = date('W');
					$thisyear = date('Y');

					$dayTimes = getDaysInWeek($thisweek, $thisyear);
					//----------------------------------------

					$date1 = date('Y-m-d', $dayTimes[0]);
					$date2 = date('Y-m-d', $dayTimes[(sizeof($dayTimes)-1)]);

					function getDaysInWeek ($weekNumber, $year, $dayStart = 1) {
					  // Count from '0104' because January 4th is always in week 1
					  // (according to ISO 8601).
					  $time = strtotime($year . '0104 +' . ($weekNumber - 1).' weeks');
					  // Get the time of the first day of the week
					  $dayTime = strtotime('-' . (date('w', $time) - $dayStart) . ' days', $time);
					  // Get the times of days 0 -> 6
					  $dayTimes = array ();
					  for ($i = 0; $i < 7; ++$i) {
						$dayTimes[] = strtotime('+' . $i . ' days', $dayTime);
					  }
					  // Return timestamps for mon-sun.
					  return $dayTimes;
					}


				  $myCalendar = new tc_calendar("date3", true, false);
				  $myCalendar->setIcon("calendar/images/iconCalendar.gif");
				  $myCalendar->setDate(date('d', strtotime($date1)), date('m', strtotime($date1)), date('Y', strtotime($date1)));
				  $myCalendar->setPath("calendar/");
				  $myCalendar->setYearInterval(2015, 2030);
				  //$myCalendar->dateAllow('2009-02-20', "", false);
				  $myCalendar->setAlignment('left', 'bottom');
				  $myCalendar->setDatePair('date3', 'date4', $date2);
				  //$myCalendar->setSpecificDate(array("2011-04-01", "2011-04-04", "2011-12-25"), 0, 'year');
				  $myCalendar->writeScript();
				  ?>
  to
  <?php
				  $myCalendar = new tc_calendar("date4", true, false);
				  $myCalendar->setIcon("calendar/images/iconCalendar.gif");
				  $myCalendar->setDate(date('d', strtotime($date2)), date('m', strtotime($date2)), date('Y', strtotime($date2)));
				  $myCalendar->setPath("calendar/");
				  $myCalendar->setYearInterval(2015, 2030);
				  //$myCalendar->dateAllow("", '2009-11-03', false);
				  $myCalendar->setAlignment('left', 'bottom');
				  $myCalendar->setDatePair('date3', 'date4', $date1);
				  //$myCalendar->setSpecificDate(array("2011-04-01", "2011-04-04", "2011-12-25"), 0, 'year');
				  $myCalendar->writeScript();
				  ?>
  <input type="button" name="button2" id="button2" value="Set the value" onClick="trackIt(this.form.date3.value,this.form.date4.value);">
  
</br></br></br><p class="largetxt" style="background-color:#FF0000"><b><marquee behavior="slide">Date Of Previous Add/Drop</marquee></b></p>

<?php 

$uery = mysql_query("SELECT `to`, `from` FROM `date_ad`") or die(mysql_error()); 

$row = mysql_fetch_array($uery);
 
 echo "(".$row['from'].")    ";
 
 echo "        To      ";
 
 echo "      (".$row['to'].")";
 
 ?>


    	
    </li>
</ul>
</form>
                
							
				</div>
			
			
				
				
			</div>
		</div>
    </div>



<script>



 function trackIt(a,b){
 
 $a=a;
 $b=b;
 
 $.ajax({
        type: "POST",
        url: "setdate1.php",
       data: {id: $a, roll: $b},
	     dataType: "json",
        success: function(data) {
            alert("Registration Duration saved");
        }
    });
   
}

</script>

</body>
</html>
