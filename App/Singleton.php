<?php

namespace App;

abstract class Singleton
{
    public $counter;
    protected static $instance;
    protected function __construct()
    {

    }
    public static function instance()
    {
        if (static::$instance === null)
        {
            static::$instance = new static;
        }
        return static::$instance;
    }
}