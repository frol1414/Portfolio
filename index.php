<?php
require_once('functions.php');
if (!$connect) {
    print(mysqli_connect_error());
    exit('Сайт временно не доступен.');
}

$title = 'Fasdecom';

$header_content = include_template('header.php', [
    'social_buttons' => get_data($connect, 'social_buttons'),
	'header_titles' => get_data($connect, 'header_titles')
]);
$my_jobs_content = include_template('my_jobs.php', [
    'my_jobs' => get_data($connect, 'my_jobs')
]);
$contacts_content = include_template('contacts.php', []);
$modal_window_content = include_template('modal_window.php', []);
$modal_window_find_job = include_template('find_job.php', []);
$footer_content = include_template('footer.php', [
    'social_buttons' => get_data($connect, 'social_buttons')
]);

$index_content = include_template('index.php', [
	'title' => $title,
    'header' => $header_content,
    'my_jobs' => $my_jobs_content,
    'contacts' => $contacts_content,
    'modal_window' => $modal_window_content,
    'find_job' => $modal_window_find_job,
    'footer' => $footer_content
]);
print($index_content);
?>


