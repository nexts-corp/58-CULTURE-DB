<?php

namespace apps\fees\interfaces;

/**
 * @name MainService
 * @uri /main
 * @description MainService
 */
interface IMainService {

    /**
     * @name view/index
     * @uri /view/index
     * @description หน้าหลัก
     */
    public function index();

}