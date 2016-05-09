<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Emploees */

$this->title = 'Update Emploees: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Emploees', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="emploees-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
