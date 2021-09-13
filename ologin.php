<?php
session_start();
	include('db_config.php');
	if($con->connect_error){
		die("connection failed".$con->connect_error);
	}  
	else{
		$oname=$_POST['o_userid'];
		$opass=$_POST['o_pass'];
		$sql="SELECT * FROM `other_donar` WHERE `o_user_id`='".$oname."' And `o_pass`='".$opass."' ";
		$res=mysqli_query($con,$sql);
		$row=mysqli_fetch_array($res);
		$count=mysqli_num_rows($res);
		$blood=$row[8];
		$_SESSION['stud_blood_grp']=$blood;
		if ($count==1) {
			/*echo "<script>alert('login succesfully');</script>";
			echo "<script>alert('$blood');</script>";
			if (empty($_SESSION['o_blood_grp'])) {
				header('location:group_login.php');
			}
			header('location:other_show.php');*/
			echo "login succesfully";
		}
		else{
			echo "error ".$res."";
		}
	}
	

?>