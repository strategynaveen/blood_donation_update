<?php

//echo "hi login ";
session_start();
	include('db_config.php');
	if($con->connect_error){
		die("connection failed".$con->connect_error);
	}  
	else{
		$uname=$_POST['s_userid'];
		$pass=$_POST['s_pass'];
		$sql="SELECT * FROM `stud_donar` WHERE `user_id`='".$uname."' And `pass`='".$pass."' ";
		$res=mysqli_query($con,$sql);
		$row=mysqli_fetch_array($res);
		$count=mysqli_num_rows($res);
		$blood=$row[10];
		$_SESSION['stud_blood_grp']=$blood;
		if ($count==1) {
			/*echo "<script>alert('login succesfully');</script>";
			echo "<script>alert('$blood');</script>";
			if (empty($_SESSION['stud_blood_grp'])) {
				header('location:group_login.php');
			}
			header('location:stud_show.php');*/
			echo "login successfully";
			echo($blood);
		}
		else{
			echo "error ".$res."";
		}
	}
	

?>