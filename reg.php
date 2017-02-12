<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar.php'); ?>
<?php include "dbcon.php";?>

<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script> 
<?php
$query=mysql_query("select * from students where student_no='$session_id'")or die(mysql_error());
$row=mysql_fetch_array($query);
//$year_level = $row['year_level'];
//$term = $row['term'];
$status = $row['student_status'];
//$school_year = $row['year_level'];

$_SESSION['session'] = $_POST['select'];

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
			<form id="form1"  method="post" action="show_registration_card.php">
            
            
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a style="font-size:25px">  Year: <?php  echo  $_SESSION['year_level']; ?> </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a style="font-size:25px">   Term:<?php  echo $_SESSION['term'];  ?></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a style="font-size:25px">Session:&nbsp;<?php  echo $_SESSION['session']; ?></a></br>
            
            <?php 
			$user11=mysql_query("SELECT distinct `year`, `term` FROM `result` WHERE `student_id`='$session_id' and `year`=(select max(`year`) from `result`  where `student_id`='$session_id') and `term`=(select max(`term`) from `result`  where `student_id`='$session_id')")or die(mysql_error());

$ro11=mysql_fetch_array($user11);

$Y=$ro11['year'];

$T=$ro11['term'];
		
			?>
            	
                          
                          <?php 
                            $get_year=@$_SESSION['year_level'];
			$get_term=@$_SESSION['term'];
			
			
		if($get_term==1){
				   $res = mysql_query("select * from subject as sb join result as rs where sb.term='$get_term' and sb.year<='$get_year' and rs.sub_code=sb.code and  rs.`student_id`='$session_id' and rs.Grade_Point='0' and rs.`year`=(select max(`year`) from `result`  where `student_id`='$session_id')");
				  }
				  
				  else
				  
				  {
				  
			//for long/short term 4-2
				 
				  if($Y==4 && $T=2 ){
				  
				   $res = mysql_query("select * from subject as sb join result as rs where sb.term='$get_term' and sb.year<='$get_year' and rs.sub_code=sb.code and  rs.`student_id`='$session_id' and rs.Grade_Point='0' and rs.`year`=(select max(`year`) from `result`  where `student_id`='$session_id')");
				  }
				  
				  else
				  {
				  $res = mysql_query("select * from subject as sb join result as rs where sb.term='$get_term' and sb.year<='$get_year' and rs.sub_code=sb.code and  rs.`student_id`='$session_id' and rs.Grade_Point='0' and rs.`year`=(select max(`year`-1) from `result`  where `student_id`='$session_id')");
				  
				  }
				  
				 // 
				  
				  }
				 
				 
				  // $result = mysql_query("select * from subject as sb join result as rs where sb.term='$get_term' and sb.year<='$get_year' and rs.sub_code=sb.code and rs.Grade_Point='0' and  rs.`student_id`='$session_id' and rs.`year`=(select max(`year`) from `result`)");
				  
				  
				  
				$num_rows = mysql_num_rows($res);
				if($num_rows>0){
				       echo  '<div id="testdiv1" >';  
					   
                        ?>
                        
                        
                        
                        <br /><div style="color:#FF0000">Retake Course Option :</div>
                        
                        <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">                      
                           <thead>
                                    <tr>
                                        <th width="50">COURSE NO.</th>
                                        <th  width="400">COURSE TITLE</th>
                                        <th  width="50">CREDIT HOURS</th>                                 
                                                                                                                    
                                        <th>REMARKS</th>                                                                                 
                                  
                                    </tr>
                                </thead> 
                                <tbody>
								  <?php
                  //session_start(); 
				  //$course_no=0;
				  //$course_title=0;
				  	$get_year=@$_SESSION['year_level'];
			$get_term=@$_SESSION['term'];
			
			
			if($get_term==1){
				   $res = mysql_query("select * from subject as sb join result as rs where sb.term='$get_term' and sb.year<='$get_year' and rs.sub_code=sb.code and  rs.`student_id`='$session_id' and rs.Grade_Point='0' and rs.`year`=(select max(`year`) from `result`  where `student_id`='$session_id') ");
				  
				 }
				 
				 else
				 {
				 
				  
			//for long/short term 4-2
				 
				  if($Y==4 && $T=2 ){
				  
				   $res = mysql_query("select * from subject as sb join result as rs where sb.term='$get_term' and sb.year<='$get_year' and rs.sub_code=sb.code and  rs.`student_id`='$session_id' and rs.Grade_Point='0' and rs.`year`=(select max(`year`) from `result`  where `student_id`='$session_id')");
				  }
				  
				  else
				  {
				  $res = mysql_query("select * from subject as sb join result as rs where sb.term='$get_term' and sb.year<='$get_year' and rs.sub_code=sb.code and  rs.`student_id`='$session_id' and rs.Grade_Point='0' and rs.`year`=(select max(`year`-1) from `result`  where `student_id`='$session_id')");
				  
				  }
				  
				 // 
				  
				 }
				 
				  // $result = mysql_query("select * from subject as sb join result as rs where sb.term='$get_term' and sb.year<='$get_year' and rs.sub_code=sb.code and rs.Grade_Point='0' and  rs.`student_id`='$session_id' and rs.`year`=(select max(`year`) from `result`)");
				  
				  
				  
				$num_rows = mysql_num_rows($res);
			
		/*	$qu = mysql_query("SELECT COUNT(*) as COUNTALL FROM   `result` where `student_id`='$session_id' and `sub_code`='CSE 1103' and `Grade_Point`='0'");
			
				while($got=mysql_fetch_array($qu)){
    $count = $got['COUNTALL'];
}
echo $count;*/
			
				  
			   for($i=0;$i<$num_rows;$i++)
			   {
				   $v=chr(65+$i);
				   $a1=@$_SESSION["$v".chr(65)];
				   $a2=@$_SESSION["$v".chr(66)];
				   $a3=@$_SESSION["$v".chr(67)];
				   $a4=@$_SESSION["$v".chr(68)];
				   
				  echo "<tr>";
			
			$get_year=@$_SESSION['year_level'];
			$get_term=@$_SESSION['term'];
			
		
			// $result = mysql_query("select `course no.`,`cid` from course where term='$get_term' ORDER BY `cid` DESC");
			if($get_term==1){
			 $result = mysql_query("select * from subject as sb join result as rs where sb.term='$get_term' and sb.year<='$get_year' and rs.sub_code=sb.code and  rs.`student_id`='$session_id' and rs.Grade_Point='0' and rs.`year`=(select max(`year`) from `result`  where `student_id`='$session_id')");
			 }
			 
			 
			 else
			 
			 {
			 
				  
			//for long/short term 4-2
				 
				  if($Y==4 && $T=2 ){
				  
				   $result = mysql_query("select * from subject as sb join result as rs where sb.term='$get_term' and sb.year<='$get_year' and rs.sub_code=sb.code and  rs.`student_id`='$session_id' and rs.Grade_Point='0' and rs.`year`=(select max(`year`) from `result`  where `student_id`='$session_id')");
				  }
				  
				  else
				  {
				  $result = mysql_query("select * from subject as sb join result as rs where sb.term='$get_term' and sb.year<='$get_year' and rs.sub_code=sb.code and  rs.`student_id`='$session_id' and rs.Grade_Point='0' and rs.`year`=(select max(`year`-1) from `result`  where `student_id`='$session_id')");
				  
				  }
				  
				 // 
				  
			 }
			//$row=mysql_num_rows($var);
				
				// $Query="SELECT `course no.`,`cid`,`year`, `term` FROM `course`";
				// $result  = mysql_query($Query);
				  
				  echo  "<td><label><select  class=\"red\" style=\"background-color:#fff\" type=\"text\" name=\"$v".chr(65)."\"  id=\"$v".chr(65)."\" value=\"$a1\">
      						<option ></option>";
				  while($row=mysql_fetch_array( $result))
				  {
				
				  		echo "<option value = ".$row['subject_id']."> ".$row['code']."</option>";
						
				  }
				  
				 
				   echo("</label></td>");
				   echo "<td><label><input type=\"text\" name=\"$v".chr(66)."\"  id=\"$v".chr(66)."\" id=\"$v".chr(66)."\"  id=\"$v".chr(66)."\" value=\"$a2\"  readonly/></label></td>";
			       echo "<td><label><input type=\"text\" name=\"$v".chr(67)."\"  id=\"$v".chr(67)."\" value=\"$a3\" readonly/></label></td>";
			       echo "<td><label><input type=\"text\" name=\"$v".chr(68)."\"  id=\"$v".chr(68)."\" value=\"$a4\" readonly/> </label></td>";
			  }
			   
			  
			  
			  
			  
			  
			  
			   
			   ?>
                     
                            
                                </tbody>
                                
                       
                            </table> <?php echo '</div>'; } ?>
                            
                            <br /> <div>
