<?php
    $con = mysqli_connect('localhost','root','','news');
    if(!$con){
        $msg = 'Could not connect to the database.<br>';
        $msg .= 'Error number: ' . mysqli_connect_errno();
        $msg .= 'Error: ' . mysqli_connect_error();
        die($msg);
    };
?>