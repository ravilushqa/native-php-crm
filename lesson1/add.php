<?php
require __DIR__ . '/models/news.php';
if  (!empty($_POST)) {

    $data = [];

    if (!empty($_POST['title'])){
        $data['title'] = $_POST['title'];
    }

    if (!empty($_POST['text'])) {
            $data['text'] = $_POST['text'];
        }

    if(isset($data['title']) && isset($data['text'])) {
        News_insert($data);
        header('Location: /lesson1/');
        die;
    }
}

include __DIR__ . '/view/add.php';