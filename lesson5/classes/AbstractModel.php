<?php

abstract class AbstractModel
{
    protected static $table;

    protected $data = [];

    public function __set($k, $v)
    {
        $this->data[$k] = $v;
    }

    public function __get($k)
    {
        return $this->data[$k];
    }

    public static function findAll()
    {
        $class = get_called_class();
        $sql = 'SELECT * FROM ' . static::$table;
        $db = new DB();
        $db->setClassName($class);
        return $db->query($sql);
    }

    public static function findOneByPk($id)
    {
        $class = get_called_class();
        $sql = 'SELECT * FROM ' . static::$table . ' WHERE id=:id';
        $db = new DB();
        $db->setClassName($class);
        return $db->query($sql, [':id' => $id])[0];
    }
    public static function findByColumn ($column, $value)
    {

        $sql = 'SELECT * FROM ' .static::$table . ' WHERE ' .$column . '= "' . $value . '" ';
        $db = new DB();
        return         $db->query($sql)[0];
    }

    /*public function fill($data =[])
    {

    }*/
    public function insert()
    {
        $cols = array_keys($this->data);
        $data = [];
        foreach($cols as $col)
        {
            $data[':' . $col] = $this->data[$col];
        }
        $sql = '
        INSERT INTO ' .static::$table . '
        (' . implode(', ', $cols). ')
        VALUES
        (' . implode(', ', array_keys($data)). ')';

        $db = new DB();
        $db->execute($sql, $data);
    }
    public static function update($data, $id)
    {
        $sql = '
        UPDATE ' .static::$table . '
        SET title="' . $data['title'] . '",text="' . $data['text'] . '"
        WHERE id="' .$id. '"';
        $db = new DB();
        $db->query($sql);
    }
    public static function del($id)
    {
        $sql = "DELETE FROM `news` WHERE id=$id";
        $db = new DB();
        $db->query($sql);
    }


}
