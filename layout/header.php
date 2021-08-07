<?php
    define('__CONFIG__', true);
    require_once('inc/config.php');
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP TEST</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet preload" href="assets/css/main.css?v=1.3" as="style">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;700;800&display=swap" rel="stylesheet">
</head>
<body>
    <header class='l-header'>
        <div class="logo">
            Clubes Brasil
        </div>
        <div class='nav'>
            <a class='nav__item' class='nav__item' href="../index.php">Home</a>
            <a class='nav__item' href="../contact">Contatos</a>
            
            <?php if(!isset($_SESSION['user'])){?>
                    <a class='nav__item' href='../login.php'>Login</a>
            <?php }else{?>
                <div class='dropdown-btn nav__item is-desktop' id="dropdown-btn-perfil">
                Perfil
                    <div class='dropdown is-hidden'id='dropdown-perfil'> <!-- this one is for desktop -->
                        <a class=' dropdown__item' href='update_data.php'>Atualizar Dados</a>
                        <a class=' dropdown__item' href='update_password.php'>Atualizar Senha</a>
                    </div>
                </div>
                
                <!--those ones are for mobile -->
                <a class='nav__item is-hidden' href='update_data.php'>Atualizar Dados</a>
                <a class='nav__item is-hidden' href='update_password.php'>Atualizar Senha</a>

                <script>
                    perfil = document.getElementById('dropdown-btn-perfil')
                    perfil.addEventListener('click',()=>{   
                        document.getElementById('dropdown-perfil').classList.toggle('is-hidden')
                    })
                </script>
            <?php };?>

            <?php if((isset($_SESSION['level'])) && ($_SESSION['level']>=2)){?>
                <div class='dropdown-btn nav__item is-desktop' id="dropdown-btn-adm">
                ADM
                    <div class='dropdown is-hidden' id="dropdown-adm"> <!-- this one is for desktop -->
                        <?php if((isset($_SESSION['level'])) && ($_SESSION['level']>=3)){?>
                        <a class=' dropdown__item' href='register.php'>Registrar novo usuário</a>
                        <a class=' dropdown__item' href='manage_users.php'>Todos usuários</a>
                        <?php } ?>
                        <a class=' dropdown__item' href='manage_articles.php'>Manutenção dos artigos</a>
                        <a class=' dropdown__item' href='upload_article.php' >Publicar artigo</a>
                    </div>
                </div>
                
                <!--those ones are for mobile -->
                <?php if((isset($_SESSION['level'])) && ($_SESSION['level']>=3)){?>
                <a class='nav__item is-mobile' href='register.php'>Registrar novo usuário</a>
                <a class='nav__item is-mobile' href='manage_users.php'>Todos usuários</a>

                <?php } ?>
                <a class='nav__item is-mobile' href='manage_articles.php'>Manutenção dos artigos</a>
                <a class='nav__item is-mobile' href='upload_article.php'>Publicar artigo</a>
                <script>
                    perfil = document.getElementById('dropdown-btn-adm')
                    perfil.addEventListener('click',()=>{   
                        document.getElementById('dropdown-adm').classList.toggle('is-hidden')
                    })
                </script>
            <?php };?>

            <?php if(isset($_SESSION['user'])){?>
                <a class='nav__item' href="inc/logout.php?token='.md5(session_id()).'">Sair</a>
                <a class="nav__item username"><?php echo $_SESSION['user']?></a>
            <?php };?>
            </div>
        <i class="burger fas fa-bars"></i>
    </header>
    <script>
        burger = document.querySelector('.burger')
        burger.addEventListener('click',()=>{   
            document.querySelector('.nav').classList.toggle('is-onscreen')
        })
    </script>
