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
			
				          
                                                                
                                                                                                                     
               <form id="form1" method="post" action="prerequisites-model2.php">
              <!-- prerequization code -->
              <div class="left_div" style="float:left; width:420px;">
                <label for="course_no" class="blue">Course No</label>
                <select name="course_no_select" id="course_no" class="select_course">
                  <?php
                    $sql = "select * from subject";
                    $var = mysql_query($sql);
                    while($row = mysql_fetch_array($var)){
                      echo '<option  value="'.$row[0].'">'.$row[1].'</option>';
                    }
                  ?>
                </select>
                <p>&nbsp;</p>
              </div>


              <div class="right_div" style="display:inline-block">
                <div class="show_all_pre">  </div>
                    
              </div>
              <!-- end of prerequization -->
            </form>
							
				</div>
			
			<a href="prerequisites.php">Set Prerequisites</a>
				
				
			</div>
		</div>
    </div>



<script>
  $(document).ready(function(){


    $(document).on("change", ".select_course", function () {
                var id = $('.select_course').val();
                $.ajax({
                    type:"POST",
                    data:"id="+id,
                    url: "prerequisites-show-model.php?id="+id,
                    dataType: "html",
                    success: function(data){
                        $( ".show_all_pre" ).html(data);
						 
                }});
               
          });

    $(document).on("click", "#req_del", function () {
                var id = $(this).data('id');
                $.ajax({
                    type:"POST",
                    data:"id="+id,
                    url: "prerequisites-del-model.php?id="+id,
                    dataType: "html",
                    success: function(data){
                        $( ".show_all_pre" ).html(data);
                }});
               
          });

  });
</script>
</body>
</html>
