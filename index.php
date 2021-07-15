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