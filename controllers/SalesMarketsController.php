<?php

namespace app\controllers;

use app\components\controllers\FrontendController;
use yii\web\NotFoundHttpException;

class SalesMarketsController extends FrontendController
{
    public function actionIndex($action)
    {
        if (!in_array($action, ['chemistry', 'electric-power', 'infrastructure', 'mining', 'oil-and-gas', 'oil-refining', 'space-and-mobile'])) {
            throw new NotFoundHttpException(\Yii::t('main', 'Страница не найдена'));
        }
        return $this->render($action);
    }
}
