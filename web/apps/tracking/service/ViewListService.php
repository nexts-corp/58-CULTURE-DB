<?php

namespace apps\tracking\service;

use th\co\bpg\cde\core\CServiceBase;
use th\co\bpg\cde\data\CDataContext;
use apps\tracking\interfaces\IViewListService;
use th\co\bpg\cde\collection\CJView;
use th\co\bpg\cde\collection\CJViewType;

class ViewListService extends CServiceBase implements IViewListService {

    public $datacontext;
    public $logger;
    public $md = "apps\\common\\model";
    public $ent = "apps\\common\\entity";

    public function __construct() {
        $this->logger = \Logger::getLogger("root");
        $this->datacontext = new CDataContext(NULL);
    }

    public function view() {
        $view = new CJView("viewList", CJViewType::HTML_VIEW_ENGINE);
        return $view;
    }

    public function listsJob(){
        $data = [
            [
                "no" => 1001,
                "name" => "รายการ 1",
                "deadline" => 4,
                "remark" => "",
                "status" => "normal"
            ],
            [
                "no" => 1002,
                "name" => "รายการ 2",
                "deadline" => 3,
                "remark" => "",
                "status" => "normal"
            ],
            [
                "no" => 1003,
                "name" => "รายการ 3",
                "deadline" => 2,
                "remark" => "",
                "status" => "warning"
            ],
            [
                "no" => 1004,
                "name" => "รายการ 4",
                "deadline" => 1,
                "remark" => "",
                "status" => "danger"
            ]
        ];
        return $data;
    }
}
?>