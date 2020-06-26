<?php
require 'common.php';
$_SESSION['sum'] = "";
$_SESSION['item_no'] = ""; 
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

        .container-main {
            min-height: 100%;
        }

        .row-footer {
            padding: 10px 0;
            background-color: #101010;
            color: #9d9d9d;
            bottom: 0px;
            width: 100%;
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



    <div class="container-fluid">
        <div class="row row-style">
            <div class="col-xs-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Mobile 1
                    </div>
                    <div class="panel-body">
                        <center><img src="https://www.gizbot.com/imgh/310x233/2020/03/xhuawei-p40-lite_158521630380.jpg.pagespeed.ic.2ZPR2FLJ_d.jpg" alt="Mobile1" class="img-responsive"></center>
                        <p>
                            <center>Huawie P40 pro</center>
                        </p>
                        <a href="add_to_cart.php?id=1" class="btn btn-primary btn-block">Add to Cart</a>
                    </div>
                </div>
            </div>
            <div class="col-xs-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Mobile 2
                    </div>
                    <div class="panel-body">
                        <center> <img src="https://www.gizbot.com/imgh/310x233/2020/03/xredmi-k30-pro_158530182200.jpg.pagespeed.ic.Z7yJLSC95f.jpg" alt="Mobile2" class="img-responsive">
                        </center>
                        <p>
                            <center>Redmi K30 pro</center>
                        </p>
                        <a href="add_to_cart.php?id=2" class="btn btn-primary btn-block">Add to Cart</a>
                    </div>
                </div>
            </div>
            <div class="col-xs-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Mobile 3
                    </div>
                    <div class="panel-body">
                        <center> <img src="https://www.gizbot.com/imgh/310x233/2020/03/xsamsung-galaxy-a31_158521249290.jpg.pagespeed.ic.SXO5kAwW7d.jpg" alt="Mobile3" class="img-responsive">
                        </center>
                        <p>
                            <center>Samsung Galaxy A31</center>
                        </p>
                        <a href="add_to_cart.php?id=3" class="btn btn-primary btn-block">Add to Cart</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row row-style">
            <div class="col-xs-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Mobile 4
                    </div>
                    <div class="panel-body">
                        <center> <img src="https://www.gizbot.com/imgh/310x233/2020/03/xnokia-5310_158494318790.jpg.pagespeed.ic.g-BRt_PprN.jpg" alt="Mobile4" class="img-responsive">
                        </center>
                        <p>
                            <center>Nokia 5310</center>
                        </p>
                        <a href="add_to_cart.php?id=4" class="btn btn-primary btn-block">Add to Cart</a>
                    </div>
                </div>
            </div>
            <div class="col-xs-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Mobile 5
                    </div>
                    <div class="panel-body">
                        <center> <img src="https://www.gizbot.com/imgh/310x233/2020/03/xmotorola-razr-2019_1584350384110.jpg.pagespeed.ic.EUEHjcRCs5.jpg" alt="Mobile5" class="img-responsive">
                        </center>
                        <p>
                            <center>Motorola Razr</center>
                        </p>
                        <a href="add_to_cart.php?id=5" class="btn btn-primary btn-block">Add to Cart</a>
                    </div>
                </div>
            </div>
            <div class="col-xs-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Mobile 6
                    </div>
                    <div class="panel-body">
                        <center> <img src="https://www.gizbot.com/imgh/310x233/2020/03/xredmi-note-9-pro_1584093239100.jpg.pagespeed.ic.Yvp8YeLhPV.jpg" alt="Mobile6" class="img-responsive">
                        </center>
                        <p>
                            <center>Redmi Note 9 Pro</center>
                        </p>
                        <a href="add_to_cart.php?id=6" class="btn btn-primary btn-block">Add to Cart</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="page-footer font-small row-footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-4 text-center py-3">
                    <h3>Information</h3>
                    <p><a href="about.php">About Us</a></p>
                    <p><a href="contact.php">Contact Us</a></p>
                </div>
                <div class="col-xs-4 text-center py-3">
                    <h3>My Account</h3>
                    <p><a href="logout.php">Logout<?php echo "/".rtrim(($_SESSION['email']),'@gmail.com'); ?></a><p>
                </div>
                <div class="col-xs-4 text-center py-3">
                    <h3>Contact Us</h3>
                    <p>Contact:- +91 90000 00000</p>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>