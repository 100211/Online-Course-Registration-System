

<?php
include('dbcon.php');



$get_id = $_GET['id'];





                       $error = "Confirming...." ;
					   echo "<script>
alert('$error');
window.location.href='get_reg.php';
</script>";
                       
                   
					  mysql_query("update students set req = 'send' where student_no  = '$get_id' ")or die(mysql_error());

//header('location:unstudents.php');
              
               






















//mailSend($alumni_name,$email);
				
				 

?>