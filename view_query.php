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
 		$output.='<div class="table table-mar"><table>';
 			while ($row=mysqli_fetch_array($res)) {
 				$output.='<tr>
 							<td width="40%" class="lbl-text"><label>Patient Name:</label></td>
 							<td width="60%" class="lbl-text text-success">'.$row["pat_name"].'</td>
 						</tr>
 						<tr>
 							<td width="40%" class="lbl-text"><label>Patient Id:</label></td>
 							<td width="60%" class="lbl-text text-success">'.$row["pati_id"].'</td>
 						</tr>
 						<tr>
 							<td width="40%" class="lbl-text"><label>Patient Age:</label></td>
 							<td width="60%" class="lbl-text text-success">'.$row['pat_age'].'</td>
 						</tr>
 						<tr>
 							<td width="40%" class="lbl-text"><label>Last Date:</label></td>
 							<td width="60%" class="lbl-text text-success">'.$row['last_date'].'</td>
 						</tr> 						
 						<tr>
 							<td width="40%" class="lbl-text"><label>Reason:</label></td>
 							<td width="60%" class="lbl-text text-success">'.$row['reason'].'</td>
 						</tr>

 						<tr>
 							<td width="40%" class="lbl-text"><label>Blood Group:</label></td>
 							<td width="60%" class="lbl-text text-success">'.$row['bloood_grp'].'</td>
 						</tr>
 						<tr>
 							<td width="40%" class="lbl-text"><label>Unit:</label></td>
 							<td width="60%" class="lbl-text text-success">'.$row['unit'].'</td>
 						</tr>
 						<tr>
 							<td width="40%" class="lbl-text"><label>Active Mobile:</label></td>
 							<td width="60%" class="lbl-text text-success">'.$row['act_mobile'].'</td>
 						</tr>
 						<tr>
 							<td width="40%" class="lbl-text"><label>Relation Name:</label></td>
 							<td width="60%" class="lbl-text text-success">'.$row['rel_name'].'</td>
 						</tr>
 						<tr>
 							<td width="40%" class="lbl-text"><label>Relation Mobile:</label></td>
 							<td width="60%" class="lbl-text text-success">'.$row['rel_mobile'].'</td>
 						</tr>
 						<tr>
 							<td width="40%" class="lbl-text"><label>Hospital Name:</label></td>
 							<td width="60%" class="lbl-text text-success">'.$row['hospital_name'].'</td>
 						</tr>';
 					}
 					$output.='</table></div>';
 					echo $output;
 				}
 	}

 
 else{
 	echo "error";
 }

 ?>