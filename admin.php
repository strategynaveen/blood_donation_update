
<!DOCTYPE html>
<html>
<head>
	<title>StrategyNaveen</title>
	<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.min.css">
	<link rel = "stylesheet" type = "text/css" href = "main.css">
</head>
<body class = "parallax3">
<!------------navigation-------->
<nav    class = "navbar navbar-expand-lg navbar-dark bg-dark nav-atch w-100" >
<a      calss = "navbar-brand " href  = "#" ><i class        = "fa fa-tint fa-2x icon"></i>Blooddonate</a>
<button class = "navbar-toggler" type = "button" data-toggle = "collapse" data-target = "#navbarsupportedcontent" aria-controls = "navbarsupportedcontent" aria-expanded = "false" aria-label = "Toggle navigation">
<span   class = "navbar-toggler-icon"></span>
		</button>
		<div class = "collapse navbar-collapse" id = "navbarsupportedcontent">
		<ul  class = "navbar-nav mr-auto">
		<li  class = "nav-item active">
		<a   class = "nav-link nav-mar fn1" href   = "index.php"><i class = "fa fa-home icon"></i>HOME<span class = "sr-only">(current)</span></a>
				</li>
				<li class = "nav-item">
				<a  class = "nav-link fn1" href = "group_login.php" ><span class = "fa fa-users icon"></span>GroupLOGIN</a>
				</li>
				<li class = "nav-item">
				<a  class = "nav-link fn1" href = "donar_reg.php"><span class = "fa fa-plus"></span>Donar Registration</a>
				</li>
				<li  class = "nav-item dropdown fn1">
				<a   class = "nav-link dropdown-toggle" href = "#" id = "navbardropdown" role = "button" data-toggle = "dropdown" aria-haspopup = "true" aria-expanded = "false"><i class = "fa fa-plus icon"></i>PATIENT</a>
				<div class = "dropdown-menu" arialabelledy   = "navbardropdown">
				<a   class = "dropdown-item" href            = "patient_register.php">REGISTER</a>
				<a   class = "dropdown-item" href            = "group_login.php">Group Login</a>
				<div class = "dropdown-divider"></div>
				<a   class = "dropdown-item" href            = "#">something else here</a>
					</div>
				</li>
				<li class = "nav-item">
				<a  class = "nav-link fn1" href = "adminprof.php"><span class = "fa fa-info-circle icon"></span>About</a>
				</li>
				<li class = "nav-item">
				<a  class = "nav-link " id = "fn2" href = "admin_login.php" tabindex = "-1" aria-disbled = "true">GroupAdminLogin</a>
				</li>
			</ul>
	
		</div>
	</nav>
