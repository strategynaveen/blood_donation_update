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

 if (isset($_POST['e_user_id'])) {
 	
 	$output="";
 	include('db_config.php');
 	if ($con->connect_error) {
 		die('connection failed'.$con->connect_error);
 	}
 	else{
 		//echo "connection successfully";
 		$sql="SELECT * FROM `emp_donar` WHERE e_user_id='".$_POST['e_user_id']."'";

 		$res=$con->query($sql);
 		$output.='<h4 class="text-center"><i class="fa fa-address-card text-primary"> Details</i></h4>';
 		$output.='<div class="table "><form method="POST" Id="myform2"><table>';
 			while ($row=mysqli_fetch_array($res)) {
 				$output.='<tr>
 							<td width="10%" class="lbl-text"><label> Name:</label></td>
 							<td width="60%" class="lbl-text text-success"><input type="text" class="form-control" name="e_name" id="e_name" value='.$row["e_name"].'></td>
 						</tr>
 						<tr>
 							<td width="10%" class="lbl-text"><label>Age:</label></td>
 							<td width="60%" class="lbl-text text-success"><input type="text" class="form-control" name="e_age" id="e_age" value='.$row["e_age"].'></td>
 						</tr>
 						<tr>
 							<td width="40%" class="lbl-text"><label> Gender:</label></td>
 							<td width="60%" class="lbl-text text-success"><input type="text" class="form-control" name="e_gender" id="e_gender" value='.$row['e_gender'].'></td>
 						</tr>
 						<tr>
 							<td width="40%" class="lbl-text"><label>CompanyName:</label></td>
 							<td width="60%" class="lbl-text text-success"><input type="text" class="form-control" name="e_comp_name" id="e_comp_name" value='.$row['e_comp_name'].'></td>
 						</tr> 						
 						<tr>
 							<td width="40%" class="lbl-text"><label>Department:</label></td>
 							<td width="60%" class="lbl-text text-success"><input type="text" class="form-control" name="e_dep_name" id="e_dep_name" value='.$row['e_dep_name'].'></td>
 						</tr>

 						<tr>
 							<td width="40%" class="lbl-text"><label>Phone No:</label></td>
 							<td width="60%" class="lbl-text text-success"><input type="text" class="form-control" name="e_phone_no" id="e_phone_no" value='.$row['e_phone_no'].'></td>
 						</tr>
 						<tr>
 							<td width="40%" class="lbl-text"><label>Maill Id:</label></td>
 							<td width="60%" class="lbl-text text-success"><input type="email" class="form-control" name="e_mail_id" id="e_mail_id" value='.$row['e_mail_id'].'></td>
 						</tr>
 						<tr>
 							<td width="40%" class="lbl-text"><label>Address:</label></td>
 							<td width="60%" class="lbl-text text-success"><input type="text" class="form-control" name="e_add" id="e_add" value='.$row['e_add'].'></td>
 						</tr>
 						<tr>
 							<td width="40%" class="lbl-text"><label>Blood Group:</label></td>
 							<td width="60%" class="lbl-text text-success"><input type="text" class="form-control" name="e_blood_grp" id="e_blood_grp" value='.$row['e_blood_grp'].'></td>
 						</tr>
 						<tr>
 							<td width="40%" class="lbl-text"><label>User Id:</label></td>
 							<td width="60%" class="lbl-text text-success"><input type="text" class="form-control" name="e_user_id" id="e_user_id" value='.$row['e_user_id'].'></td>
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