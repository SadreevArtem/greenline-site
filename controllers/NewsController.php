<?php

namespace app\controllers;

use app\components\controllers\FrontendController;
use yii\web\NotFoundHttpException;

class NewsController extends FrontendController
{
    public function actionIndex($id)
    {
        if (!in_array($id, ['160420', '220520', '300320'])) {
            throw new NotFoundHttpException(\Yii::t('main', 'Страница не найдена'));
        }
        return $this->render('index', ['id' => $id]);
    }
}
