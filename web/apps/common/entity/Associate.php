<?php
 namespace apps\common\entity;
/**
 * @Entity
 * @Table(name="dft_LK_Associate")
 */
class Associate extends EntityBase {
    
    /**
     * @Id 
     * @Column(type="integer",length=11,name="Id")
     * @GeneratedValue
     */
    public $id;
    
    /** @Column(type="string",length=255, name="Associate") */
    public $associate;
 
    function getId() {
        return $this->id;
    }

    function getAssociate() {
        return $this->associate;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setAssociate($associate) {
        $this->associate = $associate;
    }


}