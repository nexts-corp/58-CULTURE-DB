<?php

namespace apps\certificate\interfaces;

/**
 * @name IApproveService
 * @uri /approve
 * @description ขอใบอนุญาต
 */
interface IApproveService {

    /**
     * @name index
     * @uri /view/index
     * @description พิจารณาคำขอ
     * @sitemap true
     * */
    public function view_index();
}
