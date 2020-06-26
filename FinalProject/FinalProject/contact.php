  <?php
  include "common.php"
  ?>
  <!DOCTYPE html>
  <html>

  <head>
    <title>Contact E-store</title>
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
        <div class="col-md-5 col-md-offset-1">
          <p>
            <h2>Anything</h2>
          </p>
          <p><h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut rem fuga dolore suscipit voluptate explicabo nobis eius perspiciatis quae quos repellendus velit ullam delectus, quam ipsam architecto excepturi vitae quo.</h4></p>
          <form class="form-horizontal" action="" method="post">
            <fieldset>
              <h2>Contact us</h2>

              <!-- Name input-->
              <div class="form-group">
                <label class="col-md-3 control-label" for="name">Name</label>
                <div class="col-md-9">
                  <input id="name" name="name" type="text" placeholder="Your name" class="form-control">
                </div>
              </div>

              <!-- Email input-->
              <div class="form-group">
                <label class="col-md-3 control-label" for="email">Your E-mail</label>
                <div class="col-md-9">
                  <input id="email" name="email" type="text" placeholder="Your email" class="form-control">
                </div>
              </div>

              <!-- Message body -->
              <div class="form-group">
                <label class="col-md-3 control-label" for="message">Your message</label>
                <div class="col-md-9">
                  <textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
                </div>
              </div>

              <!-- Form actions -->
              <div class="form-group">
                <div class="col-md-12 text-right">
                  <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                </div>
              </div>
            </fieldset>
          </form>
        </div>
        <div class="col-md-offset-2 col-md-4">
          <h2 class="title">Contact Info</h2>
          <address>
            <p>500 Lorem Ipsum Dolar Sit,</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Amet, ullam!</p>
            <p>USA</p>
            <p>Phone:(991) 12122003333</p>
            <p>Fax:(000) 25215336</p>
            <p>Email: contact@estore.com</p>
          </address>
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