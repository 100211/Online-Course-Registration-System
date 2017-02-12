<?php   include('dbcon.php'); ?>
<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_dasboard.php'); ?>
<?php

$get_id = $_GET['id'];
$_SESSION["roll"] = $get_id;

$rol=$_SESSION["roll"];

$quer=mysql_query("select * from `registration` where `student_no`='$rol'  ORDER BY `reg_id` DESC LIMIT 1")or die(mysql_error());
					$row11=mysql_fetch_array($quer);	


$_SESSION["session"] = $row11['session'];// $_POST["session"];
//$_SESSION["school"] = $_POST["school"];
//$_SESSION["discipline"] = $_POST["discipline"];
$_SESSION["term"] = $row11['term'];//$_POST["term"];
$_SESSION["year"] = $row11['year'];//$_POST["year"];
$year =  $_SESSION["year"];
if(empty($_SESSION["roll"]))
{
 $msgb=1;	
}
if(empty($_SESSION["roll"]))
{
 header("location:prev_result.php?msgb=$msgb");	
}

?>





<div class="container">
		<div class="margin-top">
			<div class="row">
				
				<div class="span12">
				
				</div>
				
				<div class="span10">
			
				     
 <form id="form1" method="post" action="prev_result_link1.php">
                    </br>    
                  </br>    
                     <a style="font-size:25px">   Roll:<?php  echo $_SESSION["roll"]; ?></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a style="font-size:25px">  Year: <?php echo"<span class=\"c6\">$year</span>"; ?> </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a style="font-size:25px">   Term:<?php  echo $_SESSION["term"];  ?></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a style="font-size:25px">Session:&nbsp;<?php  echo $_SESSION['session']; ?></a></br>
                      
                      
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      
                      
                      
             <table cellpadding="0" cellspacing="0" border="0"   class="table  table-bordered"  >  
          
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
               $name_query = mysql_query("select * from students where student_no = ".$_SESSION["roll"]);
               $student_data = mysql_fetch_assoc($name_query);
              // $_SESSION['name'] = $student_data['Nick name'];
                   $query = "select * from registration where student_no='".$_SESSION["roll"]."' and term='".$_SESSION["term"]."' and year='".$_SESSION["year"]."' and session='".$_SESSION["session"]."'";
                    $query = mysql_query($query);
                  $rows = mysql_num_rows($query);
                  if($rows==0)
                    echo "<option class=\"c5\">Course Not Found.</option>";
            $i = 0;
            while($row = mysql_fetch_array($query))
            {
              $v=chr(65+$i);
              $a1 = $row[4];
              $a2 = $row[5];
              $a3 = $row[6];
              $a4 = "";
              $a5 = "";
			  $a6 ="";
  echo "<tr>";
				  echo"<td ><label>
                      <input style=\"background-color:#fff\" type=\"text\" name=\"$v".chr(65)."\"  id=\"$v".chr(65)."\" value=\"$a1\" readonly/>
         </label></td>";
			      echo" <td><label>
		            <input  style=\"background-color:#fff\" type=\"text\" name=\"$v".chr(66)."\"  id=\"$v".chr(66)."\" value=\"$a2\"  readonly/>
                      <br />
         </label></td>";
			      echo "<td><label>
			         <input  style=\"background-color:#fff\" type=\"text\" name=\"$v".chr(67)."\"  id=\"$v".chr(67)."\" value=\"$a3\"  readonly/>
                 </label></td>";
			     echo "<td><p>
			         <label>
			           <select class=\"red\" style=\"background-color:#fff\" type=\"text\" name=\"$v".chr(68)."\"  id=\"$v".chr(68)."\" required>
		<option value=''>--Select--</option>			   
       <option value='".chr(65)."+'> A+</option>
      <option value='".chr(65)."'> A</option>
	  <option value='".chr(65)."-'> A-</option>
	  <option value='".chr(66)."+'> B+</option>
	  <option value='".chr(66)."'> B</option>
	   <option value='".chr(66)."-'> B-</option>
	  <option value='".chr(67)."+'> C+</option>
	  <option value='".chr(67)."'> C</option>
	  <option value='".chr(68)."'> D</option>
       <option value='F'>F</option>   
	     
    </select>
		             </label>
	            </p></td>";
			     echo  "<td>
			         <label>
					 
					  <input style=\"background-color:#fff\" type=\"text\"  name=\"$v".chr(69)."\"  id=\"$v".chr(69)."\" value=\"$a5\" readonly/>
			         <!--  <select class=\"red\" style=\"background-color:#fff\" type=\"text\" name=\"$v".chr(69)."\"  id=\"$v".chr(69)."\" value=\"$a5\">
	<option >--Select--</option>
	<option > 4</option>
      <option > 3.75</option>
	  <option > 3.50</option>
	  <option > 3.25</option>
	  <option > 3.00</option>
	  <option > 2.75</option>
	  <option > 2.50</option>
       <option > 2.25</option>   
	   <option > 2.00</option>
	   <option > 0.00</option>  
    </select>
				-->	   
                 </label></td>";
				  echo  "<td>
			         <label>
				 
				 <input  style=\"background-color:#fff\" type=\"text\" name=\"$v".chr(70)."\"  id=\"$v".chr(70)."\" value=\"$a6\"  readonly/>
				 
			<!--		 <select class=\"red\" style=\"background-color:#fff\" type=\"text\" name=\"$v".chr(70)."\"  id=\"$v".chr(70)."\" value=\"$a6\">
      
	   <option > </option>
	  <option >Retake</option>
      <option >Re-retake</option>
     
    </select> -->
					 
			           
                 </label></td>";
			       
				  echo "</tr>";
				  

			     
			  $i++;
			 }
			   echo '<input type="hidden" name="total_c" value='.$i.'';
			   $_SESSION['course'] = $i;
	
	
			   ?>
                  </tbody>
               
               
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
             
               
              </table>
              
        
                 
                
              
              
            </form>
                                                                
                          
                
							
				</div>
			
			
				
				
			</div>
		</div>
    </div>

  <script>
	
	  
  $(document).ready(function(){
  


    $(document).on("change", "#AD", function () {
                var id = $('#AD').val();
                
				
	//removing selected elements			
				// var id = $(this).val();

	
                $.ajax({
                   
           type: "POST",
        url: "setvalue.php",
       data: {id:id},
	     dataType: "json",
		 
	   success: function(data){
					
					
					 $( "#AE" ).val(data);
                      
						//  alert(id);
                     
                }});
               
          });
		  
		  
		      $(document).on("change", "#BD", function () {
                var id = $('#BD').val();
                
				
	//removing selected elements			
				// var id = $(this).val();

	
                $.ajax({
                   
           type: "POST",
        url: "setvalue.php",
       data: {id:id},
	     dataType: "json",
		 
	   success: function(data){
					
					
					 $( "#BE" ).val(data);
                      
						//  alert(id);
                     
                }});
               
          });
		  
		      $(document).on("change", "#CD", function () {
                var id = $('#CD').val();
                
				
	//removing selected elements			
				// var id = $(this).val();

	
                $.ajax({
                   
           type: "POST",
        url: "setvalue.php",
       data: {id:id},
	     dataType: "json",
		 
	   success: function(data){
					
					
					 $( "#CE" ).val(data);
                      
						//  alert(id);
                     
                }});
               
          });
		  
		      $(document).on("change", "#DD", function () {
                var id = $('#DD').val();
                
				
	//removing selected elements			
				// var id = $(this).val();

	
                $.ajax({
                   
           type: "POST",
        url: "setvalue.php",
       data: {id:id},
	     dataType: "json",
		 
	   success: function(data){
					
					
					 $( "#DE" ).val(data);
                      
						//  alert(id);
                     
                }});
               
          });
		  
		      $(document).on("change", "#ED", function () {
                var id = $('#ED').val();
                
				
	//removing selected elements			
				// var id = $(this).val();

	
                $.ajax({
                   
           type: "POST",
        url: "setvalue.php",
       data: {id:id},
	     dataType: "json",
		 
	   success: function(data){
					
					
					 $( "#EE" ).val(data);
                      
						//  alert(id);
                     
                }});
               
          });
		  
		      $(document).on("change", "#FD", function () {
                var id = $('#FD').val();
                
				
	//removing selected elements			
				// var id = $(this).val();

	
                $.ajax({
                   
           type: "POST",
        url: "setvalue.php",
       data: {id:id},
	     dataType: "json",
		 
	   success: function(data){
					
					
					 $( "#FE" ).val(data);
                      
						//  alert(id);
                     
                }});
               
          });
		  
		      $(document).on("change", "#GD", function () {
                var id = $('#GD').val();
                
				
	//removing selected elements			
				// var id = $(this).val();

	
                $.ajax({
                   
           type: "POST",
        url: "setvalue.php",
       data: {id:id},
	     dataType: "json",
		 
	   success: function(data){
					
					
					 $( "#GE" ).val(data);
                      
						//  alert(id);
                     
                }});
               
          });
		  
		      $(document).on("change", "#HD", function () {
                var id = $('#HD').val();
                
				
	//removing selected elements			
				// var id = $(this).val();

	
                $.ajax({
                   
           type: "POST",
        url: "setvalue.php",
       data: {id:id},
	     dataType: "json",
		 
	   success: function(data){
					
					
					 $( "#HE" ).val(data);
                      
						//  alert(id);
                     
                }});
               
          });
		  
		      $(document).on("change", "#ID", function () {
                var id = $('#ID').val();
                
				
	//removing selected elements			
				// var id = $(this).val();

	
                $.ajax({
                   
           type: "POST",
        url: "setvalue.php",
       data: {id:id},
	     dataType: "json",
		 
	   success: function(data){
					
					
					 $( "#IE" ).val(data);
                      
						//  alert(id);
                     
                }});
               
          });
		  
		  
		  
		      $(document).on("change", "#JD", function () {
                var id = $('#JD').val();
                
				
	//removing selected elements			
				// var id = $(this).val();

	
                $.ajax({
                   
           type: "POST",
        url: "setvalue.php",
       data: {id:id},
	     dataType: "json",
		 
	   success: function(data){
					
					
					 $( "#JE" ).val(data);
                      
						//  alert(id);
                     
                }});
               
          });
		  
    $(document).on("change", "#KD", function () {
                var id = $('#KD').val();
                
				
	//removing selected elements			
				// var id = $(this).val();

	
                $.ajax({
                   
           type: "POST",
        url: "setvalue.php",
       data: {id:id},
	     dataType: "json",
		 
	   success: function(data){
					
					
					 $( "#KE" ).val(data);
                      
						//  alert(id);
                     
                }});
               
          });
		  
    $(document).on("change", "#LD", function () {
                var id = $('#LD').val();
                
				
	//removing selected elements			
				// var id = $(this).val();

	
                $.ajax({
                   
           type: "POST",
        url: "setvalue.php",
       data: {id:id},
	     dataType: "json",
		 
	   success: function(data){
					
					
					 $( "#LE" ).val(data);
                      
						//  alert(id);
                     
                }});
               
          });
		  

		  
	    $(document).on("change", "#MD", function () {
                var id = $('#MD').val();
                
				
	//removing selected elements			
				// var id = $(this).val();

	
                $.ajax({
                   
           type: "POST",
        url: "setvalue.php",
       data: {id:id},
	     dataType: "json",
		 
	   success: function(data){
					
					
					 $( "#ME" ).val(data);
                      
						//  alert(id);
                     
                }});
               
          });
		  
    $(document).on("change", "#ND", function () {
                var id = $('#ND').val();
                
				
	//removing selected elements			
				// var id = $(this).val();

	
                $.ajax({
                   
           type: "POST",
        url: "setvalue.php",
       data: {id:id},
	     dataType: "json",
		 
	   success: function(data){
					
					
					 $( "#NE" ).val(data);
                      
						//  alert(id);
                     
                }});
               
          });
		  
    $(document).on("change", "#OD", function () {
                var id = $('#OD').val();
                
				
	//removing selected elements			
				// var id = $(this).val();

	
                $.ajax({
                   
           type: "POST",
        url: "setvalue.php",
       data: {id:id},
	     dataType: "json",
		 
	   success: function(data){
					
					
					 $( "#OE" ).val(data);
                      
						//  alert(id);
                     
                }});
               
          });
		  
	  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		     });
		  

 
</script>


</body>
</html>
