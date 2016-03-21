<?php

use yii\data\SqlDataProvider;
use yii\grid\GridView;
use dosamigos\datepicker\DateRangePicker;

/* @var $this yii\web\View */
    $dataProvider = new SqlDataProvider([
        'sql' => 'SELECT id, summa, dt FROM expences'
    ]);
?>
<h1>report/index</h1>

<?= DateRangePicker::widget([
    'name' => 'date_from',
    'value' => '02-16-2012',
    'nameTo' => 'name_to',
    'valueTo' => '02-20-2012'
]);?>

<?= GridView::widget([
        'dataProvider' => $dataProvider,    
        'columns' => [           
            'id',
            'summa',
            'dt'
        ],
    ]); ?>