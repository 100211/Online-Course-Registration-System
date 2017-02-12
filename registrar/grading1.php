
<?php   include('dbcon.php'); ?>

<?php $query = "SELECT status, COUNT(student_no) FROM students where year_level='1' and status='active' "; 
	 
$res = mysql_query($query) or die(mysql_error());

while($row = mysql_fetch_array($res)){

 $r=$row['COUNT(student_no)'];
	

}
 $q = "SELECT status, COUNT(student_no) FROM students where year_level='1' and term='1' and status='active' "; 
	 
$res1 = mysql_query($q) or die(mysql_error());

while($row = mysql_fetch_array($res1)){

 $r1=$row['COUNT(student_no)'];
	

}

$r2=$r-$r1;


 $q1 = "SELECT status, COUNT(student_no) FROM students where year_level='1' and term='1' and status='active' and reg_stat='start' and reg_status='end' "; 
	 
$re = mysql_query($q1) or die(mysql_error());

while($row = mysql_fetch_array($re)){

 $r3=$row['COUNT(student_no)'];
	

}

$r4=$r1-$r3;

$q2 = "SELECT status, COUNT(student_no) FROM students where year_level='1' and term='1' and status='active' and reg_stat='end' and reg_status='end' "; 
	 
$re2 = mysql_query($q2) or die(mysql_error());

while($row = mysql_fetch_array($re2)){

 $r5=$row['COUNT(student_no)'];
	

}

///

 $q1 = "SELECT status, COUNT(student_no) FROM students where year_level='1' and term='2' and status='active' and reg_stat='start' and reg_status='end' "; 
	 
$re2 = mysql_query($q1) or die(mysql_error());

while($row = mysql_fetch_array($re2)){

 $r32=$row['COUNT(student_no)'];
	

}

$r42=$r2-$r32;

$q22 = "SELECT status, COUNT(student_no) FROM students where year_level='1' and term='2' and status='active' and reg_stat='end' and reg_status='end' "; 
	 
$re22 = mysql_query($q22) or die(mysql_error());

while($row = mysql_fetch_array($re22)){

 $r52=$row['COUNT(student_no)'];
	

}


?>

<!--2 year -->
<?php  $query2 = "SELECT status, COUNT(student_no) FROM students where year_level='2' and status='active' "; 
	 
$result2 = mysql_query($query2) or die(mysql_error());

while($row = mysql_fetch_array($result2)){

 $l=$row['COUNT(student_no)'];
	

}
 $q21 = "SELECT status, COUNT(student_no) FROM students where year_level='2' and term='1' and status='active' "; 
	 
$res21 = mysql_query($q21) or die(mysql_error());

while($row = mysql_fetch_array($res21)){

 $l1=$row['COUNT(student_no)'];
	

}

$l2=$l-$l1;


 $qu1 = "SELECT status, COUNT(student_no) FROM students where year_level='2' and term='1' and status='active' and reg_stat='start' and reg_status='end' "; 
	 
$resu21 = mysql_query($qu1) or die(mysql_error());

while($row = mysql_fetch_array($resu21)){

 $l3=$row['COUNT(student_no)'];
	

}

$l4=$l1-$l3;

$que2 = "SELECT status, COUNT(student_no) FROM students where year_level='2' and term='1' and status='active' and reg_stat='end' and reg_status='end' "; 
	 
$resu2 = mysql_query($que2) or die(mysql_error());

while($row = mysql_fetch_array($resu2)){

 $l5=$row['COUNT(student_no)'];
	

}

///

 $quer2 = "SELECT status, COUNT(student_no) FROM students where year_level='2' and term='2' and status='active' and reg_stat='start' and reg_status='end' "; 
	 
$result2 = mysql_query($quer2) or die(mysql_error());

while($row = mysql_fetch_array($result2)){

 $l32=$row['COUNT(student_no)'];
	

}

$l42=$l2-$l32;

$q221 = "SELECT status, COUNT(student_no) FROM students where year_level='2' and term='2' and status='active' and reg_stat='end' and reg_status='end' "; 
	 
$re221 = mysql_query($q221) or die(mysql_error());

while($row = mysql_fetch_array($re221)){

 $l52=$row['COUNT(student_no)'];
	

}


?>
<!-- 3rd year-->
<?php  $uery2 = "SELECT status, COUNT(student_no) FROM students where year_level='3' and status='active' "; 
	 
