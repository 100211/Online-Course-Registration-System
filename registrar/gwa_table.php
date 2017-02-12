	<tr>
								   <td></td> 
								   <td class="numberu"></td> 
								   <td>GWA:</td> 
								   <td>
								   						<?php
							
                            $result = mysql_query("SELECT sum(Grade_Point) FROM result  where student_id = '$get_id' and year = '$school_year' and term = '$term'") or die(mysql_error());
                            
							
							
							
							$test_count=mysql_query("select * from result where Grade_Point <> '' and student_id = '$get_id' and year = '$school_year' and term = '$term' ")or die(mysql_error());
							$count_gen = mysql_num_rows($test_count);
							
							while ($rows = mysql_fetch_array($result)) {
							
							
							
                                ?>
						
									<?php if ($count_gen  <= 0){ ?>
									
							<?php }else{ ?>
								 <?php $ave = $rows['sum(Grade_Point)']; 
											  $equal = $ave / $count_gen;
											  echo round($equal , 2);
									?>
						
                            <?php } }?>
								   <th class="act"></th>    
								   </td> 
								   <td></td> 
								   <td></td> 
								</tr>