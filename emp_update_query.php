<?php
	//print_r($_POST);
	if ((empty($_POST['e_user_id'])) && (empty($_POST['e_name'])) && (empty($_POST['e_age'])) && (empty($_POST['e_gender'])) && (empty($_POST['e_comp_name'])) && (empty($_POST['e_dep_name']))&& (empty($_POST['e_phone_no'])) && (empty($_POST['e_mail_id'])) && (empty($_POST['e_add'])) && (empty($_POST['e_blood_grp']))) {
		echo "Please Enter the Fields";
	}
	elseif (empty($_POST['e_user_id'])) {
		echo "Please Enter User Id";

	}
	elseif (empty($_POST['e_name'])) {
		echo "Please Enter  Name";
	}
	elseif (empty($_POST['e_age'])) {
		echo "Please Enter age";
	}
	elseif (empty($_POST['e_gender'])) {
		echo "Please Enter gender";
	}
	elseif (empty($_POST['e_comp_name'])) {
		echo "Please Enter company name";
	}
	elseif (empty($_POST['e_dep_name'])) {
		echo "Please Enter department";
	}
	elseif (empty($_POST['e_phone_no'])) {
		echo "Please Enter phone number";
	}
	elseif (empty($_POST['e_mail_id'])) {
		echo "Please Enter mail id";
	}
	elseif (empty($_POST['e_add'])) {
		echo "Please Enter address";
	}
	elseif (empty($_POST['e_blood_grp'])) {
		echo "Please Enter blood group";
	}
	else{
		include('db_config.php');
		if ($con->connect_error) {
			die('connection failed'.$con->connect_error);
		}
		else{
			$userid=$_POST['e_user_id'];
			$ename=$_POST['e_name'];
			$eage=$_POST['e_age'];
			$egender=$_POST['e_gender'];
			$ecomp_name=$_POST['e_comp_name'];
			$edep_name=$_POST['e_dep_name'];
			$e_phone_no=$_POST['e_phone_no'];
			$e_mail_id=$_POST['e_mail_id'];
			$e_add=$_POST['e_add'];
			$eblood_grp=$_POST['e_blood_grp'];
			//echo "connection succesfully";
			$sql="UPDATE `emp_donar` SET `e_name`='".$ename."',`e_age`='".$eage."',`e_gender`='".$egender."',`e_comp_name`='".$ecomp_name."',`e_dep_name`='".$edep_name."',`e_phone_no`='".$e_phone_no."',`e_mail_id`='".$e_mail_id."',`e_add`='".$e_add."',`e_blood_grp`='".$eblood_grp."' WHERE `e_user_id`='".$userid."' ";
			if (mysqli_query($con,$sql)) {
				echo "updated succesfully";
			}
			else{
				echo "error".$con;
			}
		}

	}
?>