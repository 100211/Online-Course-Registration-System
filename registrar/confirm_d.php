

<?php
include('dbcon.php');


//require_once('mail/mailer.php');
 require 'try/phpmailer/PHPMailerAutoload.php';
$get_id = $_GET['id'];




$user_query=mysql_query("select * from students where student_id  = '$get_id' ")or die(mysql_error());

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
window.location.href='add_drop.php';
</script>";
                       
                    } 
                    else {
					
					echo "<script>
alert('Confirmation Mail sent');
window.location.href='add_drop.php';
</script>";
                     
					  mysql_query("update students set `a_d`='end' where student_id = '$get_id' ")or die(mysql_error());

//header('location:unstudents.php');
                    }
               






















//mailSend($alumni_name,$email);
				
				 

?>