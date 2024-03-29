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
     * @description 4.ตรวจสถานประกอบการ
     * @sitemap true
     * */
    public function view_index();
}
