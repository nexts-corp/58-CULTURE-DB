<?php

namespace apps\tracking\interfaces;

/**
 * @name IViewBranchService
 * @uri /branch
 * @description ระบบติดตาม
 */
interface IViewBranchService {
    /**
     * @name view
     * @uri /view
     * @param String group description
     * @description  viewBranch.html
     */
    public function view($group);
}

?>