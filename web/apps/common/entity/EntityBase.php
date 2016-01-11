<?php

namespace apps\common\entity;

/**
 * @MappedSuperclass
 * @HasLifecycleCallbacks
 */
class EntityBase {

    /**
     * @column(name="Date_Created",type="datetime")
     */
    public $dateCreated;

    /**
     * @column(name="Date_Updated",type="datetime")
     */
    public $dateUpdated;

    /**
     * @column(name="CreateBy",type="string",length=100)
     */
    public $createBy;

    /**
     * @column(name="UpdateBy",type="string",length=100)
     */
    public $updateBy;

    /**
     * @PrePersist
     */
    function prePersist() {
        $this->dateCreated = new \DateTime("now");
         $this->createBy = \th\co\bpg\cde\core\impl\ChangdaoEngineImpl::$_CURRENT_USER->name;
         $this->updateBy = \th\co\bpg\cde\core\impl\ChangdaoEngineImpl::$_CURRENT_USER->name;
    }

    /**
     * @PreUpdate
     */
    function preUpdate() {
        $this->dateUpdated = new \DateTime("now");
        $this->updateBy = \th\co\bpg\cde\core\impl\ChangdaoEngineImpl::$_CURRENT_USER->name;
    }

    public function getDateCreated() {
        return $this->dateCreated;
    }

    public function getDateUpdated() {
        return $this->dateUpdated;
    }

    public function setDateCreated($dateCreated) {
        $this->dateCreated = $dateCreated;
    }

    public function setDateUpdated($dateUpdated) {
        $this->dateUpdated = $dateUpdated;
    }

    function getCreateBy() {
        return $this->createBy;
    }

    function getUpdateBy() {
        return $this->updateBy;
    }

    function setCreateBy($createBy) {
        $this->createBy = $createBy;
    }

    function setUpdateBy($updateBy) {
        $this->updateBy = $updateBy;
    }

}
