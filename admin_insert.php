<?php

include('db_config.php');
if ((empty($_POST['userid'])) && (empty($_POST['uname'])) && (empty($_POST['pass'])) && (empty($_POST['repass'])) && (empty($_POST['dob'])) && (empty($_POST['mobile']))) {
	echo "Please Fill The Fields";
}
elseif (empty($_POST['userid'])) {
	echo "Please Enter The Userid";
}
elseif (empty($_POST['uname'])) {
	echo "Please Enter The UserName";
}
elseif (empty($_POST['pass'])) {
	echo "Please Enter The Password";
}
elseif (empty($_POST['repass'])) {
	echo "Please Enter The ReType Password";
}
elseif (empty($_POST['dob'])) {
	echo "Please Enter The Date Of Birth";
}
elseif (empty($_POST['mobile'])) {
	echo "Please Enter The Mobile";
}
else {
	$userid=$_POST['userid'];
	$uname=$_POST['uname'];
	$pass=$_POST['pass'];
	$repass=$_POST['repass'];
	$dob=$_POST['dob'];
	$mobile=$_POST['mobile'];

	if (strcmp($pass, $repass)==0) {
		echo "********************password maching****************************8";
		if ($con->connect_error) {
			die('connection failed'.$con->connect_error);
		}
		else{
			//echo "connection successfully";
			$sql="INSERT INTO `admin`(`userid`, `username`, `password`, `dob`, `mobile`) VALUES ('$userid','$uname','$pass','$dob','$mobile')";
			if ($con->query($sql)==true) {
				echo "***********inserted successfully*******************";
			}
			else{
				echo "error".$con;
			}
		}
	}
	else{
		echo "password not matching";
	}
}


?>