<br>
<!---navigation---------->
<div class = "jumbotron op shadow-lg">
<p   class = "text-center text-col sh5 ">Admin Work</p>
</div>
<div class = "container">
<div class = "row">
<div class = "col-lg-3"></div>
<div class = "col-lg-6">
<div class = "panel shadow-lg bg-white  rounded border">
<ul  class = "nav nav-pills mb-3" id = "pills-tab" role                = "tablist">
<li  class = "nav-item">
<a   class = "nav-link active h4" id = "pills-patient-tab" data-toggle = "pill" href = "#pills-patient" role = "tab" aria-controls = "pills-patient" aria-selected = "true">Patient </a>
  					</li>
  					<li class = "nav-item">
  					<a  class = "nav-link h4" id = "pills-donar-tab" data-toggle = "pill" href = "#pills-donar" role = "tab" aria-controls = "pills-donar" aria-selected = "false">Donar</a>
  					</li>
  					<li class = "nav-item">
  					<a  class = "nav-link h4" id = "pills-profile-tab" data-toggle = "pill" href = "#pills-profile" role = "tab" aria-controls = "pills-profile" aria-selected = "false">Profile</a>
  					</li>
  					<li class = "nav-item">
  					<a  class = "nav-link h4" id = "pills-accept-tab" data-toggle = "pill"  href = "#pills-accept" role = "tab" aria-controls = "pills-accept" aria-selected = "false">Accept</a>
  					</li>
  					<li class = "nav-item">
  					<a  class = "nav-link h4" id = "pills-mail-tab" data-toggle = "pill"  href = "#pills-mail" role = "tab" aria-controls = "pills-mail" aria-selected = "false">Mail</a>
  					</li>
				</ul>
			</div>
		</div>
		<div class = "col-lg-3"></div>
	</div>
	<br>
	<div class = "row">
	<div class = "col-md-12">
	<div class = "jumbotron">
	<div class = "tab-content" id               = "pills-tabContent">
	<div class = "tab-pane fade show active" id = "pills-patient" role = "tabpanel" aria-labelledby = "pills-patient-tab">
	<p   class = "text-center sh5 h2">Patient Dettails</p>
	<div id    = "output1"></div>
  					</div>
  					<div class = "tab-pane fade" id = "pills-donar" role = "tabpanel" aria-labelledby = "pills-donar-tab">
  					<p   class = "text-center sh5 h2">Donar Details</p>
  						<br>
  						<div class = "row">
  						<div class = "col-md-3"></div>
  						<div class = "col-md-6">
  						<ul  class = "nav nav-pills mb-3" id = "pills-tab" role                = "tablist">
  						<li  class = "nav-item">
  						<a   class = "nav-link active h4" id = "pills-student-tab" data-toggle = "pill" href = "#pills-student" role = "tab" aria-controls = "pills-student" aria-selected = "true">student </a>
  									</li>
  									<li class = "nav-item">
  									<a  class = "nav-link h4" id = "pills-employee-tab" data-toggle = "pill" href = "#pills-employee" role = "tab" aria-controls = "pills-employee" aria-selected = "false">employee</a>
  									</li>
  									<li class = "nav-item">
  									<a  class = "nav-link h4" id = "pills-other-tab" data-toggle = "pill" href = "#pills-other" role = "tab" aria-controls = "pills-other" aria-selected = "false">other</a>
  									</li>
								</ul>
  							</div>
  							<div class = "col-md-3"></div>
  						</div>
  						<div class = "tab-content" id               = "pills-tabContent">
  						<div class = "tab-pane fade show active" id = "pills-student" role = "tabpanel" aria-labelledby = "pills-student-tab">
  						<p   class = "text-center sh5 font">Student  Donar Details</p>
  						<div class = "" id                          = "output"></div>
  							</div>
  							<div class = "tab-pane fade " id = "pills-employee" role = "tabpanel" aria-labelledby = "pills-employee-tab">
  							<p   class = "text-center sh5 font">Employee donar details</p>
  							<div class = "" id               = "output2"></div>
  							</div>
  							<div class = "tab-pane fade" id = "pills-other" role = "tabpanel" aria-labelledby = "pills-other-tab">
  							<p   class = "text-center sh5 font">Other Donar Details</p>
  							<div class = "" id              = "output3"></div>
  							</div>
  						</div>
  						
  					</div>
  					<div    class = "tab-pane fade" id = "pills-profile" role        = "tabpanel" aria-labelledby = "pills-profile-tab">
  					<p      class = "text-center sh5 h3">Profile</p>
  					<button type  = "button" class     = "btn btn-lg btn-primary" id = "profile_open">Create</button>
  						<br>
  						<br>
  						<div id = "profile"></div>

  					</div>
  					<div class = "tab-pane fade" id = "pills-accept" role = "tabpanel" aria-labelledby = "pills-accept-tab">
  					<p   class = "text-center sh5 h3">Accepting Cases</p>
  					<div id    = "accept"></div>

  					</div>

  					<div class = "tab-pane fade" id = "pills-mail" role = "tabpanel" aria-labelledby = "pills-mail-tab">
  					<p   class = "text-center sh5 h3">Mail Panel</p>
  					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Modal -->
	<div    class       = "modal fade" id                           = "mymodal" tabindex                     = "-1" role          = "dialog" aria-labelledby = "exampleModalScrollableTitle" aria-hidden = "true">
	<div    class       = "modal-dialog modal-dialog-centered" role = "document">
	<div    class       = "modal-content">
	<div    class       = "modal-header">
	<h4     class       = "modal-title text-info tex-align" id      = "exampleModalScrollableTitle"><i class = "fa fa-users">Patient Details</i></h4>
	<button type        = "button" class                            = "close" data-dismiss                   = "modal" aria-label = "Close">
	<span   aria-hidden = "true">&times;</span>
       				</button>
   				</div>
   				<div class = "modal-body">
   					
   					<div id = "patient_view"></div>
      				
   				</div>
  				<div    class = "modal-footer">
  				<button type  = "button" class = "btn btn-secondary"  data-dismiss = "modal">Close</button>
   				</div>
   			</div>
		</div>
	</div>
<!----modal--->
<!----------Edit Modal------------->
<div    class       = "modal fade" id                      = "editmodal" tabindex                   = "-1" role          = "dialog" aria-labelledby = "exampleModalScrollableTitle" aria-hidden = "true">
<div    class       = "modal-dialog modal-md" role         = "document">
<div    class       = "modal-content">
<div    class       = "modal-header">
<h4     class       = "modal-title text-info tex-align" id = "exampleModalScrollableTitle"><i class = "fa fa-users">Patient Details</i></h4>
<button type        = "button" class                       = "close" data-dismiss                   = "modal" aria-label = "Close">
<span   aria-hidden = "true">&times;</span>
       				</button>
   				</div>
   				<div class = "modal-body">
   				<div id    = "patient_update"></div>
   				</div>
  				<div    class = "modal-footer">
  				<button type  = "button" class = "btn btn-lg btn-secondary"  data-dismiss = "modal">Close</button>
  				<button type  = "submit" class = "btn btn-lg btn-primary" value           = "submit" name = "submit" id = "submit"><i class = "fa fa-pencil">submit</i></button>
   				</div>
   			</div>
		</div>
	</div>
