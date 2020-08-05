<?php

namespace app\controllers;

use app\components\controllers\FrontendController;

class SiteController extends FrontendController
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionAbout()
    {
        return $this->render('about');
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
}
