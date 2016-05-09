<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\admin\ClassroomsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Classrooms';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="class-rooms-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Class Rooms', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'number',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
