<?php
/**
 * Created by PhpStorm.
 * User: MXS34
 * Date: 19.11.2016
 * Time: 15:20
 */

namespace app\models;
use yii\db\ActiveRecord;


class Product extends ActiveRecord
{
    public static function tableName(){
        return 'products';
    }

    public function getCategories() {
        // Cоздание связи между категориями и продуктами
        return $this->hasOne(Category::className(), ['id' => 'parent']);
    }

}