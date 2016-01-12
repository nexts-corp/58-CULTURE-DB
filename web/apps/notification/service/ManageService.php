<?php

namespace apps\notification\service;

use th\co\bpg\cde\core\CServiceBase;
use th\co\bpg\cde\data\CDataContext;
use apps\notification\interfaces\IManageService;
use th\co\bpg\cde\collection\CJView;
use th\co\bpg\cde\collection\CJViewType;

class ManageService extends CServiceBase implements IManageService {

    public $datacontext;
    public $logger;
    public $md = "apps\\common\\model";
    public $ent = "apps\\common\\entity";

    public function __construct() {
        $this->logger = \Logger::getLogger("root");
        $this->datacontext = new CDataContext(NULL);
    }

    public function view() {
        $view = new CJView("manage", CJViewType::HTML_VIEW_ENGINE);
        return $view;
    }
}