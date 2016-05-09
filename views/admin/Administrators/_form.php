<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Administrators */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="administrators-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'emploeeId')->label('Emploees')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Emploees::find()->all(),'id','fullname'),['prompt'=>'']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Add' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
