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
        include($IPATH . "header.php")
    ?>
    <main>
        <form action="inc/update_password.php" method='POST';>
            <div>
                <label for="old_password">Senha: </label>
                <input type="password" name="password" id="password"  minlength="3" required maxlength="255">
            </div>
            <div>
                <label for="old_password">Senha novamente: </label>
                <input type='password' name="confirm-password" id="confirm_password" minlength="3" required maxlength="255">
                <span id='message'></span>
            </div>
            <div>
                <label for="new_password">Nova senha: </label>
                ­<input type="password" name="new-password" minlength="3" required maxlength="255">
                
            </div>
                <input type="submit" value="Enviar" id='submit'> 
        </form>
    </main>
    <script>
        // Confirm password script
        var check = function() {
            if (document.getElementById('password').value ==
                document.getElementById('confirm_password').value) {
                document.getElementById('message').innerHTML = '';
                document.getElementById('submit').removeAttribute("disabled")
                document.getElementById('submit').style.cursor='pointer'
                document.getElementById('submit').value= 'Enviar'
                document.getElementById('submit').style.backgroundColor='#EB5E28';
                document.getElementById('submit').addEventListener('mouseenter',()=>{
                    document.getElementById('submit').style.backgroundColor='#e96937';
                })
                document.getElementById('submit').addEventListener('mouseleave',()=>{
                    document.getElementById('submit').style.backgroundColor='#EB5E28';
                })
            } else {
                document.getElementById('message').style.color = 'red';
                document.getElementById('message').innerHTML = 'Senhas não combinam';
                document.getElementById('submit').setAttribute("disabled", "disabled")
                document.getElementById('submit').value= 'Senha Invalida'
                document.getElementById('submit').style.backgroundColor='#82968C'
                document.getElementById('submit').style.cursor='default'
            }
        }
    </script>
    <?php
        include($IPATH . 'footer.php')
    ?>
</body>
</html>