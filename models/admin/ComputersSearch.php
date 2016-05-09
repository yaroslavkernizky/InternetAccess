<?php

namespace app\models\admin;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Computers;

/**
 * ComputersSearch represents the model behind the search form about `app\models\Computers`.
 */
class ComputersSearch extends Computers
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'classRoomId'], 'integer'],
            [['ip', 'mac'], 'safe'],
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
        $query = Computers::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'classRoomId' => $this->classRoomId,
        ]);

        $query->andFilterWhere(['like', 'ip', $this->ip])
            ->andFilterWhere(['like', 'mac', $this->mac]);

        return $dataProvider;
    }
}
