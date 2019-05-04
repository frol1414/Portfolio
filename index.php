<?php
require_once('functions.php');
$title = 'Fasdecom';
$project_list = ['Входящие', 'Учеба', 'Работа', 'Домашние дела', 'Авто'];
$task_list = [
	[
		'task' => 'Собеседование в IT компании',
		'datePerformed' => '01.12.2019',
		'category' => 'Работа',
		'isDone' => false
	],
	[
		'task' => 'Выполнить тестовое задание',
		'datePerformed' => '25.12.2019',
		'category' => 'Работа',
		'isDone' => false
	],
	[
		'task' => 'Сделать задание первого раздела',
		'datePerformed' => '21.12.2019',
		'category' => 'Учеба',
		'isDone' => true
	],
	[
		'task' => 'Встреча с другом',
		'datePerformed' => '05.01.2019',
		'category' => 'Входящие',
		'isDone' => false
	],
	[
		'task' => 'Купить корм для кота',
		'datePerformed' => 'Нет',
		'category' => 'Домашние дела',
		'isDone' => false
	],
	[
		'task' => 'Заказать пиццу',
		'datePerformed' => 'Нет',
		'category' => 'Домашние дела',
		'isDone' => false
	]
]; 

/*$page_content = include_template('index.php', [
    'task_list' => $task_list, 
    'show_complete_tasks' => $show_complete_tasks
]);*/
$header_content = include_template('header.php', []);
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


