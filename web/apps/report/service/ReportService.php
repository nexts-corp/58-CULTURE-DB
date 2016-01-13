<?php

namespace apps\report\service;

use apps\common\entity\Report;
use apps\report\interfaces\IReportService;
use th\co\bpg\cde\collection\CJView;
use th\co\bpg\cde\collection\CJViewType;
use th\co\bpg\cde\core\CServiceBase;
use th\co\bpg\cde\data\CDataContext;

class ReportService extends CServiceBase implements IReportService
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


    public function view()
    {
        $view = new CJView("report", CJViewType::HTML_VIEW_ENGINE);
        return $view;
    }


    public function listReport()
    {
        $obj = new Report();
        $obj->setIsActive("Y");
        return $this->datacontext->getObject($obj);
    }
}