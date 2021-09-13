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

 if (isset($_POST['user_id'])) {
 	
 	$output="";
 	include('db_config.php');
 	if ($con->connect_error) {
 		die('connection failed'.$con->connect_error);
 	}
 	else{
 		//echo "connection successfully";
 		$sql="SELECT * FROM `stud_donar` WHERE user_id='".$_POST['user_id']."'";

 		$res=$con->query($sql);
 		$output.='<h4 class="text-center"><i class="fa fa-address-card text-primary">Student Details</i></h4>';
 		$output.='<div class="table"><table>';
 			while ($row=mysqli_fetch_array($res)) {
 				$output.='<tr>
 							<td width="40%" class="lbl-text"><label>Student Name:</label></td>
 							<td width="60%" class="lbl-text text-success">'.$row["stud_name"].'</td>
 						</tr>
 						<tr>
 							<td width="40%" class="lbl-text"><label>Student Id:</label></td>
 							<td width="60%" class="lbl-text text-success">'.$row["stud_reg"].'</td>
 						</tr>
 						<tr>
 							<td width="40%" class="lbl-text"><label> Age:</label></td>
 							<td width="60%" class="lbl-text text-success">'.$row['gender'].'</td>
 						</tr>
 						<tr>
 							<td width="40%" class="lbl-text"><label>Mail Id:</label></td>
 							<td width="60%" class="lbl-text text-success">'.$row['mailid'].'</td>
 						</tr> 						
 						<tr>
 							<td width="40%" class="lbl-text"><label>Address:</label></td>
 							<td width="60%" class="lbl-text text-success">'.$row['address'].'</td>
 						</tr>

 						<tr>
 							<td width="40%" class="lbl-text"><label>Phone No:</label></td>
 							<td width="60%" class="lbl-text text-success">'.$row['phone_no'].'</td>
 						</tr>
 						<tr>
 							<td width="40%" class="lbl-text"><label>UserId:</label></td>
 							<td width="60%" class="lbl-text text-success">'.$row['user_id'].'</td>
 						</tr>
 						<tr>
 							<td width="40%" class="lbl-text"><label>CollageName:</label></td>
 							<td width="60%" class="lbl-text text-success">'.$row['clg_name'].'</td>
 						</tr>
 						<tr>
 							<td width="40%" class="lbl-text"><label>Department:</label></td>
 							<td width="60%" class="lbl-text text-success">'.$row['dept'].'</td>
 						</tr>
 						<tr>
 							<td width="40%" class="lbl-text"><label>Blood Group:</label></td>
 							<td width="60%" class="lbl-text text-success">'.$row['blood_grp'].'</td>
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

