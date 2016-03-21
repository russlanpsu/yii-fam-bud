<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\Helpers\ArrayHelper;
use frontend\models\Dictexpences;
use frontend\models\Currency;
use frontend\classes\PTotal;
/* @var $this yii\web\View */
/* @var $searchModel frontend\models\ExpencesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Расходы';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="expences-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Добавить расход', ['create'], ['class' => 'btn btn-success']) ?>
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
                'attribute' => 'expence.name',
                'value' => 'expence.name',
                'filter' => Html::activeDropDownList(
                    $searchModel, 'expence_id', ArrayHelper::map(Dictexpences::find()->all(), 'id', 'name'),
                    ['class'=>'form-control', 'prompt' => '']
                ),
            ],
            'dt',
            [
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
