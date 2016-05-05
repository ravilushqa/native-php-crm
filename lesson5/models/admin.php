<?php

class admin extends AbstractModel
{
    public $title;
    public $text;
    public $data;

    protected static $table = 'news';
    protected static $class = 'News';
}