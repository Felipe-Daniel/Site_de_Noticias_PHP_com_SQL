<?php
    // If is not accessing from our page, then don't load the file
    define('__CONFIG__', true);
    require_once('../config.php');

    $id = json_decode(file_get_contents('php://input'));

    DB::getConnection();
    if($_SERVER['REQUEST_METHOD']=='POST'){
        if($id==1){
            die('You can not delete the administrator!');
        }
        $id = Filter::String(strval($id['id']));
        
        $sql = $con->prepare("DELETE FROM users WHERE id LIKE :id");
        $sql->bindParam(":id", $id, PDO::PARAM_INT);
        $sql->execute();
    }
?>