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
     * @description 2.ตรวจสอบเอกสาร
     * @resource 1000
     * @sitemap true
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
