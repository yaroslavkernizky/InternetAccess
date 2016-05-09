<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Emploees */

$this->title = 'Create Emploees';
$this->params['breadcrumbs'][] = ['label' => 'Emploees', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="emploees-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
