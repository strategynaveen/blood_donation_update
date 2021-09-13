<?php

include('db_config.php');
if ($con->connect_error) {
	die('connection failed'.$con->connnect_error);
}
else{
//	echo "<script>alert('connection successfully');</script>";
	$sql="SELECT * FROM `patient` ORDER BY last_date ASC";
	$res=$con->query($sql);
    	if ($res==true) {
        	echo "<script>alert('query is true');</script>";
    	}
    	else {
        	echo "error".$sql;
    	}
}

?>


<div class="table-responsive table-sm">
  							<table class="table table-bordered table-hover">
  								<thead class="thead-dark">
  									<tr>
  										<th>PatientName</th>
  										<th>LastDate</th>
  										<th>Bloodgroup</th>
  										<th colspan="4">Selection</th>
  									</tr>
  								</thead>
  								<tbody>
  			 						<?php          
										if ($res->num_rows>0) {
				    						while ($row=$res->fetch_assoc()) {								            	
				        						echo "<tr>";
				        						echo "<td>{$row["pat_name"]}</td>";
				        						echo "<td>{$row["last_date"]}</td>";
				        						echo "<td>{$row["bloood_grp"]}</td>";
				        						echo "<td><button type='button' class='btn btn-sm btn-info view' data-toggle='modal' data-target='#mymodal' data-id='{$row['pati_id']}' name='pati_id' value='pati_id' ><i class='fa fa-address-card-o'></i></button></td>";
				        						echo "<td><button class=' btn btn-sm btn-info accept' data-id='{$row['pati_id']}'><i class='fa fa-lock'></i></button></td>";
				        						echo "<td><button type='button' class='btn btn-sm btn-info update' data-toggle='modal' data-target='#editmodal' data-id='{$row['pati_id']}' name='pati_id' value='pati_id'><i class='fa fa-pencil'></i></button></td>";
				        						echo "<td><button type='button' class='btn btn-sm btn-info delete' data-toggle='modal' data-target='#deletemodal' data-id='{$row['pati_id']}' name='pati_id' value='pati_id'><i class='fa fa-eraser'></i></button></td>";
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