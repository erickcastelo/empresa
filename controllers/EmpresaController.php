<?php
/**
 * Created by PhpStorm.
 * User: erick
 * Date: 21/11/17
 * Time: 21:45
 */

namespace app\controllers;


use app\models\Empresa;
use Yii;
use yii\web\Controller;
use yii\web\Response;
use yii\widgets\ActiveForm;

class EmpresaController extends Controller
{

    public function actionCadastro()
    {
        $model = new Empresa();

        if($model->load(Yii::$app->request->post())){
            Yii::$app->response->format = Response::FORMAT_JSON;

            return 'ola';
        }

        return $this->renderAjax('cadastro', [
            'model' => $model,
        ]);

    }
}