

<?php
include('dbcon.php');


//require_once('mail/mailer.php');
 require 'try/phpmailer/PHPMailerAutoload.php';
$get_id = $_GET['id'];




$user_query=mysql_query("select * from students where student_no  = '$get_id' ")or die(mysql_error());

$row=mysql_fetch_array($user_query);

$alumni_name=$row['firstname'];
$email = $row['mail_id'];




   
              
                    $email1 = 'tohidononto@gmail.com';                    
                    $password = '01711190066';
                    $to_id = $email;
                    $message = 'Your Account Confirmed';
                    $subject = 'Account Confirmed';

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
window.location.href='unstudents4.php';
</script>";
                       
                    } 
                    else {
					
					echo "<script>
alert('Confirmation Mail sent');
window.location.href='unstudents4.php';
</script>";
                     
					 
					 
					 
					 
					 
					 
					   mysql_query("INSERT INTO  `registration` (`student_no`, `year`, `term`, `session`, `subject_id`, `course_title`, `credit_hours`, `remarks`) SELECT `student_no`, `year`, `term`, `session`, `subject_id`, `course_title`, `credit_hours`, `remarks` FROM `pre_registration` where `student_no`='$get_id'")or die(mysql_error());


  mysql_query("DELETE FROM `pre_registration`  where student_no  = '$get_id' ")or die(mysql_error());
  
  
 //	 mysql_query("update students set `year_level`='$year11',`term`='$term11' , reg_stat = 'start',`result`='start' where student_no  = '$get_id' ")or die(mysql_error());
  
				  mysql_query("update students set reg_stat = 'start',`result`='start' where student_no  = '$get_id' ")or die(mysql_error());

//header('location:unstudents.php');
                    }
               






















//mailSend($alumni_name,$email);
				
				 

?>