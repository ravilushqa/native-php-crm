<?php

require __DIR__ . '/models/news.php';

require_once __DIR__ . '/functions/sql.php';

$id = $_POST['id'];



$items = News_getOne($id);

include __DIR__ . '/view/newsone.php'

?>