<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pages".
 *
 * @property integer $page_id
 * @property string $page_name
 * @property string $page_abstract
 */
class Pages extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pages';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['page_name'], 'required'],
            [['page_abstract'], 'string'],
            [['page_name'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'page_id' => 'Page ID',
            'page_name' => 'Page Name',
            'page_abstract' => 'Page Abstract',
        ];
    }
}
