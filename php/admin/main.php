<?php
session_start();
require "../actions/conn.php";
if($_SERVER["HTTP_REFERER"] == ""){
	header("Location:http://localhost/BU_Event/index.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Admin</title>
	<link rel="stylesheet" href="../../css/font-awesome.min.css"/>
	<link rel="stylesheet" href="../../css/bootstrap.min.css">
	<script src="../../js/popper.js"></script>
	<script src="../../js/jQuery.js"></script>
	<script src="../../js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../../css/styles.css" />
</head>

<body>
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
	<!-- Brand -->
	<img class="navbar-brand" src="../../images/EVENTS%20(1).png"/>
	<!-- Toggler/collapsibe Button -->
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
		<span class="navbar-toggler-icon"></span>
	</button>
	<!-- Navbar links -->
	<div class="collapse navbar-collapse" id="collapsibleNavbar">
		<ul class="navbar-nav">
			<li class="nav-item">
				<a  class="nav-link" href="http://localhost/BU_Event/index.php?logout=1">Log Out</a>
			</li>
		</ul>
	</div>
</nav>
<div class="container" style="margin-top:100px">
	<div class="row">
		<div class="col-4">
			<a class="btn btn-lg btn-dark" href="./admin_eventlog.php">Event Requests</a>
		</div>
		<div class="col-4">
			<button class="btn btn-lg btn-dark" data-toggle="modal" data-target="#register">Register Venue</button>
		</div>
		<div class="col-4">
			<button class="btn btn-lg btn-dark" data-toggle="modal" data-target="#approved">Approved Events</button>
		</div>
	</div>
</div>
</body>
<div class="modal fade" id="approved">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			
			<!-- Modal Header -->
			<div class="modal-header">
				<h4 class="modal-title">Approved Event Requests</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			
			<!-- Modal body -->
			<div class="modal-body">
				<div class="row">
					<div class="col-12 text-center">
						<table class="table-bordered table-hover" cellpadding="10">
							<tr>
								<th>Full Name</th>
								<th>Venue</th>
								<th>Description</th>
								<th>Purpose</th>
								<th>Scheduled Date</th>
								<th>Scheduled Time In</th>
								<th>Scheduled Time Out</th>
							</tr>
							<?php
								$query = "SELECT * FROM `events_user_venue` WHERE `status`='Approved'";
								$result = mysqli_query($link,$query);
								while($row=mysqli_fetch_assoc($result)){
									echo
									"
									 <tr>
									    <td>".$row['full_name']."</td>
									    <td>".$row['venue_name']."</td>
									    <td>".$row['description']."</td>
									    <td>".$row['purpose']."</td>
									    <td>".$row['date']."</td>
									    <td>".$row['time_in']."</td>
									    <td>".$row['time_out']."</td>
									 </tr>
									";
								}
							?>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="register">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			
			<!-- Modal Header -->
			<div class="modal-header">
				<h4 class="modal-title text-center">Register New Venue</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			
			<!-- Modal body -->
			<div class="modal-body">
				<div class="row">
					<div class="col-12">
										<form id="student_form" method="POST" action="../admin/venue_register.php">
											
											<div class="form-group">
												<label>Venue Name:</label>
												<input type="text" class="form-control" name="venue_name" required />
											</div>
											<div class="form-group">
												<label>Venue Capacity:</label>
												<input type="number" class="form-control" name="capacity" required />
											</div>
											
											<div class="form-group">
												<label>Venue Description:</label>
												<textarea class="form-control" name="description" required></textarea>
											</div>
											<button class="btn btn-lg btn-dark"  id="student_form_button" type="submit">Create Venue</button>
										</form>
						</div>
					</div>
				</div>
			</div>
		</div>
</div>
</html>
