				<tr>
								   <td></td> 
								   <td class="numberu"></td> 
								   <td>CWA:</td> 
								   <td>
											      <?php
							
                            $result1 = mysql_query("SELECT sum(Grade_Point) FROM result  where student_id = '$get_id' and year = '$school_year' and term = '$term'") or die(mysql_error());
                            
							
							
							
							$test_count1=mysql_query("select * from result where Grade_Point <> '' and student_id = '$get_id' and year = '$school_year' and term = '$term' ")or die(mysql_error());
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
								   <th class="act"></th>    
								   </td> 
								   <td></td> 
								   <td></td> 
								</tr>