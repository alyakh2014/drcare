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
                    'options' => ['class' => 'form-horizontal', 'action'=>'site/subscribe', 'data' => ['pjax' => true]],
                ]);
                echo $form->field($model, 'email')->input('email', ['placeholder'=> 'Введите email адрес']);
                echo Html::submitButton('Подписаться', ['class' => 'button gradient-bg']);
                ActiveForm::end();
                ?>
<!--                <form id="subscribe_bunner" >
                    <input type="email" placeholder="E-mail address">
                    <input class="button gradient-bg" type="submit" value="Subscribe">
                </form>-->
            </div>
        </div>
    </div>
</div>