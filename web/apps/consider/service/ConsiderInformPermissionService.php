<?php
/**
 * Created by PhpStorm.
 * User: KaowNeaw
 * Date: 1/25/2016
 * Time: 10:29 AM
 */

namespace apps\consider\service;

use apps\consider\interfaces\IConsiderInformPermissionService;
use th\co\bpg\cde\collection\CJView;
use th\co\bpg\cde\collection\CJViewType;
use th\co\bpg\cde\core\CServiceBase;
use th\co\bpg\cde\data\CDataContext;

class ConsiderInformPermissionService extends CServiceBase implements  IConsiderInformPermissionService
{

    public $datacontext;
    public $logger;
    public $md = "apps\\common\\model";
    public $ent = "apps\\common\\entity";

    public function __construct()
    {
        $this->logger = \Logger::getLogger("root");
        $this->datacontext = new CDataContext(NULL);
    }

    public function viewConsiderInformPermission()
    {
        $view = new CJView("considerInform/ConsiderInformPermission", CJViewType::HTML_VIEW_ENGINE);
        return $view;
    }
}