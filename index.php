<?php

$query = require 'bootstrap.php';

//
//$items = $query->selectAll('news');
//
//require 'index.view.php';

ob_start();
require_once __DIR__ . '/views/news/main.html';

require_once __DIR__ . '/autoload.php';

$ctrl = isset($_GET['ctrl']) ? $_GET['ctrl'] : 'News';
$act = isset($_GET['act']) ? $_GET['act'] : 'All';
$controllerClassName = $ctrl . 'Controller';

$controller = new $controllerClassName;

$method = 'action' . $act;

$controller->$method($query);


?>


