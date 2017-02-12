<?php   include('dbcon.php'); ?>
<?php
 

 $select_sub = $_POST['course_no_select'];
 $req_sub = array_filter($_POST['course_no_req']);
foreach ($req_sub as $sub) {

	if(!checkDup($select_sub, $sub)){
		$sql = "INSERT INTO pre_req (select_sub, req_sub) values ($select_sub,$sub)";
		$sql = mysql_query($sql);
	}

}
header('Location:prerequisites-show.php');
function checkDup($select_sub, $req_sub)
{
	$sql = "SELECT * FROM pre_req where select_sub=$select_sub and req_sub=$req_sub";
	$var = mysql_query($sql);
	$row = mysql_num_rows($var);
	if($row > 0)
		return true;
	else
		return false;
}

?>