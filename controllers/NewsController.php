<?php

namespace app\controllers;

use app\components\controllers\FrontendController;
use yii\web\NotFoundHttpException;

class NewsController extends FrontendController
{
    public function actionIndex($id)
    {
        if (!in_array($id, ['160420', '220520', '300320', '160410', '160411', '160412', '160413', '160414', '160415', '160416', '160417', '160418', '160419', '270225', '290421', '140221', '250325', '310325'])) {
            throw new NotFoundHttpException(\Yii::t('main', 'Страница не найдена'));
        }
        return $this->render('index', ['id' => $id]);
        // return $this->redirect('/news-list');
    }
}
