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

    /**
     * @name groupStore
     * @uri /groupStore
     * @return String[] lists Description
     * @description  ใบอนุญาตประกอบกิจการ
     */
    public function groupStore();

    /**
     * @name groupPermit
     * @uri /groupPermit
     * @return String[] lists Description
     * @description  การอนุญาตเผยแพร่
     */
    public function groupPermit();
}

?>