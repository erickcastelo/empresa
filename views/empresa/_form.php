<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Empresa */
/* @var $form yii\widgets\ActiveForm */
?>


<div class="cliente-form">

    <?php $form = ActiveForm::begin([
        'id' => $model->formName(),
        'enableAjaxValidation' => true,
        'enableClientValidation' => true,
        'options' => [
            'validateOnSubmit' => true,
        ],


    ]) ?>

    <div class="row">
        <div class="col-lg-4 col-xs-12">
            <?= $form->field($model, 'tipoempresa')
                ->radioList(['F' => 'Pessoa Física', 'J' => 'Pessoa Jurídica'])
                ->label(false)
            ?>
        </div>
    </div>

    <div class="row">

        <div class="col-lg-3">
            <?= $form->field($model, 'email')
                ->textInput(['type' => 'email']) ?>
        </div>

        <div class="col-lg-3">
            <?= $form->field($model, 'senha')
                ->passwordInput() ?>
        </div>

        <div class="col-lg-3">
            <?= $form->field($model, 'confirmasenha')
                ->passwordInput() ?>
        </div>

        <div class="col-lg-3">
            <?= $form->field($model, 'nome')
                ->textInput() ?>
        </div>

    </div>

    <div class="row">

        <div class="col-lg-3">
            <?= $form->field($model, 'cpf')
                ->textInput() ?>
        </div>

        <div class="col-lg-3">
            <?= $form->field($model, 'fantasia')
                ->textInput() ?>
        </div>


        <div class="col-lg-3">
            <?= $form->field($model, 'fone')
                ->textInput() ?>
        </div>

        <div class="col-lg-3">
            <?= $form->field($model, 'endereco')
                ->textInput() ?>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-3">
            <?= $form->field($model, 'bairro')
                ->textInput() ?>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Salvar', ['class' => 'btn btn-success submeter-empresa',
            'style' => 'width: 90px;']) ?>
    </div>



    <?php ActiveForm::end(); ?>
</div>

<?php
$script = <<< JS
    $(function() {       
        $('form#{$model->formName()}').on('beforeSubmit', function(e) {
          var \$form = $(this);
          
          $.post(
              \$form.attr("action"),
              \$form.serialize()             
          )
              .done(function(result) {
                console.log(result);
                
              }).fail(function(erro) {                  
                console.log(erro);                
              });
          
          return false;
        });
    });

JS;

$this->registerJs($script);
?>
