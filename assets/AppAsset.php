<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/fm.revealator.jquery.min.css',
        'css/hover/hover.css',
        'css/hover/hover2.css',
        'css/hover/normalize.css',
        'css/totop.css',
        'css/card.css',
        'css/social/style.css',
        'css/tab.css',
        'css/how.css',
    ];
    public $js = [
        'js/fm.revealator.jquery.min.js',
        'js/tab.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
