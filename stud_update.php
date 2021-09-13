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
 		$output.='<div class="table "><form method="POST" Id="myform1"><table>';
 			while ($row=mysqli_fetch_array($res)) {
 				$output.='<tr>
 							<td width="10%" class="lbl-text"><label> Name:</label></td>
 							<td width="60%" class="lbl-text text-success"><input type="text" class="form-control" name="stud_name" id="pat_name" value='.$row["stud_name"].'></td>
 						</tr>
 						<tr>
 							<td width="10%" class="lbl-text"><label>Reg Id:</label></td>
 							<td width="60%" class="lbl-text text-success"><input type="text" class="form-control" name="stud_reg" id="stud_reg" value='.$row["stud_reg"].'></td>
 						</tr>
 						<tr>
 							<td width="40%" class="lbl-text"><label> Gender:</label></td>
 							<td width="60%" class="lbl-text text-success"><input type="text" class="form-control" name="gender" id="gender" value='.$row['gender'].'></td>
 						</tr>
 						<tr>
 							<td width="40%" class="lbl-text"><label>Mail Id:</label></td>
 							<td width="60%" class="lbl-text text-success"><input type="email" class="form-control" name="mailid" id="mailid" value='.$row['mailid'].'></td>
 						</tr> 						
 						<tr>
 							<td width="40%" class="lbl-text"><label>Address:</label></td>
 							<td width="60%" class="lbl-text text-success"><input type="text" class="form-control" name="address" id="address" value='.$row['address'].'></td>
 						</tr>

 						<tr>
 							<td width="40%" class="lbl-text"><label>Phone No:</label></td>
 							<td width="60%" class="lbl-text text-success"><input type="text" class="form-control" name="phone_no" id="phone_no" value='.$row['phone_no'].'></td>
 						</tr>
 						<tr>
 							<td width="40%" class="lbl-text"><label>User Id:</label></td>
 							<td width="60%" class="lbl-text text-success"><input type="text" class="form-control" name="user_id" id="user_id" value='.$row['user_id'].'></td>
 						</tr>
 						<tr>
 							<td width="40%" class="lbl-text"><label>CollageName:</label></td>
 							<td width="60%" class="lbl-text text-success"><input type="text" class="form-control" name="clg_name" id="clg_name" value='.$row['clg_name'].'></td>
 						</tr>
 						<tr>
 							<td width="40%" class="lbl-text"><label>Department:</label></td>
 							<td width="60%" class="lbl-text text-success"><input type="text" class="form-control" name="dept" id="dept" value='.$row['dept'].'></td>
 						</tr>
 						<tr>
 							<td width="40%" class="lbl-text"><label>Blood Group:</label></td>
 							<td width="60%" class="lbl-text text-success"><input type="text" class="form-control" name="blood_grp" id="blood_grp" value='.$row['blood_grp'].'></td>
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