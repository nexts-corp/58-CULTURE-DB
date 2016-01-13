<?php

namespace apps\tracking\service;

use th\co\bpg\cde\core\CServiceBase;
use th\co\bpg\cde\data\CDataContext;
use apps\tracking\interfaces\IViewAllService;
use th\co\bpg\cde\collection\CJView;
use th\co\bpg\cde\collection\CJViewType;

class ViewAllService extends CServiceBase implements IViewAllService {

    public $datacontext;
    public $logger;
    public $md = "apps\\common\\model";
    public $ent = "apps\\common\\entity";

    public function __construct() {
        $this->logger = \Logger::getLogger("root");
        $this->datacontext = new CDataContext(NULL);
    }

    public function view() {
        $view = new CJView("viewAll", CJViewType::HTML_VIEW_ENGINE);
        return $view;
    }
}
?>