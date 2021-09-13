<?php
if (empty($_POST['userid'])) {
	echo "please select userid";
}
else {
	$userid=$_POST['userid'];
	include('db_config.php');
	if ($con->connect_error) {
		die('connection failed'.$con->connect_error);
	}
	else{
		//echo "connection successfully";
		$sql="DELETE FROM `admin` WHERE userid='".$userid."' ";
		if ($con->query($sql)==true) {
			echo "******************Deleted successfully********************";
		}
		else{
			echo "Error".$con;
		}
	}
}

?>