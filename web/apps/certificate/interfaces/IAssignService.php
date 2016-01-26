<?php

namespace apps\certificate\interfaces;

/**
 * @name IAssignService
 * @uri /assign
 * @description ขอใบอนุญาต
 */
interface IAssignService {

    /**
     * @name index
     * @uri /view/index
     * @description มอบหมายชุดตรวจ
     * @sitemap true
     * */
    public function view_index();
}
