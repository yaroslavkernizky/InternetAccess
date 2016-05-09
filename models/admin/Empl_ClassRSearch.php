<?php

namespace app\models\admin;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Empl_ClassR;

/**
 * Empl_ClassRSearch represents the model behind the search form about `app\models\empl_-class-r`.
 */
class Empl_ClassRSearch extends Empl_ClassR
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['emploeeId', 'classRoomId'], 'integer'],
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
        $query = Empl_ClassR::find();

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
            'emploeeId' => $this->emploeeId,
            'classRoomId' => $this->classRoomId,
        ]);

        return $dataProvider;
    }
}
