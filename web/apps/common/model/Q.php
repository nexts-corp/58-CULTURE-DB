<?php
namespace apps\common\model;


/**
 * Description of Test
 *
 * @author tawatchai
 */
class Q {
    
    public $Q;
    
    function getQ() {
        return $this->Q;
    }

    function setQ($Q) {
        $this->Q = $Q;
    }

    function __construct($Q) {
        $this->Q = $Q;
    }
    
 


}