<!----modal--->
<!----------Delete Modal------------->
<div    class       = "modal fade" id                                    = "deletemodal" tabindex                 = "-1" role          = "dialog" aria-labelledby = "exampleModalScrollableTitle" aria-hidden = "true">
<div    class       = "modal-dialog modal-md modal-dialog-centered" role = "document">
<div    class       = "modal-content">
<div    class       = "modal-header">
<h4     class       = "modal-title text-info tex-align" id               = "exampleModalScrollableTitle"><i class = "fa fa-users">Patient Details</i></h4>
<button type        = "button" class                                     = "close" data-dismiss                   = "modal" aria-label = "Close">
<span   aria-hidden = "true">&times;</span>
       				</button>
   				</div>
   				<div class = "modal-body">
   				<h4  class = "text-success" id = "del">Do You Want To Delete This Patient  ID:<p id = "demo" class = "text-danger"></p></h4>
   				</div>
  				<div    class = "modal-footer">
  				<button type  = "button" class = "btn btn-lg btn-secondary"  data-dismiss = "modal">No</button>
  				<button type  = "submit" class = "btn btn-lg btn-primary" value           = "submit" name = "submit" id = "delete"><i class = "fa fa-eraser">Yes</i></button>
   				</div>
   			</div>
		</div>
	</div>
<!----modal--->
<!----------Student View  Modal------------->
<div    class       = "modal fade" id                                    = "stud_view_modal" tabindex             = "-1" role          = "dialog" aria-labelledby = "exampleModalScrollableTitle" aria-hidden = "true">
<div    class       = "modal-dialog modal-md modal-dialog-centered" role = "document">
<div    class       = "modal-content">
<div    class       = "modal-header">
<h4     class       = "modal-title text-info tex-align" id               = "exampleModalScrollableTitle"><i class = "fa fa-users">Student Details</i></h4>
<button type        = "button" class                                     = "close" data-dismiss                   = "modal" aria-label = "Close">
<span   aria-hidden = "true">&times;</span>
       				</button>
   				</div>
   				<div class = "modal-body">
   				<div class = "" id = "student_view"></div>
   				</div>
  				<div    class = "modal-footer">
  				<button type  = "button" class = "btn btn-secondary"  data-dismiss = "modal">Close</button>
   				</div>
   			</div>
		</div>
	</div>
<!----modal--->
<!----------Student Edit Modal------------->
<div    class       = "modal fade" id                      = "stud_edit_modal" tabindex             = "-1" role          = "dialog" aria-labelledby = "exampleModalScrollableTitle" aria-hidden = "true">
<div    class       = "modal-dialog modal-md" role         = "document">
<div    class       = "modal-content">
<div    class       = "modal-header">
<h4     class       = "modal-title text-info tex-align" id = "exampleModalScrollableTitle"><i class = "fa fa-users">Student Details</i></h4>
<button type        = "button" class                       = "close" data-dismiss                   = "modal" aria-label = "Close">
<span   aria-hidden = "true">&times;</span>
       				</button>
   				</div>
   				<div class = "modal-body">
   				<div id    = "student_update"></div>
   				</div>
  				<div    class = "modal-footer">
  				<button type  = "button" class = "btn btn-lg btn-secondary"  data-dismiss = "modal">Close</button>
  				<button type  = "submit" class = "btn btn-lg btn-primary" value           = "stud_update1" name = "stud_update1" id = "stud_update1"><i class = "fa fa-pencil">submit</i></button>
   				</div>
   			</div>
		</div>
	</div>
<!----modal--->
<!----------student Delete Modal------------->
<div    class       = "modal fade" id                                    = "stud_delete_modal" tabindex           = "-1" role          = "dialog" aria-labelledby = "exampleModalScrollableTitle" aria-hidden = "true">
<div    class       = "modal-dialog modal-md modal-dialog-centered" role = "document">
<div    class       = "modal-content">
<div    class       = "modal-header">
<h4     class       = "modal-title text-info tex-align" id               = "exampleModalScrollableTitle"><i class = "fa fa-users">Delete Confirmation</i></h4>
<button type        = "button" class                                     = "close" data-dismiss                   = "modal" aria-label = "Close">
<span   aria-hidden = "true">&times;</span>
       				</button>
   				</div>
   				<div class = "modal-body">
   				<h4  class = "text-success" id = "del">Do You Want To Delete This USER  ID:<p id = "stud_demo" class = "text-danger"></p></h4>
   				</div>
  				<div    class = "modal-footer">
  				<button type  = "button" class = "btn btn-lg btn-secondary"  data-dismiss = "modal">No</button>
  				<button type  = "submit" class = "btn btn-lg btn-primary" value           = "submit" name = "submit" id = "stud_delete"><i class = "fa fa-eraser">Yes</i></button>
   				</div>
   			</div>
		</div>
	</div>
<!----modal--->
<!----------employee View  Modal------------->
<div    class       = "modal fade" id                                    = "emp_view_modal" tabindex              = "-1" role          = "dialog" aria-labelledby = "exampleModalScrollableTitle" aria-hidden = "true">
<div    class       = "modal-dialog modal-md modal-dialog-centered" role = "document">
<div    class       = "modal-content">
<div    class       = "modal-header">
<h4     class       = "modal-title text-info tex-align" id               = "exampleModalScrollableTitle"><i class = "fa fa-users">Employee Details</i></h4>
<button type        = "button" class                                     = "close" data-dismiss                   = "modal" aria-label = "Close">
<span   aria-hidden = "true">&times;</span>
       				</button>
   				</div>
   				<div class = "modal-body">
   				<div class = "" id = "emp_view"></div>
   				</div>
  				<div    class = "modal-footer">
  				<button type  = "button" class = "btn btn-secondary"  data-dismiss = "modal">Close</button>
   				</div>
   			</div>
		</div>
	</div>
