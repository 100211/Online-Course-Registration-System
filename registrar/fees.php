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
				       <div align="left"><a href="fees_edit.php" class="alert alert-success">&nbsp;Edit fees</a></div>
				</div>
				<div class="span2">
					
				</div>
				<div class="span10">
                
			<form id="form1" method="post" action="feeslink.php">
            
    
				    <table cellpadding="0" cellspacing="0" border="0"   class="table  table-bordered" id="example">
          
           
          
            
                <tr>
                  <td width="20" class="blue">Admission Fee</td>
                  <td width="38"><label>
                    <input type="text" name="admission_fee" id="admission_fee" />
                  </label></td>
                  <td width="50" class="blue">Grade Sheet</td>
                  <td width="50"><input type="text" name="grade_sheet" id="grade_sheet" /></td>
                </tr>
                <tr>
                  <td class="blue">Fee Book</td>
                  <td><input type="text" name="feebook" id="feebook" /></td>
                  <td class="blue">Provissional Certificate</td>
                  <td><input type="text" name="provissional_certificate" id="provissional_certificate" /></td>
                </tr>
                <tr>
                  <td class="blue">Security ( General )</td>
                  <td><input type="text" name="security" id="security" /></td>
                  <td class="blue">Main Certificate</td>
                  <td><input type="text" name="main_certificate" id="main_certificate" /></td>
                </tr>
                <tr>
                  <td class="blue">Transport</td>
                  <td><input type="text" name="transport" id="transport" /></td>
                  <td class="blue">Transcript</td>
                  <td><input type="text" name="transcript" id="transcript" /></td>
                </tr>
                <tr>
                  <td class="blue"> Per Course Registration Fee</td>
                  <td><input type="text" name="per_course" id="per_course" /></td>
                  <td class="blue">Security ( Library)</td>
                  <td><input type="text" name="security_library" id="security_library" /></td>
                </tr>
                <tr>
                  <td class="blue">Retake Course Fee</td>
                  <td><input type="text" name="retake_course" id="retake_course" /></td>
                  <td class="blue">Identity Card</td>
                  <td><input type="text" name="id_card" id="id_card" /></td>
                </tr>
                <tr>
                  <td class="blue">Re-retake </td>
                  <td><input type="text" name="re_retake" id="re_retake" /></td>
                  <td class="blue">Fines ( Library )</td>
                  <td><input type="text" name="fines_library" id="fines_library" /></td>
                </tr>
                <tr>
                  <td class="blue">B.N.C.C</td>
                  <td><input type="text" name="bncc" id="bncc" /></td>
                  <td class="blue">Fine (Exam Control)</td>
                  <td><input type="text" name="fine_exam" id="fine_exam" /></td>
                </tr>
                <tr>
                  <td class="blue">Library</td>
                  <td><input type="text" name="library" id="library" /></td>
                  <td class="blue"><p>MC / MI </p>
                  <p class="blue">( Certificate )</p></td>
                  <td><input type="text" name="mc_mi_certificate" id="mc_mi_certificate" /></td>
                </tr>
                <tr>
                  <td class="blue">Health Checkup</td>
                  <td><input type="text" name="health_check" id="health_check" /></td>
                  <td class="blue">F.Phil / P.H.D fee</td>
                  <td><input type="text" name="f_phil_phd" id="f_phil_phd" /></td>
                </tr>
                <tr>
                  <td class="blue">Health Card</td>
                  <td><input type="text" name="health_card" id="health_card" /></td>
                  <td class="blue">Correction fee</td>
                  <td><input type="text" name="correction_fee" id="correction_fee" /></td>
                </tr>
                <tr>
                  <td class="blue">Cultural fee</td>
                  <td><input type="text" name="cultural_fee" id="cultural_fee" /></td>
                  <td class="blue">Student welfare</td>
                  <td><input type="text" name="student_welfare" id="student_welfare" /></td>
                </tr>
                <tr>
                  <td class="blue">Religious fee</td>
                  <td><input type="text" name="religious_fee" id="religious_fee" /></td>
                  <td class="blue">Sports</td>
                  <td><input type="text" name="sports" id="sports" /></td>
                </tr>
                <tr>
                  <td class="blue"> Per Exam fee</td>
                  <td><input type="text" name="per_exam" id="per_exam" /></td>
                  <td class="blue">Publishing</td>
                  <td><input type="text" name="publishing" id="publishing" /></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td class="blue">Others</td>
                  <td><input type="text" name="others" id="others" /></td>
                </tr>
             
              </table>
              <p align="right">
                    <input type="submit" name="button" id="button" value="Next &gt;&gt;" />
                  </p>
            </form>
              <p>&nbsp;</p>
							        
                                                                
                                                                                                                     
                                
                
							
				</div>
			
			
				
				
			</div>
		</div>
    </div>




</body>
</html>
