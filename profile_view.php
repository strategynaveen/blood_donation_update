<?php
	include('db_config.php');
	if ($con->connect_error) {
		die('connection failed'.$con->connect_error);
	}
	else{
		//echo "connection succesfully";
		$sql="SELECT * FROM `admin` ";
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
  				<th>UserId</th>
  				<th>UserName</th>
  				<th>DateOfBirth</th>
  				<th>Mobile</th>
  				<th colspan="4">Selections</th>
  									</tr>
  								</thead>
  								<tbody>
  			 						<?php          
										if ($res->num_rows>0) {
				    						while ($row=$res->fetch_assoc()) {								            	
				        						echo "<tr>";
				        						echo "<td>{$row["userid"]}</td>";
				        						echo "<td>{$row["username"]}</td>";
				        						echo "<td>{$row["dob"]}</td>";
				        						echo "<td>{$row["mobile"]}</td>";
				        						echo "<td><button type='button' class='btn btn-sm btn-info accept_view'   data-id='{$row["userid"]}'><i class='fa fa-id-badge'></i></button></td>";		
				        						echo "<td><button type='button' class='btn btn-sm btn-info accept_update'   data-id='{$row["userid"]}'><i class='fa fa-pencil'></i></button></td>";		
				        						echo "<td><button type='button' class='btn btn-sm btn-info profile_del'   data-id='{$row["userid"]}'><i class='fa fa-eraser'></i></button></td>";				        						
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