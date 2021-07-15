<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet preload" href="style.css?v=1.2" as="style">
</head>
<body id="contact">
    <?php
        $IPATH = $_SERVER['DOCUMENT_ROOT'] . "/assets/";
        include($IPATH . "header.php")
    ?>
    <main>
        <div class="title">FALE CONOSCO</div>
        <form action="">
            <input type="text" name="" id="" placeholder="Nome">
            <input type="email" name="" id="" placeholder="Email">
            <input type="text" name="" id="" placeholder="Assunto">
            <textarea name="" id="" cols="30" rows="10"></textarea>
        </form>
    </main>
    <?php
        include($IPATH . 'footer.php')
    ?>
</body>
</html>