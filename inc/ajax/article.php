<?php
    // If is not accessing from our page, then don't load the file
    define('__CONFIG__', true);
    require_once('../config.php');

    DB::getConnection();

    $id= intval($_GET['id']) ?? '1';
    $results = $con->prepare("SELECT * FROM news WHERE id LIKE :id");
    $results->bindParam(':id', $id, PDO::PARAM_INT);
    $results->execute();

    $results = $results->fetchAll(PDO::FETCH_OBJ);
    echo json_encode($results);
    die();
?>