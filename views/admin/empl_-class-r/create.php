<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Empl_ClassR */

$this->title = 'Create Empl  Class R';
$this->params['breadcrumbs'][] = ['label' => 'Empl  Class Rs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="empl--class-r-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
