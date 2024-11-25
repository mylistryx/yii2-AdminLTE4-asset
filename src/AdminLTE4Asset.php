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
    public string $sourcePath = '@vendor/yii/AdminLTE4/dist';

    public array $css = [
        "css/adminlte.min.css",
    ];

    public array $js = [
        "js/adminlte.min.js",
    ];
}