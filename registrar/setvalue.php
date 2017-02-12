
<?php   include('dbcon.php'); ?>
<?php include('session.php'); ?>
<?php



$a = $_POST['id'];
//	$b ==  $_POST['roll'];
	
	
	


if($a=="A+")
 
		echo json_encode('4.00');
		
elseif($a=="A")
 
		echo json_encode('3.75');		
		
		
elseif($a=="A-")
 
		echo json_encode('3.50');		
		
elseif($a=="B+")
 
		echo json_encode('3.25');		
		
elseif($a=="B")
 
		echo json_encode('3.00');		
		
elseif($a=="B-")
 
		echo json_encode('2.75');		
		
elseif($a=="C+")
 
		echo json_encode('2.50');		
		
elseif($a=="C")
 
		echo json_encode('2.25');

		
elseif($a=="D")
 
		echo json_encode('2.00');		
				
		
else
 
		echo json_encode('0');		
				
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
 
 


?>