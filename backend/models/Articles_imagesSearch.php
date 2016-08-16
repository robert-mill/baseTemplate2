<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Articles_images;

/**
 * Articles_imagesSearch represents the model behind the search form about `backend\models\Articles_images`.
 */
class Articles_imagesSearch extends Articles_images
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['article_image_id', 'article_article_id_fk', 'article_image_name'], 'integer'],
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
        $query = Articles_images::find();

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
            'article_image_id' => $this->article_image_id,
            'article_article_id_fk' => $this->article_article_id_fk,
            'article_image_name' => $this->article_image_name,
        ]);

        return $dataProvider;
    }
}
