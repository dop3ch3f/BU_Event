<?php
	session_start();
	require "../actions/conn.php";
	if($_SERVER["HTTP_REFERER"] == ""){
		header("Location:http://localhost/BU_Event/index.php");
	}
 
	if($_SERVER["REQUEST_METHOD"] == "POST"){
	    extract($_POST);
	    if($accept != ""){
	       $query="UPDATE `events` SET `status`='Approved' WHERE `event_id`='$accept'";
	       if(mysqli_query($link,$query)){
	           echo "<script>alert('Event Accepted Successfully');</script>";
           }else {
	           echo mysqli_error($link);
           }
        }
        if($decline != ""){
	        $query="UPDATE `events` SET `status`='Declined',`message`='$message' WHERE `event_id`='$decline'";
	        if(mysqli_query($link,$query)){
		        echo "<script>alert('Event Declined Successfully');</script>";
	        }else {
		        echo mysqli_error($link);
	        }
        }
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
                <a class="nav-link" href="http://localhost/BU_Event/php/admin/main.php">Back to Admin Page</a>
            </li>
            <li class="nav-item">
                <a  class="nav-link" href="http://localhost/BU_Event/index.php?logout=1">Log Out</a>
            </li>
        </ul>
    </div>
</nav>
<br/><br/>
<div class="container text-center">
    <div class="row">
        <div class="col-12">
           <h4>Staff Requests</h4>
            <br/>
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
			        $query = "SELECT * FROM `events_user_venue` WHERE `status`='Pending' AND `type`='staff'";
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
									    <form method='post' action='".htmlspecialchars($_SERVER['PHP_SELF'])."'>
									    <td><button type='submit' name='accept' class='btn btn-success' value='".$row['event_id']."'>Accept</button></td>
                                        </form>
                                        <form method='post' action='".htmlspecialchars($_SERVER['PHP_SELF'])."'><td><textarea name='message'></textarea>
                                        <br/><br/><button type='submit' name='decline' class='btn btn-danger' value='".$row['event_id']."'>Decline</button></td></form>
									 </tr>
									";
			        }
		        ?>
            </table>
        </div>
    </div>
    <br/>
    <div class="row">
        <div class="col-12">
           <h4>Student Requests</h4>
            <br/>
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
			        $query = "SELECT * FROM `events_user_venue` WHERE `status`='Pending' AND `type`='student'";
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
									    <form method='post' action='".htmlspecialchars($_SERVER['PHP_SELF'])."'>
									    <td><button type='submit' name='accept' class='btn btn-success' value='".$row['event_id']."'>Accept</button></td>
                                        </form>
                                        <form method='post' action='".htmlspecialchars($_SERVER['PHP_SELF'])."'><td><textarea name='message'></textarea>
                                        <br/><br/><button type='submit' name='decline' class='btn btn-danger' value='".$row['event_id']."'>Decline</button></td></form>
									 </tr>
									";
			        }
		        ?>
            </table>
        </div>
    </div>
    <br/>
    <div class="row">
        <div class="col-12">
            <h4>Visitor Requests</h4>
            <br/>
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
			        $query = "SELECT * FROM `events_user_venue` WHERE `status`='Pending' AND `type`='visitor'";
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
									    <form method='post' action='".htmlspecialchars($_SERVER['PHP_SELF'])."'>
									    <td><button type='submit' name='accept' class='btn btn-success' value='".$row['event_id']."'>Accept</button></td>
                                        </form>
                                        <form method='post' action='".htmlspecialchars($_SERVER['PHP_SELF'])."'><td><textarea name='message'></textarea>
                                        <br/><br/><button type='submit' name='decline' class='btn btn-danger' value='".$row['event_id']."'>Decline</button></td></form>
									 </tr>
									";
			        }
		        ?>
            </table>
        </div>
    </div>
</div>
</body>
</html>