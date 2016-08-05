<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CompradoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Comprados';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="comprado-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Comprado', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_compras',
            'id_producto',
            'cantidad',
            'conto_unitario',
            // 'importe',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
