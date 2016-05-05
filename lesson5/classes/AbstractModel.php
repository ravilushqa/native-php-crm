<?php

abstract class AbstractModel
{
    static protected $table;
    static public function getTable()
    {
        return static::$table;
    }
}