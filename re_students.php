<?php 
include('dbcon.php');
if (isset($_POST['submit'])){
$id=$_POST['id'];
$student_id=$_POST['id'];
$student_no=$_POST['student_no'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$contact=$_POST['contact'];
$mail_id=$_POST['mail_id'];

$password=$_POST['password'];




								
								
mysql_query("update students set student_no='$student_no',firstname='$firstname',lastname='$lastname',password='$password',contact = '$contact',mail_id = '$mail_id'  where student_no='$id'")or die(mysql_error());
								
								
header('location:dasboard.php');
}
?>	