<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CompradoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="comprado-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'id_compras') ?>

    <?= $form->field($model, 'id_producto') ?>

    <?= $form->field($model, 'cantidad') ?>

    <?= $form->field($model, 'conto_unitario') ?>

    <?php // echo $form->field($model, 'importe') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
