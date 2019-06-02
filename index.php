<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require_once('config/config.php');
require_once('functions.php');
require_once('functions_db.php');
/*if (!$connect) {
    print(mysqli_connect_error());
    exit('Сайт временно не доступен.');
}*/

$header_content = include_template('header.php', [
    'social_buttons' => messages_all('social_buttons'),
	'header_titles' => messages_all('header_titles')
]);
$my_jobs_content = include_template('my_jobs.php', [
    'my_jobs' => messages_all('my_jobs')
]);
$contacts_content = include_template('contacts.php', []);
$form_content = include_template('form.php', []);
$modal_window_content = include_template('modal_window.php', []);
$modal_window_find_job = include_template('find_job.php', []);
$footer_content = include_template('footer.php', [
    'social_buttons' => messages_all('social_buttons')
]);
$index_content = include_template('index.php', [
	'main_title' => $main_title,
    'header' => $header_content,
    'my_jobs' => $my_jobs_content,
    'contacts' => $contacts_content,
    'form' => $form_content,
    'modal_window' => $modal_window_content,
    'find_job' => $modal_window_find_job,
    'footer' => $footer_content
]);
print($index_content);