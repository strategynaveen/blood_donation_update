<!DOCTYPE html>
<html>
<head>
	<title>StrategySoftware</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="main.css">

</head>
<body class="parallax3">
	<!----navbar---->
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
			<!----navbar---->
			<br>
			<div class="jumbotron op">
				<p class="text-center text-col sh1 h1 ">DONAR REGISTRATION</p>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-3"></div>
					<div class="col-lg-6">
						<div class="jumbotron shadow-lg rounded">
							<div class="row">
								<div class="col-lg-1"></div>
								<div class="col-lg-10">
									<div class="jumbotron shadow-lg rounded">
										<div class="row"> 
											<!--<div class="col-sm-4"></div>--->
											<div class="column">
												<img src="stud.jpg" class="rounded-circle shadow-lg rounded" id="img-click" height="110" width="100" data-toggle="modal" data-target="#mymodel">
												<br>
												<br>
												<button class="btn btn-lg btn-info"  data-toggle="modal" data-target="#mymodel"><i class="fa fa-graduation-cap" ></i>Student</button>
											</div>
											<!---<div class="col-sm-4"></div>-->
										 </div>
										 <br>									
										 <div class="row"> 
											<div class="column">
												<img src="emp.png" class="rounded-circle shadow-lg rounded" id="img-click1" height="100" width="100" data-toggle="modal" data-target="#mymodel1">
												<br>
												<br>
												<button class="btn btn-lg btn-info" data-toggle="modal" data-target="#mymodel1"><i class="fa fa-user-secret"></i>Employee</button>
											</div>
											<!---<div class="col-sm-4"></div>-->
										 </div>
										 <br>
										 <div class="column">
												<img src="other.jpg" class="rounded-circle shadow-lg rounded"  id="img-click2" height="110" width="100" data-toggle="modal" data-target="#mymodel2">
												<br>
												<br>
												<button class="btn btn-lg btn-info" data-toggle="modal" data-target="#mymodel2"><i class="fa fa-users"></i>Others</button>
											</div>
											<!---<div class="col-sm-4"></div>-->
										 </div>
									</div>
								</div>
								<div class="col-lg-1"></div>
							</div>
						</div>
					<div class="col-lg-3"></div>	
				</div>	
			</div>
				
					
				

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
		
