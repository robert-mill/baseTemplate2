<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "article_images".
 *
 * @property integer $article_image_id
 * @property integer $article_article_id_fk
 * @property integer $article_image_name
 */
class Articles_images extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'article_images';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['article_article_id_fk', 'article_image_name'], 'required'],
            [['article_article_id_fk', 'article_image_name'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'article_image_id' => 'Article Image ID',
            'article_article_id_fk' => 'Article Article Id Fk',
            'article_image_name' => 'Article Image Name',
        ];
    }
}
