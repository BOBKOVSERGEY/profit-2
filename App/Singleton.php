<?php

namespace App;

trait Singleton
{
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