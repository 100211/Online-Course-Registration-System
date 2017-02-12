<?php   include('dbcon.php'); ?>
<?php
  $id = $_REQUEST['id'];
?>
<br>
<p>&nbsp;</p>
<label for="course_no">Course No</label>
<select name="course_no_req[]" id="course_no_req">
  <?php
    $sql = "select * from subject where subject_id != $id";
    $var = mysql_query($sql);
    while($row = mysql_fetch_array($var)){
      echo '<option value="'.$row[0].'">'.$row[1].'</option>';
    }
  ?>
</select>
<label for="" id="c_name_req"></label>