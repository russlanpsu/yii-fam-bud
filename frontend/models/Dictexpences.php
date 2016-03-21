<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "dictexpences".
 *
 * @property integer $id
 * @property string $name
 *
 * @property Expences[] $expences
 */
class Dictexpences extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dictexpences';
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
    public function getExpences()
    {
        return $this->hasMany(Expences::className(), ['expence_id' => 'id']);
    }
}
