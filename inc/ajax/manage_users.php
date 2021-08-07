<?php
    // If is not accessing from our page, then don't load the file
    define('__CONFIG__', true);
    require_once('../config.php');

    DB::getConnection();
    $page= intval($_GET['page']) ?? 1;
    $page_count = 6;

    $start = ($page-1) * $page_count;
    $results = $con->prepare("SELECT * FROM users LIMIT 6 OFFSET :start");
    $results->bindParam(':start', $start, PDO::PARAM_INT);
    $results->execute();
    
    $row_count = $con->query('SELECT * FROM users')->rowCount();
    $number_of_pages = ceil($row_count / $page_count);

    $results = $results->fetchAll(PDO::FETCH_OBJ);
    echo json_encode(['results' => $results, 'page' => $page, 'number_of_pages' => $number_of_pages]);
    die();
?>