<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar.php'); ?>
<?php include "dbcon.php";?>


<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script> 
<?php
$query=mysql_query("select * from students where student_no='$session_id'")or die(mysql_error());
$row=mysql_fetch_array($query);
$year_level = $row['year_level'];
$term = $row['term'];
$status = $row['student_status'];
//$school_year = $row['year_level'];

//$_SESSION['session'] = $_POST['select'];

$quer=mysql_query("select * from `registration` where `student_no`='$session_id'  ORDER BY `reg_id` DESC LIMIT 1")or die(mysql_error());
					$row11=mysql_fetch_array($quer);	
					
					
					$_SESSION["session"] = $row11['session'];
 ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">
				<?php include('head.php'); ?>
				<div class="span12">
				
				</div>
				<div class="span2">
					<?php include('user_sidebar.php'); ?>
				</div>
				<div class="span10">
			<form id="form1"  method="post" action="show_ad_card.php">
            
            	<a style="font-size:25px">Year:&nbsp;<?php echo $year_level ; ?></a>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a style="font-size:25px">Term:&nbsp;<?php echo $term ; ?></a>
                        	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a style="font-size:25px">Session:&nbsp;<?php echo $_SESSION["session"] ; ?></a>
                        
				          <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">                      
                                <thead>
                                    <tr>
                                        <th width="50">Code</th>
                                        <th  width="400">Subject Title</th>
                                        <th  width="50">Units</th>                                 
                                                                                                                    
                                        <th>Remarks</th>                                                                                 
                                  
                                    </tr>
                                </thead>
                                <tbody>
								  <?php
                  //session_start(); 
				  //$course_no=0;
				  //$course_title=0;
			   for($i=0;$i<1;$i++)
			   {
				   $v=chr(65+$i);
				   $a1=@$_SESSION["$v".chr(65)];
				   $a2=@$_SESSION["$v".chr(66)];
				   $a3=@$_SESSION["$v".chr(67)];
				   $a4=@$_SESSION["$v".chr(68)];
				   
				  echo "<tr>";
			
			
			$get_year=$year_level ;
			
			if($term%2==0)	
		$get_term=1;
		else
		$get_term=2;
			// $result = mysql_query("select `course no.`,`cid` from course where term='$get_term' ORDER BY `cid` DESC");
			
			 $result = mysql_query("SELECT `subject_id`,`code` FROM `subject` WHERE `code` IN (SELECT `code` FROM `subject` AS sb JOIN `registration` AS rg ON sb.`code` = rg.`subject_id` WHERE rg.`student_no`='$session_id' and rg.`year`='$get_year' and rg.`term`='$term' AND sb.`year`<='$get_year') ");
			//$row=mysql_num_rows($var);
				$_SESSION['ye']=$get_year; 
				$_SESSION['te']=$term; 
				$_SESSION['d']='drop';
				// $Query="SELECT `course no.`,`cid`,`year`, `term` FROM `course`";
				// $result  = mysql_query($Query);
				  
				  echo  "<td><label><select class=\"red\" style=\"background-color:#fff\" type=\"text\" name=\"$v".chr(65)."\"  id=\"$v".chr(65)."\" value=\"$a1\">
      						<option ></option>";
				  while($row=mysql_fetch_array( $result))
				  {
				
				  		echo "<option value = ".$row['subject_id']."> ".$row['code']."</option>";
						
				  }
				  
				 
				   echo("</label></td>");
				   echo "<td><label><input type=\"text\" name=\"$v".chr(66)."\"  id=\"$v".chr(66)."\" id=\"$v".chr(66)."\"  id=\"$v".chr(66)."\" value=\"$a2\"  /></label></td>";
			       echo "<td><label><input type=\"text\" name=\"$v".chr(67)."\"  id=\"$v".chr(67)."\" value=\"$a3\" /></label></td>";
			       echo "<td><label><input type=\"text\" name=\"$v".chr(68)."\"  id=\"$v".chr(68)."\" value=\"$a4\" /> </label></td>";
			  }
			   
			   
			   ?>
                                 
                                </tbody>
                            </table>
                             <td><label>
                  <input type="hidden" name="" id="roll" value="<?php echo @$session_id;?>" />
                    <input type="button" value="&lt;&lt; Back " class="button" onclick="javascript: history.go(-1)" />
                     <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" id="submit" class="button" value="Next &gt;&gt;" /></td>
                  </label>&nbsp;</td>
                  
                 
                            
								
				</div>
			
			<!--	<?php include('grading_system.php') ?> -->
				
				
			</div>
		</div>
    </div>
    
    
      <script>
	
	  
  $(document).ready(function(){


    $(document).on("change", "#AA", function () {
                var id = $('#AA').val();
                var roll= $('#roll').val();
				
	//removing selected elements			
				 var id = $(this).val();
    $('#BA option[value='+id+']').remove();
	
	
                $.ajax({
                    type:"POST",
                    data: {id: id, roll: roll},
                    url: "check_pre_req11.php?id="+id,
                    dataType: "json",
                    success: function(data){
                      if(data[2] == 0){
					  
					  
                        $( "#AB" ).val(data['title']);
                        $( "#AC" ).val(data['unit']);
						//  alert(roll);
                      }else if(data[2] == 1){
                        alert(data[1]);
                        $('#AA').val('');
                        $( "#AB" ).val('');
                        $( "#AC" ).val('');
                      }
                }});
               
          });
		  
		   $(document).on("change", "#BA", function () {
                var id = $('#BA').val();
                var roll= $('#roll').val();
				
				 var id = $(this).val();
				 var id1 = $('#AA').val();
				
    $('#CA option[value='+id+']').remove();
	 $('#CA option[value='+id1+']').remove();
	 
	 
                $.ajax({
                    type:"POST",
                    data: {id: id, roll: roll},
                    url: "check_pre_req11.php?id="+id,
                    dataType: "json",
                    success: function(data){
                      if(data[2] == 0){
                        $( "#BB" ).val(data['title']);
                        $( "#BC" ).val(data['unit']);
						//alert(id);
                      }else if(data[2] == 1){
                        alert(data[1]);
                        $('#BA').val('');
                        $( "#BB" ).val('');
                        $( "#BC" ).val('');
                      }
                }});
               
          });
		  
		  
		  
		   $(document).on("change", "#CA", function () {
                var id = $('#CA').val();
				  var roll= $('#roll').val();
				
				var id1 = $('#AA').val();
				var id2 = $('#BA').val();
				
				 var id = $(this).val();
    $('#DA option[value='+id+']').remove();
	 $('#DA option[value='+id1+']').remove();
	  $('#DA option[value='+id2+']').remove();
	
				
                $.ajax({
                    type:"POST",
                    data: {id: id, roll: roll},
                    url: "check_pre_req11.php?id="+id,
                    dataType: "json",
                    success: function(data){
                      if(data[2] == 0){
                        $( "#CB" ).val(data['title']);
                        $( "#CC" ).val(data['unit']);
                      }else if(data[2] == 1){
                        alert(data[1]);
                        $('#CA').val('');
                        $( "#CB" ).val('');
                        $( "#CC" ).val('');
                      }
                }});
               
          });
		  
		  
		  $(document).on("change", "#DA", function () {
                var id = $('#DA').val();
                var roll= $('#roll').val();
				
				
				var id1 = $('#AA').val();
				var id2 = $('#BA').val();
				var id3 = $('#CA').val();
				 var id = $(this).val();
    $('#EA option[value='+id+']').remove();
	 $('#EA option[value='+id1+']').remove();
	  $('#EA option[value='+id2+']').remove();
	   $('#EA option[value='+id3+']').remove();
				
				
				
				
                $.ajax({
                    type:"POST",
                    data: {id: id, roll: roll},
                    url: "check_pre_req11.php?id="+id,
                    dataType: "json",
                    success: function(data){
                      if(data[2] == 0){
                        $( "#DB" ).val(data['title']);
                        $( "#DC" ).val(data['unit']);
                      }else if(data[2] == 1){
                        alert(data[1]);
                        $('#DA').val('');
                        $( "#DB" ).val('');
                        $( "#DC" ).val('');
                      }
                }});
               
          });

		  
		  $(document).on("change", "#EA", function () {
                var id = $('#EA').val();
                var roll= $('#roll').val();
				
				var id1 = $('#AA').val();
				var id2 = $('#BA').val();
				var id3 = $('#CA').val();
				var id4 = $('#DA').val();
				 var id = $(this).val();
    $('#FA option[value='+id+']').remove();
	 $('#FA option[value='+id1+']').remove();
	  $('#FA option[value='+id2+']').remove();
	   $('#FA option[value='+id3+']').remove();
	    $('#FA option[value='+id4+']').remove();
				
				
                $.ajax({
                    type:"POST",
                    data: {id: id, roll: roll},
                    url: "check_pre_req11.php?id="+id,
                    dataType: "json",
                    success: function(data){
                      if(data[2] == 0){
                        $( "#EB" ).val(data['title']);
                        $( "#EC" ).val(data['unit']);
                      }else if(data[2] == 1){
                        alert(data[1]);
                        $('#EA').val('');
                        $( "#EB" ).val('');
                        $( "#EC" ).val('');
                      }
                }});
               
          });

		  $(document).on("change", "#FA", function () {
                var id = $('#FA').val();
                var roll= $('#roll').val();
				
				var id1 = $('#AA').val();
				var id2 = $('#BA').val();
				var id3 = $('#CA').val();
				var id4 = $('#DA').val();
				var id5 = $('#EA').val();
				 var id = $(this).val();
    $('#GA option[value='+id+']').remove();
	 $('#GA option[value='+id1+']').remove();
	  $('#GA option[value='+id2+']').remove();
	   $('#GA option[value='+id3+']').remove();
	    $('#GA option[value='+id4+']').remove();
		 $('#GA option[value='+id5+']').remove();
				
                $.ajax({
                    type:"POST",
                    data: {id: id, roll: roll},
                    url: "check_pre_req11.php?id="+id,
                    dataType: "json",
                    success: function(data){
                      if(data[2] == 0){
                        $( "#FB" ).val(data['title']);
                        $( "#FC" ).val(data['unit']);
                      }else if(data[2] == 1){
                        alert(data[1]);
                        $('#FA').val('');
                        $( "#FB" ).val('');
                        $( "#FC" ).val('');
                      }
                }});
               
          });

		   $(document).on("change", "#GA", function () {
                var id = $('#GA').val();
                var roll= $('#roll').val();
				
				var id1 = $('#AA').val();
				var id2 = $('#BA').val();
				var id3 = $('#CA').val();
				var id4 = $('#DA').val();
				var id5 = $('#EA').val();
				var id6 = $('#FA').val();
				 var id = $(this).val();
    $('#HA option[value='+id+']').remove();
	 $('#HA option[value='+id1+']').remove();
	  $('#HA option[value='+id2+']').remove();
	   $('#HA option[value='+id3+']').remove();
	    $('#HA option[value='+id4+']').remove();
		 $('#HA option[value='+id5+']').remove();
		  $('#HA option[value='+id6+']').remove();
				
				
				
                $.ajax({
                    type:"POST",
                    data: {id: id, roll: roll},
                    url: "check_pre_req11.php?id="+id,
                    dataType: "json",
                    success: function(data){
                      if(data[2] == 0){
                        $( "#GB" ).val(data['title']);
                        $( "#GC" ).val(data['unit']);
                      }else if(data[2] == 1){
                        alert(data[1]);
                        $('#GA').val('');
                        $( "#GB" ).val('');
                        $( "#GC" ).val('');
                      }
                }});
               
          });

		  $(document).on("change", "#HA", function () {
                var id = $('#HA').val();
                var roll= $('#roll').val();
				
				var id1 = $('#AA').val();
				var id2 = $('#BA').val();
				var id3 = $('#CA').val();
				var id4 = $('#DA').val();
				var id5 = $('#EA').val();
				var id6 = $('#FA').val();
				var id7 = $('#GA').val();
				 var id = $(this).val();
    $('#IA option[value='+id+']').remove();
	 $('#IA option[value='+id1+']').remove();
	  $('#IA option[value='+id2+']').remove();
	   $('#IA option[value='+id3+']').remove();
	    $('#IA option[value='+id4+']').remove();
		 $('#IA option[value='+id5+']').remove();
		  $('#IA option[value='+id6+']').remove();
		   $('#IA option[value='+id7+']').remove();
				
				
				
                $.ajax({
                    type:"POST",
                    data: {id: id, roll: roll},
                    url: "check_pre_req11.php?id="+id,
                    dataType: "json",
                    success: function(data){
                      if(data[2] == 0){
                        $( "#HB" ).val(data['title']);
                        $( "#HC" ).val(data['unit']);
                      }else if(data[2] == 1){
                        alert(data[1]);
                        $('#HA').val('');
                        $( "#HB" ).val('');
                        $( "#HC" ).val('');
                      }
                }});
               
          });
		  
		  
		   $(document).on("change", "#IA", function () {
                var id = $('#IA').val();
                var roll= $('#roll').val();
				
				var id1 = $('#AA').val();
				var id2 = $('#BA').val();
				var id3 = $('#CA').val();
				var id4 = $('#DA').val();
				var id5 = $('#EA').val();
				var id6 = $('#FA').val();
				var id7 = $('#GA').val();
				var id8 = $('#HA').val();
				 var id = $(this).val();
    $('#JA option[value='+id+']').remove();
	 $('#JA option[value='+id1+']').remove();
	  $('#JA option[value='+id2+']').remove();
	   $('#JA option[value='+id3+']').remove();
	    $('#JA option[value='+id4+']').remove();
		 $('#JA option[value='+id5+']').remove();
		  $('#JA option[value='+id6+']').remove();
		   $('#JA option[value='+id7+']').remove();
		    $('#JA option[value='+id8+']').remove();
				
				
                $.ajax({
                    type:"POST",
                    data: {id: id, roll: roll},
                    url: "check_pre_req11.php?id="+id,
                    dataType: "json",
                    success: function(data){
                      if(data[2] == 0){
                        $( "#IB" ).val(data['title']);
                        $( "#IC" ).val(data['unit']);
                      }else if(data[2] == 1){
                        alert(data[1]);
                        $('#IA').val('');
                        $( "#IB" ).val('');
                        $( "#IC" ).val('');
                      }
                }});
               
          });
		  
		  
		  $(document).on("change", "#JA", function () {
                var id = $('#JA').val();
                var roll= $('#roll').val();
				
                $.ajax({
                    type:"POST",
                    data: {id: id, roll: roll},
                    url: "check_pre_req11.php?id="+id,
                    dataType: "json",
                    success: function(data){
                      if(data[2] == 0){
                        $( "#JB" ).val(data['title']);
                        $( "#JC" ).val(data['unit']);
                      }else if(data[2] == 1){
                        alert(data[1]);
                        $('#JA').val('');
                        $( "#JB" ).val('');
                        $( "#JC" ).val('');
                      }
                }});
               
          });
		  

  });   
</script>

<?php include('footer.php') ?>