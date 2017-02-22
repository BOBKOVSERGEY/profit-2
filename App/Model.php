<?php

namespace App;

abstract class Model
{
    const TABLE = '';

    public static function findAll()
    {
        $db = Db::instance(); // создали объект класса Db
        return $db->query(
            'SELECT * FROM ' . static::TABLE, // обращение к свойству внутри класса
            static::class
        );
    }
}