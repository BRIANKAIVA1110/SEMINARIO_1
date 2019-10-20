<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Cliente;

class ClientesController extends Controller
{

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionAgregar()
    {
        $ClienteModel = new Cliente;
        return $this->render('agregar',['model'=>$ClienteModel]);
    }

}
