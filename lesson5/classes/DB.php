<?php

class DB
{
    private $dbh;
    public function __construct()
    {
        $this->dbh = new PDO('mysql:dbname=test;host=192.168.0.56', 'root', '');
    }

    public function query($sql, $params=[])
    {
        $sth = $this->dbh->prepare($sql);
        $sth->execute($params);
        return $sth->fetchAll(PDO::FETCH_OBJ);
    }
}