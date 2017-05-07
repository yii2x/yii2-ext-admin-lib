<?php
/**
 * @author Yuriy Basov <basowy@gmail.com>
 * @since 1.0.0
 */

namespace yii2x\ui\ext;

use yii\base\Widget;

class Component extends Widget{
    
    public $id;
    public $params;
    public $config = "{}";
    
    public function init()
    {
        parent::init();
    }    
    
    
    public function run(){
        
        $config = $this->config;
        if(is_array($this->params)){
            $this->params['renderTo'] = $this->id;
            $this->params['id'] = $this->id;
            $config = \yii\helpers\Json::encode($this->params);            
        }

        return $this->render('Component', [
            'id' => $this->id,
            'config' => $config
        ]);          
    }  
    
//    public function getViewPath()
//    {
//        return '@app/views/';
//    }    
}
