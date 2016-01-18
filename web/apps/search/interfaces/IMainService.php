<?php

namespace apps\search\interfaces;

/**
 * @name MainService
 * @uri /main
 * @description MainService
 */
interface IMainService {

    /**
     * @name view/video
     * @uri /view/video
     * @description ค้นหาสื่อวีดีทัศน์
     */
    public function video();
    
    /**
     * @name view/license
     * @uri /view/license
     * @description ค้นหาใบอนุญาต
     */
    public function license();

}
