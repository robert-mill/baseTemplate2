<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\Articles_imagesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Articles Images';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="articles-images-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Articles Images', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'article_image_id',
            'article_article_id_fk',
            'article_image_name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
