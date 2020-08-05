<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;
use yii\web\View;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class LandingAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $cssOptions = [
      'position' => View::POS_HEAD,
    ];

    public $jsOptions = [
        'position' => View::POS_HEAD,
    ];

    public $css = [
        '/css/owl.carousel.min.css',
        '/css/owl.theme.default.min.css',
        'https://use.fontawesome.com/releases/v5.8.2/css/all.css',
        '/css/font-awesome.css',
    ];

    public $js = [
        '/js/jquery.min.js',
        '/js/owl.carousel.min.js',
        '/js/bootstrap.bundle.min.js',
        '/js/site.js',
    ];
}
