<?php
    if(!isset($_SESSION)){
        session_start();
    }
    $con = mysqli_connect('localhost','root','','news');
    $user = $_SESSION['username'];
    if(isset($_POST['email'])){
        $new_email = mysqli_real_escape_string($con, $_POST['email']);
        $update = mysqli_query($con, "UPDATE users SET email='$new_email' WHERE user='$user'");
    };
    if(isset($_POST['phone'])){
        $new_phone = mysqli_real_escape_string($con, $_POST['phone']);
        $update = mysqli_query($con, "UPDATE users SET phone='$new_phone' WHERE user='$user'");
    };
    if(isset($_POST['user'])){
        $new_user = mysqli_real_escape_string($con, $_POST['user']);
        $update = mysqli_query($con, "UPDATE users SET user='$new_user' WHERE user='$user'");
        $_SESSION['username']=$new_user;
    };
    $_SESSION['update-sucesses']=1;
    header('location: ../update_user.php');

?>