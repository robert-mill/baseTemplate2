<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "article_subs_sections".
 *
 * @property integer $article_sub_section_id
 * @property integer $article_id_fk
 * @property string $article_sub_title
 * @property string $article_sub_body
 */
class Articles_subs_sections extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'article_subs_sections';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['article_id_fk'], 'required'],
            [['article_id_fk'], 'integer'],
            [['article_sub_body'], 'string'],
            [['article_sub_title'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'article_sub_section_id' => 'Article Sub Section ID',
            'article_id_fk' => 'Article Id Fk',
            'article_sub_title' => 'Article Sub Title',
            'article_sub_body' => 'Article Sub Body',
        ];
    }
}
