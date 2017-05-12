<?php
/**
 * @author Yuriy Basov <basowy@gmail.com>
 * @since 1.0.0
 */


namespace yii2x\ui\ext\assets;

use yii\web\AssetBundle;

class ExtJsAdminAsset extends AssetBundle
{
    
    public function init()
    {
        if(YII_ENV_DEV){
            $this->css = [
                '/devext/bootstrap.css'
            ];
            $this->js = [
                '/devext/ext/ext-all-debug.js',
                '/devext/ext/ext-theme-neptune.js',
                '/devext/apploader.js',
                '/devext/app.js',            
            ]; 
        }
        else{

            $this->sourcePath = '@vendor/yii2x/yii2-ext-admin-lib/dist/';        
            $this->css = [
                'resources/AdminApp-all.css'
            ];
            $this->js = [
                'app.js'
            ];

        }

        $this->depends = [
            'yii2x\common\assets\FontAwesomeAsset'
        ];
        
        parent::init();
    }    
    
}
