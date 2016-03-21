<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Incomes;

/**
 * IncomesSearch represents the model behind the search form about `frontend\models\Incomes`.
 */
class IncomesSearch extends Incomes
{

    public $createdTo;
    public $createdFrom;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'income_id', 'currency_id'], 'integer'],
            [['summa'], 'number'],
            [['dt', 'createdFrom', 'createdTo'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Incomes::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
			'pagination' => false
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'summa' => $this->summa,
            'income_id' => $this->income_id,
            'currency_id' => $this->currency_id,
        ]);

    //    $query->andFilterWhere(['like', 'dt', $this->dt]);
        $query->andFilterWhere(['between', 'dt', $this->createdFrom, $this->createdTo]);

        return $dataProvider;
    }
}
