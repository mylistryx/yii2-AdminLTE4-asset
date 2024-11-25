<?php
namespace yii\AdminLTE4;

use yii\bootstrap5\BootstrapAsset;
use yii\web\AssetBundle;

class AdminLTE4Asset extends AssetBundle
{
    public $depends = [
        BootstrapAsset::class,
        FontAwesomeAsset::class,
    ];
    public $sourcePath = '@vendor/yii/AdminLTE4/dist';

    public $css = [
        "css/adminlte.min.css",
    ];

    public $js = [
        "js/adminlte.min.js",
    ];
}