<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Administrators */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Administrators', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="administrators-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
            'id',
            'emploeeId',
        ],
    ]) ?>


    <?= GridView::widget([
        'dataProvider' => new \yii\data\ActiveDataProvider(['query'=>$model->getEmploee()]),
        'columns' => [


            'id',
            'name',
            'surname',
            'patronymic',
            'email:email',

            [
                'class' => 'yii\grid\ActionColumn',
                'controller'=>'admin/emploees'
            ],
        ],
    ]); ?>

</div>
