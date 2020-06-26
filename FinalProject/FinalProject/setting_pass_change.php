<?php
require("common.php");
$con = mysqli_connect("localhost", "root", "", "Estore") or die(mysqli_error($con));
$email =  $_SESSION['email'];
$oldpass = $_POST['oldpass'];
$oldpass = mysqli_real_escape_string($con, $oldpass);
$oldpass = md5($oldpass);

$newpass1 = $_POST['newpass1'];
$newpass2 = $_POST['newpass2'];

$user_check_query = "select * from signup where email = '$email' and pass = '$oldpass'" ;
$user_check_submit = mysqli_query($con, $user_check_query) or die(mysqli_error($con));
$total_rows = mysqli_num_rows($user_check_submit);

if($total_rows==0){
    $error = $$_GET['error'];
    $error = "<span class='red'>Enter Correct Old Password.</span>";
    header('location: settings.php?error=' . $error);
    }
    else if($total_rows>0) {
        if($newpass1 == $newpass2){
          $newpass1 = md5($newpass1);
          $update_pass_query = "UPDATE signup SET pass = '$newpass1' WHERE email = '$email'";
          $update_pass_result = mysqli_query($con, $update_pass_query) or die(mysqli_error($con));
          header('location: home.php');
        }
        else{
          $m = $$_GET['m'];
          $m = "<span class='red'>New-Password didn't matched. Retype password.</span>";
          header('location: settings.php?m=' . $m);
        }
      }
      
?>