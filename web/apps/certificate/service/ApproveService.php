<?php

namespace apps\certificate\service;

use th\co\bpg\cde\core\CServiceBase;
use th\co\bpg\cde\data\CDataContext;
use th\co\bpg\cde\collection\CJView;
use th\co\bpg\cde\collection\CJViewType;
use apps\certificate\interfaces\IApproveService;

class ApproveService extends CServiceBase implements IApproveService {

    public $datacontext;
    public $logger;

    public function __construct() {
        $this->logger = \Logger::getLogger("root");
        $this->datacontext = new CDataContext(NULL);
    }

    public function view_index() {
        $view = new CJView("approve/index", CJViewType::HTML_VIEW_ENGINE);
        return $view;
    }
}

?>