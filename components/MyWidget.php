<?php

/**
 * Created by PhpStorm.
 * User: MXS34
 * Date: 20.11.2016
 * Time: 15:00
 */

namespace app\components;
use yii\base\Widget;

class MyWidget extends Widget{

    public $name;

    public function init() {
        parent::init();
        /*if ($this->name === null){
            $this->name = "Default";
        }*/
        ob_start();
    }

    public function run () {
        $content = ob_get_clean();
        $content = mb_strtoupper($content, 'utf-8');
        return $this->render('my', compact('content'));
       // return $this->render('my', ['name' => $this->name] );
    }

}