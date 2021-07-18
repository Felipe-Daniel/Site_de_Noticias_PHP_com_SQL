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
<body id="contact">
    <?php
        $IPATH = $_SERVER['DOCUMENT_ROOT'] . "/assets/";
        include($IPATH . "header.php")
    ?>
    <main>
        <div class="title">FALE CONOSCO</div>
        <form action="">
            <input type="text" name="" id="" placeholder="Nome" required>
            <input type="email" name="" id="" placeholder="Email" required>
            <input type="text" name="" id="" placeholder="Assunto" required>
            <textarea name="" id="" cols="30" rows="10" required></textarea>
        </form>
    </main>
    <?php
        include($IPATH . 'footer.php')
    ?>
</body>
</html>