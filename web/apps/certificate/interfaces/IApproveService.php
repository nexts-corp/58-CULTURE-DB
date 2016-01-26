<?php

namespace apps\certificate\interfaces;

/**
 * @name IApproveService
 * @uri /approve
 * @description ขอบใบอนุญาต
 */
interface IApproveService {

    /**
     * @name index
     * @uri /view/index
     * @description หน้าหลัก
     * @sitemap true
     * */
    public function view_index();
}
