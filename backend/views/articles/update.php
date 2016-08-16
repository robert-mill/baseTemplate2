<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Articles */

$this->title = 'Update Articles: ' . $model->article_id;
$this->params['breadcrumbs'][] = ['label' => 'Articles', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->article_id, 'url' => ['view', 'id' => $model->article_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="articles-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
