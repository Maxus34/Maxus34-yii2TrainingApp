<?php
/**
 * Created by PhpStorm.
 * User: MXS34
 * Date: 15.11.2016
 * Time: 19:35
 */

namespace app\controllers;
use Yii;

class PostController extends AppController
{
    // Установка шаблона "basic";
    public $layout = 'basic';

    public function actionIndex () {
        return $this->render('test');
    }

    public function actionShow () {
        return $this->render('show');
    }
}