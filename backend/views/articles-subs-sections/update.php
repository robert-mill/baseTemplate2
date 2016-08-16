<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Articles_subs_sections */

$this->title = 'Update Articles Subs Sections: ' . $model->article_sub_section_id;
$this->params['breadcrumbs'][] = ['label' => 'Articles Subs Sections', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->article_sub_section_id, 'url' => ['view', 'id' => $model->article_sub_section_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="articles-subs-sections-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
