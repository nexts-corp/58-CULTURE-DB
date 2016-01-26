<?php

namespace apps\home\widget;

use th\co\bpg\cde\core\CWidget;
use th\co\bpg\cde\collection\CJView;
use th\co\bpg\cde\collection\CJViewType;
use th\co\bpg\cde\core\impl\CServiceLoaderImpl;

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
        $view->route = $this->getRoute();
        $view->routes = $this->getApplication()->routeTables;
        $view->apps=$list_apps;
        return $view;
    }

}
