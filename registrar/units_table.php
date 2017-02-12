		<tr>
								   <td></td> 
								   <td class="numberu">Number of Units:</td> 
								   <td> 					
								   <?php
                            $result = mysql_query("SELECT sum(unit) FROM result  where student_id = '$student_id' and Grade_Point <> '0' ") or die(mysql_error());
                            while ($rows = mysql_fetch_array($result)) {
                                ?>
						
								 <?php echo $rows['sum(unit)']; ?>
							
                            <?php } ?>
							<th class="act"></th>    
									</td> 
								   <td></td> 
								   <td></td> 
								   <td></td> 
								</tr>