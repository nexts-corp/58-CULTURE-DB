<?php

namespace apps\notification\interfaces;

/**
 * @name IManageService
 * @uri /manage
 * @description ระบบเตือนผู้ใช้งาน
 */
interface IManageService {
    /**
     * @name view
     * @uri /view
     * @description  รายการ
     * @sitemap true
     */
    public function view();

    /**
     * @name insert
     * @uri /insert
     * @description  manage.html
     */
    public function insert();
}