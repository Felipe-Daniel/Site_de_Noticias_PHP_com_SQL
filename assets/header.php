<nav>
    <div class="logo">
        Clubes Brasil
    </div>
    <ul>
        <li><a href="../index.php">Home</a></li>
        <li><a href="#">Notícias</a></li>
        <li><a href="../contact">Contatos</a></li>
        <li><a href="../login.php">Login</a></li>
    </ul>
    <i class="burger fas fa-bars"></i>
</nav>
<script>
    burger = document.querySelector('.burger')
    burger.addEventListener('click',()=>{   
        document.querySelector('nav ul').classList.toggle('show-nav')
    })
</script>