<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Dictexpences */

$this->title = 'Добавить расход';
$this->params['breadcrumbs'][] = ['label' => 'Справочник расходов', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dictexpences-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
