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

    public function groupStore() {
        $data = [
            [
                "groupName" => "โรงภาพยนตร์",
                "approve" => 17,
                "disapprove" => 5
            ],
            [
                "groupName" => "ร้านวีดิทัศน์",
                "approve" => 42,
                "disapprove" => 22
            ],
            [
                "groupName" => "ร้านให้เช่า แลกเปลี่ยน หรือจำหน่าย",
                "approve" => 31,
                "disapprove" => 9
            ]
        ];
        return $data;
    }

    public function groupPermit() {
        $data = [
            [
                "groupName" => "ภาพยนตร์",
                "approve" => 15,
                "disapprove" => 12
            ],
            [
                "groupName" => "วีดิทัศน์",
                "approve" => 20,
                "disapprove" => 4
            ]
        ];
        return $data;
    }
}
?>