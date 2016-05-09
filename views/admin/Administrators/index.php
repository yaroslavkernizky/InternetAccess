<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\admin\AdministratorsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Administrators';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="administrators-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Administrators', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'header'=>'Name',
                'attribute'=>'emploeeId',
                'filter'=>\yii\helpers\ArrayHelper::map(\app\models\Administrators::find()->all(),'emploeeId','fullname'),
                'value'=>function (\app\models\Administrators $admin)
                {
                    return $admin->getFullname();
                }
            ],
            [
                'header'=>'Email',
                'attribute'=>'emploeeId',
                'filter'=>\yii\helpers\ArrayHelper::map(\app\models\Administrators::find()->all(),'emploeeId','email'),
                'value'=>function (\app\models\Administrators $admin)
                {
                    return $admin->getEmail();
                }
            ],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
