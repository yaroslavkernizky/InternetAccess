<?php

namespace app\models;

use yii\base\Model;

class Emploee extends Model
{
    public $name;
    public $surname;
    public $patronymic;
    public $email;

    public function rules()
    {
        return [
            [['name', 'surname', 'email'], 'required'],
            ['email', 'email'],
        ];
    }
}