<?php

namespace App;


class Db
{

    protected $dbh;

    public function __construct()
    {
        $config = Config::getInstance();
        $this->dbh = new \PDO('mysql:host=' . $config->data['db']['host'] . ';dbname=' . $config->data['db']['dbname'],
            $config->data['db']['user'], $config->data['db']['password']);
    }

    public function query($sql, $data = [], $class)
    {
        $sth = $this->dbh->prepare($sql);
        $sth->execute($data);
        return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
    }

    public function execute($sql, $data = [])
    {
        $sth = $this->dbh->prepare($sql);
        return $sth->execute($data);
    }

    public function getLastId()
    {
        return $this->dbh->lastInsertId();
    }


}