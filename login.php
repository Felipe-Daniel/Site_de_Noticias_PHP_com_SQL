<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet preload" href="style.css?v=1.3" as="style">
</head>
<body>
    <?php
        $IPATH = $_SERVER['DOCUMENT_ROOT'] . "/assets/";
        include($IPATH . "header.php")
    ?>
    <main>
        <form action="login.php" method="post" id='login'>
            <div class="title"></div>
            <div>
                <label for="">Usuário</label>
                <input type="text" name="" id="" placeholder="Insira seu email">
            </div>
            <div>
                <label for="">Senha</label>
                <input type="text" name="" id="" placeholder="Insira sua senha">
            </div>
            <input type="submit" value="Login">
        </form>
    </main>
    <?php
        include($IPATH . 'footer.php')
    ?>
</body>
</html>