<!----modal--->
<!----------Employee Update Modal------------->
<div    class       = "modal fade" id                      = "emp_edit_modal" tabindex              = "-1" role          = "dialog" aria-labelledby = "exampleModalScrollableTitle" aria-hidden = "true">
<div    class       = "modal-dialog modal-md" role         = "document">
<div    class       = "modal-content">
<div    class       = "modal-header">
<h4     class       = "modal-title text-info tex-align" id = "exampleModalScrollableTitle"><i class = "fa fa-users">Details</i></h4>
<button type        = "button" class                       = "close" data-dismiss                   = "modal" aria-label = "Close">
<span   aria-hidden = "true">&times;</span>
       				</button>
   				</div>
   				<div class = "modal-body">
   				<div id    = "employee_update"></div>
   				</div>
  				<div    class = "modal-footer">
  				<button type  = "button" class = "btn btn-lg btn-secondary"  data-dismiss = "modal">Close</button>
  				<button type  = "submit" class = "btn btn-lg btn-primary" value           = "emp_update1" name = "emp_update1" id = "emp_update1"><i class = "fa fa-pencil">submit</i></button>
   				</div>
   			</div>
		</div>
	</div>
<!----modal--->
<!----------employee Delete Modal------------->
<div    class       = "modal fade" id                                    = "emp_delete" tabindex                  = "-1" role          = "dialog" aria-labelledby = "exampleModalScrollableTitle" aria-hidden = "true">
<div    class       = "modal-dialog modal-md modal-dialog-centered" role = "document">
<div    class       = "modal-content">
<div    class       = "modal-header">
<h4     class       = "modal-title text-info tex-align" id               = "exampleModalScrollableTitle"><i class = "fa fa-users">Confirmation</i></h4>
<button type        = "button" class                                     = "close" data-dismiss                   = "modal" aria-label = "Close">
<span   aria-hidden = "true">&times;</span>
       				</button>
   				</div>
   				<div class = "modal-body">
   				<h4  class = "text-success" id = "del">Do You Want To Delete This User  ID:<p id = "emp_demo" class = "text-danger"></p></h4>
   				</div>
  				<div    class = "modal-footer">
  				<button type  = "button" class = "btn btn-lg btn-secondary"  data-dismiss = "modal">No</button>
  				<button type  = "submit" class = "btn btn-lg btn-primary" value           = "submit" name = "submit" id = "emp_delete_submit"><i class = "fa fa-eraser">Yes</i></button>
   				</div>
   			</div>
		</div>
	</div>
<!----modal--->
<!----------other View  Modal------------->
<div    class       = "modal fade" id                                    = "other_view_modal" tabindex            = "-1" role          = "dialog" aria-labelledby = "exampleModalScrollableTitle" aria-hidden = "true">
<div    class       = "modal-dialog modal-md modal-dialog-centered" role = "document">
<div    class       = "modal-content">
<div    class       = "modal-header">
<h4     class       = "modal-title text-info tex-align" id               = "exampleModalScrollableTitle"><i class = "fa fa-users"> Details</i></h4>
<button type        = "button" class                                     = "close" data-dismiss                   = "modal" aria-label = "Close">
<span   aria-hidden = "true">&times;</span>
       				</button>
   				</div>
   				<div class = "modal-body">
   				<div class = "" id = "o_view"></div>
   				</div>
  				<div    class = "modal-footer">
  				<button type  = "button" class = "btn btn-secondary"  data-dismiss = "modal">Close</button>
   				</div>
   			</div>
		</div>
	</div>
<!----modal--->
<!----------other update Modal------------->
<div    class       = "modal fade" id                                    = "other_update_modal" tabindex          = "-1" role          = "dialog" aria-labelledby = "exampleModalScrollableTitle" aria-hidden = "true">
<div    class       = "modal-dialog modal-md modal-dialog-centered" role = "document">
<div    class       = "modal-content">
<div    class       = "modal-header">
<h4     class       = "modal-title text-info tex-align" id               = "exampleModalScrollableTitle"><i class = "fa fa-users">Details</i></h4>
<button type        = "button" class                                     = "close" data-dismiss                   = "modal" aria-label = "Close">
<span   aria-hidden = "true">&times;</span>
       				</button>
   				</div>
   				<div class = "modal-body">
   				<div class = "" id = "o_update_view"></div>
   				</div>
  				<div    class = "modal-footer">
  				<button type  = "button" class = "btn btn-secondary"  data-dismiss = "modal">Close</button>
  				<button type  = "submit" class = "btn btn-lg btn-primary" value    = "other_update1" name = "other_update1" id = "other_update1"><i class = "fa fa-pencil">submit</i></button>
   				</div>
   			</div>
		</div>
	</div>
