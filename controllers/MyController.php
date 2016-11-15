<?php
/**
 * Created by PhpStorm.
 * User: MXS34
 * Date: 14.11.2016
 * Time: 20:16
 */

namespace app\controllers;
//use yii\web\Controller;

class MyController extends ApplicationController
{
    public function actionIndex()
    {
        $numbers = [1, 2, 3, 5, 12345];
        return $this->render('index', compact('numbers'));
    }

}