<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Articles_images */

$this->title = 'Update Articles Images: ' . $model->article_image_id;
$this->params['breadcrumbs'][] = ['label' => 'Articles Images', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->article_image_id, 'url' => ['view', 'id' => $model->article_image_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="articles-images-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
