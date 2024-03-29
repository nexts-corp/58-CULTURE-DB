<?php

namespace apps\tracking\interfaces;

/**
 * @name IViewAllService
 * @uri /list
 * @description ระบบติดตาม
 */
interface IViewListService {

    /**
     * @name view
     * @uri /view
     * @description ค้นหา
     * @sitemap true
     */
    public function view();

    /**
     * @name listsJob
     * @uri /listsJob
     * @return String[] lists Description
     * @description แสดงงานที่ต้องการติดตาม
     */
    public function listsJob();
}

?>