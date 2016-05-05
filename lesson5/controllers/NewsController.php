<?php


class NewsController
{

    public function actionAll()
    {


        $db = new DB();
        $res = $db->query(
            'SELECT * FROM news WHERE id=:id',
            [':id' => 26]);
        var_dump($res);
        /*$news = News::getAll();
        $view = new View();

        $view->items = $news;

        $view->display('news/all.php');*/
    }

    public function actionOne()
    {
        $id = $_GET['id'];
        $item = News::getOne($id);
        $view = new View();
        $view->item = $item;
        $view->display('news/one.php');
    }
}