Show or Hide Fresh Course Option : <input type="checkbox" id="chkStatus" /> <br /><br />
<div id="testdiv" style="display: none;">


<p align="right"> <!--<INPUT type="button" id="aw" value="Add Row" float: "right" onClick="addRow('example1')" />-->

<img src="registrar/upload/ty.png" alt="Warning!"> <INPUT type="button" value="Remove Extra Fields" float: "right" onClick="deleteRow('example1')" /></p>
    
    
    <!--<input type="text" id="co" name="co"/>--> 
    
  

<table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">     
           
                                <thead>
                                    <tr>
                                    <th width="50"></th>
                                       <th width="50">COURSE NO.</th>
                                        <th  width="400">COURSE TITLE</th>
                                        <th  width="50">CREDIT HOURS</th>                                 
                                                                                                                    
                                        <th>REMARKS</th>                                                                            
                                  
                                    </tr>
                                </thead>
                               
 <tbody id="example1">


					  <?php
					//  echo 'Value :'.@$_GET['co'];
					  $_SESSION['num_rt']=$num_rows;
					
					  
								  // echo "<p>The button was pressed <span id=\"displayCount\">0</span> times.</p>";
                  //session_start(); 
				  //$course_no=0;
	
				  //$course_title=0;
		$ask=mysql_query("select * from students where student_no='$session_id'");
		
$tou=mysql_fetch_array($ask);
	$st = $tou['student_status'];
 
 //table = document.getElementById(#example1);
 
 //$rowCount = example1.rows.length;

if($num_rows==0){
			   for($i=$num_rows;$i<(15);$i++)
			   {
				   $v=chr(65+$i);
				   $a1=@$_SESSION["$v".chr(65)];
				   $a2=@$_SESSION["$v".chr(66)];
				   $a3=@$_SESSION["$v".chr(67)];
				   $a4=@$_SESSION["$v".chr(68)];
				   
				  echo "<tr>";
			
			$get_year=@$_SESSION['year_level'];
			$get_term=@$_SESSION['term'];
			
	if($get_year==1 && $get_term==1 || $get_year==1 && $get_term==2){
			
			$get_year=@$_SESSION['year_level'];
			$get_term=@$_SESSION['term'];
			$result = mysql_query("select `code`,`subject_id` from subject where term='$get_term' and year<='$get_year'");
			}
		else	 $result = mysql_query("SELECT `subject_id`,`code`FROM `subject`WHERE `code` NOT IN (SELECT `code` FROM `subject` AS sb JOIN `registration` AS rg ON sb.`code` = rg.`subject_id` WHERE rg.`student_no`='$session_id' AND sb.`year`<='$get_year') and `year`<='$get_year' and `term`='$get_term'");
			//$row=mysql_num_rows($var);
				
				// $Query="SELECT `course no.`,`cid`,`year`, `term` FROM `course`";
				// $result  = mysql_query($Query);
				echo  "<td><input type=\"checkbox\" name=\"chk\"/></td>";
				  echo  "<td><label><select  class=\"red\" style=\"background-color:#fff\" type=\"text\" name=\"$v".chr(65)."\"  id=\"$v".chr(65)."\" value=\"$a1\"  required>
      						<option ></option>";
				  while($row=mysql_fetch_array( $result))
				  {
			
				  		echo "<option value = ".$row['subject_id']."> ".$row['code']."</option>";
						
				  }
				  
				 
				   echo("</label></td>");
				   echo "<td><label><input type=\"text\"  name=\"$v".chr(66)."\"  id=\"$v".chr(66)."\" id=\"$v".chr(66)."\"  id=\"$v".chr(66)."\" value=\"$a2\"  readonly/></label></td>";
			       echo "<td><label><input type=\"text\" name=\"$v".chr(67)."\"  id=\"$v".chr(67)."\" class='txt' value=\"$a3\" readonly/></label></td>";
			       echo "<td><label><input type=\"text\" name=\"$v".chr(68)."\"  id=\"$v".chr(68)."\" value=\"$a4\" readonly/> </label></td>";
			 }          
                  }
				  
			else	{
			   for($i=$num_rows;$i<(15);$i++)
			   {
				   $v=chr(65+$i);
				   $a1=@$_SESSION["$v".chr(65)];
				   $a2=@$_SESSION["$v".chr(66)];
				   $a3=@$_SESSION["$v".chr(67)];
				   $a4=@$_SESSION["$v".chr(68)];
				   
				  echo "<tr>";
			
			$get_year=@$_SESSION['year_level'];
			$get_term=@$_SESSION['term'];
			
	if($get_year==1 && $get_term==1 || $get_year==1 && $get_term==2){
			
			$get_year=@$_SESSION['year_level'];
			$get_term=@$_SESSION['term'];
			$result = mysql_query("select `code`,`subject_id` from subject where term='$get_term' and year<='$get_year'");
			}
		else	 $result = mysql_query("SELECT `subject_id`,`code`FROM `subject`WHERE `code` NOT IN (SELECT `code` FROM `subject` AS sb JOIN `registration` AS rg ON sb.`code` = rg.`subject_id` WHERE rg.`student_no`='$session_id' AND sb.`year`<='$get_year') and `year`<='$get_year' and `term`='$get_term'");
			//$row=mysql_num_rows($var);
				
				// $Query="SELECT `course no.`,`cid`,`year`, `term` FROM `course`";
				// $result  = mysql_query($Query);
				echo  "<td><input type=\"checkbox\" name=\"chk\"/></td>";
				  echo  "<td><label><select  class=\"red\" style=\"background-color:#fff\" type=\"text\" name=\"$v".chr(65)."\"  id=\"$v".chr(65)."\" value=\"$a1\" required>
      						<option ></option>";
				  while($row=mysql_fetch_array( $result))
				  {
			
				  		echo "<option value = ".$row['subject_id']."> ".$row['code']."</option>";
						
				  }
				  
				 
				   echo("</label></td>");
				   echo "<td><label><input type=\"text\"  name=\"$v".chr(66)."\"  id=\"$v".chr(66)."\" id=\"$v".chr(66)."\"  id=\"$v".chr(66)."\" value=\"$a2\"  readonly/></label></td>";
			       echo "<td><label><input type=\"text\" name=\"$v".chr(67)."\"  id=\"$v".chr(67)."\" class='txt' value=\"$a3\" readonly/></label></td>";
			       echo "<td><label><input type=\"text\" name=\"$v".chr(68)."\"  id=\"$v".chr(68)."\" value=\"$a4\" readonly/> </label></td>";
			 }          
                  }  
				  
				  
				  
				  
				  
				          
			   ?>
                       </tbody>
                                
                       
                            </table>
</div>
</div>
                          <tr id="summation">
		<td>&nbsp;</td>
		<td align="right">Total Credits :</td>
		<td align="center"><span id="sum">0</span></td>
	</tr><label>
    
   

                  <input type="hidden" name="" id="roll" value="<?php echo @$session_id;?>" />
                <input type="button" value="&lt;&lt; Back " class="button" onclick="javascript: history.go(-1)" />
                  <p align="right">      <input type="submit" name="submit" id="submit" class="button" value="Next &gt;&gt;"  onClick="addRow('example1')"/> </p>
              
                  
                 
                            
								
				</div>
			
			<!--	<?php include('grading_system.php') ?> -->
				
				
			</div>
		</div>
    </div>
    <script type="text/javascript">
