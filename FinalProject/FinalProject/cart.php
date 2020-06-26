<?php
require 'common.php';
$item = $_SESSION['item_no'];
$price = $_SESSION['sum'];

if (!isset($_SESSION['email'])) {
    header('location: index.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-store Cart</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
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
            bottom: 0;
            width: 100%;
            position: absolute;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
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
                    <li><a href="settings.php" target="none"><span class="glyphicon glyphicon-user"></span>Settings</a>
                    </li>
                    <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout<?php echo "/".rtrim(($_SESSION['email']),'@gmail.com'); ?></a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="col-xs-offset-3 col-xs-5">
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <tbody>
                        <tr>
                            <th>Item Number </th>
                            <th>Price </th>
                            <th></th>
                        </tr>
                        <tr>
                            <th><?php echo $item; ?></th>
                            <th><?php echo $price; ?></th>
                            <th> <a href="success.php" class="btn btn-primary" value="Confirm Order">Confirm Order</a></th>
                        </tr>
                    </tbody>
                </table>
            </div>
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