<!-----modal----->
<!----------other Delete Modal------------->
<div    class       = "modal fade" id                                    = "other_delete" tabindex                = "-1" role          = "dialog" aria-labelledby = "exampleModalScrollableTitle" aria-hidden = "true">
<div    class       = "modal-dialog modal-md modal-dialog-centered" role = "document">
<div    class       = "modal-content">
<div    class       = "modal-header">
<h4     class       = "modal-title text-info tex-align" id               = "exampleModalScrollableTitle"><i class = "fa fa-users">Confirmation</i></h4>
<button type        = "button" class                                     = "close" data-dismiss                   = "modal" aria-label = "Close">
<span   aria-hidden = "true">&times;</span>
       				</button>
   				</div>
   				<div class = "modal-body">
   				<h4  class = "text-success" id = "del">Do You Want To Delete This User  ID:<p id = "del_demo" class = "text-danger"></p></h4>
   				</div>
  				<div    class = "modal-footer">
  				<button type  = "button" class = "btn btn-lg btn-secondary"  data-dismiss = "modal">No</button>
  				<button type  = "submit" class = "btn btn-lg btn-primary" value           = "submit" name = "submit" id = "other_delete_submit"><i class = "fa fa-eraser">Yes</i></button>
   				</div>
   			</div>
		</div>
	</div>
<!----modal--->
<!----------Accept Delete Modal------------->
<div    class       = "modal fade" id                                    = "accept_delete" tabindex               = "-1" role          = "dialog" aria-labelledby = "exampleModalScrollableTitle" aria-hidden = "true">
<div    class       = "modal-dialog modal-md modal-dialog-centered" role = "document">
<div    class       = "modal-content">
<div    class       = "modal-header">
<h4     class       = "modal-title text-info tex-align" id               = "exampleModalScrollableTitle"><i class = "fa fa-users">Confirmation</i></h4>
<button type        = "button" class                                     = "close" data-dismiss                   = "modal" aria-label = "Close">
<span   aria-hidden = "true">&times;</span>
       				</button>
   				</div>
   				<div class = "modal-body">
   				<h4  class = "text-success" id = "del">Do You Want To Delete This mobile:<p id = "accept_demo" class = "text-danger"></p></h4>
   				</div>
  				<div    class = "modal-footer">
  				<button type  = "button" class = "btn btn-lg btn-secondary"  data-dismiss = "modal">No</button>
  				<button type  = "submit" class = "btn btn-lg btn-primary" value           = "submit" name = "submit" id = "accept_delete_submit"><i class = "fa fa-eraser">Yes</i></button>
   				</div>
   			</div>
		</div>
	</div>
<!----modal--->
<!----------profile insert  Modal------------->
<div    class       = "modal fade" id                                    = "profile_modal" tabindex               = "-1" role          = "dialog" aria-labelledby = "exampleModalScrollableTitle" aria-hidden = "true">
<div    class       = "modal-dialog modal-md modal-dialog-centered" role = "document">
<div    class       = "modal-content">
<div    class       = "modal-header">
<h4     class       = "modal-title text-info tex-align" id               = "exampleModalScrollableTitle"><i class = "fa fa-users">Admin Insertion</i></h4>
<button type        = "button" class                                     = "close" data-dismiss                   = "modal" aria-label = "Close">
<span   aria-hidden = "true">&times;</span>
       				</button>
   				</div>
   				<div   class  = "modal-body">
   				<form  method = "POST" id = "myform4">
   				<div   class  = "form-group">
   				<div   class  = "row">
   				<div   class  = "col-lg-6">
   				<label for    = "" class  = "lbl_name">Userid</label>
      							</div>
      							<div   class = "col-lg-6">
      							<div   class = "InputWithIcon">
      							<input type  = "text" class = "form-control form-control-lg" name = "userid" placeholder = "Enter Your Userid" required = "true">
      							<i     class = "fa fa-id-badge"></i>
      								</div>
      							</div>
      						</div>
      					</div>
      					<div   class = "form-group">
      					<div   class = "row">
      					<div   class = "col-lg-6">
      					<label for   = "" class = "lbl_name">UserName</label>
      							</div>
      							<div   class = "col-lg-6">
      							<div   class = "InputWithIcon">
      							<input type  = "text" class = "form-control form-control-lg" name = "uname" placeholder = "Enter Your UserName" required = "true">
      							<i     class = "fa fa-user"></i>
      								</div>
      							</div>
      						</div>
      					</div>
      					<div   class = "form-group">
      					<div   class = "row">
      					<div   class = "col-lg-6">
      					<label for   = "" class = "lbl_name">password</label>
      							</div>
      							<div   class = "col-lg-6">
      							<div   class = "InputWithIcon">
      							<input type  = "password" class = "form-control form-control-lg" name = "pass" placeholder = "Enter Your password" required = "true">
      							<i     class = "fa fa-lock"></i>
      								</div>
      							</div>
      						</div>
      					</div>
      					<div   class = "form-group">
      					<div   class = "row">
      					<div   class = "col-lg-6">
      					<label for   = "" class = "lbl_name">Repassword</label>
      							</div>
      							<div   class = "col-lg-6">
      							<div   class = "InputWithIcon">
      							<input type  = "password" class = "form-control form-control-lg" name = "repass" placeholder = "Enter Your retype password" required = "true">
      							<i     class = "fa fa-lock"></i>
      								</div>
      							</div>
      						</div>
      					</div>
      					<div   class = "form-group">
      					<div   class = "row">
      					<div   class = "col-lg-6">
      					<label for   = "" class = "lbl_name">Date Of Birth</label>
      							</div>
      							<div   class = "col-lg-6">
      							<div   class = "InputWithIcon">
      							<input type  = "date" class = "form-control form-control-lg" name = "dob"  required = "true">
      							<i     class = "fa fa-calenter"></i>
      								</div>
      							</div>
      						</div>
      					</div>
      					<div   class = "form-group">
      					<div   class = "row">
      					<div   class = "col-lg-6">
      					<label for   = "" class = "lbl_name">Mobile No</label>
      							</div>
      							<div   class = "col-lg-6">
      							<div   class = "InputWithIcon">
      							<input type  = "text" class = "form-control form-control-lg" name = "mobile" placeholder = "Enter Your Mobile" required = "true">
      							<i     class = "fa fa-mobile"></i>
      								</div>
      							</div>
      						</div>
      					</div>
      				</form>
   				</div>
  				<div    class = "modal-footer">
  				<button type  = "button" class = "btn btn-secondary"  data-dismiss = "modal">Close</button>
  				<button type  = "button" class = "btn btn-lg btn-primary" id       = "admin_submit" name = "admin_submit" value = "admin_submit"><i class = "fa fa-key"></i>Submit</button>
   				</div>
   			</div>
		</div>
	</div>
