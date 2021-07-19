<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP TEST</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet preload" href="style.css?v=1.3" as="style">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;700;800&display=swap" rel="stylesheet">
</head>
<body id="login">
    <?php

use function PHPSTORM_META\type;

$IPATH = $_SERVER['DOCUMENT_ROOT'] . "/assets/";
        include($IPATH . "header.php");
    ?>
    <main id='manage-users'>
        <?php
            include('inc/get_function.php');
            if(!isset($_SESSION)){
                session_start();
            }
            $con = mysqli_connect('localhost','root','','news');
            $alluser = mysqli_query($con, "SELECT user FROM users");

            $rows = array();

            while(($row = mysqli_fetch_array($alluser))) {
                $rows[] = $row[0];
            }
            foreach($rows as $a_user){
                $user_data = get_function($a_user);
                $user = $user_data[0];
                $email = $user_data[1];
                $phone = $user_data[2];
                $password =$user_data[3];
                $level = $user_data[4];
                echo("<div class='user'>
                    <div>$user</div>
                    <div>Nome: $user</div>
                    <div>Senha: $password</div>
                    <div>Nível: $level</div>
                    <div>Email: $email</div>
                    <div>Telefone: $phone</div>
                    <form>
                        <input type='submit' value='DELETAR'> 
                    </form>
                </div>");
            };
        ?>
    </main>
    <?php
        include($IPATH . 'footer.php');
    ?>
</body>
</html>