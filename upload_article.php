
<?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . "/layout/";
    require_once($IPATH . "header.php")
?>
<main>
    <div class="title">Criar notícia</div>
    <form action="inc/ajax/upload_article.php" method='post' class='update-article-form' enctype="multipart/form-data">
        <input type="text" name="title"  placeholder="TÍTULO" required maxlength="128">
        <textarea name="text" cols="30" rows="20" placeholder='CONTEÚDO' required ></textarea>
        <input type="file" name="image">
        <input type="submit" value="Publicar" class="submit-btn">
        <div id="response" class="response"></div>
    </form>
</main>
<script src="../assets/js/ajax.js"></script>
<?php
    require_once($IPATH . 'footer.php')
?>
</html>