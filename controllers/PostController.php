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
use app\models\Category;


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

        $model = new TestForm();

        // Данные успешно загружены методом POST
        if ( $model->load(Yii::$app->request->post()) ) {
            if ( $model->save()){
                Yii::$app->session->setFlash('success', 'Данные приняты');
                return $this->refresh(); // Для очистки формы для избежания ошибки повторной отправки
            } else {
                Yii::$app->session->setFlash('error: ', "{$model->getErrors()}");
            }
        }

        $this->view->title = 'Все статьи';
        return $this->render('test', compact('model'));
    }

    public function actionShow () {
        $this->view->title="Post=>Show";
        /*
        //Получаем информацию из модели
        // -> find() - обязательный, строит обьект запроса
        // -> all() - получить все
        // -> one() - получить одну первую | Запрос избыточный, сначала получит все записи, но вернет всего одну
        // -> count() - подсчитывает количество записей
        // -> orderBy(['id' => SORT_ASC]) SORT_ASC || SORT_DESC
        // -> asArray(['value' => true]) - позволяет получить данные в виде массива. Такой подход усколяет работу и уменьшает потребление RAM
        // -> where('parent = > < 123') || where(['< > =', 'parent', '123'])
        // -> where(['like', 'title', 'te']) - выбирает такие "title", где встречается "te".
        // -> limit(number) - ограничивает количество записей до number

        //$cats = Category::find()->asArray(['value' => true])->limit(12)->all();

        //$query = "SELECT * FROM categories WHERE title LIKE '%T%'";
        $query = "SELECT * FROM categories WHERE title LIKE :search";
        $cats = Category::findBySql($query, [':search'=> '%T%'])->all();
        //findOne(условие) получить одну запись из бд
        //findAll(условие) получить все записи из бд
        */
        //Жадная загрузка
        //->with('products') позволяет получить сразу продукты вместе с категориями.
        $cats = Category::find()->with('products')->all();

        return $this->render('show', compact('cats'));
    }
}