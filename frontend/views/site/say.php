<?php
use yii\helpers\Html;
$this->title = 'say';
$this->params['breadcrumbs'][] = 'test';
$this->params['breadcrumbs'][] = $this->title;
?>
<?= Html::encode($message) ?>