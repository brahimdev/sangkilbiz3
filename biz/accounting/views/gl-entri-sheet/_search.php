<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var biz\accounting\models\searchs\GlEntriSheet $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="gl-header-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_gl') ?>

    <?= $form->field($model, 'gl_date') ?>

    <?= $form->field($model, 'gl_num') ?>

    <?= $form->field($model, 'gl_memo') ?>

    <?= $form->field($model, 'id_branch') ?>

    <?php // echo $form->field($model, 'id_periode') ?>

    <?php // echo $form->field($model, 'type_reff') ?>

    <?php // echo $form->field($model, 'id_reff') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'create_at') ?>

    <?php // echo $form->field($model, 'create_by') ?>

    <?php // echo $form->field($model, 'update_at') ?>

    <?php // echo $form->field($model, 'update_by') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
