<?php
require_once('config/config.php');
require_once('config/db.php');
require_once('functions.php');
require_once('functions_db.php');

//session_start();

if ($user){
    header("Location: /admin.php");
    exit();
}
$data = [];
$errors = [];

if (!empty($_POST)) {
    $required = ['login', 'password'];
// ----- Обязательные поля -----
    foreach ($required as $key) {
        if (!empty($_POST[$key])){
// ----- Экранируем спецсимволы -----
            $data[$key] = trim($_POST[$key]);
        }

        if (empty($data[$key])) {
            $errors[$key] = 'Это поле надо заполнить';
        }
    }

// ----- Валидация полей -----
    if (empty($errors)) {
        $res = get_user_by_login($link, $data['login']);

        $user = $res ? mysqli_fetch_array($res, MYSQLI_ASSOC) : null;

        if ($user === null) {
            $errors['login'] = 'Такой пользователь не найден';
        }
// ----- Валидация пароля -----
        elseif (password_verify($data['password'], $user['password'])) {
            $_SESSION['user'] = $user;
            header("Location: /admin.php");
               exit();
        }
        else {
            $errors['password'] = 'Неверный пароль';
         }
    }
}
$page_content = include_template('auth.php', [
    'data' => $data,
    'errors' => $errors
]);

print($page_content);