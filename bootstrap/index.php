<?php
// Always include constants
require_once "constants.php";

// Open welcome controller
require_once 'controllers/WelcomeView.php';

$welcome = new WelcomeView();
$page = str_replace('/', '', $_SERVER['PATH_INFO']);
// echo 'TEST<pre>';
// var_dump(BASE_URL);
// var_dump($page);
// var_dump($_SERVER);
// echo '</pre>';
$welcome->show($page);
