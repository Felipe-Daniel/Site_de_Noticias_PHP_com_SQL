<?php
    include('connect.php');
    $user = $_SESSION['username'];

    if(isset($_POST['new-password'])){
        $old_password =  mysqli_real_escape_string($con, $_POST['password']);
        $new_password = mysqli_real_escape_string($con, $_POST['new-password']);
        $update = mysqli_query($con, "UPDATE users SET password='$new_password'
                                WHERE user='$user' && password='$old_password'");
    };
    $_SESSION['update-sucesses']=1;
    header('location: ../update_password.php');

?>