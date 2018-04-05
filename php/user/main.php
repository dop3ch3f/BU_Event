<?php
	session_start();
	require "../actions/conn.php";
	
	if(!$_SESSION){
		header("Location:http://localhost/BU_Event/index.php");
	}else{
		extract($_SESSION);
	}
	
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		extract($_POST);
		extract($_SESSION);
		$query1 = "INSERT INTO `events`( `venue_id`, `user_id`, `description`, `purpose`, `date`, `time_in`, `time_out`,`message`) VALUES ('$venue_id','$user_id','$description','$purpose','$date','$time_in','$time_out','')";
		if(mysqli_query($link, $query1)){
		    $output = "<script> alert('Event Registered Successfully. We would Get back to you soon, be sure to check your page frequently');</script>";
		}else{
			echo mysqli_error($link);
		}
		mysqli_close($link);
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>User</title>
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
    <br/>
    <?php echo $output;?>
	<div class="row">
		<div class="col-6">
			<button class="btn btn-lg btn-dark" data-toggle="modal" data-target="#apply">Apply for Event</button>
		</div>
		<div class="col-6">
			<button class="btn btn-lg btn-dark" data-toggle="modal" data-target="#event_log">Event Log</button>
		</div>
	</div>
</div>
</body>
<div class="modal fade" id="event_log">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			
			<!-- Modal Header -->
			<div class="modal-header">
				<h4 class="modal-title">Event Log</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			
			<!-- Modal body -->
			<div class="modal-body">
				<div class="row">
					<div class="col-12 text-center">
						<table class="text-center table-bordered table-hover" cellpadding="5">
							<tr>
								<th><h6>Venue</h6></th>
								<th><h6>Description</h6></th>
								<th><h6>Purpose</h6></th>
								<th><h6>Date</h6></th>
								<th><h6>Time In</h6></th>
								<th><h6>Time Out</h6></th>
								<th><h6>Status</h6></th>
                                <th><h6>Message</h6></th>
							</tr>
							<?php
								$query3 = "SELECT * FROM `events_user_venue` WHERE `user_id`='$user_id'";
								$result2 = mysqli_query($link,$query3);
								while($row=mysqli_fetch_assoc($result2)){
									echo
										"
									 <tr>
									    <td>".$row['venue_name']."</td>
									    <td>".$row['description']."</td>
									    <td>".$row['purpose']."</td>
									    <td>".$row['date']."</td>
									    <td>".$row['time_in']."</td>
									    <td>".$row['time_out']."</td>
									    <td>".$row['status']."</td>
									    <td>".$row['message']."</td>
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
<div class="modal fade" id="apply">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			
			<!-- Modal Header -->
			<div class="modal-header">
				<h4 class="modal-title text-center">Apply for Event</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			
			<!-- Modal body -->
			<div class="modal-body">
				<div class="row">
					<div class="col-12">
						<form  method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
							<div class="form-group">
								<label>Event Description:</label>
								<input type="text" class="form-control" name="description" required />
							</div>
							<div class="form-group">
								<label>Purpose:</label>
								<select class="form-control" name="purpose">
									<option value="Academic">Academic</option>
									<option value="University">University</option>
									<option value="External">External</option>
									<option value="Others">Others</option>
								</select>
							</div>
							<div class="form-group">
								<label>Venue</label>
								<select class="form-control" name="venue_id">
								   <?php
									   $q1 = "SELECT * FROM `venue`";
									   $result=mysqli_query($link,$q1);
									   while($row = mysqli_fetch_assoc($result)){
									   	echo "<option value='".$row['venue_id']."'>".$row['venue_name']."-".$row["capacity"]." seats</option>";
									   }
								   ?>
								</select>
							</div>
							<div class="form-group">
								<label>Day of Event:</label>
								<input type="date" class="form-control" name="date" required />
							</div>
							<div class="form-group">
								<label>Event Start Time:</label>
								<input type="time" class="form-control" name="time_in" required/>
							</div>
							<div class="form-group">
								<label>Event Stop Time:</label>
								<input type="time" class="form-control" name="time_out" required />
							</div>
							<button class="btn btn-lg btn-dark"  id="student_form_button" type="submit">Apply</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</html>
