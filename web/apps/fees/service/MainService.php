<?php

namespace apps\fees\service;

use th\co\bpg\cde\core\CServiceBase;
use th\co\bpg\cde\collection\CJView;
use th\co\bpg\cde\collection\CJViewType;
use apps\fees\interfaces\IMainService;

class MainService extends CServiceBase implements IMainService {

    public function index() {
        $view = new CJView("index", CJViewType::HTML_VIEW_ENGINE);
        return $view;
    }


}
