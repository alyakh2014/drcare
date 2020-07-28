<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

<?if(isset($create) && $create):?>
    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>
<?endif;?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?if($model->getImage()):?>
        <img src="<?=$model->getImage()->getUrl()?>" width="200" height="auto" alt="Image of user">
    <?endif;?>

    <?= $form->field($model, 'image')->fileInput() ?>
    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Сохранить'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
