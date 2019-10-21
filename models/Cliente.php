<?php

namespace app\models;

use Yii;
use yii\base\Model;


class Cliente extends Model
{
    public $name;
    public $lastName;
    public $email;

    public function rules()
    {
        return [
            [['name', 'lastName','email'], 'required'],
            ['email', 'email']
        ];
    }

    public function attributeLabels()
    {
        return [
            'name' => 'Name',
            'lastName' => 'LastName',
            'email' => 'E-Mail',
        ];
    }
}
