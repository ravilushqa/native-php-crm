<?php/*
class Article {
    public $title;
    public $text;
    public function __construct($title, $text='')
    {
        $this->title = $title;
        $this->text = $text;
    }
    public function view(){
        echo $this->title;
        echo '<br>';
        echo $this->text;
        echo '<br>';
    }
}

$a = new Article('Заголовок', 'Текст');
$a->view();

$b = new Article('Заголовок', 'Текст');
$b->view();*/?>
<?php
abstract class Article {
    public  $title;
    public  $text;
    static protected  $delim = ': ';
    abstract public function view();

}
class NewsArticle extends Article
{
    public $author;
    public function view()
    {
        echo $this->author . self::$delim . $this->title;
    }


}
$a = new NewsArticle();
$a->title = 'Пример новости';
$a->author = 'Пушкин';
$a->view();

