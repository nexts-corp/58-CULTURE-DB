<?php

namespace apps\common\entity;

/**
 * @Entity
 * @Table(name="Fees")
 */
class Fees extends EntityBase {

    /**
     * @Id 
     * @Column(type="integer",length=11,name="FeesId")
     * @GeneratedValue
     */
    public $feesId;

    /** @Column(type="string",length=255, name="FeesCode") */
    public $feesCode;

    /** @Column(type="integer",length=11, name="CustomerId") */
    public $customerId;

    /** @Column(type="integer",length=11, name="TypeId") */
    public $typeId;

    /**  @column(type="datetime",name="DatePay") */
    public $datePay;

    /** @Column(type="string",length=255, name="StatusCode") */
    public $statusCode;

    /** @Column(type="string",length=255, name="IsActive") */
    public $isActive;

    function getFeesId() {
        return $this->feesId;
    }

    function getFeesCode() {
        return $this->feesCode;
    }

    function getCustomerId() {
        return $this->customerId;
    }

    function getTypeId() {
        return $this->typeId;
    }

    function getDatePay() {
        return $this->datePay;
    }

    function getStatusCode() {
        return $this->statusCode;
    }

    function getIsActive() {
        return $this->isActive;
    }

    function setFeesId($feesId) {
        $this->feesId = $feesId;
    }

    function setFeesCode($feesCode) {
        $this->feesCode = $feesCode;
    }

    function setCustomerId($customerId) {
        $this->customerId = $customerId;
    }

    function setTypeId($typeId) {
        $this->typeId = $typeId;
    }

    function setDatePay($datePay) {
        $this->datePay = $datePay;
    }

    function setStatusCode($statusCode) {
        $this->statusCode = $statusCode;
    }

    function setIsActive($isActive) {
        $this->isActive = $isActive;
    }

}
