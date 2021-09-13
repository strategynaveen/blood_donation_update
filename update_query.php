<?php
	//print_r($_POST);
	if ((empty($_POST['user_id'])) && (empty($_POST['stud_name'])) && (empty($_POST['stud_reg'])) && (empty($_POST['gender'])) && (empty($_POST['mailid'])) && (empty($_POST['address']))&& (empty($_POST['phone_no'])) && (empty($_POST['clg_name'])) && (empty($_POST['dept'])) && (empty($_POST['blood_grp']))) {
		echo "Please Enter the Fields";
	}
	elseif (empty($_POST['user_id'])) {
		echo "Please Enter Patient Id";

	}
	elseif (empty($_POST['stud_name'])) {
		echo "Please Enter  Name";
	}
	elseif (empty($_POST['stud_reg'])) {
		echo "Please Enter register number";
	}
	elseif (empty($_POST['gender'])) {
		echo "Please Enter gender";
	}
	elseif (empty($_POST['mailid'])) {
		echo "Please Enter mailid";
	}
	elseif (empty($_POST['address'])) {
		echo "Please Enter address";
	}
	elseif (empty($_POST['phone_no'])) {
		echo "Please Enter phone number";
	}
	elseif (empty($_POST['clg_name'])) {
		echo "Please Enter collage name";
	}
	elseif (empty($_POST['dept'])) {
		echo "Please Enter department";
	}
	elseif (empty($_POST['blood_grp'])) {
		echo "Please Enter blood_grp";
	}
	else{
		include('db_config.php');
		if ($con->connect_error) {
			die('connection failed'.$con->connect_error);
		}
		else{
			$id=$_POST['user_id'];
			$name=$_POST['stud_name'];
			$regno=$_POST['stud_reg'];
			$gender=$_POST['gender'];
			$mailid=$_POST['mailid'];
			$address=$_POST['address'];
			$phone_no=$_POST['phone_no'];
			$clg_name=$_POST['clg_name'];
			$dept=$_POST['dept'];
			$blood_grp=$_POST['blood_grp'];



			echo "connection succesfully";
			$sql="UPDATE `stud_donar` SET `stud_name`='".$name."',`stud_reg`='".$regno."',`gender`='".$gender."',`mailid`='".$mailid."',`address`='".$address."',`phone_no`='".$phone_no."',`clg_name`='".$clg_name."',`dept`='".$dept."',`blood_grp`='".$blood_grp."' WHERE `user_id`='".$id."' ";
			if (mysqli_query($con,$sql)) {
				echo "updated succesfully";
			}
			else{
				echo "error".$con;
			}
		}

	}
?>