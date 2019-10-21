<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\db\ActiveRecord;
use app\models\Modelo;
use yii\data\Pagination;


class ModelosController extends Controller
{

    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionGet()
    {
       $query= Modelo::find();

       $pagination = new Pagination([
        'defaultPageSize' => 5,
        'totalCount' => $query->count(),
        ]);

        $modelos = $query->orderBy('name')
                ->offset($pagination->offset)
                ->limit($pagination->limit)
                ->all();
        return $this->render('index', [
            'modelos' => $modelos,
            'pagination' => $pagination,
        ]);
    }
}
