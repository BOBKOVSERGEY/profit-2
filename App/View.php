<?php

namespace App;

class View
    implements \Countable
{
    protected $data = [];

    public function __set($k, $v)
    {
       $this->data[$k] = $v;
    }

    public function __get($k)
    {
        return $this->data[$k];
    }

    public function render($template)
    {
        ob_start(); // функция, которая включает буфер вывода

        foreach ($this->data as $prop => $val)
        {
            $$prop = $val; // $$ переменная, чье имя содержится в переменной
        }

        include $template;
        $content = ob_get_contents();
        ob_end_clean(); // выключает буфер вывода и очищает его
        return $content;
    }

    public function display($template)
    {
        echo $this->render($template);
    }

    public function count()
    {
        return count($this->data);
    }
}