<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Detallepersonal */

$this->title = 'Update Detallepersonal: ' . ' ' . $model->id_detalle_personal;
$this->params['breadcrumbs'][] = ['label' => 'Detallepersonals', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_detalle_personal, 'url' => ['view', 'id' => $model->id_detalle_personal]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="detallepersonal-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
