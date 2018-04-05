<?php
    session_start();
    if($_GET["logout"]== 1){
           session_destroy();
           header("Location:http://localhost/BU_Event/index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>BU Events</title>
	<link rel="stylesheet" href="./css/font-awesome.min.css"/>
	<link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="./js/popper.js"></script>
	<script src="./js/jQuery.js"></script>
	<script src="./js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="./css/styles.css" />
</head>

<body>
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <!-- Brand -->
    <img class="navbar-brand" src="./images/EVENTS%20(1).png"/>
    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a  class="nav-link" data-toggle="modal" data-target="#register">Sign Up</a>
            </li>
            <li class="nav-item">
                <a  class="nav-link" data-toggle="modal" data-target="#login">Login</a>
            </li>
        </ul>
    </div>
</nav>
<div id="demo" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner">
        <div class="carousel-item active" >
            <img src="./images/slide1.jpg" width="100%" height="600px">
            <div class="carousel-caption" style="margin-bottom:220px;">
                <h1 class="text-success">BABCOCK EVENT MANAGEMENT SYSTEM</h1>
            </div>
        </div>
        <div class="carousel-item" >
            <img src="./images/slide2.jpg" width="100%" height="600px">
            <div class="carousel-caption" style="margin-bottom:220px;">
                <h1 class="text-dark">WHATEVER YOUR TASTE IS, WE'VE GOT IT..</h1>
            </div>
        </div>
        <div class="carousel-item" >
            <img src="./images/slide3.jpg" width="100%" height="600px">
            <div class="carousel-caption" style="margin-bottom:220px;">
                <h1 class="text-danger">THE PERFECTION OF YOUR EVENT IS OUR PRIORITY</h1>
            </div>
        </div>
    </div>
</div>
</body>
<div class="modal fade" id="login">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Login</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <form method="POST" action="./php/actions/login.php">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" placeholder="any@any.com" required />
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password" required/>
                            </div>
                            <button type="submit" class="btn btn-lg btn-dark">Login</button>
                        </form>
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
                <h4 class="modal-title text-center">Register</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <h4>Choose Your User Category</h4>
                        <br/>
                        <div id="accordion">
                            <div class="card">
                                <div class="card-header">
                                    <a class="btn-block btn-lg btn-info collapsed card-link" data-toggle="collapse" href="#collapseOne">
                                        Student
                                    </a>
                                </div>
                                <div id="collapseOne" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                        <h4>Student Register</h4>
                                        <form id="student_form" method="POST" action="./php/actions/register.php">
                                            
                                            <div class="form-group">
                                                <label>Full Name:</label>
                                                <input type="text" class="form-control" name="full_name" placeholder="John Doe" required />
                                            </div>
                                                <input type="text" value="student" name="type" style="display: none;"/>
                                            <div class="form-group">
                                                <label>Email:</label>
                                                <input type="email" class="form-control" name="email" placeholder="any@any.com" required />
                                            </div>
                                            
                                            <div class="form-group">
                                                <label>Phone Number:</label>
                                                <input class="form-control" name="mobile" placeholder="08145126202" required />
                                            </div>
                                            
                                            <div class="form-group">
                                                <label>Password:</label>
                                                <input type="password" class="form-control" name="password" required />
                                            </div>
                                            
                                            <div class="form-group">
                                                <label>Confirm Password:</label>
                                                <input type="password" class="form-control" name="cpassword" required />
                                            </div>
                                            
                                            <div class="form-group">
                                                <label>Matric No:</label>
                                                <input type="text" class="form-control" name="matric_no" placeholder="14/2998" required />
                                            </div>
                                            
                                            <div class="form-group">
                                                <label>Department:</label>
                                                <input type="text" class="form-control" name="department" placeholder="Accounting" required />
                                            </div>
                                            <button class="btn btn-lg btn-dark" id="student_form_button" type="submit">Sign Up</button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">
                                    <a class="btn-block btn-lg btn-info collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                                        Staff
                                    </a>
                                </div>
                                <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                        <h4>Staff Register</h4>
                                        <form id="staff_form" method="POST" action="./php/actions/register.php">
                                            <div class="form-group">
                                                <label>Full Name:</label>
                                                <input type="text" class="form-control" name="full_name" placeholder="John Doe" required />
                                            </div>
                                            <input type="text" value="staff" name="type" style="display: none;"/>
                                            <div class="form-group">
                                                <label>Email:</label>
                                                <input type="email" class="form-control" name="email" placeholder="any@any.com" required />
                                            </div>
                                            <div class="form-group">
                                                <label>Phone:</label>
                                                <input  class="form-control" name="mobile" placeholder="08145126202" required />
                                            </div>
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="password" class="form-control" name="password" placeholder="password" required />
                                            </div>
                                            <div class="form-group">
                                                <label>Confirm Password</label>
                                                <input type="password" class="form-control" name="cpassword" placeholder="confirm password" required />
                                            </div>
                                            <div class="form-group">
                                                <label>Staff No:</label>
                                                <input type="text" class="form-control" name="staff_no" placeholder="staff number" required />
                                            </div>
                                            <div class="form-group">
                                                <label>Position/Department</label>
                                                <input type="text" class="form-control" name="department" placeholder="Department/Position" required />
                                            </div>
                                            <button class="btn btn-lg btn-dark"  id="staff_form_button" type="submit">Sign Up</button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">
                                    <a class="btn-block btn-lg btn-info collapsed card-link" data-toggle="collapse" href="#collapseThree">
                                        Visitor
                                    </a>
                                </div>
                                <div id="collapseThree" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                        <h4>Visitor Register</h4>
                                        <br/>
                                        <h5 id="outsider_form_response"></h5>
                                        <form id="outsider_form" method="POST" action="./php/actions/register.php">
                                            <div class="form-group">
                                                <label>Full Name:</label>
                                                <input type="text" class="form-control" name="full_name" placeholder="John Doe" required />
                                            </div>
                                            <input type="text" value="visitor" name="type" style="display: none;"/>
                                            <div class="form-group">
                                                <label>Email:</label>
                                                <input type="email" class="form-control" name="email" placeholder="any@any.com" required />
                                            </div>
                                            <div class="form-group">
                                                <label>Phone:</label>
                                                <input class="form-control" name="mobile" placeholder="08145126202" required />
                                            </div>
                                            <div class="form-group">
                                                <label>Password:</label>
                                                <input type="password" class="form-control" name="password" placeholder="password" required />
                                            </div>
                                            <div class="form-group">
                                                <label>Confirm Password:</label>
                                                <input type="password" class="form-control" name="cpassword" placeholder="confirm password" required />
                                            </div>
                                            <button class="btn btn-lg btn-dark" id="outsider_form_button"  type="submit">Sign Up</button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</html>
