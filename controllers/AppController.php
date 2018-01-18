<?php
/**
 * Created by PhpStorm.
 * User: Shuri
 * Date: 14.01.2018
 * Time: 15:32
 */

namespace app\controllers;

use yii\web\Controller;

class AppController extends Controller{
    /**
     * @param $arr
     */
    public function debug($arr){
        echo '<pre>'.print_r($arr, true).'</pre>';
    }
}