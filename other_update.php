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

 if (isset($_POST['o_user_id'])) {
 	
 	$output="";
 	include('db_config.php');
 	if ($con->connect_error) {
 		die('connection failed'.$con->connect_error);
 	}
 	else{
 		//echo "connection successfully";
 		$sql="SELECT * FROM `other_donar` WHERE o_user_id='".$_POST['o_user_id']."'";

 		$res=$con->query($sql);
 		$output.='<h4 class="text-center"><i class="fa fa-address-card text-primary"> Details</i></h4>';
 		$output.='<div class="table "><form method="POST" Id="myform3"><table>';
 			while ($row=mysqli_fetch_array($res)) {
 				$output.='<tr>
 							<td width="10%" class="lbl-text"><label> Name:</label></td>
 							<td width="60%" class="lbl-text text-success"><input type="text" class="form-control" name="o_name" id="o_name" value='.$row["o_name"].'></td>
 						</tr>
 						<tr>
 							<td width="10%" class="lbl-text"><label>Age:</label></td>
 							<td width="60%" class="lbl-text text-success"><input type="text" class="form-control" name="o_age" id="o_age" value='.$row["o_age"].'></td>
 						</tr>
 						<tr>
 							<td width="40%" class="lbl-text"><label> Gender:</label></td>
 							<td width="60%" class="lbl-text text-success"><input type="text" class="form-control" name="o_gender" id="o_gender" value='.$row['o_gender'].'></td>
 						</tr>
 						<tr>
 							<td width="40%" class="lbl-text"><label>Phone No:</label></td>
 							<td width="60%" class="lbl-text text-success"><input type="text" class="form-control" name="o_phone_no" id="o_phone_no" value='.$row['o_phone_no'].'></td>
 						</tr> 						
 						<tr>
 							<td width="40%" class="lbl-text"><label>Mail Id:</label></td>
 							<td width="60%" class="lbl-text text-success"><input type="email" class="form-control" name="o_mail_id" id="o_mail_id" value='.$row['o_mail_id'].'></td>
 						</tr>

 						<tr>
 							<td width="40%" class="lbl-text"><label>Address:</label></td>
 							<td width="60%" class="lbl-text text-success"><input type="text" class="form-control" name="o_add" id="o_add" value='.$row['o_add'].'></td>
 						</tr>
 						<tr>
 							<td width="40%" class="lbl-text"><label>User Id:</label></td>
 							<td width="60%" class="lbl-text text-success"><input type="text" class="form-control" name="o_user_id" id="o_user_id" value='.$row['o_user_id'].'></td>
 						</tr>
 						<tr>
 							<td width="40%" class="lbl-text"><label>Blood Group:</label></td>
 							<td width="60%" class="lbl-text text-success"><input type="text" class="form-control" name="o_blood_grp" id="o_blood_grp" value='.$row['o_blood_grp'].'></td>
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