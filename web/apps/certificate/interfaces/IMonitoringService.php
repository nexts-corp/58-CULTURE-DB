<?php

namespace apps\certificate\interfaces;

/**
 * @name IMonitoringService
 * @uri /monitoring
 * @description ขอบใบอนุญาต
 */
interface IMonitoringService {

    /**
     * @name index
     * @uri /view/index
     * @description หน้าหลัก
     * @resource 1000
     * */
    public function view_index();
}