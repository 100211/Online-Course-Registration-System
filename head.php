		<div class="span12">
				<div class="header">
				<div class="pull-left">
                
				<img class="stilogo" src="sti/head.png">
                
                
           	</div>
          
				</div>
					<div class="alert alert-success"><Strong>Heads Up!</strong>&nbsp;Welcome to Computer Science And Engneering
							
                       
                            <div class="pull-right">
								<i class="icon-calendar icon-large"></i>
								<?php
								$Today = date("Y-m-d H:i:s");
								$new = date('l, F d, Y', strtotime($Today));
								
								$date = "2010-01-21";
								
								if ($date < $Today) {
								echo $new;
								}
								?>
                                
							</div>
                             
					</div>
                     
				</div>