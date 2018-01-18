<?php

namespace app\controllers;

class MyController extends AppController{
    /**
     * @return string
     */
    public	function actionIndex($id=null) {
	    $hi = "Hello, World!";
	    $names = ["Иванов", "Петорв", "Сидоров"];
	    return $this->render('index', ['hello' => $hi, 'names' => $names, 'id' => $id]);
	}

    /**
     * @return string
     */
    public function actionBlogPost(){
        //my/blog-post
        return "BlogPost";
    }
}