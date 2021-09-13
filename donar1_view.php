<?php
	include('db_config.php');
	if ($con->connect_error) {
		die('connection failed'.$con->connect_error);
	}
	else{
		//echo "connection succesfully";
		$sql="SELECT * FROM `stud_donar` ";
		$res=$con->query($sql);
		if ($res==true) {
			//echo "query ok";
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
  				<th>Name</th>
  				<th>CollageName</th>
  				<th>Bloodgroup</th>
  				<th colspan="4">Selections</th>
  									</tr>
  								</thead>
  								<tbody>
  			 						<?php          
										if ($res->num_rows>0) {
				    						while ($row=$res->fetch_assoc()) {								            	
				        						echo "<tr>";
				        						echo "<td>{$row["stud_name"]}</td>";
				        						echo "<td>{$row["clg_name"]}</td>";
				        						echo "<td>{$row["blood_grp"]}</td>";
				        						echo "<td><button type='button' class='btn btn-sm btn-info stud_view' data-id='{$row["user_id"]}' value='submit' name='submit'><i class='fa fa-id-badge'></i></button></td>";	
				        						echo "<td><button type='button' class='btn btn-sm btn-info stud_update' data-id='{$row["user_id"]}' value='submit' name='submit'><i class='fa fa-pencil'></i></button></td>";
				        						echo "<td><button type='button' class='btn btn-sm btn-info stud_delete' data-id='{$row["user_id"]}' value='submit' name='submit'><i class='fa fa-eraser'></i></button></td>";					        						
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