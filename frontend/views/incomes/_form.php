<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use frontend\models\Dictincomes;
use frontend\models\Currency;

/* @var $this yii\web\View */
/* @var $model frontend\models\Incomes */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="incomes-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'summa')->textInput(['maxlength' => true]) ?>


    <?= $form->field($model, 'income_id')->dropDownList(
        ArrayHelper::map(Dictincomes::find()->all(), 'id', 'name'),
        ['prompt'=>'выберите статью дохода']
    ) ?>

    <?= $form->field($model, 'currency_id')->dropDownList(
        ArrayHelper::map(Currency::find()->all(), 'id', 'name'),
        ['prompt'=>'выберите валюту']
    ) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
