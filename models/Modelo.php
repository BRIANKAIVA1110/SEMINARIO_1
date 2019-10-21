<?php

namespace app\models;

use Yii;
use yii\base\Model;


class Modelo extends Model
{
    public $modeloId;
    public $codigo;
    public $descripcion;

    public function rules()
    {
        return [
            [['codigo', 'descripcion'], 'required'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'codigo' => 'Codigo',
            'descripcion' => 'Descripcion',
        ];
    }
}
