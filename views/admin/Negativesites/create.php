<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Negativesites */

$this->title = 'Create Negative sites';
$this->params['breadcrumbs'][] = ['label' => 'Negative sites', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="negativesites-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
