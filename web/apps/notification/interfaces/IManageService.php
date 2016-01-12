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
     * @description  manage.html
     */
    public function view();
}