<?php
    if(!isset($_SESSION)){
        session_start();
    }
?>
<nav>
    <div class="logo">
        Clubes Brasil
    </div>
    <ul>
        <li><a href="../index.php">Home</a></li>
        <li><a href="#">Notícias</a></li>
        <li><a href="../contact">Contatos</a></li>
        <?php
            if(!isset($_SESSION['username'])){
                echo "<li><a href='../login.php'>Login</a></li>";
            }
            if(isset($_SESSION['username'])){
                $user = $_SESSION['username'];
                echo "<li id='perfil'>
                        
                        <a>Perfil</a>
                        <ul>
                            <a href='update_user.php'><li>Atualizar Dados</li></a>
                            <a><li>Atualizar Senha</li></a>
                        </ul>
                    </li>
                    <li class='hidden'><a href='update_user.php'>Atualizar Dados</a></li>
                    <li class='hidden'><a>Atualizar Senha</a></li>";// one pair for full screen and one for mobile
                echo '<li><a href="inc/logout.php?token='.md5(session_id()).'">Sair</a></li>';
                echo "<li class='username'>$user</li>";
            }
        ?>
    </ul>
    <i class="burger fas fa-bars"></i>
</nav>
<script>
    burger = document.querySelector('.burger')
    burger.addEventListener('click',()=>{   
        document.querySelector('nav ul').classList.toggle('show-nav')
    })
</script>
<script>
    perfil = document.getElementById('perfil')
    perfil.addEventListener('click',()=>{   
        document.querySelector('#perfil ul').classList.toggle('show-perfil')
    })
</script>