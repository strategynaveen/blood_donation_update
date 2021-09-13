<!DOCTYPE html>
<html>
<head>
	<title>StrategySoftwares</title> 
	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="main.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body class="parallax2">
	<!---navigation----->
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark nav-atch w-100" >
				<a calss="navbar-brand " href="#" ><i class="fa fa-tint fa-2x icon"></i>Blooddonate</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsupportedcontent" aria-controls="navbarsupportedcontent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarsupportedcontent">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item active">
							<a class="nav-link nav-mar fn1" href="index.php"><i class="fa fa-home icon"></i>HOME<span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link fn1" href="group_login.php" ><span class="fa fa-users icon"></span>GroupLOGIN</a>
						</li>
						<li class="nav-item">
							<a class="nav-link fn1" href="donar_reg.php"><span class="fa fa-plus"></span>Donar Registration</a>
						</li>
						<li class="nav-item dropdown fn1">
							<a class="nav-link dropdown-toggle" href="#" id="navbardropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-plus icon"></i>PATIENT</a>
							<div class="dropdown-menu" arialabelledy="navbardropdown">
								<a class="dropdown-item" href="patient_register.php">REGISTER</a>
								<a class="dropdown-item" href="group_login.php">GroupLogin</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#">something else here</a>
							</div>
						</li>
						<li class="nav-item">
							<a  class="nav-link fn1" href="adminprof.php"><span class="fa fa-info-circle icon"></span>About</a>
						</li>
						<li class="nav-item">
							<a class="nav-link " id="fn2" href="admin_login.php" tabindex="-1" aria-disbled="true">GroupAdminLogin</a>
						</li>
					</ul>
					
				</div>
			</nav>
			<br>


	<div class="jumbotron shadow p-4 mb-5 bg-grey rounded op">
		<h1 class="text-center re_sh">REGISTRATION FORM</h1>
		<center><small class="text-disabled smal">naveenkumar</small></center>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-2"></div>
			<div class="col-lg-8">
				<div class="jumbotron shadow-lg p-3 mb-5 bg-grey rounded op" id="jumb1">
					<p class="text-center text-col sh h1">PATIENT DETAILS</p>
					<br>
						<!--navinagtion---->

					<form action="" method="POST" id="myform">
						<div class="form-group">
							<div class="row">
								<div class="col-lg-6">
									<label for="name" class="lbl_name">NAME:</label>
								</div>
								<div class="col-lg-6">
									<div class="InputWithIcon  ">
										<input type="text" name="patient_name" id="pat_name" class="form-control form-control-lg" placeholder="enter the patient name" required="true">
										<i class="fa fa-user"></i>
									</div>
									
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-lg-6">
									<label for="age" class="lbl_name">AGE:</label>
								</div>
								<div class="col-lg-6">
									<div class="InputWithIcon">
										<input type="text" name="patient_age" id="pat_age" class="form-control form-control-lg" placeholder="enter the patient age" required="true" >
										<i class="fa fa-user-secret"></i>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-lg-6">
									<label for="reason" class="lbl_name">REASON:</label>
								</div>
								<div class="col-lg-6">
									<div class="InputWithIcon">
										<textarea type="text" name="reason"  id="reason" class="form-control form-control-texta" rows="5" required="true"></textarea>
										<i class=" fa fa-pencil"></i>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-lg-6">
									<label for="age" class="lbl_name">BloodGroup:</label>
								</div>
								<div class="col-lg-6">
									<div class="InputWithIcon">
										<select class="custom-select cust" id="blood_group" name="blood_grp" required>
											<option disabled selected>Choose Blood Group</option>
											<option value="A+ve">A+ve</option>
											<option value="B+ve">B+ve</option>
											<option value="O+ve">O+ve</option>
											<option value="AB+ve">AB+ve</option>
											<option value="A-ve">A-ve</option>
											<option value="B-ve">B-ve</option>
											<option value="O-ve">O-ve</option>
											<option value="AB-ve">AB-ve</option>
										</select>
										<i class="fa fa-tint"></i>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-lg-6">
									<label for="mobile" class="lbl_name">ActiveMobile:</label>
								</div>
								<div class="col-lg-6">
									<div class="InputWithIcon">
										<input type="text" name="act_mobile" id="act_mob" class="form-control form-control-lg" placeholder="enter the mobile"  required="true">
										<i class="fa fa-phone"></i>
									</div>
								</div>	
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-lg-6">
									<label for="relation_name" class="lbl_name">RelationName:</label>
								</div>
								<div class="col-lg-6">
									<div class="InputWithIcon">
										<input type="text" name="rel_name" id="rela_name" class="form-control form-control-lg" placeholder="enter the gardian name" required="true">
										<i class="fa fa-users"></i>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-lg-6">
									<label for="relation_no" class="lbl_name">Relation MobileNo:</label>
								</div>
								<div class="col-lg-6">
									<div class="InputWithIcon">
										<input type="text" name="rel_mobile" id="rel_mob" class="form-control form-control-lg" placeholder="enter the MobileNo" required="true">
										<i class="fa fa-mobile"></i>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-lg-6">
									<label for="patient_hosbital" class="lbl_name">HospitalName:</label>
								</div>
								<div class="col-lg-6">
									<div class="InputWithIcon">
										<input type="text" name="hosp_name" id="hos_name" class="form-control form-control-lg" placeholder="enter HospitalName" required>
										<i class="fa fa-ambulance"></i>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-lg-6">
									<label for="unit" class="lbl_name">Unit:</label>
								</div>
								<div class="col-lg-6">
									<div class="InputWithIcon">
										<input type="number" name="unit" id="unit" class="form-control form-control-lg" placeholder="enter the unit" required="true">
										<i class="fa fa-tint"></i>
									</div>
								</div>	
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-lg-6">
									<label for="last_date" class="lbl_name">LastDate :</label>
								</div>
								<div class="col-lg-6">
									<div class="InputWithIcon">
										<input type="date" name="last_date" id="last_date" class="form-control form-control-lg" required="true">
										<i class="fa fa-calendar"></i>
									</div>
								</div>
							</div>
						</div>
						<br>
						<div class="form-group">
							<div class="row">
								<div class="col-lg-4"></div>
								<div class="col-lg-4">
									<input type="submit" name="submit" id="submit"  class="btn btn-info btn-lg" value="submit">
								</div>
								<div class="col-lg-4"></div>
							</div>
						</div>		
					</form>
				</div>
			</div>
			<div class="col-lg-2"></div>
		</div>
	</div>

<!---foooter--->
<div class="footer">
	<div class="row">
		<div class="col-xl-6">
					<a href="index.php" class="foot-line">HOME</a>
					<br>
					<a href="donar_reg.php" class="foot-line">Donar Registration</a>
					<br>
					<a href="patient_register.php" class="foot-line">PATIENT REGISTER</a>
				</div>
				<div class="col-xl-6">
					<a href="group_login.php" class="foot-link">GroupLogin</a>
					<a href="admin_login.php" class="foot-link">GroupAdminLogin</a>
					<a href="" class="foot-link"></a>
				</div>
			</div>
			<div class="text-center copy font-weight-bold text-white">COPYRIGHTS@STRATEGYSOFTWARES.COM</div>
</div>
				


	<script type="text/javascript" src="jquery-3.5.0.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		
		$('#submit').click(function(event){
		event.preventDefault();
				$.ajax({
					url : 'reg_insert.php',
					method : 'POST',
					data : $('#myform').serialize(),
					success :function(data){
						alert(data);
						$("#myform")[0].reset();			
					}

				});
		});
	});

</script>
</body>
</html>




	




