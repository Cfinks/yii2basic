<?php
/**
 * Created by PhpStorm.
 * User: Shuri
 * Date: 16.01.2018
 * Time: 21:24
 */

namespace app\models;


use yii\db\ActiveRecord;

class Categories extends ActiveRecord
{
    /*
     * Связь с таблицей Products
     */
    public function getProducts()
    {
        return $this->hasMany(Product::className(), ['parent' => 'id']); /* Первый Products, второй  Categories*/
    }
}