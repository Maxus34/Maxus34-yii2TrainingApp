<?php
/**
 * Created by PhpStorm.
 * User: MXS34
 * Date: 15.11.2016
 * Time: 19:31
 */

namespace app\controllers;
use yii\web\Controller;

class AppController extends Controller
{
    public function debug($arr) {
        echo "<pre>" . print_r($arr, true) . "</pre>";
    }
}
