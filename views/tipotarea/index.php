<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use app\models\Tipotarea;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TipotareaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tipotareas';
$this->params['breadcrumbs'][] = $this->title;
?>

<<<<<<< HEAD
<?= Html::dropDownList('s_id', null,
      ArrayHelper::map(Tipotarea:: find()->all(), 'id_tipotarea','nombre'),
      [
        'prompt'=>'west west',

      ]);?>

=======
>>>>>>> 287504df1506e436ec976fcf74b7d56672e69d53
<div class="tipotarea-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tipotarea', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_tipotarea',
<<<<<<< HEAD
=======
            [

    'filter' => Html::dropDownList('s_id', null,
          ArrayHelper::map(Tipotarea:: find()->all(), 'id_tipotarea','nombre'),
          [
            'prompt'=>'west west',

          ])],
>>>>>>> 287504df1506e436ec976fcf74b7d56672e69d53


            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
