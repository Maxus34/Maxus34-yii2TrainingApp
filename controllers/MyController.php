<?php
/**
 * Created by PhpStorm.
 * User: MXS34
 * Date: 14.11.2016
 * Time: 20:16
 */

namespace app\controllers;
use yii\web\Controller;

class MyController extends Controller
{
    public function actionIndex($id = "No ID<span style='font-size:14px'>ea</span>)")
    {
        return $this -> render ('index',[
            'id' => $id
        ]);
    }

}