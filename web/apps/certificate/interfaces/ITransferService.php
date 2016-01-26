<?php

namespace apps\certificate\interfaces;

/**
 * @name ITransferService
 * @uri /transfer
 * @description ขอใบอนุญาต
 */
interface ITransferService {

    /**
     * @name index
     * @uri /view/index
     * @description ส่งมอบเอกสารหลักฐาน
     * @sitemap true
     * */
    public function view_index();
}
