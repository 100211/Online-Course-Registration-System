<?php include "dbcon.php";?>
<?php include('session.php'); ?>

<?php

	$req_id = $_POST['id'];
	$req_id1 = $_POST['id1'];
	$roll =  $_POST['roll'];

	$sql_one = "SELECT * from pre_req WHERE select_sub='$req_id'";
	$var_one = mysql_query($sql_one);
	$count_one = mysql_num_rows($var_one);

$sql_one1 = "SELECT * from pre_req1 WHERE select_sub='$req_id1'";
	$var_one1 = mysql_query($sql_one1);
	$count_one1 = mysql_num_rows($var_one1);

	if($count_one == 0){
	

	if($count_one1 == 1){
	
	
		while ($row1 = mysql_fetch_array($var_one1)){
			
			$course_no1 = $row1['req_sub'];
			
			
	
		}
		
		
		$query = "SELECT `title`, `unit` FROM subject WHERE subject_id='$req_id'";
		$req_data = mysql_query($query);
		$pro_data = mysql_fetch_array($req_data);
		$course_no = getCourseNoById($req_id);
		
		$qu11 = mysql_query("SELECT `subject_id` FROM `registration` WHERE `subject_id`='$course_no' and `student_no`='$roll' ");
		$res11 = mysql_num_rows($qu11);
		
		}
		else
		{
		
		$query = "SELECT `title`, `unit` FROM subject WHERE subject_id='$req_id'";
		$req_data = mysql_query($query);
		$pro_data = mysql_fetch_array($req_data);
		
		$course_no = getCourseNoById($req_id);
		//$quer = "SELECT COUNT(*) FROM   `result` where `student_id`='$roll' and `sub_code`='$course_no' and `Grade_Point`='0'";
	//	$req_dat = mysql_query($quer);
	//	$pro_dat = mysql_fetch_array($req_dat);
		}
		$qu = mysql_query("SELECT COUNT(*) as COUNTALL FROM   `result` where `student_id`='$session_id' and `sub_code`='$course_no' and `Grade_Point`='0'");
			
				while($got=mysql_fetch_array($qu)){
                                                $count = $got['COUNTALL'];
                                                                                }
		
		//$quer = mysql_query("SELECT COUNT(*) FROM   `result` where `student_id`='$roll' and `sub_code`='$course_no' and `Grade_Point`='0'");
		
		//$nu= mysql_num_rows($quer);
	
		

		if($count > 1){
		array_push($pro_data,'0','Re-Retake');}
		
		elseif($count == 1){
		array_push($pro_data,'0','Retake');}
		
		elseif($count_one1 == 1 && $res11 == 0){ //registration not
		
		
		array_push($pro_data,'0',' ',$course_no1);
		
		}
		
		elseif($count_one1 == 1 && $res11 > 0){ //regstration have
		
		
		array_push($pro_data,'0',' ','no');
		
		
		}
		
		else array_push($pro_data,'0');
		
		echo json_encode($pro_data);
	}else{
		$found = false;
		$course_no_g = array();
		while ($row = mysql_fetch_array($var_one)){
			
			$course_no = getCourseNoById($row['req_sub']);
			$count = getRetakeInfo($course_no,$roll);

			if($count){
				$course_no_g[] = $course_no;
				$found = true;
				
			            }

		                                                  }
														  
														  
														  
		if($found){
			$total_course=null;
		
		
			$total_course = implode(' , ', $course_no_g);
			$array = array( '1' =>'After passing the pre req =>   '.$total_course.'   <=course. You will be eligible to registered this course.', '2'=>'1');
			echo json_encode($array);
		}else{
		
		
		$sql_one1 = "SELECT * from pre_req1 WHERE select_sub='$req_id1'";
	$var_one1 = mysql_query($sql_one1);
	$count_one1 = mysql_num_rows($var_one1);
		
		
		if($count_one1 == 1){
	
	
		while ($row1 = mysql_fetch_array($var_one1)){
			
			$course_no1 = $row1['req_sub'];
			
			
	
		}
		
		$query = "SELECT `title`, `unit` FROM subject WHERE subject_id='$req_id'";
		$req_data = mysql_query($query);
		$pro_data = mysql_fetch_array($req_data);
		$course_no = getCourseNoById($req_id);
		
		$qu11 = mysql_query("SELECT `subject_id` FROM `registration` WHERE `subject_id`='$course_no' and `student_no`='$roll' ");
		$res11 = mysql_num_rows($qu11);
		}
		
		
		else
		{
		$query = "SELECT `title`, `unit` FROM subject WHERE subject_id='$req_id'";
		$req_data = mysql_query($query);
		$pro_data = mysql_fetch_array($req_data);
		
		$course_no = getCourseNoById($req_id); 
		//$quer = "SELECT COUNT(*) FROM   `result` where `student_id`='$roll' and `sub_code`='$course_no' and `Grade_Point`='0'";
	//	$req_dat = mysql_query($quer);
	//	$pro_dat = mysql_fetch_array($req_dat);
		}
		$qu = mysql_query("SELECT COUNT(*) as COUNTALL FROM   `result` where `student_id`='$session_id' and `sub_code`='$course_no' and `Grade_Point`='0'");
			
				while($got=mysql_fetch_array($qu)){
                                                $count = $got['COUNTALL'];
                                                                                }
		
		//$quer = mysql_query("SELECT COUNT(*) FROM   `result` where `student_id`='$roll' and `sub_code`='$course_no' and `Grade_Point`='0'");
		
		//$nu= mysql_num_rows($quer);
	
		

		if($count > 1){
		array_push($pro_data,'0','Re-Retake');}
		
		elseif($count == 1){
		array_push($pro_data,'0','Retake');}
		
		elseif($count_one1 == 1 && $res11 == 0){ //registration not
		
		
		array_push($pro_data,'0',' ',$course_no1);
		
		}
		
		elseif($count_one1 == 1 && $res11 > 0){ //regstration have
		
		
		array_push($pro_data,'0',' ','no');
		}
		
	
		else array_push($pro_data,'0');
		
		echo json_encode($pro_data);
		
		
		
		
		
		
		
		/*	$query = "SELECT `title`, unit FROM subject WHERE subject_id='$req_id'";
			$req_data = mysql_query($query);
			$pro_data = mysql_fetch_array($req_data);
			
			array_push($pro_data, '0');
			echo json_encode($pro_data);*/
		}
		
	}
	
	
	

	function getCourseNoById($id){
		$query = mysql_query("SELECT `code` from subject WHERE subject_id='$id'");
		$result = mysql_fetch_array($query);
		$course_no = $result['code'];
		return $course_no;
	}
	
	
	
	function getRetakeInfo($course_no,$roll){
		$query = mysql_query("SELECT `Grade_Point` FROM `result` WHERE (`sub_code`='$course_no' and `student_id`='$roll' and `Grade_Point`='0' and `year`=(select max(`year`) from `result`  where `student_id`='$roll' and `sub_code`='$course_no') )");
		$result = mysql_num_rows($query);
		
		$qu = mysql_query("SELECT `sub_code` FROM `result` WHERE `sub_code`='$course_no' and `student_id`='$roll'  ");
		$res = mysql_num_rows($qu);
		
		if( $res == 0 )
			return true;

elseif($result > 0)
           return true;

		else
			return false;
	}
	
?>