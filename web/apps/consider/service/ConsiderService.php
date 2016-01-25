<?php

namespace apps\consider\service;

use th\co\bpg\cde\core\CServiceBase;
use th\co\bpg\cde\data\CDataContext;
use th\co\bpg\cde\collection\CJView;
use th\co\bpg\cde\collection\CJViewType;
use apps\consider\interfaces\IConsiderService;

use apps\common\entity;
use apps\common\entity\Department;

class ConsiderService extends CServiceBase implements IConsiderService  {

    public $datacontext;
    public $logger;
    public $md = "apps\\common\\model";
    public $ent = "apps\\common\\entity";

    public function __construct() {
        $this->logger = \Logger::getLogger("root");
        $this->datacontext = new CDataContext(NULL);
    }

    public function delete($user) {
        
    }

    public function insert($member) {
        
    }

    public function update($user) {
        
    }

    public function viewConsider() {
        $view = new CJView("manage", CJViewType::HTML_VIEW_ENGINE);
        return $view;
    }

}

?>