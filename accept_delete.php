<?php
	if (empty($_POST['mobile'])) {
		echo "please select patient id";
	}
	else{
		$mobile=$_POST['mobile'];
		include('db_config.php');
		if ($con->connect_error) {
			die('connection failed'.$con->connect_error);
		}
		else{
			//echo "connection successfully";
			$sql="DELETE FROM `accept1` WHERE `mobile`='".$mobile."' ";
			if ($con->query($sql)==true) {
				echo "deleted successfully";
			}
			else{
				echo "error".$con;
			}
		}
	}




?>