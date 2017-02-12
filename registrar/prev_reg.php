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

$term1 =  $_SESSION["term"];

$ses = $_SESSION["session"];

if(empty($_SESSION["roll"]))
{
 $msgb=1;	
}
if(empty($_SESSION["roll"]))
{
 header("location:prev_reg.php?msgb=$msgb");	
}

?>





<div class="container">
		<div class="margin-top">
			<div class="row">
				
				<div class="span12">
				
				</div>
				
				<div class="span10">
			

                    </br>    
                  </br>  
                   <div class="span12">  
                     <a style="font-size:25px">   Roll:<?php  echo $_SESSION["roll"]; ?></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a style="font-size:25px">  Year: <?php echo"<span class=\"c6\">$year</span>"; ?> </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a style="font-size:25px">   Term:<?php  echo $_SESSION["term"];  ?></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a style="font-size:25px">Session:&nbsp;<?php  echo $_SESSION['session']; ?></a></br>
                      
               	 <?php     $total_credit = 0.00;
			

			 
			 $var = mysql_query("select * from registration where student_no = '$rol' and term = '$term1' and year = '$year' and session = '$ses' ");
			 $rows = mysql_num_rows($var);
			 for($i=0 ; $i<$rows ; $i++)
			 {
			   $ary = mysql_fetch_array($var);
			  
             
            $total_credit = $ary["credit_hours"]+$total_credit;
			$total_credit=number_format($total_credit, 2);
			   
	}
			    ?>             
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      
             
                            <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">                      
                                <thead>
                                    <tr>
                                        <th width="150">Course No.</th>
                                        <th width="300">Course Title   </th>
                                        <th width="150">Credit Hours</th>                                 
                                        <!--  <th>Letter Grade</th>   
                                        <th>Grade Point</th>       
                                        
                                       <th class="act"></th>       
												<!-- 
                                        <th>Term</th>                                                                                 
                                        <th>Year Level</th>                                                                                 
                                        <th>Remarks</th>   
                                                                                                                      
                                      --> 
                                  	<!--      <th>Term</th>                                                                                 
                                        <th>Year Level</th>        
                                       <th width="150">Session</th>  -->   
                                       <th width="100">Remarks</th>       
                                  <!--     <th>Action</th> -->   
										
										
                                    </tr>
                                </thead>
                                <tbody>
								 
                                 
                                 
  <?php  $user_query=mysql_query("select * from registration where student_no ='$rol' and year='$year' and term='$term1' and session='$ses' ")or die(mysql_error());
									while($row=mysql_fetch_array($user_query)){
									$id = $row['reg_id'];
									$remarks = $row['remarks'];
									$subject_id = $row['subject_id'];
									/* subject */
									$subject_query = mysql_query("select * from subject where code = '$subject_id'")or die(mysql_error());
									while($subject_row=mysql_fetch_array($subject_query)){
									?>
									<tr>
                                    <td><?php echo $subject_row['code']; ?></td> 
                                    <td><?php echo $subject_row['title']; ?></td> 
                                    <td><?php echo $subject_row['unit']; ?></td>  
                                                                
                                 
																
                               	<!--      <td><?php echo $row['term']; ?></td>                                                                              
                                    <td><?php echo $row['year']; ?></td>         
							 <td><?php echo $row['session']; ?></td>     --> 
								
									 <td><?php echo  $row['remarks']; ?></td>
									 
									<?php include('toolttip_edit_delete.php'); ?>
                              <!--         <td class="act" width="100">
									
                           <!--             <a rel="tooltip"  title="Delete" id="<?php echo $id; ?>" href="#delete_student<?php echo $id; ?>" data-toggle="modal"    class="btn btn-danger"><i class="icon-trash icon-large"></i></a> -->
                                        <?php include('delete_grade_modal.php'); ?>
									    <!--       	<a href="#edit_student<?php echo $id; ?>" data-toggle="modal"   rel="tooltip"  title="Edit" id="e<?php echo $id; ?>" class="btn btn-success"><i class="icon-pencil icon-large"></i></a> -->
										<?php include('edit_gra.php'); ?>
                           <!--          </td>  -->
									
                                    </tr>
									<?php  }}  ?> 
									
									
								
                                </tbody>
								<tfoot>
								
						
								</tfoot>
                            </table>
							
							
								
					<div align="center">  <p><span class="red" style="font-size:16px">Credit Hours Taken :<?php  $total_credit; echo "$total_credit";?></span></p>
            
               
			
			</div>				
						
<hr>
							
							
							
					

              
						
							
					
							
									
					
                
			
			
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
