<?php

use app\modules\admin\models\NewsCategory;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
mihaildev\elfinder\Assets::noConflict($this);
/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\News */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="news-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?//= $form->field($model, 'preview_text')->textInput(['maxlength' => true]) ?>
    <?=$form->field($model, 'preview_text')->widget(CKEditor::className(), [
         'editorOptions' => ElFinder::ckeditorOptions('elfinder',[]),
        ]);
    ?>
    <?//= $form->field($model, 'detail_text')->textarea(['rows' => 6]) ?>
    <?=$form->field($model, 'detail_text')->widget(CKEditor::className(), [
        'editorOptions' => ElFinder::ckeditorOptions('elfinder',[]),
    ]);
    ?>
    <?= $form->field($model, 'category_id')->dropDownList(
        \yii\helpers\ArrayHelper::map(NewsCategory::find()->all(), 'id', 'title'),
        [
            'prompt' => 'Выбор категории',
            'options' => ($model->category_id) ? [$model->category_id => ['Selected' => true] ]: []
        ]
    ) ?>

    <?= $form->field($model, 'data_create')->textInput(['value'=> date('Y-m-d H:i:s'), 'readonly'=>true]) ?>

    <?if(isset($create) && $create):?>
        <?= $form->field($model, 'author')->dropDownList($model->author) ?>
    <?endif;?>
    <?= $form->field($model, 'active')->checkbox([0, 1]) ?>
    <div class="form-group">
        <?= Html::submitButton('Опубликовать', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
