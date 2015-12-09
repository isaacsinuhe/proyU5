<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Detallepersonal */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="detallepersonal-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_tarea')->textInput() ?>

    <?= $form->field($model, 'id_personal')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
