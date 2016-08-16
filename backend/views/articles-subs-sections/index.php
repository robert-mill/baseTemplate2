<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\Articles_subs_sectionsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Articles Subs Sections';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="articles-subs-sections-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Articles Subs Sections', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'article_sub_section_id',
            'article_id_fk',
            'article_sub_title',
            'article_sub_body:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
