<?php

namespace apps\search\interfaces;

/**
 * @name SearchService
 * @uri /search
 * @description SearchService
 */
interface ISearchService {

    /**
     * @name view/index
     * @uri /view/index
     * @description หน้าหลัก
     */
    public function index();

}
