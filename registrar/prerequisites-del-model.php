<?php   include('dbcon.php'); ?>

<?php
	$comp_id = explode('^', $_POST['id']);
	$req_id = $comp_id[1];
	$sel_id = $comp_id[0];

	mysql_query("DELETE FROM pre_req WHERE req_sub=$sel_id LIMIT 1"); //Delete Row


	
	$sql = 'SELECT distinct(subject_id), `code` as course_no, `title` as course_title, unit FROM subject as t1 inner join pre_req as t2 on t1.subject_id=t2.req_sub where t2.select_sub = '.$req_id.'';
	$var = mysql_query($sql);
	$count = mysql_num_rows($var);

	$query = mysql_query("SELECT `code` as course_title, unit FROM subject WHERE subject_id=$req_id");
	$select_subject = mysql_fetch_array($query);
?>



<h2><?php echo $select_subject['course_title']; ?></h2>
<span>Credit: <?php echo $select_subject['unit'];?></span>
<?php
	if($count){
		echo '<h2><strong>'.$count.'</strong> Pre Requisites For this Course.</h2>';
	}else{
		echo '<h2>There is no Pre Requisites for this subject.</h2>';
	}
?>

<ol>
	<?php
		while($row = mysql_fetch_array($var)){
			echo '<li><a href="#">'.$row['course_title'].'</a> &nbsp;&nbsp;&nbsp; <a href="#" id="req_del" data-id="'.$row['subject_id'].'^'.$req_id.'">      <font color=red>Remove</font><img src="upload/u.jpg" /></a></li>';
		}
	?>
</ol>