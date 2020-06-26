<?php
    require 'common.php';
    $con = mysqli_connect("localhost", "root", "", "Estore") or die(mysqli_error($con));

    $item_no = $_GET['id'];
    
    
$item_check_query = "select * from item where item_no = '$item_no'" ;
$item_check_submit = mysqli_query($con, $item_check_query) or die(mysqli_error($con));
$total_rows = mysqli_num_rows($item_check_submit);

$row = mysqli_fetch_array($item_check_submit);

$_SESSION['sum'] = $_SESSION['sum'] + $row['price'];
$_SESSION['item_no'] = $item_no;

header('location: cart.php');
?>