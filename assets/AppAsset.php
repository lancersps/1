<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/menu.css', 
        //'css/bootstrap.css', 

        //'css/css-family=Open+Sans-400,300,600,700.css',
        'css/all.css',
        'css/slide.css',
    ];
    public $js = [
        'js/bootstrap.min.js',    
        'js/jquery-1.11.2.min.js',   
        /*'js/jquery-1.7.1.min.js',*/    
        'js/slide.js',    
        'js/jquery.main.js',    
        'js/vendors/jquery.slick.js',  
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
