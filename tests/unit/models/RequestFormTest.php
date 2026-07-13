<?php

namespace tests\unit\models;

use app\models\RequestForm;

class RequestFormTest extends \Codeception\Test\Unit
{
    public function testOrganizationMayBeEmpty()
    {
        $model = new RequestForm([
            'name' => 'Иван',
            'organization' => '',
            'email' => 'ivan@example.com',
            'comment' => 'Прошу связаться',
            'personalDataConsent' => true,
        ]);

        $this->assertTrue($model->validate());
    }

    public function testConsentIsRequired()
    {
        $model = new RequestForm([
            'name' => 'Иван',
            'email' => 'ivan@example.com',
            'personalDataConsent' => false,
        ]);

        $this->assertFalse($model->validate());
        $this->assertSame(
            'Необходимо дать согласие на обработку персональных данных',
            $model->getFirstError('personalDataConsent')
        );
    }

    public function testConsentMustBeBooleanTrue()
    {
        $model = new RequestForm([
            'name' => 'Иван',
            'email' => 'ivan@example.com',
            'personalDataConsent' => 'true',
        ]);

        $this->assertFalse($model->validate());
    }
}
