<?php
require_once('config\db.php');

// ----- Шаблонизатор -----
function include_template($name, $data) {
    $name = 'templates/' . $name;
    $result = '';

    if (!is_readable($name)) {
        return $result;
    }

    ob_start();
    extract($data); //Извлечение
    require $name;

    $result = ob_get_clean();

    return $result;
}

// ----- Фильтр от XSS -----
function filter_info($str) {
    $text = htmlspecialchars($str);
    return $text;
}