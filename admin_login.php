<!DOCTYPE html>
<html>
<head>
	<title>StrategyNaveen</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body class="parallax3">
	<!------------navigation-------->
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
					<a class="dropdown-item" href="group_login.php">Group Login</a>
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
<!---navigation---------->

<div class="container">
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<div class="jumbotron shadow-box op parallax3">
				<div class="row">
					<div class="col-md-1"></div>
					<div class="col-md-12">
						<div class="jumbotron shadow-box op parallax3">
							<div class="row">
								<div class="col-md-1"></div>
								<div class="col-md-10">
									<div class="jumbotron shadow-box op bg-white">
										<form method="POST" id="myform" action="alogin.php">
											<div class="row">
												<div class="col-md-4"></div>
												<div class="col-md-4">
													<img src="reg.jpg" width="120" height="120" class="rounded-circle shadow-lg">
												</div>
												<div class="col-md-4"></div>
											</div>
										<br>
											<div class="form-group">
												<div class="row">
													<div class="col-lg-6">
														<label for="" class="lbl_name">Username:</label>
													</div>
													<div class="col-lg-6">
														<div class="InputWithIcon">
															<input type="text" class="form-control form-control-lg" placeholder="Enter the Username" name="uname" required="true">
															<i class="fa fa-user-secret"></i>
														</div>	
													</div>
												</div>
											</div>
										<br>
											<div class="form-group">
												<div class="row">
													<div class="col-lg-6">
														<label for="" class="lbl_name">Password:</label>
													</div>
													<div class="col-lg-6">
														<div class="InputWithIcon">
															<input type="password" class="form-control form-control-lg" placeholder="Enter the Username" name="pass" required="true">
															<i class="fa fa-key"></i>
														</div>	
													</div>
												</div>
											</div>
										<br>
											<div class="row">
												<div class="col-lg-4"></div>
												<div class="col-lg-4"></div>
												<div class="col-lg-4">
													<a href="forgot.php" class="forgot">ForgotPassword?</a>
												</div>
											</div>
										<br>
											<div class="form-group">
												<div class="row">
													<div class="col-lg-4"></div>
														<div class="col-lg-4">
															<button type="submit" class="btn btn-lg btn-info hover-btn" id="submit" name="">LOGIN<i class="fa fa-send"></i></button>
														</div>
													<div class="col-lg-4"></div>
												</div>
											</div>
										</form>
									</div>
								</div>
								<div class="col-md-1"></div>
							</div>							
						</div>
					</div>
					<div class="col-md-1"></div>
				</div>
			</div>
		</div>
		<div class="col-md-1"></div>
	</div>
</div>
<!-------modal body--->

<!---------modal---------->
<!-----------------footer-------------------->	
	<div class="footer">
		<div class="row">
			<div class="col-lg-6">
				<a href="index.php" class="foot-line">HOME</a>
				<br>
				<a href="donar_reg.php" class="foot-line">Donar Registration</a>
				<br>
				<a href="patient_register.php" class="foot-line">Patient Register</a>
			</div>
			<div class="col-lg-6">
				<a href="group_login.php" class="foot-line">GroupLogin</a>
				<br>
				<a href="admin_login.php" class="foot-line">AdminLogin</a>
				<a href="" class="foot-link"></a>
			</div>
		</div>
		<div class=" text-center copy font-weight-bold text-white">COPYRIGHTS@STRATEGYSOFTWARES.COM</div>
	</div>	
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript">
/*	$(document).ready(function(){
		alert('jquery working');
		$('#submit').click(function(){
			$.ajax({
				url:"alogin.php",
				method : "POST",
				data : $('#myform').serialize(),
				success:function(data){
					alert(data);
					$('#myform')[0].reset();
					//window.location.href="admin.php";
				}
			});
		});
	});*/
	function mymodal(){
		alert('hi guys');
		window.location.href="forgot.php";
		//window.location.href="";
	}
</script>
</body>
</html>