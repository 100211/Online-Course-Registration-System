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
				
				</div>
				<div class="span2">
					
				</div>
				<div class="span10">
			
				          
                   <form id="form1"  method="post" action="prev_result_link.php">
              <table border="0" cellspacing="150">
              
               <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td >Roll no.</td>
                  <td><label>
                    <input name="roll" type="text" id="roll" maxlength="6" class="blue"/>
                    <br />
                 <span class="c1"><?php if (@$_REQUEST['msgb']==1)echo "Plz Input The Roll No.";
           ?></span> </label></td>
                  
                  
            <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
         <!--       </tr>
                  <td>Session</td>
                  <td><select name="session" id="session" class="blue">
                  <?php 
   for($i = 1998 ; $i < date('Y'); $i++){
   
  
 
							                  //  echo'<option value="'.substr( $i, -2 ).'">'.substr( $i, -2 ).'</option>'; 
							               
   
   $wi=$i . '-'  .substr( $i+1 , -2 );
   
      echo "<option>$wi</option>";
	  
	
   }
   
   
   
?>
                 
         </select></td>
                  
                 
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>Term</td>
                  <td><select name="term" id="term" class="blue">
                    <option value="1" selected="selected">First</option>
                    <option value="2">Second</option>
                    <option value="3">Short</option>
                    <option value="4">Long</option>
                  </select></td>
                  
                  
                  <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                  <td>Year</td>
                  <td><label>
                    <select name="year" id="year" class="blue">
                      <option value="1" selected="selected">First</option>
                      <option value="2">Second</option>
                      <option value="3">Third</option>
                      <option value="4">Fourth</option>
                    </select>
                  </label></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td> -->
                  <td align="right"><input type="submit" name="submit" id="submit" class="c6"  value="Next &gt;&gt;" /></td>
                </tr>
              </table>
            </form>                                              
                                                                                                                     
                                
							
				</div>
			
			
				
				
			</div>
		</div>
    </div>





</body>
</html>
