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
     * @description หน้าหลัก
     * @resource 1000
     * */
    public function view_index();
}
