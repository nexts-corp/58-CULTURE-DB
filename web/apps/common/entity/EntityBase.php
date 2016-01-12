<?php

namespace apps\common\entity;

/**
 * @MappedSuperclass
 * @HasLifecycleCallbacks
 */
class EntityBase {

    /**
     * @column(name="CreatedBy",type="string",length=255)
     */
    public $createdBy;

    /**
     * @column(name="UpdatedBy",type="string",length=255)
     */
    public $updatedBy;

    /**
     * @column(name="CreatedTime",type="datetime")
     */
    public $createdTime;

    /**
     * @column(name="UpdatedTime",type="datetime")
     */
    public $updatedTime;


    /**
     * @PrePersist
     */
    function prePersist() {
        $this->createdTime = new \DateTime("now");
        $this->createdBy = \th\co\bpg\cde\core\impl\ChangdaoEngineImpl::$_CURRENT_USER->name;
    }

    /**
     * @PreUpdate
     */
    function preUpdate() {
        $this->updatedTime = new \DateTime("now");
        $this->updatedBy = \th\co\bpg\cde\core\impl\ChangdaoEngineImpl::$_CURRENT_USER->name;
    }

    function getCreatedBy(){
        return $this->createdBy;
    }

    function getUpdatedBy(){
        return $this->updatedBy;
    }

    function getCreatedTime(){
        return $this->createdTime;
    }

    function getUpdatedTime(){
        return $this->updatedTime;
    }

    function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;
    }

    function setUpdatedBy($updatedBy)
    {
        $this->updatedBy = $updatedBy;
    }

    function setCreatedTime($createdTime){
        $this->createdTime = $createdTime;
    }

    function setUpdatedTime($updatedTime){
        $this->updatedTime = $updatedTime;
    }
}
