<?php

namespace apps\consider\service;

use th\co\bpg\cde\core\CServiceBase;
use th\co\bpg\cde\data\CDataContext;
use th\co\bpg\cde\collection\CJView;
use th\co\bpg\cde\collection\CJViewType;
use apps\consider\interfaces\IConsiderChangeToolsService;

use apps\common\entity;
use apps\common\entity\Department;

class ConsiderChangeToolsService extends CServiceBase implements IConsiderChangeToolsService  {

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

    public function viewConsiderChangeTools() {
        $view = new CJView("considerchangetools/manage", CJViewType::HTML_VIEW_ENGINE);
        return $view;
    }

}

?>