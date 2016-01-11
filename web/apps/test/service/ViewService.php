<?php

namespace apps\user\service;

use th\co\bpg\cde\core\CServiceBase;
use th\co\bpg\cde\collection\CJView;
use th\co\bpg\cde\collection\CJViewType;
use apps\user\interfaces\IViewService;

class ViewService extends CServiceBase implements IViewService {

    public function userManager() {
        $view = new CJView("userManager", CJViewType::HTML_VIEW_ENGINE);
        return $view;
    }

}
