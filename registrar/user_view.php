<?php   include('dbcon.php'); ?>
<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_dasboard.php'); ?>




<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="refresh" content="20" > 

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
			<?php include('grading1.php'); ?>
	                                 
				                               
                                                                                                                     
                  <div class="span3">
			
                  <?php
// Make a MySQL Connection
echo '<font size="2"'." face='Arial' color='blue'>";
$query = "SELECT status, COUNT(student_no) FROM students GROUP BY status"; 
	 
$result = mysql_query($query) or die(mysql_error());

// Print out result
while($row = mysql_fetch_array($result)){

if($row['status']=='active'){$rt="Approved";

echo "<br />";

echo '<span class="Excellent">There are '. $row['COUNT(student_no)'] .' '. $rt .' Students</span>.            <img src="upload/ok1.png" />';
echo "<br />";

}

else {$rt="Not Approved";
echo "<br />";
echo '<span class="fair">There are '. $row['COUNT(student_no)'] .' '. $rt .' Students</span>.            <img src="upload/ok.png" />';

echo "<br />";
}
	
	
	
	
	
	
}




$qu = "SELECT year_level, COUNT(student_no) FROM students where status='active' GROUP BY year_level"; 
	 
$res = mysql_query($qu) or die(mysql_error());

// Print out result
while($row = mysql_fetch_array($res)){

echo "<br />";
	echo "There are   => ". $row['COUNT(student_no)'] ."   Students in ". $row['year_level'] ." Year";
	
		
	
	
	
	echo "<br />";
}






?>     
 
			</div>                                 
                  </div>               
                
							
				</div>
			
			
				
				
			</div>
            
            
		</div>
    </div>




</body>
</html>
