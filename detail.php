<?php
session_start();

include('db_config.php');
if($con->connect_error){
    die('connection failed'.$con->connect_error);
}
else {
   // echo "connection successfully";
   // echo "your blood group is". $_SESSION['blood_grp'];
   $blood=$_SESSION['blood_grp'];
  // echo $blood;
   //echo "<br>";
    $sql="SELECT * FROM `patient` WHERE bloood_grp = '".$blood."'";
    $res=$con->query($sql);
    if ($res==true) {
        echo "<script>alert('query is true');</script>";
    }
    else {
        echo "error".$sql;
    }
}

session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StrategyNaveen</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="main.css">

</head>
<body class="parallax4">
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
							<a class="nav-link fn1" href="#" ><span class="fa fa-users icon"></span>GroupLOGIN</a>
						</li>
						<li class="nav-item">
							<a class="nav-link fn1" href="donar_reg.php"><span class="fa fa-user"></span>Donar Registration</a>
						</li>
						<li class="nav-item dropdown fn1">
							<a class="nav-link dropdown-toggle" href="#" id="navbardropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-plus icon"></i>PATIENT</a>
							<div class="dropdown-menu" arialabelledy="navbardropdown">
								<a class="dropdown-item" href="patient_register.php">REGISTER</a>
								<a class="dropdown-item" href="#">DETAILS</a>
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
				<p class="text-center text-col sh1 h1 ">PATIENT DETAILS</p>
                <P class="text-center text-col sh1 h5 small"></P>
			</div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8">
                        <div class="jumbotron">
                            <h1 class="text-center bg-white  shadow-lg h3">Related Blood :<?php echo $_SESSION['blood_grp']; ?></h1>
                            <table class="table table-hover table-sm">
					            <thead>
						            <tr>
							            <th>Patient Name</th>
							            <th>Last Date</th>
							            <th>Unit</th>
							            <th>Select</th>
						            </tr>
					            </thead>
					            <tbody>
						            <?php 
							
							            if ($res->num_rows>0) {
								            while ($row=$res->fetch_assoc()) {
									            echo "<tr>";
									            echo "<td>{$row["pat_name"]}</td>";
									            echo "<td>{$row["last_date"]}</td>";
									            echo "<td>{$row["unit"]}</td>";
									            echo "<td><button type='button' class='btn btn-md btn-info view' data-toggle='modal' data-target='#mymodal' data-id='{$row['pati_id']}' name='pati_id' value='pati_id' >view</button></td>";
									            echo "</tr>";
							        	    }
							            }
							            else{
								            echo "empty";
							            }
						            ?>
					            </tbody>
				            </table>
                        </div>
                    </div>
                    <div class="col-lg-2"></div>
                </div>
            </div>
<!-- Modal -->
	<div class="modal fade" id="mymodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
   			<div class="modal-content">
   				<div class="modal-header">
       				<h4 class="modal-title text-info tex-align" id="exampleModalScrollableTitle"><i class="fa fa-users">Patient Details</i></h4>
       				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
       					<span aria-hidden="true">&times;</span>
       				</button>
   				</div>
   				<div class="modal-body">
   					<div id="patient_view"></div>
      				
   				</div>
  				<div class="modal-footer">
      				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       				<button type="button" class="btn btn-primary">Save changes</button>
   				</div>
   			</div>
		</div>
	</div>
<!----modal--->

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
				<a href="donar_reg.php" class="foot-line">Donar Registeration</a>
				<a href="admin_login.php" class="foot-link">GroupAdminLogin</a>
				<a href="" class="foot-link"></a>
			</div>
		</div>
		<div class=" text-center copy font-weight-bold text-white">COPYRIGHTS@STRATEGYSOFTWARES.COM</div>
	</div>
        

<script type="text/javascript">
	$(document).on('click','.view',function(){
		var pati_id=$(this).attr('data-id');
		alert(pati_id);
		if (pati_id !='') {
			$.ajax({
				url:'view_query.php',
				method:'POST',
				data:{pati_id:pati_id},
				success:function(data){
					$('#patient_view').html(data);
					$('#mymodal').modal('show');
				}
			});
		}
	});
	
</script>

</body>
</html>