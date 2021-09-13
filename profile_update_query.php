<?php

include('db_config.php');
if ((empty($_POST['userid'])) && (empty($_POST['username']))  && (empty($_POST['dob'])) && (empty($_POST['mobile']))) {
	echo "Please Fill The Fields";
}
elseif (empty($_POST['userid'])) {
	echo "Please Enter The Userid";
}
elseif (empty($_POST['username'])) {
	echo "Please Enter The UserName";
}
elseif (empty($_POST['dob'])) {
	echo "Please Enter The Date Of Birth";
}
elseif (empty($_POST['mobile'])) {
	echo "Please Enter The Mobile";
}
else {
	$userid=$_POST['userid'];
	$uname=$_POST['username'];
	$dob=$_POST['dob'];
	$mobile=$_POST['mobile'];

	if ($con->connect_error) {
	die('connection failed'.$con->connect_error);
	}
	else{
		//echo "connection successfully";
		$sql="UPDATE `admin` SET `username`='".$uname."',`dob`='".$dob."',`mobile`='".$mobile."' WHERE userid='".$userid."' ";
		if ($con->query($sql)==true) {
			echo "***********updated successfully*******************";
		}
		else{
			echo "error".$con;
		}
	}
}


?>