<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Articles_images */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="articles-images-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
    <?php
        $id = isset($_GET['id'])?$_GET['id']:'';

    ?>
    <?= $form->field($model, 'article_article_id_fk')->textInput(['value'=>$id]) ?>

    <?= $form->field($model, 'article_image_name')->textInput() ?>
    <?= $form->field($model, 'file')->fileInput() ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

