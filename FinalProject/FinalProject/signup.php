<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
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

        .container-main {
            min-height: 100%;
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

    <div class="modal fade" id="elegantModalForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                            <input type="email" id="Form-email1" class="form-control validate">
                            <label data-error="wrong" data-success="right" for="Form-email1">Your email</label>
                        </div>

                        <div class="md-form pb-3">
                            <input type="password" id="Form-pass1" class="form-control validate">
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
        <div class="container">
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
                    <li><a href="" data-toggle="modal" data-target="#elegantModalForm"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    <li><a href="about.php"><span class="glyphicon glyphicon-book"></span> About Us</a></li>
                    <li><a href="contact.php"><span class="glyphicon glyphicon-list-alt"></span> Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container container-main">
        <?php
        if (isset($_GET["error"])) {
            echo $_GET['error'];
        }
        ?>
        <center>
            <div class="row row-form">
                <div class="col-xs-offset-3 col-xs-6">
                    <h1>Sign Up</h1>
                    <form action="user_insert.php" method="POST">
                        <div class="form-group">
                            <input type="text" name="name" id="name" class="form-control" placeholder="Full Name" pattern="[A-Za-z-0-9]+\s[A-Za-z-'0-9]+" required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" id="email" class="form-control" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
                            <?php
                            if (isset($_GET["m1"])) {
                                echo $_GET['m1'];
                            }
                            ?>
                        </div>
                        <div class="form-group">
                            <input type="password" name="pass" pattern=".{6,}" id="pass" class="form-control" placeholder="Password" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="contact" class="form-control" maxlength="10" size="10" id="" placeholder="Contact" required>
                            <?php
                            if (isset($_GET["m2"])) {
                                echo $_GET['m2'];
                            }
                            ?>
                        </div>
                        <div class="form-group">
                            <input type="text" name="city" class="form-control" id="" placeholder="City" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="address" class="form-control" id="" placeholder="Address" required>
                        </div>
                        <p>Already have an account? <a href="login.html" data-toggle="modal" data-target="#elegantModalForm">Login</a></p>
                        <input type="submit" name="submit" value="submit" class="btn btn-primary btn-lg">
                        <p class="height"></p>
                </div>
            </div>
        </center>
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
<?php
