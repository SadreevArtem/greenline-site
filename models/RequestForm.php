<?php

namespace app\models;

use yii\base\Model;

class RequestForm extends Model
{
    public $name;
    public $organization = '';
    public $email;
    public $comment = '';
    public $personalDataConsent = false;

    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
            [['name', 'organization', 'email', 'comment'], 'string'],
            [['name', 'organization', 'email'], 'trim'],
            ['email', 'email'],
            ['personalDataConsent', 'boolean', 'trueValue' => true, 'falseValue' => false, 'strict' => true],
            ['personalDataConsent', 'compare', 'compareValue' => true, 'operator' => '===',
                'message' => 'Необходимо дать согласие на обработку персональных данных'],
        ];
    }
}