<!----modal--->
<!----------other View  Modal------------->
<div    class       = "modal fade" id                                    = "accept_view_modal" tabindex           = "-1" role          = "dialog" aria-labelledby = "exampleModalScrollableTitle" aria-hidden = "true">
<div    class       = "modal-dialog modal-md modal-dialog-centered" role = "document">
<div    class       = "modal-content">
<div    class       = "modal-header">
<h4     class       = "modal-title text-info tex-align" id               = "exampleModalScrollableTitle"><i class = "fa fa-users"> Details</i></h4>
<button type        = "button" class                                     = "close" data-dismiss                   = "modal" aria-label = "Close">
<span   aria-hidden = "true">&times;</span>
       				</button>
   				</div>
   				<div class = "modal-body">
   				<div class = "" id = "acep_view"></div>
   				</div>
  				<div    class = "modal-footer">
  				<button type  = "button" class = "btn btn-secondary"  data-dismiss = "modal">Close</button>
   				</div>
   			</div>
		</div>
	</div>
<!----modal--->
<!----------profile update Modal------------->
<div    class       = "modal fade" id                                    = "profile_update_modal" tabindex        = "-1" role          = "dialog" aria-labelledby = "exampleModalScrollableTitle" aria-hidden = "true">
<div    class       = "modal-dialog modal-md modal-dialog-centered" role = "document">
<div    class       = "modal-content">
<div    class       = "modal-header">
<h4     class       = "modal-title text-info tex-align" id               = "exampleModalScrollableTitle"><i class = "fa fa-users">Details</i></h4>
<button type        = "button" class                                     = "close" data-dismiss                   = "modal" aria-label = "Close">
<span   aria-hidden = "true">&times;</span>
       				</button>
   				</div>
   				<div class = "modal-body">
   				<div class = "" id = "profile_update_view"></div>
   				</div>
  				<div    class = "modal-footer">
  				<button type  = "button" class = "btn btn-secondary"  data-dismiss = "modal">Close</button>
  				<button type  = "submit" class = "btn btn-lg btn-primary" value    = "profile_update1" name = "profile_update1" id = "profile_update1"><i class = "fa fa-pencil">submit</i></button>
   				</div>
   			</div>
		</div>
	</div>
<!-----modal----->
<!----------profile  Delete Modal------------->
<div    class       = "modal fade" id                                    = "profile_del" tabindex                 = "-1" role          = "dialog" aria-labelledby = "exampleModalScrollableTitle" aria-hidden = "true">
<div    class       = "modal-dialog modal-md modal-dialog-centered" role = "document">
<div    class       = "modal-content">
<div    class       = "modal-header">
<h4     class       = "modal-title text-info tex-align" id               = "exampleModalScrollableTitle"><i class = "fa fa-users">Confirmation</i></h4>
<button type        = "button" class                                     = "close" data-dismiss                   = "modal" aria-label = "Close">
<span   aria-hidden = "true">&times;</span>
       				</button>
   				</div>
   				<div class = "modal-body">
   				<h4  class = "text-success" id = "del">Do You Want To Delete This mobile:<p id = "profile_demo" class = "text-danger"></p></h4>
   				</div>
  				<div    class = "modal-footer">
  				<button type  = "button" class = "btn btn-lg btn-secondary"  data-dismiss = "modal">No</button>
  				<button type  = "submit" class = "btn btn-lg btn-primary" value           = "profile_submit" name = "profile_submit" id = "profile_submit"><i class = "fa fa-eraser">Yes</i></button>
   				</div>
   			</div>
		</div>
	</div>
<!----modal--->

<!-----------------footer-------------------->	
<div class = "footer">
<div class = "row">
<div class = "col-lg-6">
<a   href  = "index.php" class = "foot-line">HOME</a>
				<br>
				<a href = "donar_reg.php" class = "foot-line">Donar Registration</a>
				<br>
				<a href = "patient_register.php" class = "foot-line">Patient Register</a>
			</div>
			<div class = "col-lg-6">
			<a   href  = "group_login.php" class = "foot-line">GroupLogin</a>
				<br>
				<a href = "admin_login.php" class = "foot-line">GroupAdminLogin</a>
				<a href = "" class                = "foot-link"></a>
			</div>
		</div>
		<div class = " text-center copy font-weight-bold text-white">COPYRIGHTS@STRATEGYSOFTWARES.COM</div>
