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
 		$output.='<h4 class="text-center"><i class="fa fa-address-card text-primary">Employee Details</i></h4>';
 		$output.='<div class="table "><table>';
 			while ($row=mysqli_fetch_array($res)) {
 				$output.='<tr>
 							<td width="40%" class="lbl-text"><label> Name:</label></td>
 							<td width="60%" class="lbl-text text-success">'.$row["e_name"].'</td>
 						</tr>
 						<tr>
 							<td width="40%" class="lbl-text"><label>Age:</label></td>
 							<td width="60%" class="lbl-text text-success">'.$row["e_age"].'</td>
 						</tr>
 						<tr>
 							<td width="40%" class="lbl-text"><label>Gender:</label></td>
 							<td width="60%" class="lbl-text text-success">'.$row['e_gender'].'</td>
 						</tr>
 						<tr>
 							<td width="40%" class="lbl-text"><label>Company Name:</label></td>
 							<td width="60%" class="lbl-text text-success">'.$row['e_comp_name'].'</td>
 						</tr> 						
 						<tr>
 							<td width="40%" class="lbl-text"><label>Department:</label></td>
 							<td width="60%" class="lbl-text text-success">'.$row['e_dep_name'].'</td>
 						</tr>

 						<tr>
 							<td width="40%" class="lbl-text"><label>Phone No:</label></td>
 							<td width="60%" class="lbl-text text-success">'.$row['e_phone_no'].'</td>
 						</tr>
 						<tr>
 							<td width="40%" class="lbl-text"><label>Mail Id:</label></td>
 							<td width="60%" class="lbl-text text-success">'.$row['e_mail_id'].'</td>
 						</tr>
 						<tr>
 							<td width="40%" class="lbl-text"><label>Address:</label></td>
 							<td width="60%" class="lbl-text text-success">'.$row['e_add'].'</td>
 						</tr>
 						<tr>
 							<td width="40%" class="lbl-text"><label>BloodGroup:</label></td>
 							<td width="60%" class="lbl-text text-success">'.$row['e_blood_grp'].'</td>
 						</tr>
 						<tr>
 							<td width="40%" class="lbl-text"><label>User Id:</label></td>
 							<td width="60%" class="lbl-text text-success">'.$row['e_user_id'].'</td>
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