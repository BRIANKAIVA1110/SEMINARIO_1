<?php

namespace app\models;

use Yii;
use yii\base\Model;


class Articulo extends Model
{
    public $articuloId;
    public $modeloId;
    public $colorId;
    

    public function rules()
    {
        return [
            [['modeloId', 'colorId'], 'required'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'modeloId' => 'Modelo',
            'colorId' => 'Color'
        ];
    }
}