$esult2 = mysql_query($uery2) or die(mysql_error());

while($row = mysql_fetch_array($esult2)){

 $m=$row['COUNT(student_no)'];
	

}
 $qw21 = "SELECT status, COUNT(student_no) FROM students where year_level='3' and term='1' and status='active' "; 
	 
$es21 = mysql_query($qw21) or die(mysql_error());

while($row = mysql_fetch_array($es21)){

 $m1=$row['COUNT(student_no)'];
	

}

$m2=$m-$m1;


 $u1 = "SELECT status, COUNT(student_no) FROM students where year_level='3' and term='1' and status='active' and reg_stat='start' and reg_status='end' "; 
	 
$esu21 = mysql_query($u1) or die(mysql_error());

while($row = mysql_fetch_array($esu21)){

 $m3=$row['COUNT(student_no)'];
	

}

$m4=$m1-$m3;

$ue2 = "SELECT status, COUNT(student_no) FROM students where year_level='3' and term='1' and status='active' and reg_stat='end' and reg_status='end' "; 
	 
$esu2 = mysql_query($ue2) or die(mysql_error());

while($row = mysql_fetch_array($esu2)){

 $m5=$row['COUNT(student_no)'];
	

}

///

 $uer2 = "SELECT status, COUNT(student_no) FROM students where year_level='3' and term='2' and status='active' and reg_stat='start' and reg_status='end' "; 
	 
$esult2 = mysql_query($uer2) or die(mysql_error());

while($row = mysql_fetch_array($esult2)){

 $m32=$row['COUNT(student_no)'];
	

}

$m42=$m2-$m32;

$q321 = "SELECT status, COUNT(student_no) FROM students where year_level='3' and term='2' and status='active' and reg_stat='end' and reg_status='end' "; 
	 
$re321 = mysql_query($q321) or die(mysql_error());

while($row = mysql_fetch_array($re321)){

 $m52=$row['COUNT(student_no)'];
	

}


?>

<!-- 4th -->
<?php  $ery2 = "SELECT status, COUNT(student_no) FROM students where year_level='4' and status='active' "; 
	 
$sult2 = mysql_query($ery2) or die(mysql_error());

while($row = mysql_fetch_array($sult2)){

 $n=$row['COUNT(student_no)'];
	

}
 $w21 = "SELECT status, COUNT(student_no) FROM students where year_level='4' and term='1' and status='active' "; 
	 
$s21 = mysql_query($w21) or die(mysql_error());

while($row = mysql_fetch_array($s21)){

 $n1=$row['COUNT(student_no)'];
	

}

$n2=$n-$n1;


 $u41 = "SELECT status, COUNT(student_no) FROM students where year_level='4' and term='1' and status='active' and reg_stat='start' and reg_status='end' "; 
	 
$su21 = mysql_query($u41) or die(mysql_error());

while($row = mysql_fetch_array($su21)){

 $n3=$row['COUNT(student_no)'];
	

}

$n4=$n1-$n3;

$e2 = "SELECT status, COUNT(student_no) FROM students where year_level='4' and term='1' and status='active' and reg_stat='end' and reg_status='end' "; 
	 
$su2 = mysql_query($e2) or die(mysql_error());

while($row = mysql_fetch_array($su2)){

 $n5=$row['COUNT(student_no)'];
	

}

///

 $er2 = "SELECT status, COUNT(student_no) FROM students where year_level='4' and term='2' and status='active' and reg_stat='start' and reg_status='end' "; 
	 
$sult2 = mysql_query($er2) or die(mysql_error());

while($row = mysql_fetch_array($sult2)){

 $n32=$row['COUNT(student_no)'];
	

}

$n42=$n2-$n32;

$q421 = "SELECT status, COUNT(student_no) FROM students where year_level='4' and term='2' and status='active' and reg_stat='end' and reg_status='end' "; 
	 
$re421 = mysql_query($q421) or die(mysql_error());

while($row = mysql_fetch_array($re421)){

 $n52=$row['COUNT(student_no)'];
	

}


?>









