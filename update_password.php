<?php
    define('__CONFIG__', true);
    require_once('inc/config.php');
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
<body id="update">
    <?php
        $IPATH = $_SERVER['DOCUMENT_ROOT'] . "/layout/";
        require_once($IPATH . "header.php")
    ?>
    <main>
        <form action="inc/update_password.php" method='POST' id='update_password' class='update-form';>
            <div class='form-block'>
                <label for="old_password">Senha: </label>
                <input type="password" name="old_password" id="old_password" minlength="3" required maxlength="255">
            </div>
            <div class='form-block'>
                <label for="old_password">Senha novamente: </label>
                <input type='password' name="old_password_again" id="old_password_again" minlength="3" required maxlength="255">
                <span id='message'></span>
            </div>
            <div class='form-block'>
                <label for="new_password">Nova senha: </label>
                ­<input type="password" name="new_password" id="new_password" required maxlength="255">
                
            </div>
                <input type="submit" value="Enviar" id='submit' class="submit-btn"> 
        </form>
        <div id="response"></div>
    </main>
    <?php
        require_once($IPATH . 'footer.php')
    ?>
    <script src="assets/js/ajax.js"></script>
</body>
</html>