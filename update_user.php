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
</head>
<body id="update">

    <?php
        $IPATH = $_SERVER['DOCUMENT_ROOT'] . "/layout/";
        require_once($IPATH . "header.php")
    ?>
    <main>
            <form action="inc/update_user.php" method='POST' id="update_user">
                <div>
                    <label for="user">Nome: </label>
                    <input type="text" name="user" value=<?php echo"$user"?> required maxlength="255">
                </div>
                <div>
                    <label for="email">Email: </label>
                    <input type="email" name="email" value=<?php echo"$email"?> required maxlength="255">
                </div>
                <div>
                    <label for="phone">Telefone: </label>
                    ­<input type="tel" name="phone" value=<?php echo"$phone"?> required maxlength="255">
                </div>
                    <input type="submit" value="Enviar" on>    
            </form>

    </main>
    <?php
        require_once($IPATH . 'footer.php')
    ?>
</body>
</html>