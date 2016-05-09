<?php

namespace app\models\admin;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Administrators;

/**
 * AdministratorsSearch represents the model behind the search form about `app\models\Administrators`.
 */
class AdministratorsSearch extends Administrators
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'emploeeId'], 'integer'],
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
        $query = Administrators::find();

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
            'emploeeId' => $this->emploeeId,
        ]);

        return $dataProvider;
    }
}
