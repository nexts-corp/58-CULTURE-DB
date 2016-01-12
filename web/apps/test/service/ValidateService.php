<?php

namespace apps\test\service;

use th\co\bpg\cde\core\CServiceBase;
use th\co\bpg\cde\collection\CJView;
use th\co\bpg\cde\collection\CJViewType;
use apps\test\interfaces\IValidateService;

class ValidateService extends CServiceBase implements IValidateService {

    public function index() {
        $view = new CJView("validate", CJViewType::HTML_VIEW_ENGINE);
        return $view;
    }


}
