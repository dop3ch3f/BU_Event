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
                    <button type="button" class="btn btn-primary adminmenu">Messages</button>
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
                            <th>Sender Name</th>
                            <th>Sender Email</th>
                            <th>Message Subject</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="viewMessages">
                            <td>Akin-Taylor</td>
                            <td>akbakt@gmail.com</td>
                            <td>How much does it cost for an event in Babcock</td>
                        </tr>
                        <tr class="viewMessages">
                            <td>Akin-Taylor</td>
                            <td>akbakt@gmail.com</td>
                            <td>How much does it cost for an event in Babcock</td>
                        </tr>
                        <tr class="viewMessages">
                            <td>Akin-Taylor</td>
                            <td>akbakt@gmail.com</td>
                            <td>How much does it cost for an event in Babcock</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <button type="button" class="btn btn-default composemessage" data-toggle="modal" data-target="#compose">Compose Message</button>
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
                        <input type="text" class="form-control" id="" placeholder="to:" value="" />
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
                        <input type="text" class="form-control" id="" placeholder="Sender Name" value="" disabled/>
                    </div>
                    <div class="form-group eventdetails">
                        <input type="text" class="form-control" id="" placeholder="Sender Email" value="" disabled/>
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