<div class="grading">
		
			<div class="span12"><strong><h4><i class="icon-file"></i>&nbsp;User View    </h4></strong></div>
			<div class="span3">
			<div class="grade_bg">
             <p><a class="red" style="font-size:16px;">1st year</a></p>
            <p><a style="font-size:14px">Status</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp <span class="drop">Students</span></p>
			<p>Total&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp <span class="Excellent"> <?php echo '<font size="2"'." >"; echo $r; ?></span></p>
            <p>1st Term&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp <span class="very_good"><?php echo '<font size="2"'." >"; echo $r1; ?></span></p>
			<p>2nd Term  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp <span class="very_good"><?php echo '<font size="2"'." >"; echo $r2; ?></span></p>
            
			<p>Registered &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="very_good"><?php echo ' <font size="2"'." >"; echo $r3.'|'.$r32; ?></span></p>
			<p>Unregistered &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp  <span class="very_good"><?php echo ' <font size="2"'." >"; echo $r4.'|'.$r42; ?></span></p>
			<p>Waiting For Registration &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; <span class="very_good"><?php echo ' <font size="2"'." >"; echo $r5.'|'.$r52; ?>	</span></p>
			</div>
			</div>
			
	
		


<div class="span3">
			<div class="grade_bg">
             <p><a class="fair" style="font-size:16px;">2nd year</a></p>
            <p><a style="font-size:14px">Status</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp <span class="drop">Students</span></p>
			<p>Total&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp <span class="Excellent"> <?php echo '<font size="2"'." >"; echo $l; ?></span></p>
            <p>1st Term&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp <span class="very_good"><?php echo '<font size="2"'." >"; echo $l1; ?></span></p>
			<p>2nd Term  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp <span class="very_good"><?php echo '<font size="2"'." >"; echo $l2; ?></span></p>
            
			<p>Registered  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="very_good"><?php echo ' <font size="2"'." >"; echo $l3.'|'.$l32; ?></span></p>
			<p>Unregistered &nbsp;                                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp  <span class="very_good"><?php echo ' <font size="2"'." >"; echo $l4.'|'.$l42; ?></span></p>
			<p>Waiting For Registration  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; <span class="very_good"><?php echo ' <font size="2"'." >"; echo $l5.'|'.$l52; ?>	</span></p>
			</div>
			</div>


<div class="span3">
			<div class="grade_bg">
             <p><a class="blue" style="font-size:16px;">3rd year</a></p>
            <p><a style="font-size:14px">Status</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp <span class="drop">Students</span></p>
			<p>Total&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp <span class="Excellent"> <?php echo '<font size="2"'." >"; echo $m; ?></span></p>
            <p>1st Term&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp <span class="very_good"><?php echo '<font size="2"'." >"; echo $m1; ?></span></p>
			<p>2nd Term  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp <span class="very_good"><?php echo '<font size="2"'." >"; echo $m2; ?></span></p>
            
			<p>Registered  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="very_good"><?php echo ' <font size="2"'." >"; echo $m3.'|'.$m32; ?></span></p>
			<p>Unregistered                                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp  <span class="very_good"><?php echo ' <font size="2"'." >"; echo $m4.'|'.$m42; ?></span></p>
			<p>Waiting For Registration  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; <span class="very_good"><?php echo ' <font size="2"'." >"; echo $m5.'|'.$m52; ?>	</span></p>
			</div>
			</div>


<div class="span12"><strong><h4><i class="icon-file"></i>&nbsp;</h4></strong></div>
	<div class="span3">
			<div class="grade_bg">
             <p><a class="drop" style="font-size:16px;">4th year</a></p>
            <p><a style="font-size:14px">Status</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp <span class="drop">Students</span></p>
			<p>Total&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp <span class="Excellent"> <?php echo '<font size="2"'." >"; echo $n; ?></span></p>
            <p>1st Term&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp <span class="very_good"><?php echo '<font size="2"'." >"; echo $n1; ?></span></p>
			<p>2nd Term  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp <span class="very_good"><?php echo '<font size="2"'." >"; echo $n2; ?></span></p>
            
			<p>Registered  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="very_good"><?php echo ' <font size="2"'." >"; echo $n3.'|'.$n32; ?></span></p>
			<p>Unregistered &nbsp;                                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp  <span class="very_good"><?php echo ' <font size="2"'." >"; echo $n4.'|'.$n42; ?></span></p>
			<p>Waiting For Registration  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; <span class="very_good"><?php echo ' <font size="2"'." >"; echo $n5.'|'.$n52; ?>	</span></p>
			</div>
			</div>
		
</div>

	