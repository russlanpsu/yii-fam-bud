<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use frontend\models\Dictexpences;
use frontend\models\Currency;
/*use dosamigos\datepicker\DatePicker;*/
use dosamigos\datetimepicker\DateTimePicker;

/* @var $this yii\web\View */
/* @var $model frontend\models\Expences */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="expences-form">

    <?php $form = ActiveForm::begin(); ?>
    
    <?= $form->field($model, 'currency_id')->dropDownList(
            ArrayHelper::map(Currency::find()->all(), 'id', 'name'),
            ['prompt'=>'выберите валюту']
    ) ?>

	<?php
		if (!$model->isNewRecord){
			echo $form->field($model, 'dt')->widget(
				DateTimePicker::className(), [
				'language' => 'ru',
				'inline' => false,
				'clientOptions' => [
					'autoclose' => true,
					'todayBtn' => true,
					'format' => 'yyyy-mm-dd hh:ii:00'
				]
			]);
		}

	?>

    <?= $form->field($model, 'summa')->textInput(['maxlength' => true]) ?>    
    
    <?= $form->field($model, 'expence_id')->dropDownList(
            ArrayHelper::map(Dictexpences::find()->all(), 'id', 'name'),
            ['prompt'=>'выберите статью расхода']
    ) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
