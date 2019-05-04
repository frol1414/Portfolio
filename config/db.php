<?php
$db = [
    'host' => 'localhost',
    'user' => 'root',
    'password' => '123456',
    'database' => 'portfolio'
];

$connect = mysqli_connect($db['host'], $db['user'], $db['password'], $db['database']);
mysqli_set_charset($connect, "utf8");


?>