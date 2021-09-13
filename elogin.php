<?php

session_start();
include('db_config.php');
if ($con->connect_error) {
	die('connection failed'.$con->connect_error);
}
else{
	$ename=$_POST['e_userid'];
	$epass=$_POST['e_pass'];
	$sql="SELECT * FROM `emp_donar` WHERE `e_user_id`='".$ename."' And `e_pass`='".$epass."' ";
		$res=mysqli_query($con,$sql);
		$row=mysqli_fetch_array($res);
		$count=mysqli_num_rows($res);
		if ($count==1) {
			$blood=$row[8];
			$_SESSION['stud_blood_grp']=$blood;
			/*echo "<script>alert('login succesfully');</script>";
			echo "<script>alert('$blood');</script>";
			if (empty($_SESSION['emp_blood_grp'])) {
				header('location:group_login.php');
			}
			header('location:emp_show.php');*/
			echo "login succesfully";

		}
		
		else{
			echo "error ".$row."";
			//header('location:group_login.php');
		}

	
}


?>