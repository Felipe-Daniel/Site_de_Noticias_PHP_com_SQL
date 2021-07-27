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
    <?php
        $user_data = new User($_SESSION['user'])
    ?>
    <main>
            <form action="inc/update_data.php" method='POST' id="update_data">
                <div>
                    <label for="email">Email: </label>
                    <input type="email" name="email" id='email'value=<?php echo"$user_data->email"?> required maxlength="255">
                </div>
                <div>
                    <label for="phone">Telefone: </label>
                    ­<input type="tel" name="phone" id='phone'value=<?php echo"$user_data->phone"?> required maxlength="255">
                </div>
                    <input type="submit" value="Enviar" on>    
            </form>
            <div id="response"></div>

    </main>
    <?php
        require_once($IPATH . 'footer.php')
    ?>
    <script src="inc/js/ajax.js"></script>
</body>
</html>