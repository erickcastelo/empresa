<?php

/* @var $this yii\web\View */
/* @var $model \app\models\LoginForm */

use app\assets\AppAsset;
use yii\bootstrap\Modal;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'My Yii Application';

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <link href="/css/login.css" rel="stylesheet">
        <?php $this->head() ?>
    </head>
    <body>
    <?php $this->beginBody() ?>
    <div class="site-index">
        <div class="container">

            <div class="row" id="pwd-container">
                <div class="col-md-4"></div>

                <div class="col-md-4">
                    <section class="login-form">
                        <?php $form = ActiveForm::begin([
                            'id' => 'register-form',
                            'enableClientValidation' => true,
                            'enableAjaxValidation' => true,
                            'options' => [
                                'validateOnSubmit' => true,
                                'class' => 'form',
                                'role' => 'login'
                            ]

                        ]) ?>

                        <img src="http://i.imgur.com/RcmcLv4.png" class="img-responsive" alt="" />
                        <?= $form->field($model, 'email')->textInput(
                            [
                                'class' => 'form-control input-lg',
                                'placeholder' => 'Email',
                                'autofocus' => true
                            ])
                            ->label(false)
                        ?>

                        <?= $form->field($model, 'senha')->passwordInput(
                            ['class' => 'form-control input-lg', 'placeholder' => 'Senha']
                        )
                            ->label(false)
                        ?>

                        <div class="pwstrength_viewport_progress"></div>

                        <?= Html::submitButton('Logar', [
                            'class' => 'btn btn-lg btn-primary btn-block',
                            //'name' => 'go'
                        ])  ?>
                        <div>
                            <button style="font-size: 14px;" type="button" class="btn btn-link cadastroEmpresa"
                                    value="<?= \yii\helpers\Url::to('empresa/cadastro') ?>">cadastrar</button>
                            or <a href="#">redefinir senha</a>
                        </div>
                        <?php ActiveForm::end(); ?>
                    </section>
                </div>

                <div class="col-md-4"></div>
            </div>
        </div>
    </div>

    <?php
    Modal::begin([
        'header' => '<h2>Cadastrar Empresa</h2>',
        'class' => 'modal',
        'size' => 'modal-lg'
    ]);

    echo "<div id='modalContent'></div>";

    Modal::end();
    ?>

    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>