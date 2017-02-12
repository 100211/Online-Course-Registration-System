	<div id="edit_student<?php echo $id; ?>" class="modal hide fade" tabindex="-1"  role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-body">
			<div class="alert alert-info">Add Grade</div>
			<form class="form-horizontal" method="post">
			<input type="hidden" name="school_year" id="school_year" value="<?php echo $get_id; ?>" /> 
			<input type="hidden" name="grade_id" value="<?php echo $id; ?>" /> 
			<div class="control-group">
				<?php
				
		$student_query = mysql_query("select * from students where student_no = '$get_id' ");
		$student_row = mysql_fetch_array($student_query);
		$student_course_id = $student_row['course'];
		$term = $student_row['term'];
		
		$course_query = mysql_query("select * from course where code = '$student_course_id'")or die(mysql_error());
		$course_row = mysql_fetch_array($course_query);
		$course_id =  $course_row['course_id'];
	?>	
				<input type="hidden" value="<?php echo $term ?>"  name="term">
				<label class="control-label" for="inputEmail">Course No.</label>
				<div class="controls">
			
				
				<input type="hidden" name="code" value="<?php echo $subject_row['subject_id'];  ?>">
				<strong><?php echo $subject_row['code'];  ?></strong>
				
				</div>
			
            		</div> 
            			<?php $course_query = mysql_query("select * from result where student_id= '$get_id' and grade_id = '$id'")or die(mysql_error());
		$course_row = mysql_fetch_array($course_query);
		
		
		//$course_point =  $course_row['Grade_Point'];
		?>
        
        <?php $course_query = mysql_query("select * from registration where student_no= '$get_id' and reg_id = '$id'")or die(mysql_error());
		$course_row = mysql_fetch_array($course_query);
		////$course_grade =  $course_row['Letter_Grade']; 
		
		$course_point =  $course_row['course_title'];
		$credit =  $course_row['credit_hours'];
		$remark =  $course_row['remarks'];
		
		?>
           <div class="control-group">
				<label class="control-label" for="inputPassword">Course No.</label>
				<div class="controls">
                
                
				<select name="ave" id ="ave" required>
	
				<option ><?php echo $subject_row['code']; ?></option>			   
     
   <?php 
    $result = mysql_query("SELECT * FROM `subject` WHERE 1 ");
   
   
    while($row=mysql_fetch_array( $result))
				  {
				
				  		echo "<option value = ".$row['subject_id']."> ".$row['code']."</option>";
						
				  }
   ?>
				</select>
				</div>
			</div> 
            
            <div class="control-group">
				<label class="control-label" for="inputPassword">Course Title</label>
				<div class="controls">
				 <input  name="po"  id="po" value="<?php echo $course_point?>" />
				</div>
			</div>
            
            
            <div class="control-group">
				<label class="control-label" for="inputPassword">Credits/hr</label>
				<div class="controls">
				 <input  name="pon"  id="pon" value="<?php echo $credit?>" />
				</div>
			</div>
            
            
             <div class="control-group">
				<label class="control-label" for="inputPassword">Remarks</label>
				<div class="controls">
				<select name="re" id ="re" >
	
				<option ><?php echo $remark; ?></option>			   
       <option value='Retake'>Retake</option>
      <option value='Re-Retake'>Re-Retake</option>
	 
				</select>
				</div>
			</div>
            
            
            
			<!--
			
					<div class="control-group">
				<label class="control-label" for="inputEmail">Semester</label>
				<div class="controls">
				<select name="semester" >
					<option><?php echo $row['semester']; ?></option>
					<option>1st</option>
					<option>2nd</option>
					<option>Summer</option>
				</select>
				</div>
			</div>
					<div class="control-group">
				<label class="control-label" for="inputEmail">School Year</label>
				<div class="controls">
				<select name="sy" >
				<option><?php echo $row['school_year']; ?></option>
				<option>First Year</option>
				<option>Second Year</option>
				<option>Third Year</option>
				<option>Fourth Year</option>
				</select>
				</div>
			</div>
			-->
			
				
					
	
			
			<div class="control-group">
				<div class="controls">
				<button name="edit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Save</button>
				</div>
			</div>
    </form>
    <script>
	
	  
  $(document).ready(function(){
  


    $(document).on("change", "#ave", function () {
                var id = $('#ave').val();
                 var roll= $('#school_year').val();
				
	//removing selected elements			
				// var id = $(this).val();

	
                $.ajax({
                   
           type: "POST",
		   url: "setvalue1.php",
		    data: {id:id,roll:roll},
               dataType: "json",
		 
	   success: function(data){
					
					
					 
					  
					$( "#po" ).val(data['title']);
						
                        $( "#pon" ).val(data['unit']);
						
						
					
                      
						//  alert(id);
                     
                }});
               
          });
		    });
			
			</script>
		</div>
		<div class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
		</div>
    </div>
	
	<?php
	if (isset($_POST['edit'])){
	$school_year=$_POST['school_year'];
	$grade_id=$_POST['grade_id'];
	//$code=$_POST['code'];
	$ave=$_POST['ave'];
	$term=$_POST['po'];
	$term1=$_POST['pon'];
	$re=$_POST['re'];
	
/* 	$sy=$_POST['sy']; */
/* 	$semester=$_POST['semester']; */

	mysql_query("update registration set subject_id = '$ave' , course_title = '$term', credit_hours='$term1' where reg_id = '$grade_id' ") or die(mysql_error());
	


		?>
 
<script>
   window.location = "view_reg.php<?php echo '?id='.$get_id;  ?>";    
</script>
<?php		
	}
	?>
	
	