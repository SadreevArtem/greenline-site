<?php

namespace app\controllers;

use app\components\controllers\FrontendController;
use yii\web\NotFoundHttpException;

class CareerController extends FrontendController
{
    public function actionIndex($id)
    {
        if (!in_array($id, ['160420', '160410', '160430', '160440', '160450', '160460', '160470', '160480', '160490'])) {
            throw new NotFoundHttpException(\Yii::t('main', 'Страница не найдена'));
        }
        return $this->render('index', ['id' => $id]);
        // return $this->redirect('/news-list');
    }
}
