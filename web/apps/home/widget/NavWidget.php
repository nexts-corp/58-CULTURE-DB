<?php

namespace apps\home\widget;

use th\co\bpg\cde\core\CWidget;
use th\co\bpg\cde\collection\CJView;
use th\co\bpg\cde\collection\CJViewType;
use th\co\bpg\cde\core\impl\CServiceLoaderImpl;
use th\co\bpg\cde\core\impl\ChangdaoEngineImpl;
use th\co\bpg\cde\collection\impl\CI18NImpl;
use th\co\bpg\cde\collection\impl\CViewLoader;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class NavWidget extends CWidget {

    function __construct() {
        
    }

    public function render() {
        $loader = new CServiceLoaderImpl();
        $apps = array("certificate", "tracking", "search", "fees", "report", "member", "notification");
        $list_apps = [];
        foreach ($apps as $i => $value) {
            $list_apps[] = $loader->load($value);
        }
       

        $view = new CJView("nav", CJViewType::HTML_VIEW_ENGINE);
        $view->apps = $list_apps;
        $datax=[];
        $datax["apps"]=$list_apps;
        $cc=$this->render2($datax, "home");
        return $cc;
    }

    public function render2($datax,$appId) {
        $this->_context_path = \th\co\bpg\cde\core\impl\ChangdaoEngineImpl::$_CONTEXT_PATH;
        $loaders = array("apps/" . $appId . '/views', "views");
        if (!is_dir("views")) {
            $loaders = array("apps/" . $appId . '/views');
        }
        $options = array('extension' => '.html');
        $m = new \Mustache_Engine(array(
            'loader' => new CViewLoader($loaders, $options),
            'charset' => 'UTF-8',
            'helpers' => array(
                
            )
        ));
        return $m->render("nav", $datax);
    }

}
