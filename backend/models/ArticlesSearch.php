<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Articles;

/**
 * ArticlesSearch represents the model behind the search form about `backend\models\Articles`.
 */
class ArticlesSearch extends Articles
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['article_id', 'page_id_fk'], 'integer'],
            [['article_title', 'article_body'], 'safe'],
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
        $query = Articles::find();

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
            'article_id' => $this->article_id,
            'page_id_fk' => $this->page_id_fk,
        ]);

        $query->andFilterWhere(['like', 'article_title', $this->article_title])
            ->andFilterWhere(['like', 'article_body', $this->article_body]);

        return $dataProvider;
    }
}
