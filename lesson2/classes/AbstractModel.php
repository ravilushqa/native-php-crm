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
        $sql = 'SELECT * FROM ' .static::$table . 'WHERE id=' . $id;
        return $db->queryOne($sql, static::$class);

    }
    public static function News_insert($data){
        $sql = "
    INSERT INTO news
    (title, text)
    VALUES
    ('" . $data['title'] ."', '" . $data['text'] ."' )
    ";
        Sql_exec($sql);
    }

}