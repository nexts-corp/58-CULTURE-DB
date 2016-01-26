<?php

namespace apps\certificate\service;

use th\co\bpg\cde\core\CServiceBase;
use th\co\bpg\cde\data\CDataContext;
use th\co\bpg\cde\collection\CJView;
use th\co\bpg\cde\collection\CJViewType;
use apps\certificate\interfaces\IVerifyService;

class VerifyService extends CServiceBase implements IVerifyService {

    public $datacontext;
    public $logger;

    public function __construct() {
        $this->logger = \Logger::getLogger("root");
        $this->datacontext = new CDataContext(NULL);
    }

    public function view_index() {
        $view = new CJView("verify/index", CJViewType::HTML_VIEW_ENGINE);
        return $view;
    }

    public function view_update($certId) {
        $view = new CJView("verify/update", CJViewType::HTML_VIEW_ENGINE);
        $view->certId = $certId;
        return $view;
    }

}

?>