<?php
namespace apps\oauth\interfaces;


/**
 * @name AuthenService
 * @uri /authen
 * @description Authen
 */
interface IAuthenService {
   
     /**
     * @name authorization
     * @uri /authorization
     * @return String code
     * @description  authorization
     */ 
    public function authorization();
    
     /**
     * @name authenticate
     * @uri /authenticate
     * @return Object token
     * @description authenticate
     */ 
    public function authenticate();
   
   
    
}
