<?php

namespace apps\tracking\interfaces;

/**
 * @name IViewAllService
 * @uri /all
 * @description ระบบติดตาม
 */
interface IViewAllService {
    /**
     * @name view
     * @uri /view
     * @description  viewAll.html
     */
    public function view();
}

?>