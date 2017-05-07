<?php
/**
 * @author Yuriy Basov <basowy@gmail.com>
 * @since 1.0.0
 */


namespace yii2x\ui\ext\assets;

use yii\web\AssetBundle;

class ExtJsAdminResourcesAsset extends AssetBundle
{
  //  public $publishOptions = ['forceCopy' => true];
    public $sourcePath = '@vendor/yii2x/yii2-ext-admin-lib/dist/resources/';
    public $css = [
        'AdminApp-all.css'
        ];
    public $js =  [

    ];
    public $depends = [

    ];
}
