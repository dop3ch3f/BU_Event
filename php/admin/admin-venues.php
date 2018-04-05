<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../stylesheet.css" />
</head>

<body>

    <img src="../resources/images/EVENTS (1).png" alt="logo" id="header" />
    <h2 id="menuheader">MANAGE VENUES</h2>
    <div id="pageContent">
        <div class="profileNmenu">
            <div id="profilepic">
                <img class="profilepic" src="../resources/images/icon-profile.png" height="40%" width="18%" alt="profile" />
            </div>
            <div class="btn-group-vertical">
                <a href="admin-eventlog.html">
                    <button type="button" class="btn btn-primary adminmenu">
                        Event Log
                    </button>
                </a>
                <br>
                <a href="admin-venues.html">
                    <button type="button" class="btn btn-primary adminmenu">
                        Manage Venues
                    </button>
                </a>
                <br>
                <a href="admin-messages.html">
                    <button type="button" class="btn btn-primary adminmenu">Message</button>
                </a>
                <br>
                <a href="admin-vendors.html">
                    <button type="button" class="btn btn-primary adminmenu">Manage Vendors</button>
                </a>
                <br>
                <a href="">
                    <button type="button" class="btn btn-primary adminmenu">Log Out</button>
                </a>
                <br>
            </div>
        </div>

        <div class="selectedContent">

            <div class="container">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Venue Name</th>
                            <th>Description</th>
                            <th>Satus</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="editVenue">
                            <td>WRA</td>
                            <td>To overcome these c hallenges, we decided to place our bets on the newly emerging breed of cross-p
                                latform native apps built with a modern frontend stack in JavaScript. We began implementing
                                the apps with the following main o bjectives:
                            </td>
                            <td>Available</td>
                        </tr>
                        <tr class="editVenue">
                            <td>AMPHITHEATER</td>
                            <td>To overcome these c hallenges, we decided to place our bets on the newly emerging breed of cross-p
                                latform native apps built with a modern frontend stack in JavaScript. We began implementing
                                the apps with the following main o bjectives:
                            </td>
                            <td>Unavailable</td>
                        </tr>
                        <tr class="editVenue">
                            <td>BU SPORT COMPLEX</td>
                            <td>To overcome these c hallenges, we decided to place our bets on the newly emerging breed of cross-p
                                latform native apps built with a modern frontend stack in JavaScript. We began implementing
                                the apps with the following main o bjectives:
                            </td>
                            <td>Available</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <button type="button" class="btn btn-default addvenue" data-toggle="modal" data-target="#newvenue">Add Venue</button>
            <div id="newvenue" class="modal fade" role="dialog">
                <div class="modal-dialog addvenue">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">
                                <b>Add Venue</b>
                            </h4>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Name of Venue" />
                                </div>
                                <div class="form-group">
                                    <textarea type="text" class="form-control" rows="5" id="comment" placeholder="Description of Venue" required></textarea>
                                </div>
                                <div class="form-group">
                                    <select class="form-control" id="sel1">
                                        <option>Available</option>
                                        <option>Unavailable</option>
                                    </select>
                                </div>
                                <div>
                                    <label>Upload images of the venue</label>
                                    <input type="file" name="pic" accept="image/*" max="3">
                                </div>
                                <button type="submit" class="btn btn-default">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal to edit selected venue-->
            <div class="modal fade" id="venueDetails" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Venue Details</h4>
                        </div>
                        <form action="" method="">
                        <div class="form-group eventdetails">
                            <input type="text" class="form-control" id="" placeholder="Venue Name" value="" />
                        </div>
                        <div class="form-group eventdetails">
                            <textarea class="form-control" rows="5" id="comment" placeholder="Venue Description"></textarea>
                        </div>
                        <div class="form-group">
                            <select class="form-control" id="sel1">
                                <option>Available</option>
                                <option>Unavailable</option>
                            </select>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-default declineBtn" data-dismiss="modal">
                                <b>Remove</b>
                            </button>
                            <button type="submit" class="btn btn-default acceptBtn" data-dismiss="modal">
                                <b>Update</b>
                            </button>
                        </div>
                        </form>
                    </div>

                </div>
            </div>

        </div>
    </div>



    <!-- <script src="./resources/jquery.js"></script> -->
    <script src="../app.js"></script>
</body>

<footer>
    <b id="footertext">© 2018 INSY 404 (Group 7) Ltd.</b>
</footer>

</html>