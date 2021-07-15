<?php
    if(!isset($_SESSION)){
        session_start();
    }
    $con = mysqli_connect('localhost','root','','news');
    
    $user = mysqli_real_escape_string($con, $_POST['user']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $s = mysqli_query($con, "SELECT user FROM users WHERE user='$user' && password='$password'");

    if(mysqli_num_rows($s) == 1){
        header('location:../index.php');
    }else{
        echo 'no';
    }
    mysqli_close($con);
?>