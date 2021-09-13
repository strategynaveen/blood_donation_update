<?php
	//print_r($_POST);
	if ((empty($_POST['pati_id'])) && (empty($_POST['pat_name'])) && (empty($_POST['pat_age'])) && (empty($_POST['last_date'])) && (empty($_POST['reason'])) && (empty($_POST['blood_grp']))&& (empty($_POST['unit'])) && (empty($_POST['act_mobile'])) && (empty($_POST['rel_name'])) && (empty($_POST['rel_mobile'])) && (empty($_POST['hospital_name']))) {
		echo "Please Enter the Fields";
	}
	elseif (empty($_POST['pati_id'])) {
		echo "Please Enter Patient Id";

	}
	elseif (empty($_POST['pat_name'])) {
		echo "Please Enter Patient Name";
	}
	elseif (empty($_POST['pat_age'])) {
		echo "Please Enter Patient Age";
	}
	elseif (empty($_POST['last_date'])) {
		echo "Please Enter Patient Last Date";
	}
	elseif (empty($_POST['reason'])) {
		echo "Please Enter Patient Reason";
	}
	elseif (empty($_POST['blood_grp'])) {
		echo "Please Enter Patient Blood Group";
	}
	elseif (empty($_POST['unit'])) {
		echo "Please Enter Patient Unit";
	}
	elseif (empty($_POST['act_mobile'])) {
		echo "Please Enter Active Mobile Number";
	}
	elseif (empty($_POST['rel_name'])) {
		echo "Please Enter Relation Name";
	}
	elseif (empty($_POST['rel_mobile'])) {
		echo "Please Enter Relation Mobile Number";
	}
	elseif (empty($_POST['hospital_name'])) {
		echo "Please Enter Hospital Name";
	}
	else{
		include('db_config.php');
		if ($con->connect_error) {
			die('connection failed'.$con->connect_error);
		}
		else{
			$pati_id=$_POST['pati_id'];
			$pat_name=$_POST['pat_name'];
			$pat_age=$_POST['pat_age'];
			$reason=$_POST['reason'];
			$last_date=$_POST['last_date'];
			$blood_grp=$_POST['blood_grp'];
			$unit=$_POST['unit'];
			$act_mobile=$_POST['act_mobile'];
			$rel_mobile=$_POST['rel_mobile'];
			$rel_name=$_POST['rel_name'];
			$hospital_name=$_POST['hospital_name'];



			//echo "connection succesfully";
			$sql="UPDATE `patient` SET `pat_name`='".$pat_name."',`pat_age`='".$pat_age."',`reason`='".$reason."',`bloood_grp`='".$blood_grp."',`act_mobile`='".$act_mobile."',`rel_name`='".$rel_name."',`rel_mobile`='".$rel_mobile."',`hospital_name`='".$hospital_name."',`unit`='".$unit."',`last_date`='".$last_date."' WHERE `pati_id`='".$pati_id."'";
			if (mysqli_query($con,$sql)) {
				echo "updated succesfully";
			}
			else{
				echo "error".$con;
			}
		}

	}
?>