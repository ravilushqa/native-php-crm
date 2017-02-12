<?php

class DB
{
    private $dbh;
    private $className = 'stdClass';

    public function __construct()
    {
        $this->dbh = new PDO('mysql:dbname=homestead;host=localhost', 'homestead', 'secret');
//        $this->dbh = new PDO(
//            $config['connection'].';dbname='.$config['name'],
//            $config['username'],
//            $config['password'],
//            $config['options']
//        );
    }

    public function setClassName($className)
    {
        $this->className = $className;
    }
    public function query($sql, $params=[])
    {
        $sth = $this->dbh->prepare($sql);
        $sth->execute($params);
        return $sth->fetchAll(PDO::FETCH_CLASS, $this->className);
    }
    public function execute($sql, $params=[])
    {
        $sth = $this->dbh->prepare($sql);
        return $sth->execute($params);
    }
}