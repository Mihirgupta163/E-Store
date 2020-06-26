<?php
    $con = mysqli_connect("localhost", "root", "", "Estore") or die(mysqli_error($con));
    if(!isset($_SESSION)){
      session_start();
    }
?>