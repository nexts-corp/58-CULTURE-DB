<?php
/**
 * Created by PhpStorm.
 * User: KaowNeaw
 * Date: 1/12/2016
 * Time: 11:18 AM
 */

namespace apps\common\entity;

/**
 * @Entity
 * @Table(name="Report")
 */
class Report extends EntityBase
{
    /**
     * @Id
     * @Column(type="string",length=11,name="ReportId")
     */
    public $reportId;

    /** @Column(type="string",length=255, name="ReportName") */
    public $reportName;

    /** @Column(type="string",length=255, name="ReportType") */
    public $reportType;

    /** @Column(type="string",length=255, name="IsActive") */
    public $isActive;

    /**
     * @return mixed
     */
    public function getReportId()
    {
        return $this->reportId;
    }

    /**
     * @param mixed $reportId
     */
    public function setReportId($reportId)
    {
        $this->reportId = $reportId;
    }

    /**
     * @return mixed
     */
    public function getReportName()
    {
        return $this->reportName;
    }

    /**
     * @param mixed $reportName
     */
    public function setReportName($reportName)
    {
        $this->reportName = $reportName;
    }

    /**
     * @return mixed
     */
    public function getReportType()
    {
        return $this->reportType;
    }

    /**
     * @param mixed $reportType
     */
    public function setReportType($reportType)
    {
        $this->reportType = $reportType;
    }

    /**
     * @return mixed
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * @param mixed $isActive
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
    }




}