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
                    $sql = "SELECT * FROM `subject`";
                    $var = mysql_query($sql);
                    while($row = mysql_fetch_array($var)){
                      echo '<option  value="'.$row[0].'">'.$row[1].'</option>';
                    }
                  ?>
                </select>
                <p>&nbsp;</p>
                <div class="load_course_info_select">
                  <label for="" id="sub_name"></label><br />
                  <label for="" id="sub_title"></label>
                  <label for="" id="sub_credit"></label>
                  
                </div>
              </div>


              <div class="right_div" style="display:inline-block">
                <h2 class="blue">Add Prerequisites</h2>
                <label for="course_no" class="blue">Course No</label>
                <select name="course_no_req[]" id="course_no_req">
                  <?php
                    $sql = "SELECT * FROM `subject`";
                    $var = mysql_query($sql);
                    while($row = mysql_fetch_array($var)){
                      echo '<option value="'.$row[0].'">'.$row[1].'</option>';
                    }
                  ?>
                </select> &nbsp;&nbsp;&nbsp;&nbsp;
                <label for="" id="c_name_req"> </label>
                <div class="load_select"></div>
                <p>&nbsp;</p>
                <a href="#" class="add_select">Add New</a>
              </div>
              <!-- end of prerequization -->
                <div style="text-align:center;margin-top:30px;"><button>Submit</button></div>
            </form>
                
							
				</div>
			
			
				
				
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
                    url: "prerequisites-model.php?id="+id,
                    dataType: "json",
                    success: function(data){
                        $( "#sub_name" ).html('Course Name: <strong >'+data[1]+'</strong>');
                        $( "#sub_title" ).html('Title: <strong>'+data[2]+'</strong>');
						$( "#sub_credit" ).html('Credit: <strong>'+data[3]+'</strong>');
                }});
               
          });

    $(document).on("change", "#course_no_req", function () {
                var id = $('#course_no_req').val();
				
                $.ajax({
                    type:"POST",
                    data:"id="+id,
                    url: "prerequisites-model.php?id="+id,
                    dataType: "json",
                    success: function(data){
                      //   $( "#c_name_req" ).append('Course Name: <strong >'+data[2]+'</strong>');
                }});
               
          });

    $(document).on('click','.add_select',function(){
      var id = $('.select_course').val();
          $.ajax({
              type:"POST",
              data:"id="+id,
              url: "prerequisites-select-model.php?id="+id,
              dataType: "html",
              success: function(data){
                  $( "#c_name_req" ).append(data);
				  
          }});
    });

  });
</script>
</body>
</html>
