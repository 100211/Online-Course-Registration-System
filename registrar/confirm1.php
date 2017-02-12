

<?php
include('dbcon.php');


//require_once('mail/mailer.php');
 require 'try/phpmailer/PHPMailerAutoload.php';
$get_id = $_GET['id'];

/*$quer=mysql_query("select * from `pre_registration` where `student_no`='$get_id'  ORDER BY `reg_id` DESC LIMIT 1")or die(mysql_error());
					$row11=mysql_fetch_array($quer);



$_SESSION["term"] = $row11['term'];//$_POST["term"];
$_SESSION["year"] = $row11['year']
$year11 =  $_SESSION["year"];

$term11 =  $_SESSION["term"];
*/

$user_query=mysql_query("select * from students where student_no  = '$get_id' ")or die(mysql_error());

$row=mysql_fetch_array($user_query);

//$all = $row['student_no'];
$alumni_name=$row['firstname'];
$email = $row['mail_id'];




   
              
                    $email1 = 'tohidononto@gmail.com';                    
                    $password = '01711190066';
                    $to_id = $email;
                    $message = 'Your Registration Confirmed';
                    $subject = 'Registration Confirmed';

                    $mail = new PHPMailer;

                    $mail->isSMTP();

                    $mail->Host = 'smtp.gmail.com';

                    $mail->Port = 587;

                    $mail->SMTPSecure = 'tls';

                    $mail->SMTPAuth = true;

                    $mail->Username = $email1;

                    $mail->Password = $password;

                    $mail->setFrom('from@example.com', 'CSE online course registration');

                    $mail->addReplyTo('replyto@example.com', 'CSE online course registration');

                    $mail->addAddress($to_id);

                    $mail->Subject = $subject;

                    $mail->msgHTML($message);

           if (!$mail->send()) {
                       $error = "Mailer Error: " . $mail->ErrorInfo;
					   echo "<script>
alert('$error');
window.location.href='unstudents1-1.php';
</script>";
                       
                    } 
                    else {
					
					echo "<script>
alert('Confirmation Mail sent');
window.location.href='unstudents1-1.php';
</script>";

               mysql_query("INSERT INTO  `registration` (`student_no`, `year`, `term`, `session`, `subject_id`, `course_title`, `credit_hours`, `remarks`) SELECT `student_no`, `year`, `term`, `session`, `subject_id`, `course_title`, `credit_hours`, `remarks` FROM `pre_registration` where `student_no`='$get_id'")or die(mysql_error());


  mysql_query("DELETE FROM `pre_registration`  where student_no  = '$get_id' ")or die(mysql_error());
  
 //  mysql_query("update students set `year_level`='$year11',`term`='$term11' , reg_stat = 'start',`result`='start' where student_no  = '$get_id' ")or die(mysql_error());

              
					  mysql_query("update students set reg_stat = 'start',`result`='start' where student_no  = '$get_id' ")or die(mysql_error());

//header('location:unstudents.php');
                  }
               






















//mailSend($alumni_name,$email);
				
				 

?>