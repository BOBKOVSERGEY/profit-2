<?php

namespace App;

class Db
{
    protected $dbh;
    public function __construct()
    {
        $this->dbh = new \PDO('mysql:host=localhost;dbname=test', 'root', '');
    }

    public function execute($sql)
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute();
        return $res;
    }
    public function query($sql)
    {
        $sth = $this->dbh->prepare($sql); // подготовили выражение
        $res = $sth->execute(); // выполнили запрос
        if ( false !== $res ) {
            return $sth->fetchAll(); // получаем все данные результата запроса
        }
        return[]; // в противном случаем вернем пустой массив
    }

}