<!---------footer finish----------->
<!-- Modal student -->
	<div class="modal fade " id="mymodel" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  		<div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
    		<div class="modal-content">
      			<div class="modal-header">
        			<h5 class="modal-title" id="exampleModalScrollableTitle">Student Registration</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          				<span aria-hidden="true">&times;</span>
        			</button>
      			</div>
      			<div class="modal-body">
      				<form method="POST" id="myform1">
        				<div class="form-group">
        					<div class="row">
        						<div class="col-lg-6">
        							<label for="sname" class="lbl_name">Name:</label>
        						</div>
        						<div class="col-lg-6">
        							<div class="InputWithIcon">
        								<input type="text" name="s_name" class="form-control form-control-lg" placeholder="Enter Name.." required="true">
        								<i class="fa fa-user"></i>
        							</div>
        						</div>				
        					</div>
        				</div>
        				<div class="form-group">
        					<div class="row">
        						<div class="col-lg-6">
        							<label for="sname" class="lbl_name">RegNo:</label>
        						</div>
        						<div class="col-lg-6">
        							<div class="InputWithIcon">
        								<input type="text" name="s_reg_no" class="form-control form-control-lg" placeholder="Enter RegNo.." required="true">
        								<i class="fa fa-graduation-cap"></i>
        							</div>
        						</div>				
        					</div>
        				</div>
        				<div class="form-group">
							<div class="row">
								<div class="col-lg-6">
									<label for="age" class="lbl_name">Gender:</label>
								</div>
								<div class="col-lg-6">
									<div class="InputWithIcon">
										<select class="custom-select cust" id="s_gender" name="s_gender" required>
											<option disabled selected>Choose Gender</option>
											<option value="Male">Male</option>
											<option value="FeMale">FeMale</option>
											<option value="Others">Others</option>
										</select>
										<i class="fa fa-male"></i>
									</div>
								</div>
							</div>
						</div>
        				<div class="form-group">
        					<div class="row">
        						<div class="col-lg-6">
        							<label for="sname" class="lbl_name">Phone No:</label>
        						</div>
        						<div class="col-lg-6">
        							<div class="InputWithIcon">
        								<input type="text" name="s_phone_no" class="form-control form-control-lg" placeholder="Enter Phone.." required="true">
        								<i class="fa fa-phone"></i>
        							</div>
        						</div>				
        					</div>
        				</div>
        				<div class="form-group">
        					<div class="row">
        						<div class="col-lg-6">
        							<label for="sname" class="lbl_name">Collage Name:</label>
        						</div>
        						<div class="col-lg-6">
        							<div class="InputWithIcon">
        								<input type="text" name="s_clg_name" class="form-control form-control-lg" placeholder="Enter Collage Name.." required="true">
        								<i class="fa fa-university"></i>
        							</div>
        						</div>				
        					</div>
        				</div>
        				<div class="form-group">
        					<div class="row">
        						<div class="col-lg-6">
        							<label for="sname" class="lbl_name">Department:</label>
        						</div>
        						<div class="col-lg-6">
        							<div class="InputWithIcon">
        								<input type="text" name="s_dep_name" class="form-control form-control-lg" placeholder="Enter Department" required="true">
        								<i class="fa fa-folder-open"></i>
        							</div>
        						</div>				
        					</div>
        				</div>
        				<div class="form-group">
        					<div class="row">
        						<div class="col-lg-6">
        							<label for="sname" class="lbl_name">MailId:</label>
        						</div>
        						<div class="col-lg-6">
        							<div class="InputWithIcon">
        								<input type="email" name="s_mail_id" class="form-control form-control-lg " placeholder="Enter MailId.." required="true">
        								<i class="fa fa-commenting"></i>
        							</div>
        						</div>				
        					</div>
        				</div>
        				<div class="form-group">
        					<div class="row">
        						<div class="col-lg-6">
        							<label for="sname" class="lbl_name">Address:</label>
        						</div>
        						<div class="col-lg-6">
        							<div class="InputWithIcon">
										<textarea type="text" name="s_add"  id="reason" placeholder="Enter Address.." class="form-control form-control-texta" rows="5" required="true"></textarea>
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
										<select class="custom-select cust" id="s_blood_group" name="s_blood_grp" required>
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
									<label for="s_id" class="lbl_name">UserId</label>
								</div>
								<div class="col-lg-6">
									<div class="InputWithIcon">
										<input type="text" name="s_user_id" id="s_user_id" class="form-control form-control-lg" placeholder="Enter The User id" required>
										<i class="fa fa-id-badge"></i>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-lg-6">
									<label for="s_pass" class="lbl_name">Password</label>
								</div>
								<div class="col-lg-6">
									<div class="InputWithIcon">
										<input type="password" name="s_pass" id="s_pass" class="form-control form-control-lg" placeholder="Enter The Password" required>
										<i class="fa fa-key"></i>
									</div>
								</div>
							</div>
						</div>
					</form>
         		</div>
      				<div class="modal-footer">
      					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        				<input  type="submit" id="submit" name="submit" class="btn btn-lg btn-primary" value="Insert">
      				</div>
      			
    		</div>
  		</div>
	</div>
