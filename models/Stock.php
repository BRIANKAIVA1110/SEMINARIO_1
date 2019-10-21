<?php

namespace app\models;

use Yii;
use yii\base\Model;


class Stock extends Model
{
    public $stockId;
    public $articuloId;
    public $cantidad;

    public function rules()
    {
        return [
            [['articuloId', 'cantidad'], 'required'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'articuloId' => 'Articulo',
            'cantidad' => 'Cantidad',
        ];
    }
}
