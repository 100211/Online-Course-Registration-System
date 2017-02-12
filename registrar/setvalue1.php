<?php include "dbcon.php";?>
<?php include('session.php'); ?>

<?php

	$req_id = $_POST['id'];
	$roll =  $_POST['roll'];

	$sql_one = "SELECT * from pre_req WHERE select_sub='$req_id'";
	$var_one = mysql_query($sql_one);
	$count_one = mysql_num_rows($var_one);

	if($count_one == 0){
		$query = "SELECT `title`, `unit` FROM subject WHERE subject_id='$req_id'";
		$req_data = mysql_query($query);
		$pro_data = mysql_fetch_array($req_data);
		array_push($pro_data, '0');
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
			$query = "SELECT `title`, unit FROM subject WHERE subject_id='$req_id'";
			$req_data = mysql_query($query);
			$pro_data = mysql_fetch_array($req_data);
			array_push($pro_data, '0');
			echo json_encode($pro_data);
		}
		
	}
	
	
	

	function getCourseNoById($id){
		$query = mysql_query("SELECT `code` from subject WHERE subject_id='$id'");
		$result = mysql_fetch_array($query);
		$course_no = $result['code'];
		return $course_no;
	}
	function getRetakeInfo($course_no,$roll){
		$query = mysql_query("SELECT `Grade_Point` FROM `result` WHERE (`sub_code`='$course_no' and `student_id`='$roll' and `Grade_Point`='0.00')");
		$result = mysql_num_rows($query);
		if($result > 0)
			return true;
		else
			return false;
	}
?>