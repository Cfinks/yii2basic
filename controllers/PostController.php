<?php
/**
 * Created by PhpStorm.
 * User: Shuri
 * Date: 14.01.2018
 * Time: 15:37
 */

namespace app\controllers;

use app\models\Categories;
use Yii;
use app\models\TestForm;


class PostController extends AppController
{

    public $layout = 'basic'; /* подключение стиля basic */

    public function actionIndex()
    {

        if (\Yii::$app->request->isAjax) {
            var_dump($_GET);
            return "test";
        }

        $model = new TestForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($model->validate()) {
                Yii::$app->session->setFlash('success', 'Данные приняты');
                return $this->refresh();
            } else {
                Yii::$app->session->setFlash('error', 'Ошибка');
            }
        }
        return $this->render('test', compact('model'));
    }

    /**
     * генерация SQL запросов к таблице Categories
     */
    public function actionShow()
    {
//        $cats = Categories::find()->all(); /* Запрос всех данных из таблицы Categories*/
//        $cats = Categories::find()->orderBy(['id' => SORT_DESC])->all(); /* Запрос всех данных из таблицы Categories отсортированных в обратном порядке*/
//        $cats = Categories::find()->asArray()->all();/* Запрос всех данных из таблицы Categories В виде массива*/
//        $cats = Categories::find()->where('parent=691')->all();/* Запрос всех данных из таблицы Categories где поле parent=691*/
//        $cats = Categories::find()->where(['like', 'title', 'pp'])->all();/* Запрос всех данных из таблицы Categories где в поле title есть 2 pp*/
//        $cats = Categories::find()->where('parent=691')->limit(1)->one();/* Запрос 1 записи из таблицы Categories где поле parent=691*/
//        $cats = Categories::findAll(['parent' => 691]);/* Запрос всех данных из таблицы Categories где поле parent=691*/
//        $query="SELECT * FROM categories WHERE title LIKE '%pp%'";
//        $cats=Categories::findBySql($query)->all();
//        $query="SELECT * FROM categories WHERE title LIKE :search"; /* безопасный ручной запрос из базы данных*/
//        $cats=Categories::findBySql($query, ['search'=>'%pp%'])->all();

        /*
         * Связывание данных в SQL
         */
//        $cats= Categories::find()->all(); /* ЛЕнивая (отложеная) загрузка */
        $cats= Categories::find()->with('products')->all(); /* Жадная загрузка */

        return $this->render('show', compact('cats')); /* Передаёт все данные из переменной $cats в view 'show'*/
    }
}