<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Incomes */

$this->title = 'Добавить доход';
$this->params['breadcrumbs'][] = ['label' => 'Доходы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="incomes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
