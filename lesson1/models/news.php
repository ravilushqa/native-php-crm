<?php
date_default_timezone_set('Europe/Moscow');
require_once __DIR__ . '/../functions/sql.php';

function News_getAll()
{
    $sql = 'SELECT * FROM news ORDER BY dateupld DESC';
    return Sql_query($sql);
}
function News_insert($data){
    $sql = "
    INSERT INTO news
    (title, text)
    VALUES
    ('" . $data['title'] ."', '" . $data['text'] ."' )
    ";
    Sql_exec($sql);
}