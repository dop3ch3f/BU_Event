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
    <h2 id="menuheader">EVENT HISTORY</h2>
    <div id="pageContent">
        <div class="profileNmenu">
            <div id="profilepic">
                <img class="profilepic" src="../resources/images/icon-profile.png" height="40%" width="18%" alt="profile" />
            </div>
            <div class="btn-group-vertical">
                <a>
                    <button type="button" class="btn btn-primary adminmenu" data-toggle="modal" data-target="#modalnewEvent">
                        Create New Event
                    </button>
                </a>
                <br>
                <a href="user-eventlog.html">
                    <button type="button" class="btn btn-primary adminmenu">
                        Event History
                    </button>
                </a>
                <br>
                <a href="user-messages.html">
                    <button type="button" class="btn btn-primary adminmenu">Messages</button>
                </a>
                <br>
                <a href="">
                    <button type="button" class="btn btn-primary adminmenu">Log Out</button>
                </a>
                <br>
            </div>
        </div>
        <div class="selectedContent">

            <div class="pending">
                <h2>
                    <b>Pending Events</b>
                </h2>
                <div class="logcontent-pending">
                    <ul>
                        <li class="openeventPending">
                            <span class="ready"></span>First item</li>
                        <li class="openeventPending">
                            <span class="ready"></span>Second item</li>
                        <li class="openeventPending">
                            <span class="ready"></span>Third item</li>
                    </ul>
                </div>
            </div>
            <div class="notpending">
                <hr>
                <div class="accepted">
                    <h2>
                        <b>Accepted Events</b>
                    </h2>
                    <div class="logcontent-notpending">
                        <ul>
                            <li class="openeventAccepted">
                                <span class="true"></span>First item</li>
                            <li class="openeventAccepted">
                                <span class="true"></span>Second item</li>
                            <li class="openeventAccepted">
                                <span class="true"></span>Third item</li>
                        </ul>
                    </div>
                </div>
                <div class="declined">
                    <h2>
                        <b>Declined Events</b>
                    </h2>
                    <div class="logcontent-notpending">
                        <ul>
                            <li class="openeventDeclined">
                                <span class="false"></span>First item</li>
                            <li class="openeventDeclined">
                                <span class="false"></span>Second item</li>
                            <li class="openeventDeclined">
                                <span class="false"></span>Third item</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal to create new event-->
    <div class="modal fade" id="modalnewEvent" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">
                    <form action="" method="">
                        <div class="form-group eventdetails">
                            <input type="text" class="form-control" id="" placeholder="Event Name" value="" />
                        </div>
                        <div class="form-group eventdetails">
                            <Label>Date:</Label>
                            <input type="date" class="form-control" id="" value="" />
                        </div>
                        <div class="form-group">
                            <label for="sel1">Venue:</label>
                            <select class="form-control" id="sel1">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                        </div>
                        <div class="form-group eventdetails">
                            <textarea class="form-control" rows="5" id="comment" placeholder="Event Description"></textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-default" data-dismiss="modal">Apply</button>
                        </div>
                    </form>
                </div>


            </div>

        </div>
    </div>


    <!-- Modal for pending events-->
    <div class="modal fade" id="myModalpending" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Event Details</h4>
                </div>
                <form action="" method="">
                    <div class="form-group eventdetails">
                        <input type="text" class="form-control" id="" placeholder="Event Name" value="" />
                    </div>
                    <div class="form-group eventdetails">
                        <Label>Date:</Label>
                        <input type="date" class="form-control" id="" value="" />
                    </div>
                    <div class="form-group eventdetails">
                        <textarea class="form-control" rows="5" id="comment" placeholder="Event Description"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-default" data-dismiss="modal">
                            <b>Reapply</b>
                        </button>
                        <p>Note: Reapplication for a new Event means starting the whole Process again.</p>
                </form>
                </div>
            </div>

        </div>


        <!-- Modal for accepted events -->
        <div class="modal fade" id="myModalaccepted" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Event Details</h4>
                    </div>
                    <div class="form-group eventdetails">
                        <input type="text" class="form-control" id="" placeholder="Event Name" value="" disabled/>
                    </div>
                    <div class="form-group eventdetails">
                        <input type="text" class="form-control" id="" placeholder="Event Date" value="" disabled/>
                    </div>
                    <div class="form-group eventdetails">
                        <textarea class="form-control" rows="5" id="comment" placeholder="Event Description" disabled></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default acceptBtn" data-dismiss="modal" disabled>
                            <b>Accepted</b>
                        </button>
                    </div>
                </div>

            </div>
        </div>

        <!-- Modal for rejected events-->
        <div class="modal fade" id="myModaldeclined" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Event Details</h4>
                    </div>
                    <div class="form-group eventdetails">
                        <input type="text" class="form-control" id="" placeholder="Event Name" value="" disabled/>
                    </div>
                    <div class="form-group eventdetails">
                        <input type="text" class="form-control" id="" placeholder="Event Date" value="" disabled/>
                    </div>
                    <div class="form-group eventdetails">
                        <textarea class="form-control" rows="5" id="comment" placeholder="Event Description" disabled></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default declineBtn" data-dismiss="modal" disabled>
                            <b>Declined</b>
                        </button>
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