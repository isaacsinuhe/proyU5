<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Detallepersonal */

$this->title = $model->id_detalle_personal;
$this->params['breadcrumbs'][] = ['label' => 'Detallepersonals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detallepersonal-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_detalle_personal], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_detalle_personal], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_detalle_personal',
            'id_tarea',
            'id_personal',
        ],
    ]) ?>

</div>
