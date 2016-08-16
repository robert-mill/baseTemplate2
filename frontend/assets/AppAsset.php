<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/animate.min.css',
        'css/bootstrap.min.css',
        'css/font-awesome.css',
        'css/font-awesome.min.css',
        'css/main.css',
        'css/prettyPhoto.css',
        'css/responsive.css',
        'css/site.css',
    ];
    public $js = [
        'assets/js/bootstrap.min.js',
        'assets/js/html5shiv.js',
        'assets/js/jquery.isotope.min.js',
        'assets/js/jquery.prettyPhoto.js',
        'assets/js/main.js',
        'assets/js/respond.min.js',
        'assets/js/wow.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
