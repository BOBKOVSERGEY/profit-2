<?php

namespace App\Controllers;


use App\Exceptions\Core;
use App\Exceptions\Db;
use App\MultiException;
use App\View;

class News
{

    protected $view;

    public function __construct()
    {
        $this->view = new View();
    }

    public function action($action)
    {
        $methodName = 'action' . $action;
        $this->beforeAction();
        return $this->$methodName();
    }

    protected function beforeAction()
    {
        //$ex = new Db('Сообщение об исключении');
        //throw $ex;
    }

    protected function actionIndex()
    {
        $this->view->title = 'Мой крутой сайт';
        $this->view->news = \App\Models\News::findAll();

        echo $this->view->display(__DIR__ . '/../templates/index.php');
    }

    protected function actionOne()
    {
        $id = (int)$_GET['id'];
        $this->view->article = \App\Models\News::findById($id);
        echo $this->view->display(__DIR__ . '/../templates/one.php');
    }

    protected function actionCreate()
    {
        try {
            $article = new \App\Models\News();
            $article->fill([]);
            $article->save();
        } catch (MultiException $e) {
            $this->view->errors = $e;
        }
        echo $this->view->display(__DIR__ . '/../templates/create.php');
    }

}