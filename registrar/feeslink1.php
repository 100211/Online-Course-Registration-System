
<?php include('session.php'); ?> 
<?php

require "dbcon.php";

$admission_fee = $_SESSION['admission_fee'];
$feebook = $_SESSION['feebook'];
$security = $_SESSION['security'];
$transport = $_SESSION['transport'];
$per_course = $_SESSION['per_course'];//
$retake_course = $_SESSION['retake_course'];//
$re_retake = $_SESSION['re_retake'];//
$bncc = $_SESSION['bncc'];
$library = $_SESSION['library'];
$health_check = $_SESSION['health_check'];
$health_card = $_SESSION['health_card'];
$cultural_fee = $_SESSION['cultural_fee'];
$religious_fee = $_SESSION['religious_fee'];
$per_exam = $_SESSION['per_exam'];//
$grade_sheet = $_SESSION['grade_sheet'];
$provissional_certificate = $_SESSION['provissional_certificate'];
$main_certificate = $_SESSION['main_certificate'];
$transcript = $_SESSION['transcript'];
$security_library = $_SESSION['security_library'];
$id_card = $_SESSION['id_card'];
$fines_library = $_SESSION['fines_library'];
$fine_exam = $_SESSION['fine_exam'];
$mc_mi_certificate = $_SESSION['mc_mi_certificate'];
$f_phil_phd = $_SESSION['f_phil_phd'];
$correction = $_SESSION['correction_fee'];
$student_welfare = $_SESSION['student_welfare'];
$sports = $_SESSION['sports'];
$publishing = $_SESSION['publishing'];
$others = $_SESSION['others'];
$total=$_SESSION['total_tk'];
 

$var = mysql_query("update fees set admission_fee ='$admission_fee', fee_book ='$feebook', security_general= '$security', transport='$transport', per_course_registration_fee ='$per_course', retake_course_fee 	='$retake_course', re_retake ='$re_retake', bncc='$bncc', library='$library',
health_checkup ='$health_check', health_card ='$health_card', cultural_fee ='$cultural_fee', religious_fee ='$religious_fee', per_exam_fee ='$per_exam ', grade_sheet ='$grade_sheet', provissional_certificate ='$provissional_certificate', main_certificate ='$main_certificate', transcript='$transcript', security_library ='$security_library', id_card ='$id_card', fines_library ='$fines_library', fine_exam_control ='$fine_exam', mc_mi_certificate ='$mc_mi_certificate', f_phil_phd_fee ='$f_phil_phd', correction_fee ='$correction', student_welfare ='$student_welfare', sports ='$sports', publishing='$publishing', others='$others' ,total='$total'");

if($var)
echo "<script>
alert('Information saved');
window.location.href='fees.php';
</script>";


else
echo "<script>
alert('Information not saved');
window.location.href='fees.php';
</script>";


?>
