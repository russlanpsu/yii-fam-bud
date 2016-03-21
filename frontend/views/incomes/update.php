<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Incomes */

$this->title = 'Update Incomes: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Доходы', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Обновить';
?>
<div class="incomes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
