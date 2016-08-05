<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Clietes */

$this->title = 'Update Clietes: ' . $model->nombre;
$this->params['breadcrumbs'][] = ['label' => 'Clietes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nombre, 'url' => ['view', 'id' => $model->nombre]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="clietes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
