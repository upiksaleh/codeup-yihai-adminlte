<?php
/**
 * CodeUP yihai using Yii Framework
 * @link http://codeup.orangeit.id/yihai
 * @copyright Copyright (c) 2018 OrangeIT.ID
 * @author Upik Saleh <upxsal@gmail.com>
 */

namespace codeup\adminlte;

class ThemeAsset extends \yii\web\AssetBundle
{
    public $sourcePath = __DIR__."/assets/dist";
    public $css = [
        'css/AdminLTE.min.css',
        'css/skins/_all-skins.min.css',
    ];

    public $js = [
        'plugins/iCheck/icheck.min.js',
        'js/adminlte.min.js'
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'codeup\assets\BootstrapAsset',
        'codeup\assets\FontAwesomeAsset'
    ];
}