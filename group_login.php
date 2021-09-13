<!DOCTYPE html>
<html>
<head>
	<title>StrategyNaveen</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body class="parallax3">

	<!-------navigation--------->
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
<!--------navigation------->
<br>
<div class="jumbotron shadow-lg op">
	<h1 class="text-center text-col sh4">Group Login</h1>
 </div>
<div class="container">
	<div class="row">
		<div class="col-lg-3"></div>
		<div class="col-lg-6 ">
			<div class="panel panel-default op shadow-lg">
				<div class="panel-body bg-white p-2 shadow-lg radius op">
				<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
					<li class="nav-item">
						<a class="nav-link active " id="pills-stud-tab" data-toggle="pill"  href="#pills-stud" role="tab" aria-controls="pills-stud" aria-selected="true"><h4 class="h3">Student</h4></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="pills-emp-tab" data-toggle="pill"  href="#pills-emp" role="tab" aria-controls="pills-emp" aria-selected="false"><h4 class="h4">Employee</h4></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="pills-other-tab" data-toggle="pill"  href="#pills-other" role="tab" aria-controls="pills-other" aria-selected="false"><h4 class="h3">Other</h4></a>
					</li>
				</ul>
			</div>
			</div>
		</div>
		<div class="col-lg-3"></div>
	</div>
	<br>
	<div class="row">
		<div class="col-lg-2"></div>
		<div class="col-lg-8">
			<div class="jumbotron b_rad op">
				<div class="tab-content" id="pills-tabContent">
					<div class="tab-pane fade show active" id="pills-stud" role="tabpanel" aria-labelledby="pills-stud-tab">
						<h4 class="text-center h4  sh5">STUDENT LOGIN</h4>
						<br>
						<form method="POST" id="frm">
							<div class="form-group">
								<div class="row">
									<div class="col-lg-6">
										<label for="" class="lbl_name">USERID:</label>
									</div>
									<div class="col-lg-6">
										<div class="InputWithIcon">
											<input type="text" name="s_userid" id="s_userid" class="form-control form-control-lg" placeholder="Enter Userid" required="true">
											<i class="fa fa-id-badge"></i>
										</div>
									</div>
								</div>
							</div>
							<br>
							<br>
							<div class="form-group">
								<div class="row">
									<div class="col-lg-6">
										<label for="" class="lbl_name">PASSWORD:</label>
									</div>
									<div class="col-lg-6">
										<div class="InputWithIcon">
											<input type="password" name="s_pass" id="s_pass" placeholder="Enter Password" class="form-control form-control-lg" required="true">
											<i class="fa fa-key"></i>
										</div>
									</div>
								</div>
							</div>
							<br>
							<br>
							<div class="form-group">
								<div class="row">
									<div class="col-lg-4"></div>
									<div class="col-lg-4">
										<input type="submit" name="s_submit" id="s_submit" class="btn btn-lg btn-primary btn-h" value="LOGIN">
									</div>
									<div class="col-lg-4"></div>
								</div>
							</div>
						</form>	
					</div>
					<div class="tab-pane fade" id="pills-emp" role="tabpanel" aria-labelledby="pills-emp-tab">
						<h4 class="text-center h4  sh5">Employee LOGIN</h4>
						<br>
						<form method="POST" id="myfrm">
							<div class="form-group">
								<div class="row">
									<div class="col-lg-6">
										<label for="" class="lbl_name">USERID:</label>
									</div>
									<div class="col-lg-6">
										<div class="InputWithIcon">
											<input type="text" name="e_userid" id="e_userid" class="form-control form-control-lg" placeholder="Enter Userid" required="true">
											<i class="fa fa-id-badge"></i>
										</div>
									</div>
								</div>
							</div>
							<br>
							<br>
							<div class="form-group">
								<div class="row">
									<div class="col-lg-6">
										<label for="" class="lbl_name">PASSWORD:</label>
									</div>
									<div class="col-lg-6">
										<div class="InputWithIcon">
											<input type="password" name="e_pass" id="e_pass" placeholder="Enter Password" class="form-control form-control-lg" required="true">
											<i class="fa fa-key"></i>
										</div>
									</div>
								</div>
							</div>
							<br>
							<br>
							<div class="form-group">
								<div class="row">
									<div class="col-lg-4"></div>
									<div class="col-lg-4">
										<input type="submit" name="e_submit" id="e_submit" class="btn btn-lg btn-primary btn-h" value="LOGIN">
									</div>
									<div class="col-lg-4"></div>
								</div>
							</div>
						</form>
					</div>
					<div class="tab-pane fade" id="pills-other" role="tabpanel" aria-labelledby="pills-other-tab">
						<h4 class="text-center h4  sh5">Other LOGIN</h4>
						<br>
						<form method="POST" id="myform">
							<div class="form-group">
								<div class="row">
									<div class="col-lg-6">
										<label for="" class="lbl_name">USERID:</label>
									</div>
									<div class="col-lg-6">
										<div class="InputWithIcon">
											<input type="text" name="o_userid" id="o_userid" class="form-control form-control-lg" placeholder="Enter Userid" required="true">
											<i class="fa fa-id-badge"></i>
										</div>
									</div>
								</div>
							</div>
							<br>
							<br>
							<div class="form-group">
								<div class="row">
									<div class="col-lg-6">
										<label for="" class="lbl_name">PASSWORD:</label>
									</div>
									<div class="col-lg-6">
										<div class="InputWithIcon">
											<input type="password" name="o_pass" id="o_pass" placeholder="Enter Password" class="form-control form-control-lg" required="true">
											<i class="fa fa-key"></i>
										</div>
									</div>
								</div>
							</div>
							<br>
							<br>
							<div class="form-group">
								<div class="row">
									<div class="col-lg-4"></div>
									<div class="col-lg-4">
										<input type="submit" name="o_submit" id="o_submit" class="btn btn-lg btn-primary btn-h" value="LOGIN">
									</div>
									<div class="col-lg-4"></div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-2"></div>
	</div>	
</div>






<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		
		$('#s_submit').click(function(event){
		event.preventDefault();
				$.ajax({
					url : 'slogin.php',
					method : 'POST',
					data : $('#frm').serialize(),
					success :function(data){
						alert(data);
						$("#frm")[0].reset();
						window.location.href="stud_show.php";			
					}

				});
		});

		$('#e_submit').click(function(event){
		event.preventDefault();
				$.ajax({
					url : 'elogin.php',
					method : 'POST',
					data : $('#myfrm').serialize(),
					success :function(data){
						alert(data);
						$("#myfrm")[0].reset();
						window.location.href="stud_show.php";			
					}

				});
		});

		$('#o_submit').click(function(event){
		event.preventDefault();
				$.ajax({
					url : 'ologin.php',
					method : 'POST',
					data : $('#myform').serialize(),
					success :function(data){
						alert(data);
						$("#myform")[0].reset();
						window.location.href="stud_show.php";			
					}

				});
		});

	});
</script>

<!--------footer---------->
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
			<a href="admin_login.php" class="foot-link">GroupAdminLogin</a>
			<a href="" class="foot-link"></a>
		</div>
	</div>
	<div class=" text-center copy font-weight-bold text-white">COPYRIGHTS@STRATEGYSOFTWARES.COM</div>
</div>
<!--------footer-------->
</body>
</html>