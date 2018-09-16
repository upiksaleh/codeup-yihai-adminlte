<?php
/**
 * CodeUP yihai using Yii Framework
 * @link http://codeup.orangeit.id/yihai
 * @copyright Copyright (c) 2018 OrangeIT.ID
 * @author Upik Saleh <upxsal@gmail.com>
 */
/** @var $this \codeup\web\View */
use codeup\theming\Html;
use codeup\theming\ActiveForm;
use yii\helpers\Url;

$this->title = Cii::t('codeup', "Masuk");
$this->registerCss('
body{
background:#d2d6de;
}
');
?>
<div class="login-box">
    <?=Html::beginTag('div', ['class'=>$this->ctheme(['text-center','text-bold'])])?>
        <?=Html::img(Url::to(Cii::$app->params['appLogo']),['style'=>'width:100%;height:100px'])?>
    <?=Html::endTag('div');?>
    <div class="login-box-body">
        <p class="login-box-msg">
            <?=Cii::$app->name?>
        </p>
        <?php $form = ActiveForm::begin([
            'id' => 'login-form',
            'fieldConfig' => [
                'template' => "{input}<small>{error}</small>",
            ],
        ]); ?>
        <div class="form-group has-feedback">
            <?= $form->field($model, 'username')->textInput([
                'autofocus' => true,
                'placeholder' => 'Username'
            ]) ?>

            <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>

        <div class="form-group has-feedback">
            <?= $form->field($model, 'password')->passwordInput([
                'placeholder' => 'Password'
            ]) ?>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <?php
            $items = [];
            foreach(Cii::$app->user->groups as $key => $class){
                $items[$key] = Cii::t('app', ucfirst($key));
            }
            echo $form->field($model, 'group')->dropDownList($items,['prompt'=>'Group'])
            ?>
            <span class="fa fa-users form-control-feedback"></span>
        </div>
        <div class="row">
            <div class="col-xs-8">
                <div class="checkboxa icheck">
                    <?= $form->field($model, 'rememberMe')->checkbox([
                        'template' => "{input} {label}"
                    ]) ?>
                </div>
            </div>
            <div class="col-xs-4">
                <?= Html::submitButton(Cii::t('codeup','Masuk'), ['class' => 'btn btn-primary btn-block btn-flat', 'name' => 'login-button']) ?>
            </div>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>
