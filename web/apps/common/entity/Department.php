<?php

namespace apps\common\entity;

/**
 * @Entity
 * @Table(name="Department")
 */
class Department extends EntityBase {
    
    /**
     * @Id 
     * @Column(type="integer",length=11,name="DepartmentId")
     * @GeneratedValue
     */
    public $departmentId;
    
    /** @Column(type="string",length=255, name="DepartmentName") */
    public $departmentName;
 
    /** @Column(type="integer",length=11, name="DepartmentType") */
    public $departmentType;  
    
    /** @Column(type="integer",length=11, name="MasterId") */
    public $masterId;      
    
    /** @Column(type="string",length=20, name="DepartmentStatus") */
    public $departmentStatus;
    
    /** @Column(type="string",length=1, name="DepartmentGroup") */
    public $departmentGroup;

    
    public function getDepartmentId() {
        return $this->departmentId;
    }

    public function getDepartmentName() {
        return $this->departmentName;
    }

    public function getDepartmentType() {
        return $this->departmentType;
    }

    public function getMasterId() {
        return $this->masterId;
    }

    public function getDepartmentStatus() {
        return $this->departmentStatus;
    }

    public function setDepartmentId($departmentId) {
        $this->departmentId = $departmentId;
    }

    public function setDepartmentName($departmentName) {
        $this->departmentName = $departmentName;
    }

    public function setDepartmentType($departmentType) {
        $this->departmentType = $departmentType;
    }

    public function setMasterId($masterId) {
        $this->masterId = $masterId;
    }

    public function setDepartmentStatus($departmentStatus) {
        $this->departmentStatus = $departmentStatus;
    }

    

}
