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
			 <form name="form1"  method="post" action="feeslink1.php">
<?php

$admission_fee = $_POST['admission_fee'];
$_SESSION['admission_fee']=$admission_fee;
$feebook = $_POST['feebook'];
$_SESSION['feebook']=$feebook;
$security = $_POST['security'];
$_SESSION['security']=$security;
$transport = $_POST['transport'];
$_SESSION['transport']=$transport;
$per_course = $_POST['per_course'];//
$_SESSION['per_course']=$per_course;
$retake_course = $_POST['retake_course'];//
$_SESSION['retake_course']=$retake_course;
$re_retake = $_POST['re_retake'];//
$_SESSION['re_retake']=$re_retake;
$bncc = $_POST['bncc'];
$_SESSION['bncc']=$bncc;
$library = $_POST['library'];
$_SESSION['library']=$library;
$health_check = $_POST['health_check'];
$_SESSION['health_check']=$health_check;
$health_card = $_POST['health_card'];
$_SESSION['health_card']=$health_card;
$cultural_fee = $_POST['cultural_fee'];
$_SESSION['cultural_fee']=$cultural_fee;
$religious_fee = $_POST['religious_fee'];
$_SESSION['religious_fee']=$religious_fee;
$per_exam = $_POST['per_exam'];//
$_SESSION['per_exam']=$per_exam;
$grade_sheet = $_POST['grade_sheet'];
$_SESSION['grade_sheet']=$grade_sheet;
$provissional_certificate = $_POST['provissional_certificate'];
$_SESSION['provissional_certificate']=$provissional_certificate;
$main_certificate = $_POST['main_certificate'];
$_SESSION['main_certificate']=$main_certificate;
$transcript = $_POST['transcript'];
$_SESSION['transcript']=$transcript;
$security_library = $_POST['security_library'];
$_SESSION['security_library']=$security_library;
$id_card = $_POST['id_card'];
$_SESSION['id_card']=$id_card;
$fines_library = $_POST['fines_library'];
$_SESSION['fines_library']=$fines_library;
$fine_exam = $_POST['fine_exam'];
$_SESSION['fine_exam']=$fine_exam;
$mc_mi_certificate = $_POST['mc_mi_certificate'];
$_SESSION['mc_mi_certificate']=$mc_mi_certificate;
$f_phil_phd = $_POST['f_phil_phd'];
$_SESSION['f_phil_phd']=$f_phil_phd;
$correction = $_POST['correction_fee'];
$_SESSION['correction_fee']=$correction;
$student_welfare = $_POST['student_welfare'];
$_SESSION['student_welfare']=$student_welfare;
$sports = $_POST['sports'];
$_SESSION['sports']=$sports;
$publishing = $_POST['publishing'];
$_SESSION['publishing']=$publishing;
$others = $_POST['others'];
$_SESSION['others']=$others;

$_SESSION['total_tk'] = $admission_fee+$feebook+$security+$transport+$bncc+$library+$health_check+$per_course+$retake_course+$re_retake+
$health_card+$cultural_fee+$religious_fee+$grade_sheet+$provissional_certificate+$main_certificate+$transcript+$security_library+$id_card+$fines_library+$fine_exam+$mc_mi_certificate+$f_phil_phd+$correction+$student_welfare+$sports+$publishing+$others;

$_SESSION['per_credit_fee']= $per_course;

$_SESSION['per_exam_fee'] = $per_exam;

$_SESSION['re_retake_fee'] = $re_retake;

?>
            <table cellpadding="0" cellspacing="0" border="0"   class="table  table-bordered" id="example">
              <tr>
                <td width="9%">Admission Fee</td>
                <td width="9%">&nbsp;<?php echo "$admission_fee";?></td>
                <td width="10%">Grade Sheet</td>
                <td width="9%">&nbsp;<?php echo "$grade_sheet";?></td>
              </tr>
              <tr>
                <td>Fee Book</td>
                <td>&nbsp;<?php echo "$feebook";?></td>
                <td>Provissional Certificate</td>
                <td>&nbsp;<?php echo "$provissional_certificate";?></td>
              </tr>
              <tr>
                <td>Security ( General )</td>
                <td>&nbsp;<?php echo "$security";?></td>
                <td>Main Certificate</td>
                <td>&nbsp;<?php echo "$main_certificate";?></td>
              </tr>
              <tr>
                <td>Transport</td>
                <td>&nbsp;<?php echo "$transport";?></td>
                <td>Transcript</td>
                <td>&nbsp;<?php echo "$transcript";?></td>
              </tr>
              <tr>
                <td> Per Course Registration Fee</td>
                <td>&nbsp;<?php echo "$per_course";?></td>
                <td>Security ( Library)</td>
                <td>&nbsp;<?php echo "$security_library";?></td>
              </tr>
              <tr>
                <td>Retake Course Fee</td>
                <td>&nbsp;<?php echo "$retake_course";?></td>
                <td>Identity Card</td>
                <td>&nbsp;<?php echo "$id_card";?></td>
              </tr>
              <tr>
                <td>Re-retake </td>
                <td>&nbsp;<?php echo "$re_retake";?></td>
                <td>Fines ( Library )</td>
                <td>&nbsp;<?php echo "$fines_library";?></td>
              </tr>
              <tr>
                <td>B.N.C.C</td>
                <td>&nbsp;<?php echo "$bncc";?></td>
                <td>Fine (Exam Control)</td>
                <td>&nbsp;<?php echo "$fine_exam";?></td>
              </tr>
              <tr>
                <td>Library</td>
                <td>&nbsp;<?php echo "$library";?></td>
                <td><p>MC / MI </p>
                  <p>( Certificate )</p></td>
                <td>&nbsp;<?php echo "$mc_mi_certificate";?></td>
              </tr>
              <tr>
                <td>Health Checkup</td>
                <td>&nbsp;<?php echo "$health_check";?></td>
                <td>F.Phil / P.H.D fee</td>
                <td>&nbsp;<?php echo "$f_phil_phd";?></td>
              </tr>
              <tr>
                <td>Health Card</td>
                <td>&nbsp;<?php echo "$health_card";?></td>
                <td>Correction fee</td>
                <td>&nbsp;<?php echo "$correction";?></td>
              </tr>
              <tr>
                <td>Cultural fee</td>
                <td>&nbsp;<?php echo "$cultural_fee";?></td>
                <td>Student welfare</td>
                <td>&nbsp;<?php echo "$student_welfare";?></td>
              </tr>
              <tr>
                <td>Religious fee</td>
                <td>&nbsp;<?php echo "$religious_fee";?></td>
                <td>Sports</td>
                <td>&nbsp;<?php echo "$sports";?></td>
              </tr>
              <tr>
                <td> Per Exam fee</td>
                <td>&nbsp;<?php echo "$per_exam";?></td>
                <td>Publishing</td>
                <td>&nbsp;<?php echo "$publishing";?></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>Others</td>
                <td>&nbsp;<?php echo "$others";?></td>
              </tr>
            
            </table>  
            
            <p align="left"><input type="button" value="&lt;&lt; Back " onclick="javascript: history.go(-1)" /></p>
            <p align="right"><input name="c95" type="submit" id="c95" value="Next &gt;&gt;" /></td></p>
                
                </form>
							
				</div>
			
			
				
				
			</div>
		</div>
    </div>




</body>
</html>
