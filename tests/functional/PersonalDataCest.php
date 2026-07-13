<?php

class PersonalDataCest
{
    public function legalPagesAreAvailable(\FunctionalTester $I)
    {
        $I->amOnPage(['site/consent']);
        $I->seeResponseCodeIs(200);
        $I->see('Consent to Personal Data Processing', 'h1');

        $I->amOnPage(['site/privacy-policy']);
        $I->seeResponseCodeIs(200);
        $I->see('Personal Data Processing Policy', 'h1');

        Yii::$app->language = 'ru';
        $I->amOnPage(['site/consent']);
        $I->see('Согласие на обработку персональных данных', 'h1');

        $I->amOnPage(['site/privacy-policy']);
        $I->see('Политика в отношении обработки персональных данных', 'h1');
        Yii::$app->language = 'en-US';
    }

    public function requestFormUsesOrganizationAndStartsWithoutConsent(\FunctionalTester $I)
    {
        $I->amOnPage(['site/index']);
        $I->seeElement('.request-form input[name="organization"]');
        $I->dontSeeElement('.request-form input[name="request-form_name_2"]');
        $I->dontSeeCheckboxIsChecked('.request-form input[name="personalDataConsent"]');
        $I->seeElement('.request-form button[type="submit"][disabled]');
    }

    public function requestWithoutConsentIsRejected(\FunctionalTester $I)
    {
        $I->sendAjaxPostRequest(['site/request'], [
            'name' => 'Иван',
            'email' => 'ivan@example.com',
        ]);
        $I->seeResponseCodeIs(400);
        \PHPUnit\Framework\Assert::assertStringContainsString(
            'Необходимо дать согласие на обработку персональных данных',
            $I->grabPageSource()
        );
    }
}
