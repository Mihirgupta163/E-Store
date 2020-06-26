<?php
require 'common.php';
$con = mysqli_connect("localhost", "root", "", "Estore") or die(mysqli_error($con));
session_start();
$email = mysqli_real_escape_string($con, $_POST['email']);

$pass = $_POST['pass'];
$pass = mysqli_real_escape_string($con, $pass);
$pass = md5($pass);

$user_check_query = "select * from signup where email = '$email' and pass = '$pass'" ;
$user_check_submit = mysqli_query($con, $user_check_query) or die(mysqli_error($con));
$total_rows = mysqli_num_rows($user_check_submit);

if($total_rows==0){
    $error = $$_GET['error'];
    $error = "<span class='red'>Enter Correct E-mail and Password Combination</span>";
    header('location: signup.php?error=' . $error);
    }
    else if($total_rows>0) {
      
        $row = mysqli_fetch_array($result);
        $_SESSION['email'] = $email;
        $_SESSION['user_id'] = $row['id'];
        header('location: home.php');
      }
      
 
?>
