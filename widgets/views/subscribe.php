<div class="subscribe-banner">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8 offset-lg-2">
                <h2>Подпишись на наши новости</h2>
                <?
                use yii\helpers\Html;
                use yii\widgets\ActiveForm;

                $form = ActiveForm::begin([
                    'id' => 'subscribe_bunner',
                    'action'=>'/subscribe',
                    'options' => ['class' => 'form-horizontal', 'data' => ['pjax' => true]],
                ]);
                echo $form->field($model, 'email')->input('email', ['placeholder'=> 'Введите email адрес']);
                echo Html::submitButton('Подписаться', ['class' => 'button gradient-bg']);
                ActiveForm::end();
                ?>
            </div>
        </div>
    </div>
</div>