<?php

namespace app\models;

use Yii;
use yii\base\Model;


class Precio extends Model
{
    public $precioId;
    public $articuloId;
    public $precio;

    public function rules()
    {
        return [
            [['articuloId', 'precio'], 'required'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'articuloId' => 'Articulo',
            'precio' => 'Precio',
        ];
    }
}
