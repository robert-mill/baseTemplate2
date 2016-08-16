<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "articles".
 *
 * @property integer $article_id
 * @property integer $page_id_fk
 * @property string $article_title
 * @property string $article_body
 */
class Articles extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'articles';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['page_id_fk', 'article_title', 'article_body'], 'required'],
            [['page_id_fk'], 'integer'],
            [['article_body'], 'string'],
            [['article_title'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'article_id' => 'Article ID',
            'page_id_fk' => 'Page Id Fk',
            'article_title' => 'Article Title',
            'article_body' => 'Article Body',
        ];
    }
}
