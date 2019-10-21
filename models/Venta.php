<?php

namespace app\models;

use Yii;
use yii\base\Model;


class Venta extends Model
{
    public $ventaId;
    public $clienteId;
    public $total;

    public function rules()
    {
        return [
            [['clienteId', 'total'], 'required'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'clienteId' => 'Cliente',
            'total' => 'Total',
        ];
    }
}
