<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ClietesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Clietes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="clietes-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Clietes', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nombre',
            'apellido',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
