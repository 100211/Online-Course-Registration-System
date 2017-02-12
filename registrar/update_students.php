<?php 
include('dbcon.php');
if (isset($_POST['submit'])){
$id=$_POST['id'];
$student_id=$_POST['id'];
$student_no=$_POST['student_no'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$course=$_POST['course'];
$term=$_POST['term'];

$password=$_POST['password'];
$year_level = $_POST['year_level'];
$status = $_POST['status'];



 $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
                                $image_name = addslashes($_FILES['image']['name']);
                                $image_size = getimagesize($_FILES['image']['tmp_name']);

                                move_uploaded_file($_FILES["image"]["tmp_name"], "registrar/upload/" . $_FILES["image"]["name"]);
                                $location = "upload/" . $_FILES["image"]["name"];
								
								
								
mysql_query("update students set student_no='$student_no',firstname='$firstname',lastname='$lastname',password='$password', photo = '$location',year_level = '$year_level',course = '$course' , term = '$term' , student_status = '$status' where student_no='$id'")or die(mysql_error());
								
								
header('location:students.php');
}
?>	