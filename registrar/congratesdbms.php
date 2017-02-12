<?php   include('dbcon.php'); ?>
<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_dasboard.php'); ?>


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
			
				      <?php
						      
								 $msg=$_REQUEST['msg'];								
								if($msg==1)
								{
								   echo '<p>&nbsp;</p>
								   <p>&nbsp;</p>
								   <p>&nbsp;</p>
								   <p>&nbsp;</p>
								   <p>&nbsp;</p>
								   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">This Entry Has Already Entered</span><br><br><br>';	
								}
								else
								{
								echo"Congratulation 
								You've Successfully Inserted Grade Sheet of<br><br>"."Roll :: ". $_SESSION['roll']."<br><br><br>"."Year :: ".$_SESSION['year']."<br><br><br>"."Term :: ".$_SESSION['term']."<br><br>In On Line Course Registration System Data Base<br><br><br><br>";
}
?>						          <br><br>      
                                                                
                             
							
				</div>
			<p align="justify"><a href="res_students.php" class="btn btn-success"><i class="icon-plus"></i>&nbsp;Publish Another Result</a></p>	
			
				
				
			</div>
		</div>
    </div>





</body>
</html>