</div>
<script type = "text/javascript" src = "js/jquery.min.js"></script>
<script type = "text/javascript" src = "js/bootstrap.min.js"></script>
<script type = "text/javascript">
	$(document).ready(function(){
		//alert('hi guys');
		$("#output").load("donar1_view.php");
		$('#output1').load("patient_view.php");
		$('#output2').load("donar2_view.php");
		$('#output3').load("donar3_view.php");
		$('#profile').load("profile_view.php");
		$('#accept').load("accept_view.php");

		$('#profile_open').click(function(){
			//alert('hi guys');
			$('#profile_modal').modal('show');
		});

	});
  //patient ajax 
$(document).on('click','.view',function(){
		var pati_id = $(this).attr('data-id');
		alert(pati_id);
		
		if (pati_id !='') {
			$.ajax({
				url    : 'view_query.php',
				method : 'POST',
				data   : {pati_id:pati_id},
				success: function(data){
					$('#patient_view').html(data);
					$('#mymodal').modal('show');
					$('#output1').load("patient_view.php");
					
				}
			});
		}
	});

$(document).on('click','.update',function(){
	var pati_id = $(this).attr('data-id');
	alert(pati_id);
	$.ajax({
		url    : "patient_update.php",
		method : "POST",
		data   : {pati_id:pati_id},
		success: function(data){
			$('#patient_update').html(data);
			$('#editmodal').modal('show');
			$('#output1').load("patient_view.php");
		}
	});
});

$(document).on('click','.accept',function(){
		var pati_id = $(this).attr('data-id');
		alert(pati_id);
		window.location.href = "accept.php?pati_id="+pati_id;
});
$(document).on('click','#submit',function(){
	//alert('hi guys');
	$.ajax({
		url    : "p_update.php",
		method : "POST",
		data   : $('#myfrm').serialize(),
		success: function(data){
			alert(data);
      $('#editmodal').modal('hide');
			$('#output1').load("patient_view.php");
		}
	});
});
$(document).on('click','.delete',function(){
	var pati_id = $(this).attr('data-id');
	alert(pati_id);
	$('#demo').html(pati_id);
	$('#delete').click(function(){
		$.ajax({
			url    : "patientdelete.php",
			method : "POST",
			data   : {pati_id:pati_id},
			success: function(data){
		 		alert(data);
		 		$('#deletemodal').modal('hide');
		 		$('#output1').load("patient_view.php");
		 		//window.location.href="admin.php";

		 	}
		});
	});

});
//student view donar
$(document).on('click','.stud_view',function(){
	var user_id = $(this).attr('data-id');
	alert(user_id);
	if (user_id !='') {
			$.ajax({
				url    : 'stud_view.php',
				method : 'POST',
				data   : {user_id:user_id},
				success: function(data){
					$('#student_view').html(data);
					$('#stud_view_modal').modal('show');
				}
			});
		}

});
//student update
$(document).on('click','.stud_update',function(){
	var user_id = $(this).attr('data-id');
	alert(user_id);
	$.ajax({
		url    : "stud_update.php",
		method : "POST",
		data   : {user_id:user_id},
		success: function(data){
			$('#student_update').html(data);
			$('#stud_edit_modal').modal('show');
			$("#output").load("donar1_view.php");

		}
	});
});
//student delete
$(document).on('click','.stud_delete',function(){
	var user_id = $(this).attr('data-id');
	alert(user_id);
	$('#stud_demo').html(user_id);
	$('#stud_delete_modal').modal('show');
	$('#stud_delete').click(function(){
		$.ajax({
			url    : "stud_delete.php",
			method : "POST",
			data   : {user_id:user_id},
			success: function(data){
		 		alert(data);
		 		$('#stud_delete_modal').modal('hide');
		 		$("#output").load("donar1_view.php");
		 		//window.location.href="admin.php";

		 	}
		});
	});

});

//student update query
$(document).on('click','#stud_update1',function(){
	//alert('hi guys');
	$.ajax({
		url    : "update_query.php",
		method : "POST",
		data   : $('#myform1').serialize(),
		success: function(data){
			alert(data);
      $('#stud_edit_modal').modal('hide');
      $("#output").load("donar1_view.php");

			//$('#output1').load("patient_view.php");
		}
	});
});

//employee table
$(document).on('click','.emp_view',function(){
		var e_user_id = $(this).attr('data-id');
		alert(e_user_id);
		
		if (e_user_id !='') {
			$.ajax({
				url    : 'emp_view.php',
				method : 'POST',
				data   : {e_user_id:e_user_id},
				success: function(data){
					$('#emp_view').html(data);
					$('#emp_view_modal').modal('show');
					$('#output2').load("donar2_view.php");
				}
			});
		}
	});
//emp update view

