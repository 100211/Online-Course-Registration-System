<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_dasboard.php'); ?>

    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">	
		
             <div class="alert alert-info" style="font-size:24px"><i class="icon-search"></i>&nbsp;&nbsp;&nbsp;Search</div>
             
               <?php  if ($user_type == 'Registrar'){ ?>
			<p><a class="btn btn-info" href="dasboard.php"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a></p>
              <?php   } ?>
            
          <?php  if ($user_type == 'Encoder1' || $user_type == 'Encoder2' || $user_type == 'Encoder3' || $user_type == 'Encoder4'){ ?>
            
            <p><a class="btn btn-info" href="dasboard.php"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a></p>
         <?php   }
            ?>
	<div class="addstudent">
	<div class="details"><i class="icon-search icon-large"></i>&nbsp;Select Search Field From Below</div>	
	

		
		
							
		<tr>
        <td valign="top" height="10" ><div align="left"><p align="left"><a  rel="tooltip"  title="Result View"  href="all_search_res.php" target="_blank" class="btn btn-info"><i class="icon-list icon-large"></i> Result View</a></p></div></td>
</tr>



<tr>


<td valign="top" height="10" ><div align="left"><p align="left"><a  rel="tooltip"  title="Registration View"   href="all_src_reg.php" target="_blank" class="btn btn-info"><i class="icon-list icon-large"></i> Registration View</a></p></div></td>


</tr>
			
			
				
		
 
    	</div>
		</div>			
			</div>		
			</div>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>