<?php
    function get_function($a_user){
        include('connect.php');
        $user_data = mysqli_query($con, "SELECT user, email, phone, password, level FROM users WHERE user='$a_user'");  
        $user_data = mysqli_fetch_array($user_data);
        return $user_data;
    }
?>