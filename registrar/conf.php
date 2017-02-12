

<?php
include('dbcon.php');


//require_once('mail/mailer.php');
 require 'try/phpmailer/PHPMailerAutoload.php';
$get_id = $_GET['id'];



					
					echo "<script>
alert('Confirmed');
window.location.href='credis_req.php';
</script>";
                     
					  mysql_query("update students set req = 'on' where student_id  = '$get_id' ")or die(mysql_error());

//header('location:unstudents.php');
                   


			 

?>