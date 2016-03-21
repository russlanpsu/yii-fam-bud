<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $model frontend\models\ExpencesSearch */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="expences-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'createdFrom')->widget(
        DatePicker::className(), [
        'inline' => false,
        'language' => 'ru',
        'clientOptions' => [
            'autoclose' => true,
            'todayBtn' => true,
            'format' => 'yyyy-mm-dd 00:00:00'
        ]
    ]); ?>

    <?= $form->field($model, 'createdTo')->widget(
        DatePicker::className(), [
        'inline' => false,
        'language' => 'ru',
        'clientOptions' => [
            'autoclose' => true,
            'todayBtn' => true,
            'format' => 'yyyy-mm-dd 23:59:59'
        ]
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Найти', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Сбросить', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
