<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet preload" href="style.css?v=1.3" as="style">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;700;800&display=swap" rel="stylesheet">
</head>
<body id="login">
    <?php
        $IPATH = $_SERVER['DOCUMENT_ROOT'] . "/assets/";
        include($IPATH . "header.php")
    ?>
    <main>
        <form action="inc/login.php" method="post" id='login'>
            <div class="title"></div>
            <div>
                <label for="">Usuário</label>
                <input type="text" name="user" placeholder="Insira seu email" required>
            </div>
            <div>
                <label for="">Senha</label>
                <input type="password" name="password" placeholder="Insira sua senha" required>
            </div>
            <input type="submit" value="Login">
        </form>
    </main>
    <?php
        include($IPATH . 'footer.php')
    ?>
</body>
</html>