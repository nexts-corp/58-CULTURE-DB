<?php

namespace apps\test\service;

use th\co\bpg\cde\core\CServiceBase;
use th\co\bpg\cde\collection\CJView;
use th\co\bpg\cde\collection\CJViewType;
use apps\test\interfaces\IViewService;

class ViewService extends CServiceBase implements IViewService {

    public function index() {
        $view = new CJView("index", CJViewType::HTML_VIEW_ENGINE);
        return $view;
    }

}
