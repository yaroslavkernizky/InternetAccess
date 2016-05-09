<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Allowedsites */

$this->title = 'Create Allowed sites';
$this->params['breadcrumbs'][] = ['label' => 'Allowedsites', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="allowedsites-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
