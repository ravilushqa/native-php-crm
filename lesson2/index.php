<?php

require_once __DIR__ . '/autoload.php';
if (!empty($_POST))
{
    $NewsController->News_insert($_POST);

}
$ctrl = isset($_GET['ctrl']) ? $_GET['ctrl'] : 'News';
$act = isset($_GET['act']) ? $_GET['act'] : 'All';

$controllerClassName = $ctrl . 'Controller';

$controller = new $controllerClassName;

$method = 'action' . $act;
$controller->$method();
?>
<a href="add.php">Добавить новость</a>
