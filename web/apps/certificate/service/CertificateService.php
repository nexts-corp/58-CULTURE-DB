<?php

namespace apps\certificate\service;

use th\co\bpg\cde\core\CServiceBase;
use th\co\bpg\cde\data\CDataContext;
use th\co\bpg\cde\collection\CJView;
use th\co\bpg\cde\collection\CJViewType;
use apps\certificate\interfaces\ICertificateService;

use apps\common\entity;
use apps\common\entity\Department;

class CertificateService extends CServiceBase implements ICertificateService  {

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


    public function viewCertGames() {
        $view = new CJView("games/manage", CJViewType::HTML_VIEW_ENGINE);
        return $view;
    }

    public function viewCertMovie() {
        $view = new CJView("movie/manage", CJViewType::HTML_VIEW_ENGINE);
        return $view;
    }

    public function viewCertSellMovie() {
        $view = new CJView("sellmovie/manage", CJViewType::HTML_VIEW_ENGINE);
        return $view;
    }

    public function viewCertSellVideo() {
        
    }

    public function viewCertKaraoke() {
        $view = new CJView("karaoke/manage", CJViewType::HTML_VIEW_ENGINE);
        return $view;
        
    }

}

?>