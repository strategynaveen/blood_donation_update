<?php
	if (empty($_POST['e_user_id'])) {
		echo "please select patient id";
	}
	else{
		$userid=$_POST['e_user_id'];
		include('db_config.php');
		if ($con->connect_error) {
			die('connection failed'.$con->connect_error);
		}
		else{
			//echo "connection successfully";
			$sql="DELETE FROM `emp_donar` WHERE `e_user_id`='".$userid."' ";
			if ($con->query($sql)==true) {
				echo "deleted successfully";
			}
			else{
				echo "error".$con;
			}
		}
	}




?>