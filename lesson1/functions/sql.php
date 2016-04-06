<?php

function Sql_connect()
{
    mysql_connect('192.168.0.56', 'root', '');
    mysql_select_db('test');
}

function Sql_exec($sql)
{
    Sql_connect();
    mysql_query($sql);
}
function Sql_query($sql)
{
    Sql_connect();
    $res = mysql_query($sql);

    $ret = [];
    while (false !== $row = mysql_fetch_assoc($res)) {
        $ret[] = $row;
    }

    return $ret;
}