
<?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . "/layout/";
    require_once($IPATH . "header.php")
?>
<main>
    <div class="title">Criar notícia</div>
    <form action="" method='post' class='update-article-form' enctype="multipart/form-data">
        <input type="text" name="title"  placeholder="TÍTULO" required>
        <textarea name="text" cols="30" rows="20" placeholder='CONTEÚDO' required></textarea>
        <input type="file" name="iamge">
        <input type="submit" value="Publicar" class="submit-btn">
        <div id="response"></div>
    </form>
</main>
<script src="../assets/js/ajax.js"></script>
<?php
    require_once($IPATH . 'footer.php')
?>
</html>