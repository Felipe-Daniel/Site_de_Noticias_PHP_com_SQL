<?php
    if(!isset($_SESSION)){
        session_start();
    }
    $con = mysqli_connect('localhost','root','','user');
    
    $user = mysqli_real_escape_string($con, $_POST['user']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $s = mysqli_query($con, "SELECT user FROM users WHERE user='$user'");

    if(mysqli_num_rows($s) == 1){
        echo 'Usuário invalido';
    }else{
        mysqli_query($con, "INSERT INTO users(user,password)VALUES('$user','$password')");
        echo 'Registrado com sucesso';
    }
    mysqli_close($con)
?>