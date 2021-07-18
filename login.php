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
        $IPATH = $_SERVER['DOCUMENT_ROOT'] . "/assets/";
        include($IPATH . "header.php")
    ?>
    <main>
        <form action="inc/login.php" method="post" id='login'>
            <div class="title"></div>
            <div>
                <label for="user">Usuário</label>
                <input type="text" name="user" placeholder="Insira seu nome" required maxlength="255">
            </div>
            <div>
                <label for="password">Senha</label>
                <input type="password" name="password" placeholder="Insira sua senha" required maxlength="255">
            </div>
            <?php
                if(isset($_SESSION['failed-login'])){
                    echo '<div style="color:#FE5F00;font-size:1.2em;">Usuário ou senha incorreto</div>';
                };
                unset($_SESSION['failed-login']);
                ?>
                
            <input type="submit" value="Login">
        </form>
    </main>
    <?php
        include($IPATH . 'footer.php')
    ?>
</body>
</html>