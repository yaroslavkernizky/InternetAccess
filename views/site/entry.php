<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'name')->label('Имя') ?>

<?= $form->field($model, 'surname')->label('Фамилия') ?>

<?= $form->field($model, 'patronymic')->label('Отчество') ?>

<?= $form->field($model, 'email') ?>

    <div class="form-group">
        <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>