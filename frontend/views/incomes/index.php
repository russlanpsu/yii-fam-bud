<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\grid\GridView;
use frontend\models\Dictincomes;
use frontend\models\Currency;
use frontend\classes\PTotal;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\IncomesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Доходы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="incomes-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Добавить доход', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'layout' => '{items}{pager}',
        'showFooter' => true,
        'footerRowOptions'=>['style'=>'font-weight:bold;'],
        'columns' => [
            [
                'class' => 'yii\grid\SerialColumn',
                'footer' => 'Итого:',
            ],


            [
                'attribute' => 'summa',
                'footer' => PTotal::pageTotal($dataProvider->models, 'summa'),
                'value' => function($model){
                    return number_format($model['summa'], 2, ',', ' ');
                }
            ],

            [
                'label' => 'Доход',
                'attribute' => 'income.name',
                'value' => 'income.name',
                'filter' => Html::activeDropDownList(
                    $searchModel, 'income_id', ArrayHelper::map(Dictincomes::find()->all(), 'id', 'name'),
                    ['class'=>'form-control', 'prompt' => '']
                ),
            ],
            'dt',
            [
                'label' => 'Валюта',
                'attribute' => 'currency.name',
                'value' => 'currency.name',
                'filter' => Html::activeDropDownList(
                    $searchModel, 'currency_id', ArrayHelper::map(Currency::find()->all(), 'id', 'name'),
                    ['class'=>'form-control', 'prompt' => '']
                )
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
