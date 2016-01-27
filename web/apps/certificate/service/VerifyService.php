<?php

namespace apps\certificate\service;

use th\co\bpg\cde\core\CServiceBase;
use th\co\bpg\cde\data\CDataContext;
use th\co\bpg\cde\collection\CJView;
use th\co\bpg\cde\collection\CJViewType;
use apps\certificate\interfaces\IVerifyService;

class VerifyService extends CServiceBase implements IVerifyService {

    public $datacontext;
    public $logger;

    public function __construct() {
        $this->logger = \Logger::getLogger("root");
        $this->datacontext = new CDataContext(NULL);
    }

    public function view_index() {
        $view = new CJView("verify/index", CJViewType::HTML_VIEW_ENGINE);
        return $view;
    }

    public function view_update($certId) {
        $view = new CJView("verify/update", CJViewType::HTML_VIEW_ENGINE);
//        $opts = array(
//            'http' => array(
//                'method' => "GET",
//                'header' => "Accept-language: en\r\n" .
//                "Cookie: foo=bar\r\n".
//                "Content-Type: application/hal+json"
//            )
//        );
//
//        $context = stream_context_create($opts);
// Open the file using the HTTP headers set above
        $file = file_get_contents('http://mdb.codeunbug.com/culture/cert/' . $certId);
        $json = json_decode($file, true);
        $view->lists = $json;
        $view->id = $json['_id']['$oid'];
        if ($json['certTypeId'] == "2" || $json['certTypeId'] == "3") {
            $view->assign = "YES";
        } else {
            $view->assign = "NO";
        }
        return $view;
    }

}

?>