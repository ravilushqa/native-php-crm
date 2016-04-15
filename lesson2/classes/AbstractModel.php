<?php

abstract class AbstractModel
{
    protected static $table;
    protected static $class;

    public static function getAll()
    {
        $db = new DB;
        $sql = 'SELECT * FROM ' . static::$table;
        return $db->queryAll($sql, static::$class);

    }
    public static function getOne($id)
    {
        $db = new DB();
        $sql = 'SELECT * FROM ' .static::$table . ' WHERE id=' . $id;
        return $db->queryOne($sql, static::$class);

    }

    public static function News_insert($data)
    {
        $db = new DB();
        $sql = "INSERT INTO news (title, text) VALUES ('" . $data['title'] . "', '" . $data['text'] . "')";
        if ($db->queryInsert($sql) !== false){
            return header('Location: /lesson2/index.php');
        }else return false;

    }
}