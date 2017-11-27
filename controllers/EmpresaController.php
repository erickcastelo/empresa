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


        if(Yii::$app->request->isAjax && $model->load(Yii::$app->request->post())) {
            Yii::$app->response->format = Response::FORMAT_JSON;

            return ActiveForm::validate($model);
        }else {
            if($model->load(Yii::$app->request->post())){
                Yii::$app->response->format = Response::FORMAT_JSON;

                return Yii::$app->request->post();
            }
        }


        return $this->renderAjax('cadastro', [
            'model' => $model,
        ]);

    }
}