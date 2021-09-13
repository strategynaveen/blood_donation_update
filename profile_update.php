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

 if (isset($_POST['userid'])) {
 	
 	$output="";
 	include('db_config.php');
 	if ($con->connect_error) {
 		die('connection failed'.$con->connect_error);
 	}
 	else{
 		//echo "connection successfully";
 		$sql="SELECT * FROM `admin` WHERE userid='".$_POST['userid']."'";

 		$res=$con->query($sql);
 		$output.='<h4 class="text-center"><i class="fa fa-address-card text-primary"> Details</i></h4>';
 		$output.='<div class="table "><form method="POST" Id="myform5"><table>';
 			while ($row=mysqli_fetch_array($res)) {
 				$output.='<tr>
 							<td width="10%" class="lbl-text"><label>Userid:</label></td>
 							<td width="60%" class="lbl-text text-success"><input type="text" class="form-control" name="userid" id="userid" value='.$row["userid"].'></td>
 						</tr>
 						<tr>
 							<td width="10%" class="lbl-text"><label>UserName:</label></td>
 							<td width="60%" class="lbl-text text-success"><input type="text" class="form-control" name="username" id="username" value='.$row["username"].'></td>
 						</tr>
 						<tr>
 							<td width="40%" class="lbl-text"><label>Date Of Birth:</label></td>
 							<td width="60%" class="lbl-text text-success"><input type="date" class="form-control" name="dob" id="dob" value='.$row['dob'].'></td>
 						</tr>
 						<tr>
 							<td width="40%" class="lbl-text"><label>Mobile No:</label></td>
 							<td width="60%" class="lbl-text text-success"><input type="text" class="form-control" name="mobile" id="mobile" value='.$row['mobile'].'></td>
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