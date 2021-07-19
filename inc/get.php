<?php
    include('connect.php');
    $update = mysqli_query($con, "SELECT user, email, phone, password, level FROM users WHERE user='$user'");
    $update = mysqli_fetch_array($update);
    $_SESSION['username'] = $update[0];
    $_SESSION['email'] = $update[1];
    $_SESSION['phone'] = $update[2];
    $_SESSION['password'] = $update[3];
    $_SESSION['level']= $update[4];
    $user = $_SESSION['username'];
    $email = $_SESSION['email'];
    $phone = $_SESSION['phone'];
    $password = $_SESSION['password'];
    $level = $_SESSION['level']
?>