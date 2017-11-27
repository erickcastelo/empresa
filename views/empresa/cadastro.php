<?php
/* @var $this yii\web\View */
/* @var $model app\models\Empresa */

$model->tipoempresa = 'F';
?>
<div class="empresa-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

