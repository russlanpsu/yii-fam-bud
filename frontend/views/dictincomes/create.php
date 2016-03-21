<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Dictincomes */

$this->title = 'Добавить элемент';
$this->params['breadcrumbs'][] = ['label' => 'Справочник доходов', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dictincomes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
