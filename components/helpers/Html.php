<?php

namespace app\components\helpers;

use yii\helpers\ArrayHelper;
use yii\helpers\Html as YiiHtml;

class Html extends YiiHtml
{
    public static function a($text, $url = null, $options = [])
    {
        return parent::a($text, $url, ArrayHelper::merge(['hreflang' => \Yii::$app->language . '-' . strtoupper(\Yii::$app->language)], $options));
    }
}