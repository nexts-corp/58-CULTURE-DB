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
     * @description  viewList.html
     */
    public function view();
}

?>