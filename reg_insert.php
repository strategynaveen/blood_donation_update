<?php

//header('location:patient_register.php');	

if ((empty($_POST['patient_name'])) && (empty($_POST['patient_age'])) && empty($_POST['reason']) && (empty($_POST['blood_grp'])) && (empty($_POST['act_mobile'])) && (empty($_POST['rel_name'])) && (empty($_POST['rel_mobile'])) && (empty($_POST['hosp_name'])) && (empty($_POST['unit'])) && (empty($_POST['last_date']))) {
		
		echo "empty the field";
	}
	elseif (empty($_POST['patient_name'])) {
		echo "empty patient name!!!!";
	}
	elseif (empty($_POST['patient_age'])) {
		echo "empty patient age !!!!";
	}
	elseif (empty($_POST['reason'])) {
		echo "empty reason!!!!";
	}
	elseif (empty($_POST['blood_grp'])) {
		echo "empty blood group!!!";
	}
	elseif (empty($_POST['act_mobile'])) {
		echo "empty active  mobile number";
	}
	elseif (empty($_POST['rel_name'])) {
		echo " empty relation name";
	}
	elseif (empty($_POST['rel_mobile'])) {
		echo " empty the relation mobile";
	}
	elseif (empty($_POST['hosp_name'])) {
		echo " empty the hospital name";
	}
	elseif (empty($_POST['unit'])) {
		echo "empty the unit";
	}
	elseif (empty($_POST['last_date'])) {
		echo "empty the date";
	}
	
	else{
		include('db_config.php');
			if ($con->connect_error) {
				die('connection failed'.$con->connect_error);
			}
			else{
					//echo "********connection successfully**********";
					$pat_name=$_POST['patient_name'];
					$pat_age=$_POST['patient_age'];
					$reason=$_POST['reason'];
					$blod_grp=$_POST['blood_grp'];
					$act_mob=$_POST['act_mobile'];
					$re_name=$_POST['rel_name'];
					$re_mob=$_POST['rel_mobile'];
					$hosp=$_POST['hosp_name'];
					$unit=$_POST['unit'];
					$dunit = (int)$unit;
					$last_date=$_POST['last_date'];
					if (!preg_match("/^\d{10}+$/", $act_mob)) {
						echo "only numbers with 10 digits in Active Mobile Number";
					}
					elseif (!preg_match("/^\d{10}+$/", $re_mob)) {
						echo "only numbers with 10 digits in Relation Mobile Number";
					}
					else{
				
						$sql="INSERT INTO `patient`(`pat_name`, `pat_age`, `reason`, `bloood_grp`, `act_mobile`, `rel_name`, `rel_mobile`, `hospital_name`,`unit`,`last_date`) VALUES ('$pat_name','$pat_age','$reason','$blod_grp','$act_mob','$re_name','$re_mob','$hosp','$dunit','$last_date')";
						if ($con->query($sql)==true) {
							echo "*********************Inserted SuccessFully********************";
						}
						else{
							echo "Error".$sql."";
						}
					}					
			}

	}

?>