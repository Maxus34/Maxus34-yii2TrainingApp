<?php
/**
 * Created by PhpStorm.
 * User: MXS34
 * Date: 17.11.2016
 * Time: 22:00
 */

namespace app\models;
use yii\base\Model;

class TestForm extends Model {
    //Поля формы
    public $name;
    public $email;
    public $text;

    public function attributeLabels()
    {   //Подпись для поля
        return [
            'name' => 'Имя',
            'email' => 'E-mail',
            'text'  => 'Текст сообщения',
        ];
    }

    public function rules()
    {   //Варидаторы
        return [
            [ ['name', 'email'], 'required'],
            ['email', 'email'],
            //['name', 'string', 'min' => 2, 'tooShort' => 'Too short input'],
            //['name', 'string', 'max' => 5, 'tooLong' => 'Too long input'],
            ['name', 'string', 'length' => [2,5], 'tooShort' => 'Short input', 'tooLong' => 'Long input'],

            ['name', 'myRule']
        ];
    }

    public function myRule($attr) {
        if (!in_array($this->$attrs, ['Hello' , 'World'])) {
            $this->addError($attrs, 'Wrong');
        }
    }
}