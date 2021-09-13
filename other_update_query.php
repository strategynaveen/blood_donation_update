<?php
	//print_r($_POST);
	if ((empty($_POST['o_user_id'])) && (empty($_POST['o_name'])) && (empty($_POST['o_age'])) && (empty($_POST['o_gender'])) && (empty($_POST['o_phone_no'])) && (empty($_POST['o_mail_id']))&& (empty($_POST['o_add'])) && (empty($_POST['o_blood_grp']))) {
		echo "Please Enter the Fields";
	}
	elseif (empty($_POST['o_user_id'])) {
		echo "Please Enter User Id";

	}
	elseif (empty($_POST['o_name'])) {
		echo "Please Enter  Name";
	}
	elseif (empty($_POST['o_age'])) {
		echo "Please Enter age";
	}
	elseif (empty($_POST['o_gender'])) {
		echo "Please Enter gender";
	}
	elseif (empty($_POST['o_phone_no'])) {
		echo "Please Enter Phone No";
	}
	elseif (empty($_POST['o_mail_id'])) {
		echo "Please Enter mail id";
	}
	elseif (empty($_POST['o_add'])) {
		echo "Please Enter Address";
	}
	elseif (empty($_POST['o_blood_grp'])) {
		echo "Please Enter blood group";
	}
	else{
		include('db_config.php');
		if ($con->connect_error) {
			die('connection failed'.$con->connect_error);
		}
		else{
			$userid=$_POST['o_user_id'];
			$oname=$_POST['o_name'];
			$oage=$_POST['o_age'];
			$ogender=$_POST['o_gender'];
			$ophone=$_POST['o_phone_no'];
			$omail=$_POST['o_mail_id'];
			$oadd=$_POST['o_add'];
			$o_blood_grp=$_POST['o_blood_grp'];
			
			//echo "connection succesfully";
			$sql="UPDATE `other_donar` SET `o_name`='$oname',`o_age`='$oage',`o_gender`='$ogender',`o_phone_no`='$ophone',`o_mail_id`='$omail',`o_add`='$oadd',`o_blood_grp`='$o_blood_grp' WHERE `o_user_id`='".$userid."' ";
			if (mysqli_query($con,$sql)) {
				echo "*******************updated succesfully****************************8";
			}
			else{
				echo "error".$con;
			}
		}

	}
?>