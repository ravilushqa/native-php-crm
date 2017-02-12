<?php

class AdminController {
    public function actionIns()
    {
        $data = $_POST;
        $article = new NewsModel();
        $article->title = $data['title'];
        $article->text = $data['text'];
        $article->insert();
        $view = new View();
        $view->display('admin/all.php');
        if ($article->findByColumn('title', $data['title']) != FALSE)
        {
            $id = $article->findByColumn('title', $data['title'])->id;
            return header('Location: /index.php?ctrl=News&act=One&id=' . $id);
        }
        else
        {
            echo 'Ошибка';
        }
    }
   /* public function actionNone()
    {
        $view = new View();
        $view->display('admin/adminPanel.php');
    }*/
    public function actionAll()
    {
        $items = NewsModel::findAll();
        $view = new View();
        $view->items = $items;
        $view->display('admin/all.php');
    }

    public function actionUpd()
    {
        $id = $_GET['id'];
        $item = NewsModel::findOneByPk($id);
        $view = new View();
        $view->item = $item;
        $view->display('admin/Update.php');
    }
    public function actionDel()
    {
        $id = $_GET['id'];
        AdminModel::del($id);
        return header('Location: /index.php?ctrl=Admin&act=All');


    }
}
