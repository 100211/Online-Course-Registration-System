						<tr>
								   <td></td> 
								   <td class="numberu">Number of Units:</td> 
								   <td> 					
								   <?php
                            $result = mysql_query("SELECT sum(Grade_Point) FROM result  where student_id = '$student_id' and `Grade_Point`<>'0' and  year like '%$school_year%' and term like '%$semester%'") or die(mysql_error());
                            while ($rows = mysql_fetch_array($result)) {
                                ?>
						
								 <?php echo $rows['sum(Grade_Point)']; ?>
							
                            <?php } ?>
							<th class="act"></th>  
									</td> 
								   <td></td> 
								   <td></td> 
								   <td></td> 
								</tr>