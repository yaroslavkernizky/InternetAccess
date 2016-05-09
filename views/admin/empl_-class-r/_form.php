<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Empl_ClassR */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="empl--class-r-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'emploeeId')->textInput() ?>

    <?= $form->field($model, 'classRoomId')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
