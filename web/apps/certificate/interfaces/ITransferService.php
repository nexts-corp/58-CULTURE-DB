<?php

namespace apps\certificate\interfaces;

/**
 * @name ITransferService
 * @uri /transfer
 * @description ขอบใบอนุญาต
 */
interface ITransferService {

    /**
     * @name index
     * @uri /view/index
     * @description หน้าหลัก
     * @resource 1000
     * */
    public function view_index();
}
