 <!DOCTYPE html>
 <html>
 <head>
 	<title>StrategyNaveen</title>
 	<link rel="stylesheet" type="text/css" href="main.css">

 </head>
 <body>
 
 </body>
 </html>

 <?php
 //print_r($_POST);

 if (isset($_POST['pati_id'])) {
 	
 	$output="";
 	include('db_config.php');
 	if ($con->connect_error) {
 		die('connection failed'.$con->connect_error);
 	}
 	else{
 		//echo "connection successfully";
 		$sql="SELECT * FROM `patient` WHERE pati_id='".$_POST['pati_id']."'";

 		$res=$con->query($sql);
 		$output.='<h4 class="text-center"><i class="fa fa-address-card text-primary">Patient Details</i></h4>';
 		$output.='<div class="table "><form method="POST" Id="myfrm"><table>';
 			while ($row=mysqli_fetch_array($res)) {
 				$output.='<tr>
 							<td width="10%" class="lbl-text"><label>Patient Name:</label></td>
 							<td width="60%" class="lbl-text text-success"><input type="text" class="form-control" name="pat_name" id="pat_name" value='.$row["pat_name"].'></td>
 						</tr>
 						<tr>
 							<td width="10%" class="lbl-text"><label>Patient Id:</label></td>
 							<td width="60%" class="lbl-text text-success"><input type="text" class="form-control" name="pati_id" id="pati_id" value='.$row["pati_id"].'></td>
 						</tr>
 						<tr>
 							<td width="40%" class="lbl-text"><label>Patient Age:</label></td>
 							<td width="60%" class="lbl-text text-success"><input type="text" class="form-control" name="pat_age" id="pat_age" value='.$row['pat_age'].'></td>
 						</tr>
 						<tr>
 							<td width="40%" class="lbl-text"><label>Last Date:</label></td>
 							<td width="60%" class="lbl-text text-success"><input type="date" class="form-control" name="last_date" id="last_date" value='.$row['last_date'].'></td>
 						</tr> 						
 						<tr>
 							<td width="40%" class="lbl-text"><label>Reason:</label></td>
 							<td width="60%" class="lbl-text text-success"><input type="text" class="form-control" name="reason" id="reason" value='.$row['reason'].'></td>
 						</tr>

 						<tr>
 							<td width="40%" class="lbl-text"><label>Blood Group:</label></td>
 							<td width="60%" class="lbl-text text-success"><input type="text" class="form-control" name="blood_grp" id="blood_grp" value='.$row['bloood_grp'].'></td>
 						</tr>
 						<tr>
 							<td width="40%" class="lbl-text"><label>Unit:</label></td>
 							<td width="60%" class="lbl-text text-success"><input type="text" class="form-control" name="unit" id="unit" value='.$row['unit'].'></td>
 						</tr>
 						<tr>
 							<td width="40%" class="lbl-text"><label>Active Mobile:</label></td>
 							<td width="60%" class="lbl-text text-success"><input type="text" class="form-control" name="act_mobile" id="act_mobile" value='.$row['act_mobile'].'></td>
 						</tr>
 						<tr>
 							<td width="40%" class="lbl-text"><label>Relation Name:</label></td>
 							<td width="60%" class="lbl-text text-success"><input type="text" class="form-control" name="rel_name" id="rel_name" value='.$row['rel_name'].'></td>
 						</tr>
 						<tr>
 							<td width="40%" class="lbl-text"><label>Relation Mobile:</label></td>
 							<td width="60%" class="lbl-text text-success"><input type="text" class="form-control" name="rel_mobile" id="rel_mobile" value='.$row['rel_mobile'].'></td>
 						</tr>
 						<tr>
 							<td width="40%" class="lbl-text"><label>Hospital Name:</label></td>
 							<td width="60%" class="lbl-text text-success"><input type="text" class="form-control" name="hospital_name" id="hospital_name" value='.$row['hospital_name'].'></td>
 						</tr>';
 					}
 					$output.='</table></form></div>';
 					echo $output;
 				}
 	}

 
 else{
 	echo "error";
 }

 ?>