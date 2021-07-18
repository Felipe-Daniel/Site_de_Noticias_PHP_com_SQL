<?php    
    function level_check($page_level){
        if(!isset($_SESSION)){
            session_start();
        }
        $con = mysqli_connect('localhost','root','','news');
        $user = $_SESSION['username'];
        $user_level = mysqli_query($con, "SELECT level FROM users WHERE user='$user'");
        $user_level = mysqli_fetch_array($user_level)[0];
        if($user_level < $page_level){
            echo $user_level;
            die("You don't have permission to access this page");
        }
    }

?>