<?php

namespace apps\search\service;

use th\co\bpg\cde\core\CServiceBase;
use th\co\bpg\cde\collection\CJView;
use th\co\bpg\cde\collection\CJViewType;
use apps\search\interfaces\IMainService;

class MainService extends CServiceBase implements IMainService {

    public function license() {
        $view = new CJView("license", CJViewType::HTML_VIEW_ENGINE);
        return $view;
    }

    public function video() {
        $view = new CJView("video", CJViewType::HTML_VIEW_ENGINE);
        return $view;
    }

}
