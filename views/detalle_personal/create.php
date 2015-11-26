<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Detallepersonal */

$this->title = 'Create Detallepersonal';
$this->params['breadcrumbs'][] = ['label' => 'Detallepersonals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detallepersonal-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
