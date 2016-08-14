<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tieuDe')->textInput(['required']) ?>

    <?= $form->field($model, 'noiDung')->textInput(['required']) ?>

    <div class="form-group">
        <?= Html::submitButton('Gửi', ['class' =>  'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
