<?php
/**
 * Created by PhpStorm.
 * User: Shuri
 * Date: 16.01.2018
 * Time: 22:19
 */

namespace app\models;


use yii\db\ActiveRecord;

class Product extends ActiveRecord
{
    /*
     * Ручное введение наименования таблицы в базе данных
     */
    public static function tableName()
    {
        return 'products';
    }

}