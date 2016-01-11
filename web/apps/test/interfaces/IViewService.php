<?php
namespace apps\user\interfaces;

/**
 * @name ViewService
 * @uri /view
 * @description ViewService
 */
interface IViewService {
   
    /**
     * @name userManager
     * @uri /userManager
     * @description  userManager
     * @authen true
     * @resource 1000
     */ 
    public function userManager();
    

}
