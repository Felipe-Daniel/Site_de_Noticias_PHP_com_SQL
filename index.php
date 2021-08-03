    <?php
        $IPATH = $_SERVER['DOCUMENT_ROOT'] . "/layout/";
        require_once($IPATH . "header.php")
    ?>
    <main>
    
        <div id="articles" class='articles'>
        </div>
        <script src="assets/js/pagination.js"></script>
        <script src="assets/js/articles.js"></script>
        <script src="assets/js/content_ajax.js"></script>
        <ul class='pagination' id="pagination"> <!--pages or li are comes from javascript --> </ul>
        
    </main>
    
    <?php
        require_once($IPATH . 'footer.php')
    ?>