<?php

namespace App;

class Db
{
    use Singleton;
    protected $dbh;
    protected function __construct()
    {
        try
        {
            $this->dbh = new \PDO('mysql:host=localhost;dbname=test', 'root', '');
        } catch (\PDOException $e)
        {
            throw new \App\Exceptions\Db();
        }

    }

    public function execute($sql, $params = [])
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($params);
        return $res;
    }


    public function query($sql, $params, $class)
    {
        $sth = $this->dbh->prepare($sql); // подготовили выражение
        $res = $sth->execute($params); // выполнили запрос
        if ( false !== $res ) {
            return $sth->fetchAll(\PDO::FETCH_CLASS, $class); // получаем все данные результата запроса // режим превращения данных, какого класса должег быть объект
        }
        return[]; // в противном случаем вернем пустой массив
    }

}