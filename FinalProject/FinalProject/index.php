<?php
  require 'common.php';

if (isset($_SESSION['email'])) {
    header('location: home.php');
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
    <link href="https://fonts.googleapis.com/css2?family=Gotu&display=swap" rel="stylesheet">
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
        .navbar{
            margin-bottom: 0px;
        }
        .jumbotron{
            margin-bottom: 20px;
            border-radius: 0  !important;
            background-image: url("https://blog.vantagecircle.com/content/images/2019/09/welcome.png");
            opacity: 0.9;
            font-family: 'Gotu', sans-serif;
            text-shadow: #101010;
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
        .color{
            color: whitesmoke;
        }
        a {
            text-decoration: none;
            color: #9d9d9d;
        }
    </style>
</head>
</head>

<body>
   

        <!-- Modal -->
        <div class="modal fade" id="elegantModalForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <!--Content-->
    <div class="modal-content form-elegant">
      <!--Header-->
      <div class="modal-header text-center">
        <h3 class="modal-title w-100 dark-grey-text font-weight-bold my-3" id="myModalLabel"><strong>Sign in</strong></h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!--Body-->
      <div class="modal-body mx-4">
          <form action="login_check.php" method="post">
        <!--Body-->
        <div class="md-form mb-5">
          <input type="email" id="Form-email1" name="email" class="form-control validate">
          <label data-error="wrong" data-success="right" for="Form-email1">Your email</label>
        </div>

        <div class="md-form pb-3">
          <input type="password" id="Form-pass1" name="pass" class="form-control validate">
          <label data-error="wrong" data-success="right" for="Form-pass1">Your password</label>
          <p class="font-small blue-text d-flex justify-content-end">Forgot <a href="settings.php" class="blue-text ml-1">
              Password?</a></p>
        </div>

        <div class="text-center mb-3">
          <button type="submit" class="btn btn-primary btn-block btn-rounded">Sign in</button>
        </div>
          </form>
      </div>
      <!--Footer-->
      <div class="modal-footer mx-5 pt-3 mb-1">
        <p class="font-small grey-text d-flex justify-content-end">Not a member? <a href="signup.php" class="blue-text ml-1">
            Sign Up</a></p>
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
<!-- Modal -->


    <nav class="navbar navbar-default navbar-static-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">E-Store</a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="" data-toggle="modal" data-target="#elegantModalForm"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    <li><a href="about.php"><span class="glyphicon glyphicon-book"></span> About Us</a></li>
                    <li><a href="contact.php"><span class="glyphicon glyphicon-list-alt"></span> Contact Us</a></li>

                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
            <div class="row">
                    <center class="jumbotron">
                        <h3 class="color">Welcome to E-store.</h3>
                        <h4 class="color">Discover the most loved Smartphone of 2019-2020.</h4>
                    </center>
            </div>
        </div>

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
                        <a href="" data-toggle="modal" data-target="#elegantModalForm" class="btn btn-primary btn-block">Order Now</a>
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
                        <a href="" data-toggle="modal" data-target="#elegantModalForm" class="btn btn-primary btn-block">Order Now</a>
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
                        <a href="" data-toggle="modal" data-target="#elegantModalForm" class="btn btn-primary btn-block">Order Now</a>
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
                        <a href="" data-toggle="modal" data-target="#elegantModalForm" class="btn btn-primary btn-block">Order Now</a>
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
                        <a href="" data-toggle="modal" data-target="#elegantModalForm" class="btn btn-primary btn-block">Order Now</a>
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
                        <a href="" data-toggle="modal" data-target="#elegantModalForm" class="btn btn-primary btn-block">Order Now</a>
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
                    <p><a href="" data-toggle="modal" data-target="#elegantModalForm">Login </a></p>
                    <p><a href="signup.php">Sign Up</a></p>
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