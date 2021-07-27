<?php
    define('__CONFIG__', true);
    require_once('inc/config.php');
    Check::level_check(3);
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
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;700;800&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body id="update">

    <?php
        $IPATH = $_SERVER['DOCUMENT_ROOT'] . "/layout/";
        require_once($IPATH . "header.php")
    ?>
    <main>
        <form action="inc/registration.php" method='POST' id="register">
            <div>
                <label for="user">Nome: </label>
                <input type="text" name="user" required maxlength="255" value="abcd">
            </div>
            <div>
                <label for="password">Senha: </label>
                ­<input type="password" name="password" required maxlength="255" value="abcd">
            </div>
            <div>
                <label for="password">Nível de autoridade: </label>
                ­<select name="level" required>
                    <option disabled selected value="">-- Selecione nível --</option>
                    <option value="1">Usuário</option>
                    <option value='2'>Manutenção</option>
                    <option value="3">Adiministrador</option>
                </select>
            </div>
            <div>
                <label for="email">Email: </label>
                <input type="email" name="email" required maxlength="255" value="abcd@gmail.com">
            </div>
            <div>
                <label for="phone">Telefone: </label>
                ­<input type="tel" name="phone" required maxlength="255" value="00000000">
            </div>
            <input type="submit" value="Enviar"> 
            
        </form>
        <div id='response'></div>

    </main>
    <?php
        require_once($IPATH . 'footer.php')
    ?>
    <script src="inc/js/ajax.js"></script>
</body>
</html>