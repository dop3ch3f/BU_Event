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
    <h2 id="menuheader">MESSAGES</h2>
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
            <div class="container">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Sender Name</th>
                            <th>Sender Email</th>
                            <th>Message Subject</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="viewMessages">
                            <td>Admin</td>
                            <td>admin@gmail.com</td>
                            <td>How much does it cost for an event in Babcock</td>
                        </tr>
                        <tr class="viewMessages">
                            <td>Admin</td>
                            <td>admin@gmail.com</td>
                            <td>How much does it cost for an event in Babcock</td>
                        </tr>
                        <tr class="viewMessages">
                            <td>Admin</td>
                            <td>admin@gmail.com</td>
                            <td>How much does it cost for an event in Babcock</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <button type="button" class="btn btn-default composemessage" data-toggle="modal" data-target="#compose">Compose Message</button>
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

<!-- Modal to compose new messages -->
    <div class="modal fade" id="compose" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Message</h4>
                </div>
                <form action="" method="">
                    <div class="form-group eventdetails">
                        <input type="text" class="form-control" id="" placeholder="to: Admin" value="" disabled/>
                    </div>
                    <div class="form-group eventdetails">
                        <textarea class="form-control" rows="5" id="comment" placeholder="Message..."></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-default">Send</button>
                    </div>
                </form>
            </div>

        </div>
    </div>



    <!-- Modal to view messages-->
    <div class="modal fade" id="openMessage" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">View Message</h4>
                </div>
                <form action="" method="">
                    <div class="form-group eventdetails">
                        <input type="text" class="form-control" id="" placeholder="Admin" value="" disabled/>
                    </div>
                    <div class="form-group eventdetails">
                        <textarea class="form-control" rows="5" id="comment" placeholder="Message Content" disabled></textarea>
                    </div>
                    <div class="form-group eventdetails">
                        <textarea class="form-control" rows="5" id="comment" placeholder="Message..." required></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-default">Reply</button>
                    </div>
                </form>
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