<!----student model finish--->
<!-----employee model------>
<div class="modal fade" id="mymodel1" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  		<div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
    		<div class="modal-content">
      			<div class="modal-header">
        			<h5 class="modal-title" id="exampleModalScrollableTitle">Employee Registration</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          				<span aria-hidden="true">&times;</span>
        			</button>
      			</div>
      			<div class="modal-body">
        			<form method="POST" id="myform2">
        				<div class="form-group">
        					<div class="row">
        						<div class="col-lg-6">
        							<label for="ename" class="lbl_name">Name:</label>
        						</div>
        						<div class="col-lg-6">
        							<div class="InputWithIcon">
        								<input type="text" name="e_name" class="form-control form-control-lg" placeholder="Enter Name.." required="true">
        								<i class="fa fa-user"></i>
        							</div>
        						</div>				
        					</div>
        				</div>
        				<div class="form-group">
        					<div class="row">
        						<div class="col-lg-6">
        							<label for="ename" class="lbl_name">Age:</label>
        						</div>
        						<div class="col-lg-6">
        							<div class="InputWithIcon">
        								<input type="text" name="e_age" class="form-control form-control-lg" placeholder="Enter Age.." required="true">
        								<i class="fa fa-graduation-cap"></i>
        							</div>
        						</div>				
        					</div>
        				</div>
        				<div class="form-group">
							<div class="row">
								<div class="col-lg-6">
									<label for="age" class="lbl_name">Gender:</label>
								</div>
								<div class="col-lg-6">
									<div class="InputWithIcon">
										<select class="custom-select cust" id="e_gender" name="e_gender" required>
											<option disabled selected>Choose Blood Group</option>
											<option value="Male">Male</option>
											<option value="FeMale">FeMale</option>
											<option value="Others">Others</option>
										</select>
										<i class="fa fa-male"></i>
									</div>
								</div>
							</div>
						</div>
        				<div class="form-group">
        					<div class="row">
        						<div class="col-lg-6">
        							<label for="sname" class="lbl_name">Phone No:</label>
        						</div>
        						<div class="col-lg-6">
        							<div class="InputWithIcon">
        								<input type="text" name="e_phone_no" class="form-control form-control-lg" placeholder="Enter Phone.." required="true">
        								<i class="fa fa-phone"></i>
        							</div>
        						</div>				
        					</div>
        				</div>
        				<div class="form-group">
        					<div class="row">
        						<div class="col-lg-6">
        							<label for="sname" class="lbl_name">Company Name:</label>
        						</div>
        						<div class="col-lg-6">
        							<div class="InputWithIcon">
        								<input type="text" name="e_comp_name" class="form-control form-control-lg" placeholder="Enter Company Name.." required="true">
        								<i class="fa fa-university"></i>
        							</div>
        						</div>				
        					</div>
        				</div>
        				<div class="form-group">
        					<div class="row">
        						<div class="col-lg-6">
        							<label for="sname" class="lbl_name">Department:</label>
        						</div>
        						<div class="col-lg-6">
        							<div class="InputWithIcon">
        								<input type="text" name="e_dep_name" class="form-control form-control-lg" placeholder="Enter Department" required="true">
        								<i class="fa fa-folder-open"></i>
        							</div>
        						</div>				
        					</div>
        				</div>
        				<div class="form-group">
        					<div class="row">
        						<div class="col-lg-6">
        							<label for="sname" class="lbl_name">MailId:</label>
        						</div>
        						<div class="col-lg-6">
        							<div class="InputWithIcon">
        								<input type="email" name="e_mail_id" class="form-control form-control-lg " placeholder="Enter MailId.." required="true">
        								<i class="fa fa-commenting"></i>
        							</div>
        						</div>				
        					</div>
        				</div>
        				<div class="form-group">
        					<div class="row">
        						<div class="col-lg-6">
        							<label for="sname" class="lbl_name">Address:</label>
        						</div>
        						<div class="col-lg-6">
        							<div class="InputWithIcon">
										<textarea type="text" name="e_add"  id="e_add" placeholder="Enter Address.." class="form-control form-control-texta" rows="5" required="true"></textarea>
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
										<select class="custom-select cust" id="e_blood_group" name="e_blood_grp" required>
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
									<label for="s_id" class="lbl_name">UserId</label>
								</div>
								<div class="col-lg-6">
									<div class="InputWithIcon">
										<input type="text" name="e_user_id" id="s_user_id" class="form-control form-control-lg" placeholder="Enter The User id" required>
										<i class="fa fa-id-badge"></i>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-lg-6">
									<label for="s_pass" class="lbl_name">Password</label>
								</div>
								<div class="col-lg-6">
									<div class="InputWithIcon">
										<input type="password" name="e_pass" id="s_pass" class="form-control form-control-lg" placeholder="Enter The Password" required>
										<i class="fa fa-key"></i>
									</div>
								</div>
							</div>
						</div>
						</form>
         			</div>
      				<div class="modal-footer">
        				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        				<input  type="submit" id="emp_ins" name="submit1" class="btn btn-lg btn-primary" value="Insert">
      				</div>
    		</div>
  		</div>
