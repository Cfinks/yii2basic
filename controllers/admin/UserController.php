<?php
/**
 * Created by PhpStorm.
 * User: Shuri
 * Date: 14.01.2018
 * Time: 15:13
 */

namespace app\controllers\admin;

use app\controllers\AppController;

class UserController extends AppController{
    /**
     * @return string
     */
    public function actionIndex(){
        return $this->render('index');
    }
}