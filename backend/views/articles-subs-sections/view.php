<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Articles_subs_sections */

$this->title = $model->article_sub_section_id;
$this->params['breadcrumbs'][] = ['label' => 'Articles Subs Sections', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="articles-subs-sections-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->article_sub_section_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->article_sub_section_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'article_sub_section_id',
            'article_id_fk',
            'article_sub_title',
            'article_sub_body:ntext',
        ],
    ]) ?>

</div>
