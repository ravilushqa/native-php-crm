<?php

class DB
{
    public function __construct()
    {
        mysql_connect('192.168.0.56', 'root', '');
        mysql_select_db('test');
    }

    public function query($sql, $class = 'stdClass')
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
}