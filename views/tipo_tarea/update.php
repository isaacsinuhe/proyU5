<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tipotarea */

$this->title = 'Update Tipotarea: ' . ' ' . $model->id_tipotarea;
$this->params['breadcrumbs'][] = ['label' => 'Tipotareas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_tipotarea, 'url' => ['view', 'id' => $model->id_tipotarea]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tipotarea-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
