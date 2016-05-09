<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Empl_ClassR */

$this->title = $model->emploeeId;
$this->params['breadcrumbs'][] = ['label' => 'Empl  Class Rs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="empl--class-r-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'emploeeId' => $model->emploeeId, 'classRoomId' => $model->classRoomId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'emploeeId' => $model->emploeeId, 'classRoomId' => $model->classRoomId], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'emploeeId',
            'classRoomId',
        ],
    ]) ?>

</div>
