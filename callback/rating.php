<?php
ob_start();
session_start(); // Start the session

include 'Database.php';
include 'config.php';

$db = new Database();

$danger = 'danger';
$userid = $_SESSION['id'];
$date = date('Y-m-d');

if(!isset($_SESSION['id'])){
    header('location:user_login.php');
}

if(isset($_POST['logout'])){
    session_destroy();
    header('location:user_login.php');
}

if($currentTime >= '8:00' && $currentTime <= '12:00'){
    $meal = '1';
}elseif($currentTime >= '12:00' && $currentTime <= '16:00'){
    $meal = '2';
}elseif($currentTime >= '16:00' && $currentTime <= '20:00'){
    $meal = '3';
}elseif($currentTime >= '20:00' && $currentTime <= '23:59'){
    $meal = '4';
}


if(isset($_POST['submit'])){
    $userid = $_SESSION['id'];
    $date = date('Y-m-d');
    $item = $_POST['items'];
    $rating = $_POST['rating'];
    
    // Check if the user has already rated the item
    $checkQueryResult = "SELECT * FROM `ratings` WHERE `user_id`='$userid' AND `date`='$date' AND `meal_id`='$meal' AND `item_id`='$item'";
    $checkResultView = $db->select($checkQueryResult);
    
    if($checkResultView){
        echo "<script>alert('You have already rated this item.');</script>";
    }else{
        $query = "INSERT INTO `ratings`(`user_id`, `date`, `meal_id`, `item_id`, `rating`) VALUES ('$userid','$date','$meal','$item','$rating')";
        $create = $db->insert($query);
        if(isset($create)){
            echo "<script>alert('Thank you for rating the dish. Now you can rate another dish.');</script>";
        }else{
            echo "<script>alert('Data insertion failed.');</script>";
        }
    }
}

?>