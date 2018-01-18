<h1>Test Action</h1>
<?php

use yii\bootstrap\ActiveForm;
use yii\bootstrap\ActiveField;
use yii\helpers\Html;

//echo "<pre>";
//print_r($model);
//echo "</pre>";
if (Yii::$app->session->hasFlash('success')) {
    ?>
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                    aria-hidden="true">&times;</span></button>
        <?php echo Yii::$app->session->getFlash('success'); ?>.
    </div>
<?php };
if (Yii::$app->session->hasFlash('error')) {
    ?>
    <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                    aria-hidden="true">&times;</span></button>
        <?php echo Yii::$app->session->getFlash('error'); ?>.
    </div>
<?php };

$form = ActiveForm::begin(['options' => ['id' => 'testForm']]);
echo $form->field($model, "name");
echo $form->field($model, "email")->input('email');
echo $form->field($model, "text")->textarea(['rows' => 10]);
echo Html::submitButton('КнопкаЫ!', ['class' => "btn btn-success"]);
ActiveForm::end();