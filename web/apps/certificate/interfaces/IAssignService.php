<?php

namespace apps\certificate\interfaces;

/**
 * @name IAssignService
 * @uri /assign
 * @description ขอบใบอนุญาต
 */
interface IAssignService {

    /**
     * @name index
     * @uri /view/index
     * @description 3.มอบหมายชุดตรวจ
     * @sitemap true
     * */
    public function view_index();
}