$(document).on('click','.emp_update',function(){
	var e_user_id = $(this).attr('data-id');
	alert(e_user_id);
	$.ajax({
		url    : "emp_update.php",
		method : "POST",
		data   : {e_user_id:e_user_id},
		success: function(data){
			$('#employee_update').html(data);
			$('#emp_edit_modal').modal('show');
			

		}
	});
});
//employee update query 
$(document).on('click','#emp_update1',function(){
	//alert('hi guys');
	$.ajax({
		url    : "emp_update_query.php",
		method : "POST",
		data   : $('#myform2').serialize(),
		success: function(data){
			alert(data);
      $('#emp_edit_modal').modal('hide');
			$('#output2').load("donar2_view.php");

		}
	});
});
//emp delete 
$(document).on('click','.emp_delete',function(){
	var e_user_id = $(this).attr('data-id');
	alert(e_user_id);
	$('#emp_demo').html(e_user_id);
	$('#emp_delete').modal('show');
	$('#emp_delete_submit').click(function(){
		$.ajax({
			url    : "emp_delete.php",
			method : "POST",
			data   : {e_user_id:e_user_id},
			success: function(data){
				alert(data);
				$('#emp_delete').modal('hide');
				$('#output2').load("donar2_view.php");
			}
		});
	});

});

//other view
$(document).on('click','.other_view',function(){
		var o_user_id = $(this).attr('data-id');
		alert(o_user_id);
		
		if (o_user_id !='') {
			$.ajax({
				url    : 'other_view.php',
				method : 'POST',
				data   : {o_user_id:o_user_id},
				success: function(data){
					$('#o_view').html(data);
					$('#other_view_modal').modal('show');
					//$('#output3').load("donar3_view.php");
					
				}
			});
		}
	});
//other update

$(document).on('click','.other_update',function(){
	var o_user_id = $(this).attr('data-id');
	alert(o_user_id);
	$.ajax({
		url    : "other_update.php",
		method : "POST",
		data   : {o_user_id:o_user_id},
		success: function(data){
			$('#o_update_view').html(data);
			$('#other_update_modal').modal('show');		

		}
	});
});
//other update  query passing
$(document).on('click','#other_update1',function(){
	//alert('hi guys');
	$.ajax({
		url    : "other_update_query.php",
		method : "POST",
		data   : $('#myform3').serialize(),
		success: function(data){
			alert(data);
      $('#other_update_modal').modal('hide');   
			$('#output3').load("donar3_view.php");
		}
	});
});
//delete other
$(document).on('click','.other_delete',function(){
	var o_user_id = $(this).attr('data-id');
	alert(o_user_id);
	$('#del_demo').html(o_user_id);
	$('#other_delete').modal('show');
	$('#other_delete_submit').click(function(){
		
		$.ajax({
			url    : "other_delete.php",
			method : "POST",
			data   : {o_user_id:o_user_id},
			success: function(data){
				alert(data);
				$('#other_delete').modal('hide');
				$('#output3').load("donar3_view.php");
			}
		});
	});
});

	//accept delete
$(document).on('click','.accept_delete',function(){
	var mobile = $(this).attr('data-id');
	alert(mobile);
	$('#accept_delete').modal('show');
	$('#accept_demo').html(mobile);
	$('#accept_delete_submit').click(function(){
		$.ajax({
			url    : "accept_delete.php",
			method : "POST",
			data   : {mobile:mobile},
			success: function(data){
				alert(data);
				$('#accept_delete').modal('hide');
				$('#accept').load("accept_view.php");
			}
		});

	});
});
//profile insert
$(document).on('click','#admin_submit',function(){
	$.ajax({
		url    : "admin_insert.php",
		method : "POST",
		data   : $('#myform4').serialize(),
		success: function(data){
			alert(data);
			$('#myform4')[0].reset();
       $('#profile_modal').modal('hide');
			$('#profile').load("profile_view.php");

		}
	});	
});
//profile view
$(document).on('click','.accept_view',function(){
		var userid = $(this).attr('data-id');
		alert(userid);
		
		if (userid !='') {
			$.ajax({
				url    : 'profile_view2.php',
				method : 'POST',
				data   : {userid:userid},
				success: function(data){
					$('#acep_view').html(data);
					$('#accept_view_modal').modal('show');
					$('#profile').load("profile_view.php");
				}
			});
		}
	});
//profile update

$(document).on('click','.accept_update',function(){
  $('#profile').load("profile_view.php");
	var userid = $(this).attr('data-id');
	alert(userid);
	$.ajax({
		url    : "profile_update.php",
		method : "POST",
		data   : {userid:userid},
		success: function(data){
				$('#profile_update_view').html(data);
				$('#profile_update_modal').modal('show');
        $('#profile').load("profile_view.php");
				
		}
	});
});
//profile update query
$(document).on('click','#profile_update1',function(){
	$.ajax({
		url    : "profile_update_query.php",
		method : "POST",
		data   : $('#myform5').serialize(),
		success: function(d){
			alert(d);
      $('#profile_update_modal').modal('hide');
			$('#profile').load("profile_view.php");

		}
	});
});
//profile delete using ajax
$(document).on('click','.profile_del',function(){
	var userid = $(this).attr('data-id');
	alert(userid);
	$('#profile_del').modal('show');
	$('#profile_demo').html(userid);
	$('#profile_submit').click(function(){
		$.ajax({
			url    : "profile_delete.php",
			method : "POST",
			data   : {userid:userid},
			success: function(d){
				alert(d);
				$('#profile_del').modal('hide');
				$('#profile').load("profile_view.php");
			}
		});
	});
});
</script>
</body>
</html>