<?php
	include('db_config.php');
	if ($con->connect_error) {
		die('connection failed'.$con->connect_error);
	}
	else{
		 // echo "connection succesfully";
		
		$sql="SELECT * FROM accept1 ORDER BY accept_date DESC";
		$res=$con->query($sql);
		if ($res==true) {
			echo "query ok";
		}
		else{
			echo "error".$res;
		}
	}


?>
<div class="table-responsive table-sm">
  	<table class="table table-bordered table-hover">
  		<thead class="thead-dark">
  			<tr>
  				<th>Ptient Id</th>
  				<th>Userid</th>
  				<th>Bloodgroup</th>
  				<th>Donate Unit</th>
  				<th>Available</th>
  				<th>Donar Name</th>
  				<th>Mobile</th>
  				<th>Accept Date</th>
  				<th>old_date</th>
  				
  									</tr>
  								</thead>
  								<tbody>
  			 						<?php          
										if ($res->num_rows>0) {
				    						while ($row=$res->fetch_assoc()) {								            	
				        						echo "<tr>";
				        						echo "<td>{$row["pati_id"]}</td>";
				        						echo "<td>{$row["userid"]}</td>";
				        						echo "<td>{$row["blood_grp"]}</td>";
				        						echo "<td>{$row["dunit"]}</td>";
												echo "<td>{$row["punit"]}</td>";				        						
												echo "<td>{$row["name"]}</td>";
												echo "<td>{$row["mobile"]}</td>";
												echo "<td>{$row["accept_date"]}</td>";
												echo "<td>{$row["old_date"]}</td>";
				        						

				        						echo "</tr>";
				    						}
	            						}
	            						else{
			            					echo "empty";
		            					}
            						?>
  								</tbody>
  							</table>
  						</div>