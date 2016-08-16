<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Articles_subs_sections;

/**
 * Articles_subs_sectionsSearch represents the model behind the search form about `backend\models\Articles_subs_sections`.
 */
class Articles_subs_sectionsSearch extends Articles_subs_sections
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['article_sub_section_id', 'article_id_fk'], 'integer'],
            [['article_sub_title', 'article_sub_body'], 'safe'],
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
        $query = Articles_subs_sections::find();

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
            'article_sub_section_id' => $this->article_sub_section_id,
            'article_id_fk' => $this->article_id_fk,
        ]);

        $query->andFilterWhere(['like', 'article_sub_title', $this->article_sub_title])
            ->andFilterWhere(['like', 'article_sub_body', $this->article_sub_body]);

        return $dataProvider;
    }
}
