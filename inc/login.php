<?php
    include('connect.php');
    
    $user = mysqli_real_escape_string($con, $_POST['user']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $s = mysqli_query($con, "SELECT user FROM users WHERE user='$user' && password='$password'");

    if(mysqli_num_rows($s) == 1){
        header('location:../index.php');
        $_SESSION['username'] = $user;
    }else{
        $_SESSION['failed-login']=1;
        header('location:../login.php');

    }
    mysqli_close($con);
?>