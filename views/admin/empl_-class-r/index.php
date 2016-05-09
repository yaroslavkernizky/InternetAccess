<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\admin\Empl_ClassRSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Empl  Class Rs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="empl--class-r-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Empl  Class R', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'emploeeId',
            'classRoomId',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
