    <table cellpadding="0" cellspacing="0" border="0" class="table  " id="example">                      
                                <thead>
                                    <tr>
                                        <th width="100"></th>
                                        <th class="numberu" width="300">	Number of Units:</th>
                                        <th width="50">
											<?php
                            $result = mysql_query("SELECT sum(unit) FROM result  where student_id = '$session_id' and year = '$school_year' and term = '$term'") or die(mysql_error());
                            while ($rows = mysql_fetch_array($result)) {
                                ?>
						
								 <?php echo $rows['sum(unit)']; ?>
							
                            <?php } ?>
										
										</th>                                 
                                        <th></th>       
                                        <th></th>       
                                        <th class="act"></th>                                                                             
                                        <th></th>
										
									
                                    </tr>
                             
                            </table>