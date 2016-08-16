<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Articles_subs_sectionsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="articles-subs-sections-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'article_sub_section_id') ?>

    <?= $form->field($model, 'article_id_fk') ?>

    <?= $form->field($model, 'article_sub_title') ?>

    <?= $form->field($model, 'article_sub_body') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
