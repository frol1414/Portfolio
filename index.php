<?php
require_once('functions.php');
if (!$connect) {
    print(mysqli_connect_error());
    exit('Сайт временно не доступен.');
}

$title = 'Fasdecom';

/*$page_content = include_template('index.php', [
    'task_list' => $task_list, 
    'show_complete_tasks' => $show_complete_tasks
]);*/
$header_content = include_template('header.php', [
    'social_buttons' => get_data($connect, 'social_buttons'),
	'header_titles' => get_data($connect, 'header_titles')
]);
$my_jobs_content = include_template('my_jobs.php', []);
$contacts_content = include_template('contacts.php', []);
$modal_window_content = include_template('modal_window.php', []);
$footer_content = include_template('footer.php', []);

$index_content = include_template('index.php', [
	'title' => $title,
    'header' => $header_content,
    'my_jobs' => $my_jobs_content,
    'contacts' => $contacts_content,
    'modal_window' => $modal_window_content, 
    'footer' => $footer_content
]);
print($index_content);
?>


