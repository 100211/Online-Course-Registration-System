<?php   include('dbcon.php'); ?>

<?php include('session.php'); ?>




<!DOCTYPE html>
<html>
<head>
<title>Computer Science And Engneering</title>
<?php $get_id = $_GET['id'];  ?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

		<link rel="stylesheet" type="text/css" href="css/jquery.dataTables.css">
		<script type="text/javascript" language="javascript" src="js/jquery1.js"></script>
		<script type="text/javascript" language="javascript" src="js/jquery.dataTables1.js"></script>
<script type="text/javascript" language="javascript" >
			$(document).ready(function() {
			$a = "<?php echo $get_id; ?>";
				var dataTable = $('#employee-grid').DataTable( {
					"processing": true,
					"serverSide": true,
					"ajax":{
						url :"employee-grid-data1.php", // json datasource
						type: "post", 
						 data: {id: $a},
	     dataType: "json", // method  , by default get
						error: function(){  // error handling
							$(".employee-grid-error").html("");
							$("#employee-grid").append('<tbody class="employee-grid-error"><tr><th colspan="3">No data found in the server</th></tr></tbody>');
							$("#employee-grid_processing").css("display","none");
							
						}
					}
				} );
				$("#employee-grid_filter").css("display","none");  // hiding global search box
				$('.search-input-text').on( 'keyup click', function () {   // for text boxes
					var i =$(this).attr('data-column');  // getting column index
					var v =$(this).val();  // getting search input value
					dataTable.columns(i).search(v).draw();
				} );
				$('.search-input-select').on( 'change', function () {   // for select box
					var i =$(this).attr('data-column');  
					var v =$(this).val();  
					dataTable.columns(i).search(v).draw();
				} );
				
				
				
			} );
		</script>
		<style type="text/css">
		
		div.container {
			    margin: 10 auto;
			    max-width:1550px;
				
			}
				div.header {
			    margin: 0 auto;
			    line-height:40px;
			    max-width:1060px;
			}
			body {
			   
			    color: #333;
			    font: "Helvetica Neue",HelveticaNeue,Verdana,Arial,Helvetica,sans-serif;
			}
body, input, select { font-size: 13px; font-family: "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", "DejaVu Sans", "Verdana", sans-serif; }


</style>
</head>

<body>
		
        
		<div class="container" align="center">
        <div class="margin-top">
			<div class="row">
             <div ><p style="font-size:24px" align="center"><i class="icon-pencil">&nbsp;Student No.     <?php echo $get_id; ?></i></p></div>
             <p align="left"><a    title="Back" id="v<?php echo $get_id; ?>"  href="sh_student.php<?php echo '?id='.$get_id; ?>" target="_self" style="border:#FF0000;background-color:#FF0000;border:solid"><i class="icon-list icon-large"></i>  Back  </a></p>
              <p align="right"> <a id="v<?php echo $get_id; ?>" href="search_res.php<?php echo '?id='.$get_id; ?>" style="border:#FF0000;background-color:#FF0000;border:solid">  Reset</a> </p> 
              <div class="span12">	
			<table id="employee-grid"  cellpadding="0" cellspacing="0" border="0" class="display" width="80%">
            
					<thead>
						<tr >
						
							<th >Course No.</th>
                                        <th >Credit Hours   </th>
                                        <th>Letter Grade</th>                                 
                                        <!--  <th>Letter Grade</th>   
                                        <th>Grade Point</th>       
                                        
                                       <th class="act"></th>       
												<!-- 
                                        <th>Term</th>                                                                                 
                                        <th>Year Level</th>                                                                                 
                                        <th>Remarks</th>   
                                                                                                                      
                                      --> 
                                       <th>Grade Point</th>  
                                       <th>Year</th>                                                                                 
                                        
                                       <th>Term</th>   
                                       <th>Session</th>  
                                        <th> </th>                            
                                                               
                                       
                                       
						</tr>
					</thead>
					<thead>
						<tr>
					
							<td><?php
									$result = mysql_query("select `code`,`subject_id` from subject");
									 echo  "<select class=\"search-input-text\" data-column=\"1\"  type=\"text\"   >
      						<option value=\"\">(Select a Subject)</option>";
				  while($row=mysql_fetch_array( $result))
				  {
				
				  			echo "<option >".$row['code']."</option>";
						
				  }
				   echo("</select>");
									
									?>
									
									</td>
                            <th><input  type="text" data-column="2"  class="search-input-text"></td>
                           <td>
								<select data-column="3"  class="search-input-select">
									<option value="">(Select Value)</option>
									<option value=" A+"> A+</option>
                                      <option value=" A"> A</option>
                                      <option value=" A-"> A-</option>
                                      <option value=" B+"> B+</option>
                                      <option value=" B"> B</option>
                                       <option value=" B-"> B-</option>
                                      <option value=" C+"> C+</option>
                                      <option value=" C"> C</option>
                                      <option value=" D"> D</option>
                                       <option value=" F">F</option>   

                                   
									
								</select>
							</td>
                            
                           <!--   <th><input type="text" data-column="4"  class="search-input-text"></td>    -->
                            
                           <td>
								<select data-column="4"  class="search-input-select">
									<option value="">(Select Value)</option>
									<option > 4</option>
                                  <option > 3.75</option>
                                  <option > 3.50</option>
                                  <option > 3.25</option>
                                  <option > 3.00</option>
                                  <option > 2.75</option>
                                  <option > 2.50</option>
                                   <option > 2.25</option>   
                                   <option > 2.00</option>
                                   <option value="0 "> 0.00</option>  

									
								</select>
							</td>
                            
                         
                            
                          <!-- <th><input type="text" data-column="5"  class="search-input-text"></td> -->
                           <td>
								<select data-column="5"  class="search-input-select">
									<option value="">(Select a Year)</option>
									<option value="1">1st</option>
                                    <option value="2">2nd</option>
                                    <option value="3">3rd</option>
                                    <option value="4">4th</option>
                                   
									
								</select>
							</td>
                          
                          
                          
                          
                          
                         
                            
                          <!--  <th><input type="text" data-column="6"  class="search-input-text"></td> -->
                            <td>
								<select data-column="6"  class="search-input-select">
									<option value="">(Select a Term)</option>
                                    <option value="1">1st</option>
                                    <option value="2">2nd</option>
                                    
								</select>
							</td>
                            
                            
                            
							<td>
								<select data-column="7"  class="search-input-select">
                                <option value="">(Select a range)</option>
									<?php 
   for($i = 1998 ; $i < date('Y'); $i++){
   
  
 
							                  //  echo'<option value="'.substr( $i, -2 ).'">'.substr( $i, -2 ).'</option>'; 
							               
   
   $wi=$i . '-'  .substr( $i+1 , -2 );
   
      echo "<option>$wi</option>";
	  
	
   }
   
   
   
?>
									
								</select>
							</td>
                            
                            <td><input type="hidden" data-column="0"  class="search-input-text"></td> 
                            
                            
                                                                    
	  
                            
                            
                            
                            
                            
                            
                            
						</tr>
					</thead>
			</table>
            </div>
            </div>
            </div>
		</div>
	</body>
</html>