$(function () {
$('#chkStatus').change(function () {
if ($('#chkStatus').is(':checked'))
$("#testdiv").fadeIn();
else
$('#testdiv').fadeOut();
});
});
</script>

 
      <script>
	
	  
  $(document).ready(function(){
  

var i1 = $('#AC').val();
				var i2 = $('#BC').val();
				var i3 = $('#CC').val();
				var i4 = $('#DC').val();
				var i5 = $('#EC').val();
				var i6 = $('#FC').val();
				var i7 = $('#GC').val();
				var i8 = $('#HC').val();
				var i9 = $('#IC').val();
				var i10 = $('#JC').val();
				var i11= $('#KC').val();
				

 document.getElementById("BA").disabled = true;
  document.getElementById("CA").disabled = true;
   document.getElementById("DA").disabled = true;
    document.getElementById("EA").disabled = true;
	 document.getElementById("FA").disabled = true;
	  document.getElementById("GA").disabled = true;
	   document.getElementById("HA").disabled = true;
	    document.getElementById("IA").disabled = true;
		 document.getElementById("JA").disabled = true;
		 document.getElementById("KA").disabled = true;
		  document.getElementById("LA").disabled = true;
 document.getElementById("MA").disabled = true;
 document.getElementById("NA").disabled = true;
  document.getElementById("OA").disabled = true;		 
 /*if(var i1 =3){
 
 
$('#AA').hide();
$('#AB').hide();
$('#AC').hide();
$('#AD').hide();}*/

    $(document).on("change", "#AA", function () {
                var id = $('#AA').val();
                var roll= $('#roll').val();
				
	//removing selected elements			
				 var id = $(this).val();
    $('#BA option[value='+id+']').remove();
	
	
                $.ajax({
                    type:"POST",
                    data: {id: id, roll: roll,id1: 0},
                    url: "check_pre_req.php?id="+id,
                    dataType: "json",
                    success: function(data){
					
					
					
                      if(data[2] == 0){
					  
					  
                        $( "#AB" ).val(data['title']);
						
                        $( "#AC" ).val(data['unit']);
						
						
						 $( "#AD" ).val(data[3]);
						
						
						
						//  $('#rtr').show();
						document.getElementById("BA").disabled = false;
						
							var i1 = $('#AC').val();
			
			
				
				
				var sum=0;
				sum=parseFloat(i1);
				//  alert(sum);

		
	$("#sum").html(sum.toFixed(2));
						
						
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
				 
				 
				 var tr = $('#AD').val();
			
    $('#CA option[value='+id+']').remove();
	 $('#CA option[value='+id1+']').remove();
	 
	 
                $.ajax({
                    type:"POST",
                    data: {id: id, roll: roll,id1: id1},
                    url: "check_pre_req.php?id="+id,
                    dataType: "json",
                    success: function(data){
                      if(data[2] == 0){
					  
					  if (tr == "Retake" || tr == "Re-Retake"){
					  
					   $( "#BB" ).val(data['title']);
                        $( "#BC" ).val(data['unit']);
						
						 $( "#BD" ).val(data[3]);
						//alert(data[3]);
							document.getElementById("CA").disabled = false;
											var i1 = $('#AC').val();
				var i2 = $('#BC').val();
			
			//var i10 = $('#AA').val();
				
					//	if(i10==25)
			//  alert(i10); 46,47
			
			
				var sum=0;
				sum=parseFloat(i1)+parseFloat(i2);
				
		
																					/*$rt=parseFloat(sum);
																					
																					if($rt<6){
																					document.getElementById("CA").disabled = false;
																					
																					}
																					*/
		
	$("#sum").html(sum.toFixed(2));
					  
					  }
					  
					  else if (data[4] == id || data[4] == null || data[4] == "no" ){
					  
					  $( "#BB" ).val(data['title']);
                        $( "#BC" ).val(data['unit']);
						
						 $( "#BD" ).val(data[3]);
						
							document.getElementById("CA").disabled = false;
											var i1 = $('#AC').val();
				var i2 = $('#BC').val();
			
			//var i10 = $('#AA').val();
				
					//	if(i10==25)
			//  alert(i10); 46,47
			
			
				var sum=0;
				sum=parseFloat(i1)+parseFloat(i2);
				
		
																					/*$rt=parseFloat(sum);
																					
																					if($rt<6){
																					document.getElementById("CA").disabled = false;
																					
																					}
																					*/
		
	$("#sum").html(sum.toFixed(2));
						
					 }
					 else{
                        
							 alert('You Have to take Lab Of Previous Taken Subject   ' /*+data[4]+ ' '*/);
					 $('#BA').val('');
                        $( "#BB" ).val('');
                        $( "#BC" ).val('');
							}
	
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
				var tr = $('#BD').val();
				
				 var id = $(this).val();
    $('#DA option[value='+id+']').remove();
	 $('#DA option[value='+id1+']').remove();
	  $('#DA option[value='+id2+']').remove();
	
				
                $.ajax({
                    type:"POST",
                    data: {id: id, roll: roll,id1: id2},
                    url: "check_pre_req.php?id="+id,
                    dataType: "json",
                    success: function(data){
                      if(data[2] == 0){
					  
					    if (tr == "Retake" || tr == "Re-Retake"){
						
						
						 $( "#CB" ).val(data['title']);
                        $( "#CC" ).val(data['unit']);
						
						 $( "#CD" ).val(data[3]);
						
							document.getElementById("DA").disabled = false;
							
							var i1 = $('#AC').val();
				var i2 = $('#BC').val();
				var i3 = $('#CC').val();
			
			
				
				
				var sum=0;
				sum=parseFloat(i1)+parseFloat(i2)+parseFloat(i3);

		
	$("#sum").html(sum.toFixed(2));
						}
					 else if(data[4] == id || data[4] == null || data[4] == "no" ){
                        $( "#CB" ).val(data['title']);
                        $( "#CC" ).val(data['unit']);
						
						 $( "#CD" ).val(data[3]);
						
							document.getElementById("DA").disabled = false;
							
							var i1 = $('#AC').val();
				var i2 = $('#BC').val();
				var i3 = $('#CC').val();
			
			
				
				
				var sum=0;
				sum=parseFloat(i1)+parseFloat(i2)+parseFloat(i3);

		
	$("#sum").html(sum.toFixed(2));
	}
	
	else {
	 alert("You Have to take Lab Of Previous Taken Subject");
	 $('#CA').val('');
                        $( "#CB" ).val('');
                        $( "#CC" ).val('');
	
	}
						
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
				 var tr = $('#CD').val();
				 
    $('#EA option[value='+id+']').remove();
	 $('#EA option[value='+id1+']').remove();
	  $('#EA option[value='+id2+']').remove();
	   $('#EA option[value='+id3+']').remove();
				
				
				
				
                $.ajax({
                    type:"POST",
                    data: {id: id, roll: roll,id1: id3},
                    url: "check_pre_req.php?id="+id,
                    dataType: "json",
                    success: function(data){
                      if(data[2] == 0){
					  
					  
					  if (tr == "Retake" || tr == "Re-Retake"){ 
					  
                        $( "#DB" ).val(data['title']);
                        $( "#DC" ).val(data['unit']);
		                   $( "#DD" ).val(data[3]);
			document.getElementById("EA").disabled = false;
		
		var i1 = $('#AC').val();
				var i2 = $('#BC').val();
				var i3 = $('#CC').val();
				var i4 = $('#DC').val();
			
				
				
				var sum=0;
				sum=parseFloat(i1)+parseFloat(i2)+parseFloat(i3)+parseFloat(i4);
				 // alert(sum);

		
	$("#sum").html(sum.toFixed(2));
		}
		
		else if (data[4] == id || data[4] == null || data[4] == "no" ){
		         $( "#DB" ).val(data['title']);
                        $( "#DC" ).val(data['unit']);
		                   $( "#DD" ).val(data[3]);
			document.getElementById("EA").disabled = false;
		
		var i1 = $('#AC').val();
				var i2 = $('#BC').val();
				var i3 = $('#CC').val();
				var i4 = $('#DC').val();
			
				
				
				var sum=0;
				sum=parseFloat(i1)+parseFloat(i2)+parseFloat(i3)+parseFloat(i4);
				 // alert(sum);

		
	$("#sum").html(sum.toFixed(2));
		}
		
		else{
					alert('You Have to take Lab Of Previous Taken Subject   ' );
					$('#DA').val('');
                        $( "#DB" ).val('');
                        $( "#DC" ).val('');

}
		
		
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
				var tr = $('#DD').val(); 
				
    $('#FA option[value='+id+']').remove();
	 $('#FA option[value='+id1+']').remove();
	  $('#FA option[value='+id2+']').remove();
	   $('#FA option[value='+id3+']').remove();
	    $('#FA option[value='+id4+']').remove();
				
				
                $.ajax({
                    type:"POST",
                    data: {id: id, roll: roll,id1: id4},
                    url: "check_pre_req.php?id="+id,
                    dataType: "json",
                    success: function(data){
                      if(data[2] == 0){
					  if (tr == "Retake" || tr == "Re-Retake"){ 
					  
                        $( "#EB" ).val(data['title']);
                        $( "#EC" ).val(data['unit']);
						
						 $( "#ED" ).val(data[3]);
						
						document.getElementById("FA").disabled = false;	
		var i1 = $('#AC').val();
				var i2 = $('#BC').val();
				var i3 = $('#CC').val();
				var i4 = $('#DC').val();
				var i5 = $('#EC').val();
			
			
			
				
				
				var sum=0;
			sum=parseFloat(i1)+parseFloat(i2)+parseFloat(i3)+parseFloat(i4)+parseFloat(i5);
				 // alert(sum);

		
	$("#sum").html(sum.toFixed(2));
						
					}	
						
						  else if (data[4] == id || data[4] == null || data[4] == "no" ){
						  
						  	  
                        $( "#EB" ).val(data['title']);
                        $( "#EC" ).val(data['unit']);
						
						 $( "#ED" ).val(data[3]);
						
						document.getElementById("FA").disabled = false;	
		var i1 = $('#AC').val();
				var i2 = $('#BC').val();
				var i3 = $('#CC').val();
				var i4 = $('#DC').val();
				var i5 = $('#EC').val();
			
			
			
				
				
				var sum=0;
			sum=parseFloat(i1)+parseFloat(i2)+parseFloat(i3)+parseFloat(i4)+parseFloat(i5);
				 // alert(sum);

		
	$("#sum").html(sum.toFixed(2));
						  }
						
						else{
						alert('You Have to take Lab Of Previous Taken Subject   ' );
						 $('#EA').val('');
                        $( "#EB" ).val('');
                        $( "#EC" ).val('');
						}
						
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
				 var tr = $('#ED').val(); 
				 
    $('#GA option[value='+id+']').remove();
	 $('#GA option[value='+id1+']').remove();
	  $('#GA option[value='+id2+']').remove();
	   $('#GA option[value='+id3+']').remove();
	    $('#GA option[value='+id4+']').remove();
		 $('#GA option[value='+id5+']').remove();
				
                $.ajax({
                    type:"POST",
                    data: {id: id, roll: roll,id1: id5},
                    url: "check_pre_req.php?id="+id,
                    dataType: "json",
                    success: function(data){
                      if(data[2] == 0){
					  
					  if (tr == "Retake" || tr == "Re-Retake"){ 
                        $( "#FB" ).val(data['title']);
                        $( "#FC" ).val(data['unit']);
						 $( "#FD" ).val(data[3]);
						
						
						document.getElementById("GA").disabled = false;
						
						var i1 = $('#AC').val();
				var i2 = $('#BC').val();
				var i3 = $('#CC').val();
				var i4 = $('#DC').val();
				var i5 = $('#EC').val();
				var i6 = $('#FC').val();
			
			
				
				
				var sum=0;
			sum=parseFloat(i1)+parseFloat(i2)+parseFloat(i3)+parseFloat(i4)+parseFloat(i5)+parseFloat(i6);
				 // alert(sum);

		
	$("#sum").html(sum.toFixed(2)); }
	
	  else if (data[4] == id || data[4] == null || data[4] == "no" ){
	                            $( "#FB" ).val(data['title']);
                        $( "#FC" ).val(data['unit']);
						 $( "#FD" ).val(data[3]);
						
						
						document.getElementById("GA").disabled = false;
						
						var i1 = $('#AC').val();
				var i2 = $('#BC').val();
				var i3 = $('#CC').val();
				var i4 = $('#DC').val();
				var i5 = $('#EC').val();
				var i6 = $('#FC').val();
			
			
				
				
				var sum=0;
			sum=parseFloat(i1)+parseFloat(i2)+parseFloat(i3)+parseFloat(i4)+parseFloat(i5)+parseFloat(i6);
				 // alert(sum);

		
	$("#sum").html(sum.toFixed(2)); 
	  }
	  else{
alert('You Have to take Lab Of Previous Taken Subject   ' );
 $('#FA').val('');
                        $( "#FB" ).val('');
                        $( "#FC" ).val('');

}
	  
	
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
				 var tr = $('#FD').val(); 
				 
    $('#HA option[value='+id+']').remove();
	 $('#HA option[value='+id1+']').remove();
	  $('#HA option[value='+id2+']').remove();
	   $('#HA option[value='+id3+']').remove();
	    $('#HA option[value='+id4+']').remove();
		 $('#HA option[value='+id5+']').remove();
		  $('#HA option[value='+id6+']').remove();
				
				
				
                $.ajax({
                    type:"POST",
                    data: {id: id, roll: roll,id1: id6},
                    url: "check_pre_req.php?id="+id,
                    dataType: "json",
                    success: function(data){
                      if(data[2] == 0){
					  
					  if (tr == "Retake" || tr == "Re-Retake"){ 
                        $( "#GB" ).val(data['title']);
                        $( "#GC" ).val(data['unit']);
						 $( "#GD" ).val(data[3]);
						 
					//	document.getElementById("HA").disabled = false;
						
						var i1 = $('#AC').val();
				var i2 = $('#BC').val();
				var i3 = $('#CC').val();
				var i4 = $('#DC').val();
				var i5 = $('#EC').val();
				var i6 = $('#FC').val();
				var i7 = $('#GC').val();
				
			
				
				
				var sum=0;
			sum=parseFloat(i1)+parseFloat(i2)+parseFloat(i3)+parseFloat(i4)+parseFloat(i5)+parseFloat(i6)+parseFloat(i7);
				 // alert(sum);
$rt=parseFloat(sum);


if($rt<=25){


document.getElementById("HA").disabled = false;



}
if($rt>25){
																			
																			$('#GA').val('');
																			$( "#GB" ).val('');
																			$( "#GC" ).val('');
																			document.getElementById("GA").disabled = true;
																			alert("You Are Not Allow To Take More Than 25 Credits");
																			
																			}
		
	$("#sum").html(sum.toFixed(2));
	}
	
	  else if (data[4] == id || data[4] == null || data[4] == "no" ){
	  
	                   $( "#GB" ).val(data['title']);
                        $( "#GC" ).val(data['unit']);
						 $( "#GD" ).val(data[3]);
						 
					//	document.getElementById("HA").disabled = false;
						
						var i1 = $('#AC').val();
				var i2 = $('#BC').val();
				var i3 = $('#CC').val();
				var i4 = $('#DC').val();
				var i5 = $('#EC').val();
				var i6 = $('#FC').val();
				var i7 = $('#GC').val();
				
			
				
				
				var sum=0;
			sum=parseFloat(i1)+parseFloat(i2)+parseFloat(i3)+parseFloat(i4)+parseFloat(i5)+parseFloat(i6)+parseFloat(i7);
				 // alert(sum);
$rt=parseFloat(sum);


if($rt<=25){


document.getElementById("HA").disabled = false;



}
if($rt>25){
																			
																			$('#GA').val('');
																			$( "#GB" ).val('');
																			$( "#GC" ).val('');
																			document.getElementById("GA").disabled = true;
																			alert("You Are Not Allow To Take More Than 25 Credits");
																			
																			}
		
	$("#sum").html(sum.toFixed(2));
	  }
				else{
			alert('You Have to take Lab Of Previous Taken Subject   ' );
			 $('#GA').val('');
                        $( "#GB" ).val('');
                        $( "#GC" ).val('');
			
			}
	
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
				 var tr = $('#GD').val(); 
				 
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
                    data: {id: id, roll: roll,id1: id7},
                    url: "check_pre_req.php?id="+id,
                    dataType: "json",
                    success: function(data){
                      if(data[2] == 0){
					  
					  if (tr == "Retake" || tr == "Re-Retake"){ 
                        $( "#HB" ).val(data['title']);
                        $( "#HC" ).val(data['unit']);
						 $( "#HD" ).val(data[3]);
						
						//document.getElementById("IA").disabled = false;
						
						var i1 = $('#AC').val();
				var i2 = $('#BC').val();
				var i3 = $('#CC').val();
				var i4 = $('#DC').val();
				var i5 = $('#EC').val();
				var i6 = $('#FC').val();
				var i7 = $('#GC').val();
				var i8 = $('#HC').val();
		
			
				
				
				var sum=0;
				sum=parseFloat(i1)+parseFloat(i2)+parseFloat(i3)+parseFloat(i4)+parseFloat(i5)+parseFloat(i6)+parseFloat(i7)+parseFloat(i8);
				 // alert(sum);
$rt=parseFloat(sum);


if($rt<=25){

document.getElementById("IA").disabled = false;

}
if($rt>25){
																			
																			$('#HA').val('');
																			$( "#HB" ).val('');
																			$( "#HC" ).val('');
																			document.getElementById("HA").disabled = true;
																			alert("You Are Not Allow To Take More Than 25 Credits");
																			
																			}
		
	$("#sum").html(sum.toFixed(2));
		}
		
		
		  else if (data[4] == id || data[4] == null || data[4] == "no" ){
		                       $( "#HB" ).val(data['title']);
                        $( "#HC" ).val(data['unit']);
						 $( "#HD" ).val(data[3]);
						
						//document.getElementById("IA").disabled = false;
						
						var i1 = $('#AC').val();
				var i2 = $('#BC').val();
				var i3 = $('#CC').val();
				var i4 = $('#DC').val();
				var i5 = $('#EC').val();
				var i6 = $('#FC').val();
				var i7 = $('#GC').val();
				var i8 = $('#HC').val();
		
			
				
				
				var sum=0;
				sum=parseFloat(i1)+parseFloat(i2)+parseFloat(i3)+parseFloat(i4)+parseFloat(i5)+parseFloat(i6)+parseFloat(i7)+parseFloat(i8);
				 // alert(sum);
$rt=parseFloat(sum);


if($rt<=25){

document.getElementById("IA").disabled = false;

}
if($rt>25){
																			
																			$('#HA').val('');
																			$( "#HB" ).val('');
																			$( "#HC" ).val('');
																			document.getElementById("HA").disabled = true;
																			alert("You Are Not Allow To Take More Than 25 Credits");
																			
																			}
		
	$("#sum").html(sum.toFixed(2));
		  
		  }		
		  
		  else{
										alert('You Have to take Lab Of Previous Taken Subject   ' );
										$('#HA').val('');
										$( "#HB" ).val('');
										$( "#HC" ).val('');

}
		  		
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
				 var tr = $('#HD').val(); 
				 
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
                    data: {id: id, roll: roll,id1: id8},
                    url: "check_pre_req.php?id="+id,
                    dataType: "json",
                    success: function(data){
                      if(data[2] == 0){
					  
					  if (tr == "Retake" || tr == "Re-Retake"){
                        $( "#IB" ).val(data['title']);
                        $( "#IC" ).val(data['unit']);
						 $( "#ID" ).val(data[3]);
						 
						//document.getElementById("JA").disabled = false;
						
						var i1 = $('#AC').val();
				var i2 = $('#BC').val();
				var i3 = $('#CC').val();
				var i4 = $('#DC').val();
				var i5 = $('#EC').val();
				var i6 = $('#FC').val();
				var i7 = $('#GC').val();
				var i8 = $('#HC').val();
				var i9 = $('#IC').val();
			
			
			
				
				
				var sum=0;
				sum=parseFloat(i1)+parseFloat(i2)+parseFloat(i3)+parseFloat(i4)+parseFloat(i5)+parseFloat(i6)+parseFloat(i7)+parseFloat(i8)+parseFloat(i9);
				 // alert(sum);
$rt=parseFloat(sum);


if($rt<=25){

document.getElementById("JA").disabled = false;

}
if($rt>25){
																			
																			$('#IA').val('');
																			$( "#IB" ).val('');
																			$( "#IC" ).val('');
																			document.getElementById("IA").disabled = true;
																			alert("You Are Not Allow To Take More Than 25 Credits");
																			
																			}



		
	$("#sum").html(sum.toFixed(2)); }
	
	  else if (data[4] == id || data[4] == null || data[4] == "no" ){
	               $( "#IB" ).val(data['title']);
                        $( "#IC" ).val(data['unit']);
						 $( "#ID" ).val(data[3]);
						 
						//document.getElementById("JA").disabled = false;
						
						var i1 = $('#AC').val();
				var i2 = $('#BC').val();
				var i3 = $('#CC').val();
				var i4 = $('#DC').val();
				var i5 = $('#EC').val();
				var i6 = $('#FC').val();
				var i7 = $('#GC').val();
				var i8 = $('#HC').val();
				var i9 = $('#IC').val();
			
			
			
				
				
				var sum=0;
				sum=parseFloat(i1)+parseFloat(i2)+parseFloat(i3)+parseFloat(i4)+parseFloat(i5)+parseFloat(i6)+parseFloat(i7)+parseFloat(i8)+parseFloat(i9);
				 // alert(sum);
$rt=parseFloat(sum);


if($rt<=25){

document.getElementById("JA").disabled = false;

}

if($rt>25){
																			
																			$('#IA').val('');
																			$( "#IB" ).val('');
																			$( "#IC" ).val('');
																			document.getElementById("IA").disabled = true;
																			alert("You Are Not Allow To Take More Than 25 Credits");
																			
																			}


		
	$("#sum").html(sum.toFixed(2));
	  
	  }
	  
	  else{
						alert('You Have to take Lab Of Previous Taken Subject   ' );
						 $('#IA').val('');
                        $( "#IB" ).val('');
                        $( "#IC" ).val('');

}
						
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
				
				var id1 = $('#AA').val();
				var id2 = $('#BA').val();
				var id3 = $('#CA').val();
				var id4 = $('#DA').val();
				var id5 = $('#EA').val();
				var id6 = $('#FA').val();
				var id7 = $('#GA').val();
				var id8 = $('#HA').val();
				var id9 = $('#IA').val();
				 var id = $(this).val();
				 var tr = $('#ID').val(); 
				 
				 $('#KA option[value='+id+']').remove();
	 $('#KA option[value='+id1+']').remove();
	  $('#KA option[value='+id2+']').remove();
	   $('#KA option[value='+id3+']').remove();
	    $('#KA option[value='+id4+']').remove();
		 $('#KA option[value='+id5+']').remove();
		  $('#KA option[value='+id6+']').remove();
		   $('#KA option[value='+id7+']').remove();
		    $('#KA option[value='+id8+']').remove();
			 $('#KA option[value='+id9+']').remove();

				 
				 
				
                $.ajax({
                    type:"POST",
                    data: {id: id, roll: roll,id1: id9},
                    url: "check_pre_req.php?id="+id,
                    dataType: "json",
                    success: function(data){
                      if(data[2] == 0){
					  
					  if (tr == "Retake" || tr == "Re-Retake"){ 
                        $( "#JB" ).val(data['title']);
                        $( "#JC" ).val(data['unit']);
						 $( "#JD" ).val(data[3]);
						
					//	document.getElementById("KA").disabled = false;
						
						
						var i1 = $('#AC').val();
				var i2 = $('#BC').val();
				var i3 = $('#CC').val();
				var i4 = $('#DC').val();
				var i5 = $('#EC').val();
				var i6 = $('#FC').val();
				var i7 = $('#GC').val();
				var i8 = $('#HC').val();
				var i9 = $('#IC').val();
				var i10 = $('#JC').val();
			
			
			
				
				
				var sum=0;
			sum=parseFloat(i1)+parseFloat(i2)+parseFloat(i3)+parseFloat(i4)+parseFloat(i5)+parseFloat(i6)+parseFloat(i7)+parseFloat(i8)+parseFloat(i9)+parseFloat(i10);
				 // alert(sum);
$rt=parseFloat(sum);


if($rt<=25){

document.getElementById("KA").disabled = false;

}
if($rt>25){
																			
																			 $('#JA').val('');
																			 $( "#JB" ).val('');
																			 $( "#JC" ).val('');
																			document.getElementById("JA").disabled = true;
																			alert("You Are Not Allow To Take More Than 25 Credits");
																			
																			}
		
	$("#sum").html(sum.toFixed(2)); }
	
	
	  else if (data[4] == id || data[4] == null || data[4] == "no" ){
	                      $( "#JB" ).val(data['title']);
                        $( "#JC" ).val(data['unit']);
						 $( "#JD" ).val(data[3]);
						
					//	document.getElementById("KA").disabled = false;
						
						
						var i1 = $('#AC').val();
				var i2 = $('#BC').val();
				var i3 = $('#CC').val();
				var i4 = $('#DC').val();
				var i5 = $('#EC').val();
				var i6 = $('#FC').val();
				var i7 = $('#GC').val();
				var i8 = $('#HC').val();
				var i9 = $('#IC').val();
				var i10 = $('#JC').val();
			
			
			
				
				
				var sum=0;
			sum=parseFloat(i1)+parseFloat(i2)+parseFloat(i3)+parseFloat(i4)+parseFloat(i5)+parseFloat(i6)+parseFloat(i7)+parseFloat(i8)+parseFloat(i9)+parseFloat(i10);
				 // alert(sum);
$rt=parseFloat(sum);


if($rt<=25){

document.getElementById("KA").disabled = false;

}
if($rt>25){
																			
																			 $('#JA').val('');
																			 $( "#JB" ).val('');
																			 $( "#JC" ).val('');
																			document.getElementById("JA").disabled = true;
																			alert("You Are Not Allow To Take More Than 25 Credits");
																			
																			}
		
	$("#sum").html(sum.toFixed(2));
	  }
						
	else{
						alert('You Have to take Lab Of Previous Taken Subject   ' );
						
						 $('#JA').val('');
                        $( "#JB" ).val('');
                        $( "#JC" ).val('');
 }
						
                      }else if(data[2] == 1){
                        alert(data[1]);
                        $('#JA').val('');
                        $( "#JB" ).val('');
                        $( "#JC" ).val('');
                      }
                }});
               
          });
		  $(document).on("change", "#KA", function () {
                var id = $('#KA').val();
                var roll= $('#roll').val();
				
				
				
				var id1 = $('#AA').val();
				var id2 = $('#BA').val();
				var id3 = $('#CA').val();
				var id4 = $('#DA').val();
				var id5 = $('#EA').val();
				var id6 = $('#FA').val();
				var id7 = $('#GA').val();
				var id8 = $('#HA').val();
				var id9 = $('#IA').val();
				var id10 = $('#JA').val();
				var tr = $('#JD').val(); 
				 var id = $(this).val();
				 
				 
				 $('#LA option[value='+id+']').remove();
	 $('#LA option[value='+id1+']').remove();
	  $('#LA option[value='+id2+']').remove();
	   $('#LA option[value='+id3+']').remove();
	    $('#LA option[value='+id4+']').remove();
		 $('#LA option[value='+id5+']').remove();
		  $('#LA option[value='+id6+']').remove();
		   $('#LA option[value='+id7+']').remove();
		    $('#LA option[value='+id8+']').remove();
			 $('#LA option[value='+id9+']').remove();
			  $('#LA option[value='+id10+']').remove();

				
				
				
				
				
                $.ajax({
                    type:"POST",
                    data: {id: id, roll: roll,id1: id10},
                    url: "check_pre_req.php?id="+id,
                    dataType: "json",
                    success: function(data){
                      if(data[2] == 0){
					  
					  if (tr == "Retake" || tr == "Re-Retake"){ 
                        $( "#KB" ).val(data['title']);
                        $( "#KC" ).val(data['unit']);
						 $( "#KD" ).val(data[3]);
						
						//document.getElementById("LA").disabled = false;
						
						
						var i1 = $('#AC').val();
				var i2 = $('#BC').val();
				var i3 = $('#CC').val();
				var i4 = $('#DC').val();
				var i5 = $('#EC').val();
				var i6 = $('#FC').val();
				var i7 = $('#GC').val();
				var i8 = $('#HC').val();
				var i9 = $('#IC').val();
				var i10 = $('#JC').val();
				var i11= $('#KC').val();
			
			
				
				
				var sum=0;
	sum=parseFloat(i1)+parseFloat(i2)+parseFloat(i3)+parseFloat(i4)+parseFloat(i5)+parseFloat(i6)+parseFloat(i7)+parseFloat(i8)+parseFloat(i9)+parseFloat(i10)+parseFloat(i11);
				 // alert(sum);
$rt=parseFloat(sum);


if($rt<=25){

document.getElementById("LA").disabled = false;

}
																			
																			if($rt>25){
																			
																			 $('#KA').val('');
																									$( "#KB" ).val('');
																									$( "#KC" ).val('');
																			document.getElementById("KA").disabled = true;
																			alert("You Are Not Allow To Take More Than 25 Credits");
																			
																			}
																					
	$("#sum").html(sum.toFixed(2)); }
	
	  else if (data[4] == id || data[4] == null || data[4] == "no" ){
	                         $( "#KB" ).val(data['title']);
                        $( "#KC" ).val(data['unit']);
						 $( "#KD" ).val(data[3]);
						
						//document.getElementById("LA").disabled = false;
						
						
						var i1 = $('#AC').val();
				var i2 = $('#BC').val();
				var i3 = $('#CC').val();
				var i4 = $('#DC').val();
				var i5 = $('#EC').val();
				var i6 = $('#FC').val();
				var i7 = $('#GC').val();
				var i8 = $('#HC').val();
				var i9 = $('#IC').val();
				var i10 = $('#JC').val();
				var i11= $('#KC').val();
			
			
				
				
				var sum=0;
	sum=parseFloat(i1)+parseFloat(i2)+parseFloat(i3)+parseFloat(i4)+parseFloat(i5)+parseFloat(i6)+parseFloat(i7)+parseFloat(i8)+parseFloat(i9)+parseFloat(i10)+parseFloat(i11);
				 // alert(sum);
$rt=parseFloat(sum);


if($rt<=25){

document.getElementById("LA").disabled = false;

}
																			
																			if($rt>25){
																			
																			 $('#KA').val('');
																									$( "#KB" ).val('');
																									$( "#KC" ).val('');
																			document.getElementById("KA").disabled = true;
																			alert("You Are Not Allow To Take More Than 25 Credits");
																			
																			}
																					
	$("#sum").html(sum.toFixed(2));
	  }
	  
	  
	  else{
						alert('You Have to take Lab Of Previous Taken Subject   ' );
						 $('#KA').val('');
                        $( "#KB" ).val('');
                        $( "#KC" ).val('');

}
	
                      }else if(data[2] == 1){
                        alert(data[1]);
                        $('#KA').val('');
                        $( "#KB" ).val('');
                        $( "#KC" ).val('');
                      }
                }});
               
          });
		  
		  
		  
		  
		  
		   $(document).on("change", "#LA", function () {
                var id = $('#LA').val();
                var roll= $('#roll').val();
				
				
					var id1 = $('#AA').val();
				var id2 = $('#BA').val();
				var id3 = $('#CA').val();
				var id4 = $('#DA').val();
				var id5 = $('#EA').val();
				var id6 = $('#FA').val();
				var id7 = $('#GA').val();
				var id8 = $('#HA').val();
				var id9 = $('#IA').val();
				var id10 = $('#JA').val();
				var id11 = $('#KA').val();
				 var id = $(this).val();
				 var tr = $('#KD').val(); 
				 
				$('#MA option[value='+id+']').remove();
	 $('#MA option[value='+id1+']').remove();
	  $('#MA option[value='+id2+']').remove();
	   $('#MA option[value='+id3+']').remove();
	    $('#MA option[value='+id4+']').remove();
		 $('#MA option[value='+id5+']').remove();
		  $('#MA option[value='+id6+']').remove();
		   $('#MA option[value='+id7+']').remove();
		    $('#MA option[value='+id8+']').remove();
			 $('#MA option[value='+id9+']').remove();
			  $('#MA option[value='+id10+']').remove();

				 $('#MA option[value='+id11+']').remove();
				
				
				
				
				
				
                $.ajax({
                    type:"POST",
                     data: {id: id, roll: roll,id1: id11},
                    url: "check_pre_req.php?id="+id,
                    dataType: "json",
                    success: function(data){
                      if(data[2] == 0){
					  
					  if (tr == "Retake" || tr == "Re-Retake"){ 
                        $( "#LB" ).val(data['title']);
                        $( "#LC" ).val(data['unit']);
						 $( "#LD" ).val(data[3]);
						
					//	document.getElementById("MA").disabled = false;
						
						var i1 = $('#AC').val();
				var i2 = $('#BC').val();
				var i3 = $('#CC').val();
				var i4 = $('#DC').val();
				var i5 = $('#EC').val();
				var i6 = $('#FC').val();
				var i7 = $('#GC').val();
				var i8 = $('#HC').val();
				var i9 = $('#IC').val();
				var i10 = $('#JC').val();
				var i11= $('#KC').val();
			var i12= $('#LC').val();
			
				
				
				var sum=0;
				sum=parseFloat(i1)+parseFloat(i2)+parseFloat(i3)+parseFloat(i4)+parseFloat(i5)+parseFloat(i6)+parseFloat(i7)+parseFloat(i8)+parseFloat(i9)+parseFloat(i10)+parseFloat(i11) +parseFloat(i12);
				 // alert(sum);
$rt=parseFloat(sum);


if($rt<=25){

document.getElementById("MA").disabled = false;

}
if($rt>25){
																			
																			 $('#LA').val('');
																			 $("#LB" ).val('');
																			 $("#LC" ).val('');
																			document.getElementById("LA").disabled = true;
																			alert("You Are Not Allow To Take More Than 25 Credits");
																			
																			}
		
	$("#sum").html(sum.toFixed(2)); }
	
	  else if (data[4] == id || data[4] == null || data[4] == "no" ){
		           $( "#LB" ).val(data['title']);
                        $( "#LC" ).val(data['unit']);
						 $( "#LD" ).val(data[3]);
						
					//	document.getElementById("MA").disabled = false;
						
						var i1 = $('#AC').val();
				var i2 = $('#BC').val();
				var i3 = $('#CC').val();
				var i4 = $('#DC').val();
				var i5 = $('#EC').val();
				var i6 = $('#FC').val();
				var i7 = $('#GC').val();
				var i8 = $('#HC').val();
				var i9 = $('#IC').val();
				var i10 = $('#JC').val();
				var i11= $('#KC').val();
			var i12= $('#LC').val();
			
				
				
				var sum=0;
				sum=parseFloat(i1)+parseFloat(i2)+parseFloat(i3)+parseFloat(i4)+parseFloat(i5)+parseFloat(i6)+parseFloat(i7)+parseFloat(i8)+parseFloat(i9)+parseFloat(i10)+parseFloat(i11) +parseFloat(i12);
				 // alert(sum);
$rt=parseFloat(sum);


if($rt<=25){

document.getElementById("MA").disabled = false;

}
if($rt>25){
																			
																			 $('#LA').val('');
																			 $("#LB" ).val('');
																			 $("#LC" ).val('');
																			document.getElementById("LA").disabled = true;
																			alert("You Are Not Allow To Take More Than 25 Credits");
																			
																			}
		
	$("#sum").html(sum.toFixed(2));	  
	  }
	else{
						alert('You Have to take Lab Of Previous Taken Subject   ' );
						 $('#LA').val('');
                        $( "#LB" ).val('');
                        $( "#LC" ).val('');
}
	
                      }else if(data[2] == 1){
                        alert(data[1]);
                        $('#LA').val('');
                        $( "#LB" ).val('');
                        $( "#LC" ).val('');
                      }
                }});
               
          }); 
		  
		  
		  
		  
	   $(document).on("change", "#MA", function () {
                var id = $('#MA').val();
                var roll= $('#roll').val();
				
				
					var id1 = $('#AA').val();
				var id2 = $('#BA').val();
				var id3 = $('#CA').val();
				var id4 = $('#DA').val();
				var id5 = $('#EA').val();
				var id6 = $('#FA').val();
				var id7 = $('#GA').val();
				var id8 = $('#HA').val();
				var id9 = $('#IA').val();
				var id10 = $('#JA').val();
				var id11 = $('#KA').val();
				var id12 = $('#LA').val();
				 var id = $(this).val();
				 var tr = $('#LD').val(); 
				 
				$('#NA option[value='+id+']').remove();
	 $('#NA option[value='+id1+']').remove();
	  $('#NA option[value='+id2+']').remove();
	   $('#NA option[value='+id3+']').remove();
	    $('#NA option[value='+id4+']').remove();
		 $('#NA option[value='+id5+']').remove();
		  $('#NA option[value='+id6+']').remove();
		   $('#NA option[value='+id7+']').remove();
		    $('#NA option[value='+id8+']').remove();
			 $('#NA option[value='+id9+']').remove();
			  $('#NA option[value='+id10+']').remove();

				 $('#NA option[value='+id11+']').remove();
				  $('#NA option[value='+id12+']').remove();
				 

				
				
				
				
				
                $.ajax({
                    type:"POST",
                     data: {id: id, roll: roll,id1: id12},
                    url: "check_pre_req.php?id="+id,
                    dataType: "json",
                    success: function(data){
                      if(data[2] == 0){
					  
					  if (tr == "Retake" || tr == "Re-Retake"){
                        $( "#MB" ).val(data['title']);
                        $( "#MC" ).val(data['unit']);
						 $( "#MD" ).val(data[3]);
						 
						//document.getElementById("NA").disabled = false;
						
						var i1 = $('#AC').val();
				var i2 = $('#BC').val();
				var i3 = $('#CC').val();
				var i4 = $('#DC').val();
				var i5 = $('#EC').val();
				var i6 = $('#FC').val();
				var i7 = $('#GC').val();
				var i8 = $('#HC').val();
				var i9 = $('#IC').val();
				var i10 = $('#JC').val();
				var i11= $('#KC').val();
			var i12= $('#LC').val();
			var i13= $('#MC').val();
			
				
				
				var sum=0;
				sum=parseFloat(i1)+parseFloat(i2)+parseFloat(i3)+parseFloat(i4)+parseFloat(i5)+parseFloat(i6)+parseFloat(i7)+parseFloat(i8)+parseFloat(i9)+parseFloat(i10)+parseFloat(i11) +parseFloat(i12)+parseFloat(i13);
				 // alert(sum);
$rt=parseFloat(sum);


if($rt<=25){

document.getElementById("NA").disabled = false;

}
if($rt>25){
																			
																			 $('#MA').val('');
																			 $("#MB" ).val('');
																			 $("#MC" ).val('');
																			document.getElementById("MA").disabled = true;
																			alert("You Are Not Allow To Take More Than 25 Credits");
																			
																			}
		
	$("#sum").html(sum.toFixed(2));}
	
	
	  else if (data[4] == id || data[4] == null || data[4] == "no" ){
	  
	                 $( "#MB" ).val(data['title']);
                        $( "#MC" ).val(data['unit']);
						 $( "#MD" ).val(data[3]);
						 
						//document.getElementById("NA").disabled = false;
						
						var i1 = $('#AC').val();
				var i2 = $('#BC').val();
				var i3 = $('#CC').val();
				var i4 = $('#DC').val();
				var i5 = $('#EC').val();
				var i6 = $('#FC').val();
				var i7 = $('#GC').val();
				var i8 = $('#HC').val();
				var i9 = $('#IC').val();
				var i10 = $('#JC').val();
				var i11= $('#KC').val();
			var i12= $('#LC').val();
			var i13= $('#MC').val();
			
				
				
				var sum=0;
				sum=parseFloat(i1)+parseFloat(i2)+parseFloat(i3)+parseFloat(i4)+parseFloat(i5)+parseFloat(i6)+parseFloat(i7)+parseFloat(i8)+parseFloat(i9)+parseFloat(i10)+parseFloat(i11) +parseFloat(i12)+parseFloat(i13);
				 // alert(sum);
$rt=parseFloat(sum);


if($rt<=25){

document.getElementById("NA").disabled = false;

}
if($rt>25){
																			
																			 $('#MA').val('');
																			 $("#MB" ).val('');
																			 $("#MC" ).val('');
																			document.getElementById("MA").disabled = true;
																			alert("You Are Not Allow To Take More Than 25 Credits");
																			
																			}
		
	$("#sum").html(sum.toFixed(2));
	  }
	
	else{
						alert('You Have to take Lab Of Previous Taken Subject   ' );
						 $('#MA').val('');
                        $( "#MB" ).val('');
                        $( "#MC" ).val('');
}
	
                      }else if(data[2] == 1){
                        alert(data[1]);
                        $('#MA').val('');
                        $( "#MB" ).val('');
                        $( "#MC" ).val('');
                      }
                }});
               
          }); 
		  	  
		  
		  
			   $(document).on("change", "#NA", function () {
                var id = $('#NA').val();
                var roll= $('#roll').val();
				
				
					var id1 = $('#AA').val();
				var id2 = $('#BA').val();
				var id3 = $('#CA').val();
				var id4 = $('#DA').val();
				var id5 = $('#EA').val();
				var id6 = $('#FA').val();
				var id7 = $('#GA').val();
				var id8 = $('#HA').val();
				var id9 = $('#IA').val();
				var id10 = $('#JA').val();
				var id11 = $('#KA').val();
				var id12 = $('#LA').val();
				var id13 = $('#MA').val();
				 var id = $(this).val();
				 var tr = $('#MD').val(); 
				 
				$('#OA option[value='+id+']').remove();
	 $('#OA option[value='+id1+']').remove();
	  $('#OA option[value='+id2+']').remove();
	   $('#OA option[value='+id3+']').remove();
	    $('#OA option[value='+id4+']').remove();
		 $('#OA option[value='+id5+']').remove();
		  $('#OA option[value='+id6+']').remove();
		   $('#OA option[value='+id7+']').remove();
		    $('#OA option[value='+id8+']').remove();
			 $('#OA option[value='+id9+']').remove();
			  $('#OA option[value='+id10+']').remove();

				 $('#OA option[value='+id11+']').remove();
				  $('#OA option[value='+id12+']').remove();
				   $('#OA option[value='+id13+']').remove();
				


				
				
				
				
				
                $.ajax({
                    type:"POST",
                     data: {id: id, roll: roll,id1: id13},
                    url: "check_pre_req.php?id="+id,
                    dataType: "json",
                    success: function(data){
                      if(data[2] == 0){
					  
					  if (tr == "Retake" || tr == "Re-Retake"){ //check  rretake
                        $( "#NB" ).val(data['title']);
                        $( "#NC" ).val(data['unit']);
						 $( "#ND" ).val(data[3]);
						
						//document.getElementById("OA").disabled = false;
						
						var i1 = $('#AC').val();
				var i2 = $('#BC').val();
				var i3 = $('#CC').val();
				var i4 = $('#DC').val();
				var i5 = $('#EC').val();
				var i6 = $('#FC').val();
				var i7 = $('#GC').val();
				var i8 = $('#HC').val();
				var i9 = $('#IC').val();
				var i10 = $('#JC').val();
				var i11= $('#KC').val();
			var i12= $('#LC').val();
			var i13= $('#MC').val();
			var i14= $('#NC').val();
			
				
				
				var sum=0;
				sum=parseFloat(i1)+parseFloat(i2)+parseFloat(i3)+parseFloat(i4)+parseFloat(i5)+parseFloat(i6)+parseFloat(i7)+parseFloat(i8)+parseFloat(i9)+parseFloat(i10)+parseFloat(i11) +parseFloat(i12)+parseFloat(i13)+parseFloat(i14);
				 // alert(sum);
$rt=parseFloat(sum);


if($rt<=25){

document.getElementById("OA").disabled = false;

}
if($rt>25){
																			
																			 $('#NA').val('');
																			 $("#NB" ).val('');
																			 $("#NC" ).val('');
																			document.getElementById("NA").disabled = true;
																			alert("You Are Not Allow To Take More Than 25 Credits");
																			
																			}
		
	$("#sum").html(sum.toFixed(2));}
	
	
	  else if (data[4] == id || data[4] == null || data[4] == "no" ){
	                       $( "#NB" ).val(data['title']);
                        $( "#NC" ).val(data['unit']);
						 $( "#ND" ).val(data[3]);
						
						//document.getElementById("OA").disabled = false;
						
						var i1 = $('#AC').val();
				var i2 = $('#BC').val();
				var i3 = $('#CC').val();
				var i4 = $('#DC').val();
				var i5 = $('#EC').val();
				var i6 = $('#FC').val();
				var i7 = $('#GC').val();
				var i8 = $('#HC').val();
				var i9 = $('#IC').val();
				var i10 = $('#JC').val();
				var i11= $('#KC').val();
			var i12= $('#LC').val();
			var i13= $('#MC').val();
			var i14= $('#NC').val();
			
				
				
				var sum=0;
				sum=parseFloat(i1)+parseFloat(i2)+parseFloat(i3)+parseFloat(i4)+parseFloat(i5)+parseFloat(i6)+parseFloat(i7)+parseFloat(i8)+parseFloat(i9)+parseFloat(i10)+parseFloat(i11) +parseFloat(i12)+parseFloat(i13)+parseFloat(i14);
				 // alert(sum);
$rt=parseFloat(sum);


if($rt<=25){

document.getElementById("OA").disabled = false;

}
if($rt>25){
																			
																			 $('#NA').val('');
																			 $("#NB" ).val('');
																			 $("#NC" ).val('');
																			document.getElementById("NA").disabled = true;
																			alert("You Are Not Allow To Take More Than 25 Credits");
																			
																			}
		
	$("#sum").html(sum.toFixed(2));
	  
	  }
	  
	  else{
						alert('You Have to take Lab Of Previous Taken Subject   ' );
						  $('#NA').val('');
                        $( "#NB" ).val('');
                        $( "#NC" ).val('');
}
                      }else if(data[2] == 1){
                        alert(data[1]);
                        $('#NA').val('');
                        $( "#NB" ).val('');
                        $( "#NC" ).val('');
                      }
                }});
               
          }); 
		  	  
		 
		 
		  $(document).on("change", "#OA", function () {
                var id = $('#OA').val();
                var roll= $('#roll').val();
				
			
				
                $.ajax({
                    type:"POST",
                     data: {id: id, roll: roll,id1: id14},
                    url: "check_pre_req.php?id="+id,
                    dataType: "json",
                    success: function(data){
                      if(data[2] == 0){
                        $( "#OB" ).val(data['title']);
                        $( "#OC" ).val(data['unit']);
						 $( "#OD" ).val(data[3]);
						
						var i1 = $('#AC').val();
				var i2 = $('#BC').val();
				var i3 = $('#CC').val();
				var i4 = $('#DC').val();
				var i5 = $('#EC').val();
				var i6 = $('#FC').val();
				var i7 = $('#GC').val();
				var i8 = $('#HC').val();
				var i9 = $('#IC').val();
				var i10 = $('#JC').val();
				var i11= $('#KC').val();
			var i12= $('#LC').val();
			var i13= $('#MC').val();
			var i14= $('#NC').val();
				var i15= $('#NC').val();
			
				
				
				var sum=0;
				sum=parseFloat(i1)+parseFloat(i2)+parseFloat(i3)+parseFloat(i4)+parseFloat(i5)+parseFloat(i6)+parseFloat(i7)+parseFloat(i8)+parseFloat(i9)+parseFloat(i10)+parseFloat(i11) +parseFloat(i12)+parseFloat(i13)+parseFloat(i14)+parseFloat(i15);
				 // alert(sum);

		
	$("#sum").html(sum.toFixed(2));
                      }else if(data[2] == 1){
                        alert(data[1]);
                        $('#OA').val('');
                        $( "#OB" ).val('');
                        $( "#OC" ).val('');
                      }
                }});
               
          }); 

		 
		  

  });   
</script>
<SCRIPT language="javascript">



		function addRow(tableID) {
		var table = document.getElementById(tableID);


			var rowCount = table.rows.length;
			var row = table.insertRow(rowCount);

			var colCount = table.rows[0].cells.length;
			
			
	/*		$("#aw").click(function() {
    $.post("reg.php", {change: $(this).val()},
        function (data)
        {
           $("#mainContent").html(data);
        });
});
	*/		
		var i1 = $('#AC').val();
				var i2 = $('#BC').val();
				var i3 = $('#CC').val();
				var i4 = $('#DC').val();
				var i5 = $('#EC').val();
			
			var sum=0;
			
			if(rowCount==1){
					
			sum=parseFloat(i1);	}
			
			if(rowCount==2){
					
			sum=parseFloat(i1)+parseFloat(i2);	}
			
			
			if(rowCount==3){
					
			sum=parseFloat(i1)+parseFloat(i2)+parseFloat(i3);	}
			
			if(rowCount==4){
					
			sum=parseFloat(i1)+parseFloat(i2)+parseFloat(i3)+parseFloat(i4);	}
			
			
			if(rowCount==5){
					
			sum=parseFloat(i1)+parseFloat(i2)+parseFloat(i3)+parseFloat(i4)+parseFloat(i5);	}
			
			
			
			
 $.ajax({
        type: "POST",
        url: "geto.php",
       data: {ro: rowCount},
	     dataType: "json",
        success: function(data) {
            alert("Loading...");
			
        }
    });
   
			 
			 var x = "<?php echo $num_rows; ?>";
alert("Waiting....");
//alert(sum);			
			
			
document.getElementById("aw").disabled = true;



      var button = document.getElementById("aw");
      var display = document.getElementById("co");

    
        display.value = rowCount;
     
	//	$_SESSION['transport']=rowCount;
			
		//display.innerHTML = i;
			for(var i=0; i<colCount; i++) {
			
			
if(rowCount>5){

alert("Cannot delete all the fields.");
						break;

}
		else	{	///var newcell	= row.insertCell(i);

			///	newcell.innerHTML = table.rows[0].cells[i].innerHTML;
				//alert(newcell.childNodes);
				
				
				switch(newcell.childNodes[0].type) {
					case "text":
							newcell.childNodes[0].value = "";
							break;
					case "checkbox":
							newcell.childNodes[0].checked = false;
							break;
					case "select-one":
							newcell.childNodes[0].selectedIndex = 0;
							break;
				}
			}
		}
		
		}

		function deleteRow(tableID) {
			try {
			var table = document.getElementById(tableID);
			var rowCount = table.rows.length;

			for(var i=0; i<rowCount; i++) {
				var row = table.rows[i];
				var chkbox = row.cells[0].childNodes[0];
				if(null != chkbox && true == chkbox.checked) {
					if(rowCount <= 1) {
						alert("Cannot delete all the field.");
						break;
					}
					
					table.deleteRow(i);
					rowCount--;
					i--;
				}


			}
			}catch(e) {
				alert(e);
			}
		}













	</SCRIPT>
    
    
    
<?php include('footer.php') ?>
