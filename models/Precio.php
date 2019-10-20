<?php

namespace app\models;

use Yii;
use yii\base\Model;


class Precio extends Model
{
    public $nameAndLastName;
    public $email;

    public function rules()
    {
        return [
            [['nameAndLastName', 'email'], 'required'],
            ['email', 'email'],/*valida si el atributo email es email*/
            // // verifyCode needs to be entered correctly
            // ['verifyCode', 'captcha'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'nameAndLastName' => 'Name And LastName',
        ];
    }
}
