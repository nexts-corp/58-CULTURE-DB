<?php

namespace apps\certificate\interfaces;

/**
 * @name IVerifyService
 * @uri /verify
 * @description ขอบใบอนุญาต
 */
interface IVerifyService {

    /**
     * @name index
     * @uri /view/index
     * @description หน้าหลัก
     * @resource 1000
     * */
    public function view_index();

    /**
     * @name index
     * @uri /view/update
     * @description หน้าแก้ไข
     * @param string certId
     * @resource 1000
     * */
    public function view_update($certId);
}
