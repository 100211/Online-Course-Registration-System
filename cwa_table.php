
									    <table cellpadding="0" cellspacing="0" border="0" class="table  " id="example">                      
                                <thead>
                                    <tr>
                                        <th width="100"></th>
                                        <th class="numberu" width="300"></th>
                                        <th width="50">
										CWA: 
										</th>                                 
                                        <th>
										      <?php
							
                            $result1 = mysql_query("SELECT sum(Grade_Point) FROM result  where student_id = '$session_id' and year = '$school_year' and term = '$term'") or die(mysql_error());
                            
							
							
							
							$test_count1=mysql_query("select * from result where Grade_Point <> '' and student_id = '$session_id' and year = '$school_year' and term = '$term'  ")or die(mysql_error());
							$count_gen1 = mysql_num_rows($test_count1);
							
							while ($rows1 = mysql_fetch_array($result1)) {
							
							
							
                                ?>
						
									<?php if ($count_gen1  <= 0){ ?>
									 
							<?php }else{ ?>
									<?php $ave1 = $rows1['sum(Grade_Point)']; 
											  $equal1 = $ave1 / $count_gen1;
											  echo round($equal1 , 2);
									?>
						
                            <?php } }?>
										</th>       
                                        <th></th>       
                                        <th class="act"></th>       
									           
								
											   
                                        <th></th>
										
									
                                    </tr>
                             
                            </table>