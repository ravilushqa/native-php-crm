<?php
require_once __DIR__ . '/../form.php';
require_once __DIR__ . '/autoload.php';

$ctrl = isset($_GET['ctrl']) ? $_GET['ctrl'] : 'News';
$act = isset($_GET['act']) ? $_GET['act'] : 'All';
$controllerClassName = $ctrl . 'Controller';

$controller = new $controllerClassName;

$method = 'action' . $act;
$controller->$method();
var_dump($_GET);


?>

<?php require_once __DIR__ . '/../form_end.php';
