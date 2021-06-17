<?php
/**
 * @author Di Zhang <zhangdi_me@163.com>
 */

namespace yiizh\fontawesome;


use yii\web\AssetBundle;

class Asset extends AssetBundle
{
    public $sourcePath = '@vendor/bower/fontawesome';

    public $css = [
        'css/font-awesome.min.css'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];

}