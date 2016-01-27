<?php

namespace apps\certificate\interfaces;

/**
 * @name IDocumentService
 * @uri /document
 * @description ขอใบอนุญาต
 */
interface IDocumentService {

    /**
     * @name index
     * @uri /view/index
     * @description 7.ออกใบคำขออนุญาต
     * @sitemap true
     * */
    public function view_index();
}
