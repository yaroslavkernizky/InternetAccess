<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\admin\AllowedsitesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Allowed sites';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="allowedsites-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Allowed sites', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'ip',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
