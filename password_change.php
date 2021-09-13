<?php
//print_r($_POST);
if ((empty($_POST['userid'])) && (empty($_POST['uname'])) && (empty($_POST['mobile'])) && (empty($_POST['pass'])) && (empty($_POST['repass'])) && (empty($_POST['dob']))) {
	echo "***********Please Fil The Fields*********";
}
elseif (empty($_POST['userid'])) {
	echo "*********Please Enter Userid*********";
}
elseif (empty($_POST['uname'])) {
	echo "**********Please Enter UserName**************";
}
elseif (empty($_POST['mobile'])) {
	echo "**************Please Enter Mobile Number***********";
}
elseif (empty($_POST['pass'])) {
	echo "************Please Enter New Password***********";
}
elseif (empty($_POST['repass'])) {
	echo "************Please Enter ReTypePassword*************";
}
elseif (empty($_POST['dob'])) {
	echo "******************Please Enter Date Of Birth*****************";
}
else{
	$userid=$_POST['userid'];
	$uname=$_POST['uname'];
	$mobile=$_POST['mobile'];
	$pass=$_POST['pass'];
	$repass=$_POST['repass'];
	$dob=$_POST['dob'];
	if (strcmp($pass, $repass)==0) {
		echo "********Password matching*********";
		$pass=$_POST['pass'];
		echo "<br>";
		include('db_config.php');
		if ($con->connect_error) {
			die('connection failed'.$con->connect_error);
		}
		else{
			$pass=$_POST['pass'];
			$sql="SELECT `userid`,  `dob`, `mobile` FROM `admin` WHERE `mobile`='$mobile' And `dob`='$dob' ";
			$res=mysqli_query($con,$sql);
			$row=mysqli_fetch_array($res);
			$count=mysqli_num_rows($res);
			if ($count==1) {
				echo "login succesfully........";
				$sql2="UPDATE `admin` SET `password`='$pass' WHERE `userid`='$userid' And `username`='$uname' ";
				if($con->query($sql2)==true){
					echo "updated successfully";
				}
				else{
					echo "worng userid and username";
				}
			}
			else{
				echo "error ".$res."";
			}
		}
	}
	else{
		echo "******Password not matched************";
	}
}

?>