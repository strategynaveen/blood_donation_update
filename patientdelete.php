<?php
	if (empty($_POST['pati_id'])) {
		echo "please select patient id";
	}
	else{
		$patid=$_POST['pati_id'];
		include('db_config.php');
		if ($con->connect_error) {
			die('connection failed'.$con->connect_error);
		}
		else{
			//echo "connection successfully";
			$sql="DELETE FROM `patient` WHERE `pati_id`='".$patid."' ";
			if ($con->query($sql)==true) {
				echo "deleted successfully";
			}
			else{
				echo "error".$con;
			}
		}
	}




?>