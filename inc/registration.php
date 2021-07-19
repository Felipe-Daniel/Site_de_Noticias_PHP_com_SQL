<?php
    include('connect.php');

    $user = mysqli_real_escape_string($con, $_POST['user']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $level = mysqli_real_escape_string($con, $_POST['level']);


    $s = mysqli_query($con, "SELECT user FROM users WHERE user='$user'");

    if(mysqli_num_rows($s) == 1){
        $_SESSION['user-created']=0;
    }else{
        mysqli_query($con, "INSERT INTO users(user, password, email, phone,level)VALUES('$user','$password','$email','$phone', '$level')");
        $_SESSION['user-created']=1;
    }
    mysqli_close($con);
    header('location: ../register.php');
?>