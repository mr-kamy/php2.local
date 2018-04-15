<?php

namespace App;


use App\Exceptions\DbException;

class Db
{

    protected $dbh;

    /**
     * Db constructor.
     * @throws DbException
     */
    public function __construct()
    {
        try {
            $config = Config::getInstance();
            $this->dbh = new \PDO('mysql:host=' . $config->data['db']['host'] . ';dbname=' . $config->data['db']['dbname'],
                $config->data['db']['user'], $config->data['db']['password']);
        } catch (\PDOException $error) {
            throw  new DbException('Ошибка подключения к БД', 100);
        }

    }

    /**
     * @param $sql
     * @param array $data
     * @param $class
     * @return array
     * @throws DbException
     */
    public function query($sql, $data = [], $class)
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($data);
        if (!$res){
            throw new DbException('Запрос не может быть выполнен', 101);
        }
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