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
        //  $this->createdTime = "2016-01-13 22:22:22";
        $this->createdTime = new \DateTime("now");
        $this->updatedTime = new \DateTime("now");
        //$this->createdBy = \th\co\bpg\cde\core\impl\ChangdaoEngineImpl::$_CURRENT_USER->name;
    }

    /**
     * @PreUpdate
     */
    function preUpdate() {
        $this->updatedTime = new \DateTime("now");
        //$this->updatedBy = \th\co\bpg\cde\core\impl\ChangdaoEngineImpl::$_CURRENT_USER->name;
    }

    public function getCreatedBy() {
        return $this->createdBy;
    }

    public function getUpdatedBy() {
        return $this->updatedBy;
    }

    public function getCreatedTime() {
        return $this->createdTime;
    }

    public function getUpdatedTime() {
        return $this->updatedTime;
    }

    public function setCreatedBy($createdBy) {
        $this->createdBy = $createdBy;
    }

    public function setUpdatedBy($updatedBy) {
        $this->updatedBy = $updatedBy;
    }

    public function setCreatedTime($createdTime) {
        $this->createdTime = $createdTime;
    }

    public function setUpdatedTime($updatedTime) {
        $this->updatedTime = $updatedTime;
    }

}
