<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Articles_subs_sections */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="articles-subs-sections-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'article_id_fk')->textInput() ?>

    <?= $form->field($model, 'article_sub_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'article_sub_body')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
