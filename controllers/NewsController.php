<?php

namespace app\controllers;

use app\components\controllers\FrontendController;
use yii\web\NotFoundHttpException;

class NewsController extends FrontendController
{
    public function actionIndex($id)
    {
        if (!in_array($id, [
            '250525',
            '260525',
            '160420',
            '220520',
            '300320',
            '160410',
            '160411',
            '160412',
            '160413',
            '160414',
            '160415',
            '160416',
            '160417',
            '160418',
            '160419',
            '270225',
            '200525',
            '290421',
            '140221',
            '250325',
            '310325',
            '160425',
            '300725',
            '060625',
            '300821',
            '260925',
            '290925',
            '071025'
        ])) {
            throw new NotFoundHttpException(\Yii::t('main', 'Страница не найдена'));
        }
        return $this->render('index', ['id' => $id]);
        // return $this->redirect('/news-list');
    }
}
