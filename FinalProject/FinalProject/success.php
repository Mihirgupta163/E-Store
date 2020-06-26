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
                    <li><a href="settings.php"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
                    <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

   <div class="container">
       <div class="row">
           <center>
               <p>Thank you for ordering from E-store. The</p>
               <p>order shall be delevered shortly.</p>
               <hr>
           </center>
           <center>Order some more smartphones <a href="home.php">here.</a></center>
       </div>
   </div>

   <footer class="page-footer font-small color row-footer">
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