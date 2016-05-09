<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Empl_ClassR */

$this->title = 'Update Empl  Class R: ' . $model->emploeeId;
$this->params['breadcrumbs'][] = ['label' => 'Empl  Class Rs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->emploeeId, 'url' => ['view', 'emploeeId' => $model->emploeeId, 'classRoomId' => $model->classRoomId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="empl--class-r-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
