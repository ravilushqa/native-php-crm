<?php

class AdminController {
    public function News_insert($data)
    {
        $article = new NewsModel();
        $article->title = $data['title'];
        $article->text = $data['text'];
        $article->insert();
        if ($article->findByColumn('title', $data['title']) != FALSE)
        {
            $id = $article->findByColumn('title', $data['title'])->id;
            return header('Location: /lesson5/index.php?Ctrl=News&act=One&id=' . $id);
        }
        else
        {
            echo 'Ошибка';
        }



    }
}
