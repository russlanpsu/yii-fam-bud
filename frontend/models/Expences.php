<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "expences".
 *
 * @property integer $id
 * @property string $summa
 * @property string $dt
 * @property integer $expence_id
 *@property integer $currency_id
 *
 * @property Dictexpences $expence
 */
class Expences extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'expences';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['summa'], 'number'],
            [['expence_id', 'currency_id'], 'integer'],
            [['dt'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            
            'summa' => 'Сумма',
            'dt' => 'Дата',
            'currency_id' => 'Валюта',
            'createdFrom' => 'Начальная дата',
            'createdTo' => 'Конечная дата',
            'expence.name' => 'Статья расходов',
            'currency.name' => 'Валюта',
            'expence_id' => 'Статья расходов'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getExpence()
    {
        return $this->hasOne(Dictexpences::className(), ['id' => 'expence_id']);
    }
    
    public function getCurrency()
    {
        return $this->hasOne(Currency::className(), ['id' => 'currency_id']);
    }
    
}
