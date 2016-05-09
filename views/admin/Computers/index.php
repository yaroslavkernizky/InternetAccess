<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\admin\ComputersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Computers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="computers-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Computers', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'ip',
            'mac',
            'classRoomId',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
