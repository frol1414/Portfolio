<?php
require_once('config\db.php');

function db_query($sql, $params = []){
    $db = db_connect();
    
    $query = $db->prepare($sql);
    $query->execute($params);
    
    db_check_error($query);
    
    return $query;
}

function db_check_error($query){
    $info = $query->errorInfo();

    if($info[0] != PDO::ERR_NONE){
        exit($info[2]);
    }
}

function messages_all($data){
    $query = db_query("SELECT * FROM {$data}");
    return $query->fetchAll();
}

/*function get_user_by_login($link, $email)
{
    $email = mysqli_real_escape_string($link, $email);
    $sql = 'SELECT * FROM user WHERE email = "' . $email . '"';
    return mysqli_query($link, $sql);
}

function get_user_by_login($login){
    $query = db_query("SELECT * FROM users WHERE login = :login)", [
            'login' => $login
        ]);

    $db = db_connect();
    return $db->lastInsertId();
}*/