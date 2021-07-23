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
        $IPATH = $_SERVER['DOCUMENT_ROOT'] . "/layout/";
        include($IPATH . "header.php")
    ?>
    <main>
        <form action="inc/login.php" method="post" id='login_form'>
            <div class="title"></div>
            <div>
                <label for="user">Usuário</label>
                <input type="text" name="user" placeholder="Insira seu nome" required maxlength="255">
            </div>
            <div>
                <label for="password">Senha</label>
                <input type="password" name="password" placeholder="Insira sua senha" required maxlength="255">
            </div>
            <input type="submit" value="Login">
        </form>
    </main>
    <?php
        include($IPATH . 'footer.php')
    ?>
    <script>
        document.getElementById('login_form').addEventListener('submit', (e)=>{
                e.preventDefault();    //stop form from submitting

                // Get form values
                dataObj = {
                    user: e.querySelector('form[type="text"]').val(),
                    password: e.querySelector('form[type="password"]').val()
                } 
                
                // send AJAX using pure javascript
                xhr = new XMLHttpRequest();
                xhr.open('POST', 'inc/registration/login.php');
                xhr.setRequestHeader('Content-Type', 'aplication/json;charset=UTF-8');
                xhr.send(dataObj);

        });
    </script>
</body>

</html>