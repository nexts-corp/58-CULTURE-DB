<?php

namespace apps\home\service;

use th\co\bpg\cde\core\CServiceBase;
use th\co\bpg\cde\collection\CJView;
use th\co\bpg\cde\collection\CJViewType;
use apps\home\interfaces\IViewService;
use th\co\bpg\cde\core\impl\CServiceLoaderImpl;

class ViewService extends CServiceBase implements IViewService {

    public function index() {
        $loader = new CServiceLoaderImpl();
        $apps = array("certificate", "tracking", "search", "fees", "report", "member","notification");
        $list_apps = [];
        foreach ($apps as $i => $value) {
             $list_apps[] = $loader->load($value);
        }
       
        //print_r($ddd->routeTables);
        //  print_r($this->getRoute());
        //  print_r($this->getApplication()->routeTables);
        //exit();

        $view = new CJView("index", CJViewType::HTML_VIEW_ENGINE);
        $view->apps=$list_apps;
        return $view;
    }

}
