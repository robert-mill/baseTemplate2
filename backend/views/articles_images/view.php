<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Articles_images */

$this->title = $model->article_image_id;
$this->params['breadcrumbs'][] = ['label' => 'Articles Images', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="articles-images-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->article_image_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->article_image_id], [
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
            'article_image_id',
            'article_article_id_fk',
            'article_image_name',
        ],
    ]) ?>

</div>
