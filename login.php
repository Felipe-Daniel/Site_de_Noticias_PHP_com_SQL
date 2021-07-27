<?php
    define('__CONFIG__', true);
    require_once('inc/config.php');
    Check::login_check();
?>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body id="login">
    <?php
        $IPATH = $_SERVER['DOCUMENT_ROOT'] . "/layout/";
        require_once($IPATH . "header.php")
    ?>
    <main>
        <form method="post" id='form' action='inc/login.php'>
            <div class="title"></div>
            <div>
                <label for="user">Usuário</label>
                <input type="text" name="user" placeholder="Insira seu nome" required maxlength="255" value="adm">
            </div>
            <div>
                <label for="password">Senha</label>
                <input type="password" name="password" placeholder="Insira sua senha" required maxlength="255" value="adm">
            </div>
            <input type="submit" value="Login">
            <div id="response"></div>
        </form>
    </main>
    <?php
        require_once($IPATH . 'footer.php')
    ?>
    <script src="inc/js/ajax.js"></script>
</body>

</html>