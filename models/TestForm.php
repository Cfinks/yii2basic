<?php
/**
 * Created by PhpStorm.
 * User: Shuri
 * Date: 16.01.2018
 * Time: 18:40
 */

namespace app\models;

use yii\base\Model;


class TestForm extends Model
{
    public $name;
    public $email;
    public $text;

    public function attributeLabels()
    {
        return [
            "name" => "Имя",
            "email" => "Электронная почта",
            "text" => "Сообщение",
        ];
//        return parent::attributeLabels(); // TODO: Change the autogenerated stub
    }

    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
            ['email', 'email'],
            ['name', 'trim'],
            ['text', 'trim'],
            ['name', 'string', 'length' => [3, 6]]
//            ['name', 'string', 'min'=>2],
//            ['name', 'string', 'max'=>5]
        ];
//        return parent::rules(); // TODO: Change the autogenerated stub
    }
}