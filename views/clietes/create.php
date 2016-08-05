<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Clietes */

$this->title = 'Create Clietes';
$this->params['breadcrumbs'][] = ['label' => 'Clietes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="clietes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
