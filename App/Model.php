<?php

namespace App;

class Model
{
    const TABLE = '';

    public static function findAll()
    {
        $db = new Db(); // создали объект класса Db
        return $db->query(
            'SELECT * FROM ' . static::TABLE, // обращение к свойству внутри класса
            static::class
        );
    }
}