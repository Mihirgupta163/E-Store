<?php
require 'common.php';
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>E Store a complete trusted place to buy smartPhones.</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!--jQuery library-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .top_margin {
            margin-top: 50px;
        }

        * {
            margin: 0px;
            padding: 0px;
        }

        .row-form {
            align-items: center;
            text-align: center;
        }

        .height {
            margin-top: 20px;
        }

        .row-footer {
            padding: 10px 0;
            background-color: #101010;
            color: #9d9d9d;
            width: 100%;
            position: absolute;
            bottom: 0px;
        }

        a {
            text-decoration: none;
            color: #9d9d9d;
        }
    </style>
</head>
</head>

<body>

    <nav class="navbar navbar-default navbar-static-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="home.php">E-Store</a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                    <li><a href="settings.php"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
                    <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout<?php echo "/".rtrim(($_SESSION['email']),'@gmail.com'); ?></a></li>

                </ul>
            </div>
        </div>
    </nav>

    <div class="container">

        <center>
            <div class="row row-form">
                <div class="col-xs-offset-3 col-xs-6">
                    <h1>Change Password</h1>
                    <form action="setting_pass_change.php" method="POST">
                        <div class="form-group">
                            <input type="password" name="oldpass" id="" pattern=".{6,}" class="form-control" placeholder="Old Password" required>
                            <?php
                            if (isset($_GET["error"])) {
                                echo $_GET['error'];
                            }
                            ?>
                        </div>

                        <div class="form-group">
                            <input type="password" name="newpass1" id="" pattern=".{6,}" class="form-control" placeholder="New Password" required>
                        </div>
                        <div class="form-group">
                            <input type="password" name="newpass2" id="" class="form-control" pattern=".{6,}" placeholder="Retype New Password" required>
                            <?php
                            if (isset($_GET["m"])) {
                                echo $_GET['m'];
                            }
                            ?>
                        </div>

                        <input type="submit" value="Change" class="btn btn-primary btn-lg">
                </div>
            </div>
        </center>
    </div>

    <footer class="page-footer font-small row-footer">
        <div class="container">
            <div class="row ">
                <div class="footer-copyright text-center py-3">
                    Copyright © E-Store. All Rights Reserved. Contact Us: +91 90000 00000
                </div>
            </div>
        </div>
    </footer>

</body>

</html>