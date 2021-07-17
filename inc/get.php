<?php
    if(!isset($_SESSION)){
        session_start();
    }
    $con = mysqli_connect('localhost','root','','news');
    $update = mysqli_query($con, "SELECT user, email, phone, password FROM users WHERE user='$user'");
    $update = mysqli_fetch_array($update);
    $_SESSION['username'] = $update[0];
    $_SESSION['email'] = $update[1];
    $_SESSION['phone'] = $update[2];
    $_SESSION['password'] = $update[3];
    $user = $_SESSION['username'];
    $email = $_SESSION['email'];
    $phone = $_SESSION['phone'];
    $password = $_SESSION['password'];
?>