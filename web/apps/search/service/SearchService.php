<?php

namespace apps\search\service;

use th\co\bpg\cde\core\CServiceBase;
use th\co\bpg\cde\collection\CJView;
use th\co\bpg\cde\collection\CJViewType;
use apps\search\interfaces\ISearchService;

class SearchService extends CServiceBase implements ISearchService {

    public function index() {
        $view = new CJView("index", CJViewType::HTML_VIEW_ENGINE);
        return $view;
    }


}
