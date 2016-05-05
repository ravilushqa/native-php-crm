<?php


class NewsController
{

    public function actionAll()
    {
        $items = NewsModel::findAll();
        $view = new View();
        $view->items = $items;
        $view->display('news/all.php');


    }

    public function actionOne()
    {
        $id = $_GET['id'];
        $item = NewsModel::findOneByPk($id);
        $view = new View();
        $view->item = $item;
        $view->display('news/one.php');
    }


    /*
     $article = new NewsModel();
     $article->title = 'Привет';
     $article->text = 'Привет, мир!';
     $article->insert();

     NewsModel::findByColumn('id', '26')[0]
     */
}