<?php
/**
 * @author Yuriy Basov <basowy@gmail.com>
 * @since 1.0.0
 */


namespace yii2x\ui\ext\assets;

use yii\web\AssetBundle;

class ExtJsAdminAsset extends AssetBundle
{
    public $publishOptions = ['forceCopy' => true];
    public $sourcePath = '@vendor/yii2x/yii2-ext-admin-lib/dist/';
    public $css = [
        ];
    public $js =  [
        'app.js'
    ];
    public $depends = [
        '\yii2x\ui\ext\assets\ExtJsAdminResourcesAsset'
    ];
}
