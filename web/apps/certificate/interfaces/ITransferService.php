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
     * @description 5.ส่งมอบเอกสารหลักฐาน
     * @sitemap true
     * */
    public function view_index();
}
