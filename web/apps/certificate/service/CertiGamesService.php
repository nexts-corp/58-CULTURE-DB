<?php

namespace apps\certificate\service;

use th\co\bpg\cde\core\CServiceBase;
use th\co\bpg\cde\data\CDataContext;
use th\co\bpg\cde\collection\CJView;
use th\co\bpg\cde\collection\CJViewType;
use apps\certificate\interfaces\ICertGamesService;

use apps\common\entity;
use apps\common\entity\Department;

class CertiGamesService extends CServiceBase implements ICertGamesService  {

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

    public function viewAdd() {
        $view = new CJView("games/add", CJViewType::HTML_VIEW_ENGINE);
        return $view;
    }

    public function viewUpdate() {
        $view = new CJView("games/update", CJViewType::HTML_VIEW_ENGINE);
        return $view;
    }

}

?>