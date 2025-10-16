<?php

namespace app\controllers;

use app\components\controllers\FrontendController;
use yii\web\NotFoundHttpException;

class SalesMarketsController extends FrontendController
{
    private array $validActions = [
        'chemistry',
        'electric-power',
        'infrastructure',
        'mining',
        'oil-and-gas',
        'oil-refining',
        'space-and-mobile',
        'offshore-projects'
    ];

    private array $validSubActions = [
        'vpu',
        'warehouse',
        'construction',
        'supply',
        'stu',
        'bpla'
    ];

    /**
     * Основной метод для страниц рынков сбыта (например, /sales-markets/offshore-projects).
     */
    public function actionIndex($action)
    {
        if (!in_array($action, $this->validActions)) {
            throw new NotFoundHttpException(\Yii::t('main', 'Страница не найдена'));
        }
        return $this->render($action);
    }

    /**
     * Метод для вложенных страниц (например, /sales-markets/offshore-projects/details).
     */
    public function actionView($action, $subaction)
    {
        if (!in_array($action, $this->validActions) || !in_array($subaction, $this->validSubActions)) {
            throw new NotFoundHttpException(\Yii::t('main', 'Страница не найдена'));
        }
        return $this->render("$action/$subaction");
    }
}
