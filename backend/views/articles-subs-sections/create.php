<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Articles_subs_sections */

$this->title = 'Create Articles Subs Sections';
$this->params['breadcrumbs'][] = ['label' => 'Articles Subs Sections', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="articles-subs-sections-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
