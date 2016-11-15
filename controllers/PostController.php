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
    public function actionTest () {
        $names = ['Iv', 'Pe', 'Si'];

        //$this->debug(Yii::$app);

        return $this->render('test');
    }
}