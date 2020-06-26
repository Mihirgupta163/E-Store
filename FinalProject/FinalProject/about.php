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


    <!-- Modal -->
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
            <div class="col-md-offset-1 col-md-3">
                <h3>About us</h3>
                <p>
                    <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi nemo, tempora architecto dolores cupiditate voluptatem quod magni maiores sunt. Accusantium, reiciendis. Magni delectus voluptate ex, expedita magnam sequi repellendus ab vitae velit! Facere aut, autem quo accusantium molestias et voluptas illum aperiam quod, nemo sapiente animi rem amet perspiciatis quisquam porro consequatur possimus quia inventore provident voluptatem corporis recusandae dolore enim! Ullam consectetur voluptatum saepe inventore perferendis? Minus consequatur nam ducimus quo necessitatibus sunt, vero sequi voluptatibus laboriosam nisi hic veniam quaerat? Distinctio rerum molestiae quam vel unde ea dolorum repellat porro. Ipsa voluptatibus quaerat totam dicta eius quod accusantium.</h5>
                </p>
            </div>
            <div class="col-md-offset-1 col-md-3">
                <h3>Our History</h3>
                <p>
                    <h5>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sunt ea aliquid dignissimos nobis ullam optio consequatur ex sit magnam. Fugit enim, quaerat nisi non necessitatibus harum! Libero ducimus omnis enim placeat similique aut accusantium earum tempora laboriosam recusandae reiciendis, autem quia nam assumenda magni facere debitis illum sed praesentium atque dolores! Numquam minima eaque error repellat at a adipisci quam. Voluptates molestias aspernatur odio, est nam laborum vel. Unde eaque natus, dignissimos quia similique, reiciendis, eum quasi tempora modi maxime deleniti. Accusamus vel libero minus voluptas consectetur tenetur, porro cum, eveniet quo quos dolor esse numquam. Facilis natus velit reiciendis!</h5>
                </p>
            </div>
            <div class="col-md-offset-1 col-md-3">
                <h3>Opportunities</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim quae est corrupti necessitatibus earum facilis illum vero adipisci fugit. Incidunt illo modi quos, ea quisquam in ipsam, quaerat repudiandae eaque consequuntur delectus, officia corrupti hic sequi quia ullam ducimus. Quisquam, illo? Nam veniam maxime repellat iusto delectus doloribus perspiciatis sint.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil provident expedita sint ab vero eligendi. Doloremque voluptate quibusdam commodi, quis eaque dolor magnam illo neque sed ab architecto qui deleniti ipsum eligendi tenetur! Non eveniet dolor id consequatur reprehenderit rerum quas culpa, libero, blanditiis modi, soluta sapiente laboriosam accusamus debitis.</p>
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