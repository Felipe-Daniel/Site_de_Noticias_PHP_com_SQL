<nav>

    <div class="logo">
        Clubes Brasil
    </div>
    <ul>
        <li><a href="../index.php">Home</a></li>
        <li><a href="#">Notícias</a></li>
        <li><a href="../contact">Contatos</a></li>
        
        <?php if(!isset($_SESSION['user'])){?>
                <li><a href='../login.php'>Login</a></li>
        <?php }else{?>
            <li id='perfil'>
            <a>Perfil</a>
                <ul> <!-- this one is for desktop -->
                    <a href='update_user.php'><li>Atualizar Dados</li></a>
                    <a href='update_password.php'><li>Atualizar Senha</li></a>
                </ul>
            </li>
            <!--those ones are for mobile -->
            <li class='hidden'><a href='update_user.php'>Atualizar Dados</a></li>
            <li class='hidden'><a href='update_password.php'>Atualizar Senha</a></li>
            <script>
                perfil = document.getElementById('perfil')
                perfil.addEventListener('click',()=>{   
                    document.querySelector('#perfil ul').classList.toggle('show-perfil')
                })
            </script>
        <?php };?>

        <?php if((isset($_SESSION['level'])) && ($_SESSION['level']>1)){?>
                <li><a href='register.php'>ADM</a></li>
        <?php };?>

        <?php if(isset($_SESSION['user'])){?>
            <li><a href="inc/logout.php?token='.md5(session_id()).'">Sair</a></li>
            <li><a class="username"><?php echo $_SESSION['user']?></a></li>
        <?php };?>
    </ul>
    <i class="burger fas fa-bars"></i>
</nav>
<script>
    burger = document.querySelector('.burger')
    burger.addEventListener('click',()=>{   
        document.querySelector('nav ul').classList.toggle('show-nav')
    })
</script>
