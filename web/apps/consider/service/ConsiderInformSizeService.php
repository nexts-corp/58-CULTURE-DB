<?php
/**
 * Created by PhpStorm.
 * User: KaowNeaw
 * Date: 1/25/2016
 * Time: 10:29 AM
 */

namespace apps\consider\service;

use apps\consider\interfaces\IConsiderInformSizeService;
use th\co\bpg\cde\collection\CJView;
use th\co\bpg\cde\collection\CJViewType;
use th\co\bpg\cde\core\CServiceBase;
use th\co\bpg\cde\data\CDataContext;

class ConsiderInformSizeService extends CServiceBase implements  IConsiderInformSizeService
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


    public function viewConsiderInformSize()
    {
        $view = new CJView("ConsiderInformSize", CJViewType::HTML_VIEW_ENGINE);
        return $view;
    }
}