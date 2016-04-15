<?php

class DB
{
    public function __construct()
    {
        mysql_connect('192.168.0.56', 'root', '');
        mysql_select_db('test');
    }

    public function queryAll($sql, $class = 'stdClass')
    {
        $res = mysql_query($sql);
        if (false === $res) {
            return false;
        }
        $ret = [];
        while ($row = mysql_fetch_object($res, $class)) {
            $ret[] = $row;
        }
        return $ret;
    }

    public function queryOne($sql, $class = 'stdClass')
    {
        return $this->queryAll($sql, $class)[0];
    }
    public function queryInsert($sql)
    {
        $res = mysql_query($sql);
        if (false === $res) {
            return false;
        }
        return true;

    }
}