<?php
    // If is not accessing from our page, then don't load the file
    define('__CONFIG__', true);
    require_once('config.php');

    if($_SERVER['REQUEST_METHOD']=='POST'){

        $user = Filter::String($_POST['user']);
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        if(User::user_exist($user)){
            $return['error']='Esse usuário já possui uma conta';
        }else{
            $adduser=$con->prepare('INSERT INTO users (user, password, level, email, phone)
                            VALUES(:user,:password, :level, :email,:phone)');
            $adduser->execute(array(
                ':user' => $user,
                ':password' => $password,
                ':level' => filter::Int($_POST['level']),
                ':email' => filter::Email($_POST['email']),
                ':phone' => filter::String($_POST['phone'])
            ));
            $return['error']='Conta criada com sucesso';
        }
        echo json_encode($return, JSON_PRETTY_PRINT); exit;
    };

?>