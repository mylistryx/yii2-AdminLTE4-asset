<?php

namespace yii\AdminLTE4\assets;

use yii\web\AssetBundle;

class AdminLTE4Asset extends AssetBundle
{
    public $sourcePath = __DIR__ . '/dist';

    public $css = [
        "css/adminlte.min.css",
    ];

    public $js = [
        "js/adminlte.min.js",
    ];
}