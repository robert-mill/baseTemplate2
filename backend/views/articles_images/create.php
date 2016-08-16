<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Articles_images */

$this->title = 'Create Articles Images';
$this->params['breadcrumbs'][] = ['label' => 'Articles Images', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="articles-images-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
