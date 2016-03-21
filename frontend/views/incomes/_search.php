<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $model frontend\models\IncomesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="incomes-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

   <!-- <?/*= $form->field($model, 'id') */?>

    <?/*= $form->field($model, 'summa') */?>

    <?/*= $form->field($model, 'dt') */?>

    <?/*= $form->field($model, 'income_id') */?>

    --><?/*= $form->field($model, 'currency_id') */?>

    <?= $form->field($model, 'createdFrom')->widget(
        DatePicker::className(), [
        'inline' => false,
        'language' => 'ru',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd 00:00:00'
        ]
    ]); ?>

    <?= $form->field($model, 'createdTo')->widget(
        DatePicker::className(), [
        'inline' => false,
        'language' => 'ru',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd 23:59:59'
        ]
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Найти', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Сбросить', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
