<?php

function db_connect(){
    static $db;
    
    if($db === null){
        $db = new PDO('mysql:host=localhost;dbname=portfolio', 'root', '');
        $db->exec('SET NAMES UTF8');
    }
    
    return $db;
}