<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\ArrayHelper;
use app\models\Detallepersonal;
use app\models\Tipotarea;

/* @var $this yii\web\View */
/* @var $model app\models\Personal */

$this->title = $model->id_personal;
$this->params['breadcrumbs'][] = ['label' => 'Personals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="personal-view">

    <h1><?= Html::encode($model->nombre." ".$model->apellidos) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_personal], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_personal], [
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
            'nombre',
            'apellidos',
            'direccion',
            'telefono',
        ],
    ]) ?>
    <?= DetailView::widget([
        'model' => Detallepersonal::detalle($model->id_personal),
        'attributes' => [
            'id_tarea',
        ],
    ]) ?>

</div>
