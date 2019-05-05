<?php
session_start();
unset($_SESSION['user']);
header("Location: /my_jobs/Doingsdone/");
?>