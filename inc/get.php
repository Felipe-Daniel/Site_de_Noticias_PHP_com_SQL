<?php
    if(!isset($_SESSION)){
        session_start();
    }
    $con = mysqli_connect('localhost','root','','news');
    $update = mysqli_query($con, "SELECT email, phone FROM users WHERE user='$user'");
    $update = mysqli_fetch_array($update);
    $_SESSION['email'] = $update[0];
    $_SESSION['phone'] = $update[1];
?>