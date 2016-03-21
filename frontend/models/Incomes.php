<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "incomes".
 *
 * @property integer $id
 * @property string $summa
 * @property string $dt
 * @property integer $income_id
 * @property integer $currency_id
 *
 * @property Currency $currency
 * @property Dictincomes $income
 */
class Incomes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'incomes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['summa'], 'number'],
            [['income_id', 'currency_id'], 'integer'],
            [['dt'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'summa' => 'Сумма',
            'dt' => 'Дата',
            'income_id' => 'Доход',
            'currency_id' => 'Валюта',
            'createdFrom' => 'Начальная дата',
            'createdTo' => 'Конечная дата'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCurrency()
    {
        return $this->hasOne(Currency::className(), ['id' => 'currency_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIncome()
    {
        return $this->hasOne(Dictincomes::className(), ['id' => 'income_id']);
    }
}
