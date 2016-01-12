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
     * @GeneratedValue
     */
    public $reportId;

    /** @Column(type="string",length=255, name="ReportName") */
    public $reportName;

    /** @Column(type="string",length=255, name="ReportType") */
    public $reportType;

    /** @Column(type="string",length=255, name="IsActive") */
    public $isActive;

}