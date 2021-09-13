<?php
session_start();

$patid=$_SESSION['patient_id'];
//echo $patid;
//print_r($_POST);
if ((empty($_POST['uname'])) && (empty($_POST['dname'])) && ($_POST['mobile']) && empty($_POST['dunit'])) {
	
	echo "**************please fill the fields**********";
}
elseif (empty($_POST['uname'])) {
	echo "***********please fille userid*************";
}
elseif (empty($_POST['dname'])) {
	echo "************please fill the donar name*****************";
}
elseif (empty($_POST['mobile'])) {
	echo "******************please fill the mobile***************";
}
elseif (empty($_POST['dunit'])) {
	echo "****************please fille the donate unit*********";
}
else{

	include('db_config.php');
	if ($con->connect_error) {
		die('connection failed'.$con->connect_error);
	}
	else{

			$userid=$_POST['uname'];
			$donar_name=$_POST['dname'];
			$mobile=$_POST['mobile'];
			$dunit=$_POST['dunit'];
			echo $dunit;
	
		echo "connection succesfuly";
		echo $patid;
		$sql="SELECT * FROM `patient` WHERE `pati_id`='$patid'";
		$res=mysqli_query($con,$sql);
		$row=mysqli_fetch_array($res);
		$count=mysqli_num_rows($res);
			if ($count==1) {
				echo "login success";
				$pati_id_ins = $row["pati_id"];
				$blood = $row["bloood_grp"];
				$unit = $row["unit"];

				$nk =  abs($unit);
				$donar_unit = $nk-$dunit;
				
				
				echo $donar_unit;
				
				if (empty($_POST['old_date'])) {
					$old_date="";
				}
				else{
					$old_date=$_POST['old_date'];
				}
				
				$date=date("Y/m/d");
				echo $date;
				echo $old_date;
				$sql_ains = "INSERT INTO `accept1`(`pati_id`, `userid`, `blood_grp`, `dunit`, `punit`, `name`, `mobile`, `accept_date`, `old_date`) VALUES ('$pati_id_ins ','$userid','$blood','$nk','$donar_unit','$donar_name','$mobile','$date','$old_date')";
				if($con->query($sql_ains)==TRUE){
					echo "******************************************inserted successfully*********************************************";
					echo "<br>";
					$sql1="UPDATE `patient` SET `unit`='".$donar_unit."' WHERE `pati_id`='".$pati_id_ins."' ";
					if ($con->query($sql1)==true) {
						echo "***************updated successfully***************";
					}
					else{
						echo "error".$sql1;
					}
				}
				else{
					echo "error in insertion".$con->error;
				}
			}
			else{
				echo "error".$count;
			}
	}
}


session_destroy();
?>