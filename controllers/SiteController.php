<?php

namespace app\controllers;

use app\components\controllers\FrontendController;
use app\components\helpers\MailHelper;
use PHPMailer\PHPMailer\PHPMailer;
use Yii;
use yii\web\NotFoundHttpException;
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

    public function actionNewsList()
    {
        return $this->render('news-list');
    }

    public function actionRequest()
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

        $name = preg_replace('/\s+/', '', $request->post('request-form_name_1'));
        $surname = preg_replace('/\s+/', '', $request->post('request-form_name_2'));
        $email = preg_replace('/\s+/', '', $request->post('request-form_email'));
        $comment = preg_replace('/\s+/', '', $request->post('request-form_comment'));

        if (!$name || !$surname || !$email) {
            return ['success' => false, 'message' => 'empty data'];
        }

        $message = sprintf('
            Имя: %s 
            Почта: %s 
            Комментарий: %s',
            $name . ' ' . $surname,
            $email,
            $comment
        );

        if (MailHelper::sendRequest($message, 'Новая заявка')) {
            return ['success' => true, 'message' => $message];
        } else {
            return ['success' => false];
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
            return ['success' => false];
        }
    }
}
