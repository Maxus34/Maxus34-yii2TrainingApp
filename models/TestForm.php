<?php
/**
 * Created by PhpStorm.
 * User: MXS34
 * Date: 17.11.2016
 * Time: 22:00
 */

namespace app\models;
use yii\db\ActiveRecord;

class TestForm extends ActiveRecord  {
    //$name;
    //$email;
    //$text;

    public static function tableName() {
        return "posts";
    }

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
        //Поле без валидатора по умолчанию является не безопасным
        // и не будет загружено в модель.
        // "Safe" делает поле безопасным
        return [
            [ ['name', 'text'], 'required'],
           // ['email', 'email'],
            ['name', 'string', 'length' => [2,15], 'tooShort' => 'Short input', 'tooLong' => 'Long input'],
        ];
    }

}