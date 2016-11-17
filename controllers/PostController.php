<?php
/**
 * Created by PhpStorm.
 * User: MXS34
 * Date: 15.11.2016
 * Time: 19:35
 */

namespace app\controllers;
use Yii;
use app\models\TestForm;

class PostController extends AppController
{
    // Установка шаблона "basic";
    public $layout = 'basic';

    public function beforeAction ($action) {
        if ( $action -> id == 'index' ) {
            $this -> enableCsrfValidation = false;
        }
        return parent :: beforeAction($action);
    }

    public function actionIndex () {

        if ( Yii :: $app -> request -> isAjax ) {
            debug(Yii :: $app -> request -> post());
            return "Test";
        }

        $model = new TestForm();

        $this->view->title = 'Все статьи';
        return $this->render('test', compact('model'));
    }

    public function actionShow () {
        $this->view->title="Post=>Show";
        return $this->render('show');
    }
}