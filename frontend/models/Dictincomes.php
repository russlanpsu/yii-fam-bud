<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "dictincomes".
 *
 * @property integer $id
 * @property string $name
 *
 * @property Incomes[] $incomes
 */
class Dictincomes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dictincomes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Наименование',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIncomes()
    {
        return $this->hasMany(Incomes::className(), ['income_id' => 'id']);
    }
}
