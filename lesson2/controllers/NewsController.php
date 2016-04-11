<?php


class NewsController
{

    public function actionAll()
    {
        $items = News::getAll();
        include __DIR__ . '/../views/news/all.php';
    }

    public function actionOne()
    {
        $id = $_GET['id'];
        $item = News::getOne($id);
        include __DIR__ . '/../views/news/one.php';
    }
    public function News_insert($_POST)
    {
        if  (!empty($_POST)) {

            $data = [];

            if (!empty($_POST['title'])){
                $data['title'] = $_POST['title'];
                $date['date'] = dat;
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

    }
}