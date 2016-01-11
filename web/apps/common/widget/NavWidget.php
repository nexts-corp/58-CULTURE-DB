<?php
namespace apps\common\widget;
use th\co\bpg\cde\core\CWidget;
use th\co\bpg\cde\collection\CJView;
use th\co\bpg\cde\collection\CJViewType;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class NavWidget extends CWidget{
    
   
    function __construct() {
     
    }

    public function render() {
        
        $view = new CJView("nav",CJViewType::HTML_VIEW_ENGINE);
        $view->route=$this->getRoute();
        $view->routes=$this->getApplication()->routeTables;
        return $view;
    }

}