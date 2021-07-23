<?php
    define($__CONFIG__, true);
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
<body>
    <?php
        $IPATH = $_SERVER['DOCUMENT_ROOT'] . "/layout/";
        include($IPATH . "header.php")
    ?>
    <main>
        <div class="news">
            <div class="description"></div>
            <div class="new">1</div>
            <div class="new">2</div>
            <div class="new">3</div>
            <div class="new">4</div>
            <div class="new">5</div>
            <div class="new">6</div>
            <div class="new">7</div>
            <div class="new">8</div>
            <div class="new">9</div>
        </div>
    </main>
    <?php
        include($IPATH . 'footer.php')
    ?>
</body>
</html>