</div>
<!----employee model finish------>
<!------other model-------->
<div class="modal fade" id="mymodel2" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  		<div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
    		<div class="modal-content">
      			<div class="modal-header">
        			<h5 class="modal-title" id="exampleModalScrollableTitle">Regisration For Donars</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          				<span aria-hidden="true">&times;</span>
        			</button>
      			</div>
      			<div class="modal-body">
        			<form method="POST" id="myform3">
        				<div class="form-group">
        					<div class="row">
        						<div class="col-lg-6">
        							<label for="sname" class="lbl_name">Name:</label>
        						</div>
        						<div class="col-lg-6">
        							<div class="InputWithIcon">
        								<input type="text" name="o_name" class="form-control form-control-lg" placeholder="Enter Name.." required="true">
        								<i class="fa fa-user"></i>
        							</div>
        						</div>				
        					</div>
        				</div>
        				<div class="form-group">
        					<div class="row">
        						<div class="col-lg-6">
        							<label for="ename" class="lbl_name">Age:</label>
        						</div>
        						<div class="col-lg-6">
        							<div class="InputWithIcon">
        								<input type="text" name="o_age" class="form-control form-control-lg" placeholder="Enter Age.." required="true">
        								<i class="fa fa-graduation-cap"></i>
        							</div>
        						</div>				
        					</div>
        				</div>
        				<div class="form-group">
							<div class="row">
								<div class="col-lg-6">
									<label for="age" class="lbl_name">Gender:</label>
								</div>
								<div class="col-lg-6">
									<div class="InputWithIcon">
										<select class="custom-select cust" id="o_gender" name="o_gender" required>
											<option disabled selected>Choose Gender</option>
											<option value="Male">Male</option>
											<option value="FeMale">FeMale</option>
											<option value="Others">Others</option>
										</select>
										<i class="fa fa-male"></i>
									</div>
								</div>
							</div>
						</div>
        				<div class="form-group">
        					<div class="row">
        						<div class="col-lg-6">
        							<label for="sname" class="lbl_name">Phone No:</label>
        						</div>
        						<div class="col-lg-6">
        							<div class="InputWithIcon">
        								<input type="text" name="o_phone_no" class="form-control form-control-lg" placeholder="Enter Phone.." required="true">
        								<i class="fa fa-phone"></i>
        							</div>
        						</div>				
        					</div>
        				</div>
        				<div class="form-group">
        					<div class="row">
        						<div class="col-lg-6">
        							<label for="sname" class="lbl_name">MailId:</label>
        						</div>
        						<div class="col-lg-6">
        							<div class="InputWithIcon">
        								<input type="email" name="o_mail_id" class="form-control form-control-lg " placeholder="Enter MailId.." required="true">
        								<i class="fa fa-commenting"></i>
        							</div>
        						</div>				
        					</div>
        				</div>
        				<div class="form-group">
        					<div class="row">
        						<div class="col-lg-6">
        							<label for="sname" class="lbl_name">Address:</label>
        						</div>
        						<div class="col-lg-6">
        							<div class="InputWithIcon">
										<textarea type="text" name="o_add"  id="reason" placeholder="Enter Address.." class="form-control form-control-texta" rows="5" required="true"></textarea>
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
										<select class="custom-select cust" id="o_blood_group" name="o_blod_grp" required>
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
									<label for="s_id" class="lbl_name">UserId</label>
								</div>
								<div class="col-lg-6">
									<div class="InputWithIcon">
										<input type="text" name="o_user_id" id="s_user_id" class="form-control form-control-lg" placeholder="Enter The User id" required>
										<i class="fa fa-id-badge"></i>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-lg-6">
									<label for="s_pass" class="lbl_name">Password</label>
								</div>
								<div class="col-lg-6">
									<div class="InputWithIcon">
										<input type="password" name="o_pass" id="s_pass" class="form-control form-control-lg" placeholder="Enter The Password" required>
										<i class="fa fa-key"></i>
									</div>
								</div>
							</div>
						</div>
					</form>
         		</div>
      			<div class="modal-footer">
      				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       				<input  type="submit" id="other_ins" name="submit" class="btn btn-lg btn-primary" value="Insert">
   				</div>
   			</div>
  		</div>
	</div>
	<!---------other model finish---------------->


<script type="text/javascript" src="jquery-3.5.0.min.js"></script>			
<script type="text/javascript">
	$(document).ready(function(){
		alert('hi guys');
		//student model ajax
		$('#submit').click(function(){
			alert('hi guys');
			$.ajax({
				url : "student_ins.php",
				method : "POST",
				data : $('#myform1').serialize(),
					success :function(data){
						alert(data);
						$("#myform1")[0].reset();
						window.location.href="group_login.php";			
					}
			});
		});

		//employee model ajax
		$('#emp_ins').click(function(){
			alert('hi guys');
			$.ajax({
				url : "emp_ins.php",
				method : "POST",
				data : $('#myform2').serialize(),
					success :function(data){
						alert(data);
						$("#myform2")[0].reset();
						window.location.href="group_login.php";			
					}
			});
		});

		//other model 
		$('#other_ins').click(function(){
			alert('hi guys');
			$.ajax({
				url : "other_ins.php",
				method : "POST",
				data : $('#myform3').serialize(),
					success :function(data){
						alert(data);
						$("#myform3")[0].reset();
						window.location.href="group_login.php";					
					}
			});
		});
		//image first click function
		$('#img-click').click(function(){
			alert('hi its working');
		});
		//image second click function
		$('#img-click1').click(function(){
			alert('hi its working');
		});
		//image third click function
		$('#img-click2').click(function(){
			alert('hi its working');
		});

	});
</script>
</body>
</html>