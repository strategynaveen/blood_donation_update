<?php
	//print_r($_POST);
include('db_config.php');
	if ($con->connect_error) {
		die('connection failed'.$con->connect_error);
	}
	else{
		//echo "************Connecton Successfully*************";
		if ((empty($_POST['uname'])) && (empty($_POST['pass']))) {
			echo "******************Please Enter Your Username And Password***********";
			header('location:admin_login.php');
		}
		elseif (empty($_POST['uname'])) {
			echo "*****************Please Enter Your Username*****************";
			header('location:admin_login.php');
		}
		elseif (empty($_POST['pass'])) {
			echo "********************Please Enter Your Password******************";
			header('location:admin_login.php');
		}
		else{
			$username=$_POST['uname'];
			$password=$_POST['pass'];
			
		
			$sql1="SELECT * FROM `admin` WHERE `username`='$username' AND  `password`='$password' ";
			$res=mysqli_query($con,$sql1);
			$row=mysqli_fetch_array($res);
			$count=mysqli_num_rows($res);
			if ($count==1) {
				echo "<script>alert('logi Successfully');</script>";
				header('location:admin.php');
			}
			else{
				echo "incorrect username and password";
				// header('location:admin_login.php');
			}
		}
	}

?>