<?php

namespace app\controllers;

use app\components\controllers\FrontendController;
use app\components\helpers\MailHelper;
use app\models\RequestForm;
use Yii;
use yii\web\Response;

class SiteController extends FrontendController
{
    /**
     * @inheritdoc
     */
    public function beforeAction($action)
    {
        if (in_array($action->id, ['subscribe', 'request'])) {
            $this->enableCsrfValidation = false;
        }

        return parent::beforeAction($action);
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionAboutCompany()
    {
        return $this->render('about_company');
    }

    public function actionBrands()
    {
        return $this->render('brands');
    }

    public function actionCareer()
    {
        return $this->render('career');
    }

    public function actionContacts()
    {
        return $this->render('contacts');
    }

    public function actionConsent()
    {
        return $this->render('consent', ['legal' => Yii::$app->params['legal']]);
    }

    public function actionPrivacyPolicy()
    {
        return $this->render('privacy-policy', ['legal' => Yii::$app->params['legal']]);
    }

    public function actionNewsList()
    {
        return $this->render('news-list');
    }

    public function actionRequest()
    {
        Yii::$app->response->format = Response::FORMAT_JSON;
        $request = Yii::$app->request;

        if (stripos((string) $request->contentType, 'application/json') === 0) {
            $payload = json_decode($request->rawBody, true);
        } else {
            $payload = $request->post();
        }

        if (!is_array($payload) || !array_key_exists('personalDataConsent', $payload)
            || $payload['personalDataConsent'] !== true) {
            Yii::$app->response->statusCode = 400;
            return [
                'success' => false,
                'message' => 'Необходимо дать согласие на обработку персональных данных',
            ];
        }

        $model = new RequestForm();
        $model->setAttributes($payload);
        if (!$model->validate()) {
            $errors = $model->firstErrors;
            Yii::$app->response->statusCode = 400;
            return [
                'success' => false,
                'message' => reset($errors) ?: 'Проверьте правильность заполнения формы',
                'errors' => $errors,
            ];
        }

        $legal = Yii::$app->params['legal'];
        $requestId = bin2hex(random_bytes(8));
        $consentReceivedAt = gmdate('c');
        $organization = $model->organization !== '' ? $model->organization : 'Не указана';
        $message = implode("\n", [
            'Идентификатор заявки: ' . $requestId,
            'Имя: ' . $model->name,
            'Организация: ' . $organization,
            'Почта: ' . $model->email,
            'Комментарий: ' . $model->comment,
            '',
            'Согласие на обработку персональных данных: получено',
            'personalDataConsent: true',
            'Версия согласия: ' . $legal['consentVersion'],
            'Версия политики: ' . $legal['privacyPolicyVersion'],
            'Дата и время получения: ' . $consentReceivedAt,
        ]);

        if (MailHelper::sendRequest($message, 'Новая заявка')) {
            return ['success' => true, 'requestId' => $requestId];
        } else {
            return ['success' => false, 'message' => Yii::t('main', 'Не удалось отправить заявку. Попробуйте позже или напишите на info@greenlinerussia.com.')];
        }
    }

    public function actionSubscribe()
    {
        Yii::$app->response->format = Response::FORMAT_JSON;
        $request = Yii::$app->request;
        if (!$request->isAjax) {
            return ['success' => false];
        }

        $type = (int) $request->post('type');
        if (empty($type)) {
            return ['success' => false, 'message' => 'type not defined'];
        }

        $email = $request->post('email');
        if (!$email) {
            return ['success' => false, 'message' => 'empty data'];
        }

        $message = 'Почта: ' . $email;

        if (MailHelper::sendRequest($message, 'Подписка на рассылку')) {
            return ['success' => true, 'message' => $message];
        } else {
            return ['success' => false, 'message' => Yii::t('main', 'Не удалось оформить подписку. Попробуйте позже или напишите на info@greenlinerussia.com.')];
        }
    }
}
