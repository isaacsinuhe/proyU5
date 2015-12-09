<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DetallepersonalSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Detallepersonals';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detallepersonal-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Detallepersonal', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_detalle_personal',
            'id_tarea',
            'id_personal',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
