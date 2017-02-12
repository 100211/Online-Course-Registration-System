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

 <?php
			        
					$roll = $_SESSION['roll'];
					$session = $_SESSION['session'];
					
					$term = $_SESSION['term'];
					$year = $_SESSION['year'];
					$course = $_POST['total_c'];
					
					
			
			?>

<div class="container">
		<div class="margin-top">
			<div class="row">
				
				<div class="span12">
				
				</div>
				<div class="span2">
					
				</div>
				<div class="span10">
			
				      <form id="form1" method="post" action="prev_result_db.php">
                    </br>    
                  </br>    
                     <a style="font-size:25px">   Roll:<?php  echo $_SESSION["roll"]; ?></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a style="font-size:25px">  Year: <?php echo"<span class=\"c6\">$year</span>"; ?> </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a style="font-size:25px">   Term:<?php  echo $_SESSION["term"];  ?></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a style="font-size:25px">Session:&nbsp;<?php  echo $_SESSION['session']; ?></a></br>
                      
                      
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      
                      
                      
             <table cellpadding="0" cellspacing="0" border="0"   class="table  table-bordered" >  
          
            <thead>
                                    <tr>
                                        <th >Course No.</th>
                                        <th>Course Title</th>
                                        <th>Credit Hours</th>    
                                         <th >Letter Grade</th>  
                                          <th>Grade Point</th>  
                                                              
                                                                                                                    
                                        <th>Remarks</th>                                                                                 
                                  
                                    </tr>
                                </thead> 
          
                <tbody>
               <?php
              			//echo $_SESSION['course'];
			   for($i=0;$i<$course;$i++)
			   {   
			   
			       $v=chr(65+$i);
				   $_SESSION["$v".chr(65)]=$_POST["$v".chr(65)]; 
				   $_SESSION["$v".chr(66)]=$_POST["$v".chr(66)]; 
				   $_SESSION["$v".chr(67)]=$_POST["$v".chr(67)]; 
				   $_SESSION["$v".chr(68)]=$_POST["$v".chr(68)]; 
				   $_SESSION["$v".chr(69)]=$_POST["$v".chr(69)]; 

				 $_SESSION["$v".chr(70)]=$_POST["$v".chr(70)]; 
   
				   $course_no[$i]= $_SESSION["$v".chr(65)];
				   $course_title[$i]=$_SESSION["$v".chr(66)];
				   $credit_hours[$i]=$_SESSION["$v".chr(67)];
				   $letter_grade[$i]=$_SESSION["$v".chr(68)];
				   $grade_point[$i]=$_SESSION["$v".chr(69)];
			 $remarks[$i]=$_SESSION["$v".chr(70)];
	       if($letter_grade[$i]== '0'){
            $letter_grade[$i] = 'F';
         }else{
          $letter_grade[$i]=$letter_grade[$i];
         }
				   echo "<tr>
				    <td>&nbsp;&nbsp;&nbsp;$course_no[$i]</td>
			       <td>&nbsp;&nbsp;$course_title[$i]</td>
			       <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$credit_hours[$i]</td>
			       <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$letter_grade[$i]</td>
			       <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$grade_point[$i]</td>

<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$remarks[$i]</td>

			       
				   </tr>";
			     
			    }
                
     
   ?>           
                  </tbody>
               
               
               <tr>
                <td bordercolor="#FFFFFF"><label>
                    <input type="button" value="&lt;&lt; Back " onclick="javascript: history.go(-1)" />
                  </label></td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
              
                 
                  <td ><label>
                      <p align="right">  <input name="c95" type="submit" id="c95" value="Next &gt;&gt;" /></p>
                  </label></td>
             </tr>
               
              </table>
              
        
                 
                
              
              
            </form>
                                             
                         
                
							
				</div>
			
			
				
				
			</div>
		</div>
    </div>





</body>
</html>
