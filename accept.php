<?php
session_start();
	
	//print_r($_GET);
	if (empty($_GET['pati_id'])) {
		header('location:stud_show.php');
	}
	else{
		$patid=$_GET['pati_id'];
		$_SESSION['patient_id']=$patid;
		include('db_config.php');
		if ($con->connect_error) {
			die('connection failed'.$con->connect_error);
		}
		else{
			//echo "connection successfully";
			$sql="SELECT * FROM `patient` WHERE pati_id='".$patid."'";
			$res=$con->query($sql);
			if ($res==true) {
				echo "<script>alert('query is true');</script>";
				if ($res->num_rows>0) {
					while ($row=$res->fetch_assoc()) {	
						$unit=$row['unit'];
						$blood=$row['bloood_grp'];
						//echo "<script>alert('$unit');</script>";
						//echo "<script>alert('$blood');</script>";
					}
				}
				else{
					echo "empty";
				}	
			}
			else{
				echo "error".$con."";
			}
		}
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>StrategyNaveen</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body class="parallax4">
	<!------navigation----->
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
				<a class="nav-link fn1" href="donar_reg.php"><span class="fa fa-user"></span>Donar Registration</a>
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
<!---------navigation--------->
 <br>
<div class="jumbotron op">
	<p class="text-center text-col sh1 h1 ">Accept Form</p>
    <P class="text-center text-col sh1 h5 small"></P>
</div>
<div class="container">
	<div class="row">
		<div class="col-lg-2"></div>
		<div class="col-lg-8">
			<div class="jumbotron op">
				<form method="POST" id="myform">
					<div class="form-group">
						<div class="row">
							<div class="col-lg-6">
								<label for="" class="lbl_name">PatientId</label>
							</div>
							<div class="col-lg-6">
								<label for="" class="lbl_name" name="pati_id"><?php echo $patid; ?></label>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-lg-6">
								<label for="" class="lbl_name">blood group</label>
							</div>
							<div class="col-lg-6">
								<label for="" class="lbl_name" name="blood"><?php echo $blood; ?></label>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-lg-6">
								<label for="" class="lbl_name">unit</label>
							</div>
							<div class="col-lg-6">
								<label for="" class="lbl_name" name="unit" ><?php echo $unit; ?></label>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-lg-6">
								<label for="" class="lbl_name">Userid</label>
							</div>
							<div class="col-lg-6">
								<div class="InputWithIcon">
									<input type="text" name="uname" placeholder="Enter you userid" class="form-control form-control-lg" required="true">
									<i class="fa fa-id-badge"></i>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-lg-6">
								<label for="" class="lbl_name">name</label>
							</div>
							<div class="col-lg-6">
								<div class="InputWithIcon">
									<input type="text" name="dname" placeholder="Enter your Name" class="form-control form-control-lg" required="true">
									<i class="fa fa-user"></i>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-lg-6">
								<label for="" class="lbl_name">Mobile</label>
							</div>
							<div class="col-lg-6">
								<div class="InputWithIcon">
									<input type="text" name="mobile" placeholder="Enter Mobile No" class="form-control form-control-lg" required="true">
									<i class="fa fa-mobile"></i>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-lg-6">
								<label for="" class="lbl_name">Accept Date</label>
							</div>
							<div class="col-lg-6">
								<h5 id="demo" class="lbl_name"></h5>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-lg-6">
								<label for="" class="lbl_name">Unit</label>
							</div>
							<div class="col-lg-6">
								<div class="InputWithIcon">
									<select class="custom-select cust" id="dunit" name="dunit" required="true">
										<option disabled selected>Choose Unit</option>
										<option value="1">Unit1</option>
										<option value="2">Unit2</option>
									</select>
									<i class="fa fa-plus"></i>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
                    	<div class="row">
                    		<div class="col-lg-2"></div>
                    		<div class="col-lg-8">
                    			<h6 class="lbl_name">Already You Donate Blood:</h6>
                    			<div class="custom-control custom-radio custom-control-inline">
                    				<input type="radio" class="custom-control-input" onclick="mydate()" id="defaultinline1" name="odate">
                            		<label class="custom-control-label" for="defaultinline1" >YES</label>
                        		</div>
                        		<div class="custom-control custom-radio custom-control-inline">
                        			<input type="radio" class="custom-control-input"  onclick="mydate1()" name="odate" id="defaultinline2">
                        			<label for="defaultinline2" class="custom-control-label">NO</label>
                        		</div>
                    		</div>
                   			<div class="col-lg-2"></div>
                  		</div>
                	</div>
                	<div id="check_date">
                		<div class="form-group">
                			<div class="row">
                				<div class="col-lg-6">
                					<label for="" class="lbl_name">Old Date</label>
                				</div>
                				<div class="col-lg-6">
                					<div class="InputWithIcon">
                						<input type="date" class="form-control form-control-lg" name="old_date">
                						<i class="fa fa-tint"></i>
                					</div>
                				</div>
                			</div>
                		</div>
                	</div>
                	<div class="form-group">
                		<div class="row">
                			<div class="col-lg-4"></div>
                			<div class="col-lg-4">
                				<input type="submit" name="submit" class="btn btn-lg btn-info" id="submit" value="submit">
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
<!---footer-->
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
			<a href="admin_login.php" class="foot-link">GroupAdminLogin</a>
			<a href="" class="foot-link"></a>
		</div>
	</div>
	<div class=" text-center copy font-weight-bold text-white">COPYRIGHTS@STRATEGYSOFTWARES.COM</div>
</div>

<!---footer---------->




<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){

		var d=new Date();
		document.getElementById('demo').innerHTML=d.toDateString();
		document.getElementById("check_date").style.display="none";

		$('#submit').click(function(event){
			// alert('hi guys')
		event.preventDefault();
				$.ajax({
					url : 'accept_insert.php',
					method : 'POST',
					data : $('#myform').serialize(),
					success :function(data){
						alert(data);
						$("#myform")[0].reset();
						window.location.href="index.php";			
					}

				});
		});
	});
	function mydate(){
		document.getElementById("check_date").style.display="inline";
	}
	function mydate1(){
		document.getElementById("check_date").style.display="none";
	}
</script>
</body>
</html>