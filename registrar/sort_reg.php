<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_dasboard.php'); ?>
<?php 
	$get_id = $_GET['id']; 
	$school_year = $_POST['school_year'];
	$semester = $_POST['semester'];
$student_query=mysql_query("select * from students where student_no = '$get_id'")or die(mysql_error());
			$row = mysql_fetch_array($student_query);
	

	$student_id = $row['student_no'];
	//$get_id = $student_id;
?>
    <div class="container">
		
		<div class="margin-top">
			<div class="row">	
			<div class="span12">
			<?php
			$student_query=mysql_query("select * from students where student_no = '$get_id'")or die(mysql_error());
			$row = mysql_fetch_array($student_query);
				//$school_year = $row['year_level'];
			$term = $row['term'];
			$student_status = $row['status'];
			?>
	
				<div class="name">
				<span>STUDENT ROLL:&nbsp;<strong><?php echo $row['student_no']; ?></strong></span>
				<span>STUDENT NAME:&nbsp;<strong><?php echo $row['firstname']." ".$row['lastname']; ?></strong></span>
				<span>COURSE:&nbsp;<strong><?php echo $row['course']; ?></strong></span>
				<span id="print_right">
				<span>Year &nbsp;<?php echo $row['year_level']; ?> :<strong> <?php echo $row['term']; ?> &nbsp; term</strong></span>
				<span>Status:<strong><?php echo $row['status']; ?> </strong></span>
				</span>
			</div>
			<hr>
			<?php include('grade_option1.php'); ?>	
			<hr>
            
            
            
			</div>
            
			<div class="span2">
			<div id="add">
						<hr>Year:<strong><?php echo $school_year; ?></strong></hr>
            <hr>Term:<strong><?php echo $semester; ?></strong></hr>	
              <hr>Session:<strong><?php $user_query = mysql_query("select * from registration where student_no = '$student_id' and term like '%$semester%' and year like '%$school_year%' ")or die(mysql_error()); $row = mysql_fetch_array($user_query); $ses11=$row['session']; echo $row['session']; ?></strong></hr>	
				
                 <?php     $total_credit = 0.00;
			

			 
			 $var = mysql_query("select * from registration where student_no = '$student_id' and term = '$semester' and year = '$school_year' and session = '$ses11' ");
			 $rows = mysql_num_rows($var);
			 for($i=0 ; $i<$rows ; $i++)
			 {
			   $ary = mysql_fetch_array($var);
			  
             
            $total_credit = $ary["credit_hours"]+$total_credit;
			$total_credit=number_format($total_credit, 2);
			   
	}
			    ?>   
                
                
                
                
                			
			</div>
			</div>
			<div class="span10">
            
            
            
                            <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">                      
                                <thead>
                                    <tr>
                                        <th>Code</th>
                                        <th>Subject</th>
                                        <th>Units</th>                                 
                                                                                                                                                                
                                        <th>Remarks</th>                                                                                                                                                                    
                                        <th class="act">Action</th>                                                                                                                                                                    
                                                                                                          
                                  
                                    </tr>
                                </thead>
                                <tbody>
								 
                          <?php  $user_query=mysql_query("select * from registration where student_no = '$student_id' and year = '$school_year' and term = '$semester'")or die(mysql_error());
									while($row=mysql_fetch_array($user_query)){
									$id=$row['reg_id'];
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
                                                                  
                                        
									<!--									
                                    <td><?php echo $row['term']; ?></td>                                                                              
                                    <td><?php echo $row['year']; ?></td>    
									-->
									
									
									
								 <td><?php echo $remarks; ?></td> 
									<?php include('toolttip_edit_delete.php'); ?>
                                
										
                                    <td class="act" width="100">
									
                                        <a rel="tooltip"  title="Delete" id="<?php echo $id; ?>" href="#delete_student<?php echo $id; ?>" data-toggle="modal"    class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
                                        <?php include('delete_grade_modal.php'); ?>
										<a href="#edit_student<?php echo $id; ?>" data-toggle="modal"   rel="tooltip"  title="Edit" id="e<?php echo $id; ?>" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
										<?php include('edit_gra.php'); ?>
                                    </td>
                                    </tr>
									<?php  }}  ?>
                           
                                </tbody>
									<tfoot>
								<!--	<?php include('sort_unit_table.php'); ?>
									<?php include('sort_gwa_table.php'); ?>
									<?php include('cwa_table.php'); ?> -->
						
								</tfoot>
                            </table>
									<div align="center">  <p><span class="red" style="font-size:16px">Credit Hours Taken :<?php  $total_credit; echo "$total_credit";?></span></p>
            
               
			
			</div>				
			
			</div>		
			</div>
           
		</div>
    </div>
<?php include('footer.php') ?>


		