<?php
$con = mysqli_connect("localhost", "root", "", "Estore") or die(mysqli_error($con));
session_start();
$email = mysqli_real_escape_string($con, $_POST['email']);
$name = mysqli_real_escape_string($con, $_POST['name']);
$contact = $_POST['contact'];
$pass = md5($_POST['pass']);
$city = $_POST['city'];
$address = $_POST['address'];

$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
$regex_num = "/^[789][0-9]{9}$/";

$query = "SELECT * FROM signup WHERE email='$email'";
$result = mysqli_query($con, $query)or die($mysqli_error($con));
$num = mysqli_num_rows($result);

if ($num != 0) {
    $m = "<span class='red'>Email Already Exists</span>";
    header('location: signup.php?m1=' . $m);
  } else if (!preg_match($regex_email, $email)) {
    $m = "<span class='red'>Not a valid Email Id</span>";
    header('location: signup.php?m1=' . $m);
  } else if (!preg_match($regex_num, $contact)) {
    $m = "<span class='red'>Not a valid phone number</span>";
    header('location: signup.php?m2=' . $m);
  } else {

    $query = "insert into signup(name, email, pass, contact, city, address) values ('$name', '$email', '$pass', '$contact', '$city', '$address')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    
    $_SESSION['email'] = $email;
    $_SESSION['user_id'] = mysqli_insert_id($con);

    header('location: home.php');
    exit;
  }

?>
