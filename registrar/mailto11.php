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
			
				     
                          
                            <h2>Send Email</h2>
                <hr/>
                <form action="mailto11.php" method="post">
                
                <div class="control-group">
			<label class="control-label" for="inputPassword"> Sender:</label>
			<div class="controls">
			  <input type="text" placeholder="onlineregcse@gmail.com" name="email" disabled=true;/>
			</div>
		</div>
                
                
                 <div class="control-group">
			<label class="control-label" for="inputPassword">   Student ID:</label>
			<div class="controls">
			 <select name="toid" required>
									<option></option>
									<?php 
									include('dbcon.php');
									$course_query = mysql_query("select * from students") or die(mysql_error());
									while($course_row = mysql_fetch_array($course_query)){
									
                                    echo "<option value = ".$course_row['mail_id']."> ".$course_row['student_no']."</option>";
                                 
									
									 } ?>
									</select>
			</div>
		</div>
                
                   <div class="control-group">
			<label class="control-label" for="inputPassword"> subject:</label>
			<div class="controls">
            <textarea rows="4" cols="50" placeholder="Enter Your subject..." name="subject"></textarea>
			 
			</div>
		</div>
        
         <div class="control-group">
			<label class="control-label" for="inputPassword"> Message:</label>
			<div class="controls">
			<textarea rows="4" cols="50" placeholder="Enter Your Message..." name="message"></textarea>
			</div>
		</div>
        
         <div class="control-group">
		
	
			 <input type="submit" value="Send" name="send"/>
		
		</div>
                
									
                   
                   
                    
                    
                </form>    
            </div>
        </div>
          <?php
        
              require 'phpmailer/PHPMailerAutoload.php';
              if(isset($_POST['send']))
                  {
                    $email = 'tohidononto@gmail.com';                    
                    $password = '01711190066';
                    $to_id = $_POST['toid'];
                    $message = $_POST['message'];
                    $subject = $_POST['subject'];

                    $mail = new PHPMailer;

                    $mail->isSMTP();

                    $mail->Host = 'smtp.gmail.com';

                    $mail->Port = 587;

                    $mail->SMTPSecure = 'tls';

                    $mail->SMTPAuth = true;

                    $mail->Username = $email;

                    $mail->Password = $password;

                    $mail->setFrom('from@example.com', 'Course Cordinator');

                    $mail->addReplyTo('replyto@example.com', 'Course Cordinator');

                    $mail->addAddress($to_id);

                    $mail->Subject = $subject;

                    $mail->msgHTML($message);

                    if (!$mail->send()) {
                       $error = "Mailer Error: " . $mail->ErrorInfo;
                        ?><script>alert('<?php echo $error ?>');</script><?php
                    } 
                    else {
                       echo '<script>alert("Message sent!");</script>';
                    }
               }
        ?>

    	
 
</form>
                
							
				</div>
			
			
				
				
			</div>
		</div>
    </div>




</body>
</html>
